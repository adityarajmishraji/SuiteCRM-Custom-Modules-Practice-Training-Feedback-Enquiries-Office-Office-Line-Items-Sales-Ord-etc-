$(document).ready(function () {
    // $('#total').prop("readonly", true).addClass('input-number');
    // $('#total_quantity').prop("readonly", true).addClass('input-number');

});

// keyup keypress 
$(document).on('blur change', '.calu', function () {
    lineCalculation();
});

// Insert Group and Line Items
function setLineDetails(lineItem, ln) {
        
    
    
}

function addGroup(mode = 1) {
    if (!window.enableGroups && window.groupNo > 0) {
        return;
    }

    const tableBody = document.createElement("tr");
    tableBody.id = "group_body" + window.groupNo;
    tableBody.className = "group_body";
    document.getElementById('lineItems').appendChild(tableBody);

    let colIndexNo = 0;
    let col;

    if (window.enableGroups) {
        col = tableBody.insertCell(colIndexNo);
        col.innerHTML = "<span class='dragHandle glyphicon glyphicon-th'></span>";
        col.className = 'sort-handle-group';
        colIndexNo++;
    }

    col = tableBody.insertCell(colIndexNo);
    col.innerHTML = '<table id="group' + window.groupNo + '" class="group"></table>';
    col.className = '';
    colIndexNo++;

    // add Group Header
    const table = document.getElementById('group' + window.groupNo);
    const tableheader = document.createElement("thead");
    if (!window.enableGroups) {
        tableheader.style.display = "none";
    }
    tableheader.className = 'grp-first-thead';
    table.appendChild(tableheader);
    const headerRow = tableheader.insertRow(-1);
    colIndexNo = 0;

    col = headerRow.insertCell(colIndexNo);
    col.innerHTML = '<input type="hidden" name="group_id[]" id="group_id' + window.groupNo + '" value="">';
    col.innerHTML += '<input type="hidden" name="group_group_number[]" id="group_group_number' + window.groupNo + '" class="group-no" value="' + window.groupNo + '">';
    col.innerHTML += '<input type="hidden" name="group_deleted[]" id="group_deleted' + window.groupNo + '" value="0" class="group-deleted">';
    col.scope = "row";
    col.style.width = '1%';
    colIndexNo++;

    if (window.enableGroups) {
        $('.grp-first-thead').show();

        col = headerRow.insertCell(colIndexNo);
        col.innerHTML = 'Group Name<br><input type="text" id="group_name' + window.groupNo + '" name="group_name[' + window.groupNo + ']" class=""/>';
        col.scope = "row";
        col.style.width = '50%';
        colIndexNo++;

        col = headerRow.insertCell(colIndexNo);
        col.innerHTML = '<span title="Delete Group" style="float: right;"><a style="cursor: pointer;" id="deleteGroup" tabindex="116" onclick="markGroupDeleted(' + window.groupNo + ')" class="delete_group"><span class="suitepicon suitepicon-action-clear"></span></a></span>';
        col.scope = "row";
        col.style.width = '4%';
        colIndexNo++;
    }

    // add Group LineItem Table
    const groupTable = document.getElementById('group' + window.groupNo);
    groupTable.style.display = "block";
    const groupTableHeader = document.createElement("thead");
    groupTable.appendChild(groupTableHeader);
    const groupHeaderRow = groupTableHeader.insertRow(-1);
    colIndexNo = 0;

    col = groupHeaderRow.insertCell(colIndexNo);
    col.innerHTML = '<div class="outer_wrapper"><div class="table_wrapper"><table id="product_group' + window.groupNo + '" class="tab-body product_group"></table></div></div>';
    col.style.width = "100%";
    colIndexNo++;

    // Add Line Item Header
    lineItemHeader(window.groupNo);

    // add Group Footer
    groupFooter(window.groupNo);

    if (mode === 0) {
        addLineItem(window.groupNo);
    }

    window.groupNo++;
    return window.groupNo - 1;
}

function lineItemHeader(grpNo) {
    var table = document.getElementById('product_group' + grpNo);
    var tableheader = document.createElement("thead");
    tableheader.id = "product_header" + grpNo;
    table.appendChild(tableheader);

    var headerRow = tableheader.insertRow(-1);

    var headerCell = document.createElement("TH");
    headerCell.innerHTML = '';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = '#';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Employee Name';
    headerCell.width = '250px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = '';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);


    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Address';
    headerCell.width = '180px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Phone Number';
    headerCell.width = '180px';
    headerRow.appendChild(headerCell);    

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Gender';
    headerCell.width = '180px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Description';
    headerCell.width = '180px';
    headerRow.appendChild(headerCell);


    headerCell = document.createElement("TH");
    headerCell.innerHTML = '';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);
}

function addLineItem(grpNo) {
    var table = document.getElementById('product_group' + grpNo);
    var tableheader = document.createElement("tbody");
    tableheader.id = "line_item_tr" + rowNo;
    tableheader.className = 'li-tr';
    table.appendChild(tableheader);

    var headerRow = tableheader.insertRow(-1);
    var colIndexNo = 0;

    // Hand
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = '<div class="sort-handle dragHandle glyphicon glyphicon-th-list"></div>';
    a.className = "sort-handle";
    colIndexNo++;

    // Sr. No.
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = '<input type="text" id="line_item_sr_no' + rowNo + '" name="line_item_sr_no[' + rowNo + ']" style="background-color:#fff;border:none;text-align:center;" value="" class="ln_srno" autocomplete="off" readonly>';
    colIndexNo++;

   a = headerRow.insertCell(colIndexNo);
sqs_objects["EditView_line_item_name[" + rowNo + "]"] = {
    "form": "EditView",
    "method": "query",
    "modules": ["UNF_Employees"],
    "group": "and",
    "field_list": ["name", "id"],
    "populate_list": ["line_item_name[" + rowNo + "]", "line_item_unf_employees_id_c[" + rowNo + "]"],
    "conditions": [{
        "name": "name",
        "op": "like_custom",
        "end": "%",
        "value": ""
    }],
    "order": "name",
    "limit": "30",
    "post_onblur_function": "getProductDetails(" + rowNo + ")",
    "no_match_text": "No Match"
};

    a.innerHTML = "<input type='text' name='line_item_name[" + rowNo + "]' id='line_item_name" + rowNo + "' maxlength='255' class='sqsEnabled calu cls_name' autocomplete='off' value='' rel='popover'>";    

    a.innerHTML += "<input type='hidden' name='line_item_unf_employees_id_c[" + rowNo + "]' id='line_item_unf_employees_id_c" + rowNo + "' maxlength='255' value='' class='calu cls_unf_employees_id_c' readonly>";
    colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    a.innerHTML += "<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' class='button rel-field-btns' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' onclick='openProductPopup(" + rowNo + ");'><span class=\"suitepicon suitepicon-action-select\"></span></button>";
    colIndexNo++;
 
 
    // Address
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_address[" + rowNo + "]' id='line_item_address" + rowNo + "' maxlength='255' value='' class='calu input-number cls_address' autocomplete='off' >";
    colIndexNo++;

    //Phone Number
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_phone_number[" + rowNo + "]' id='line_item_phone_number" + rowNo + "' maxlength='255' value='' class='calu input-number cls_phone_number' autocomplete='off' >";
    colIndexNo++;


        //Gender
    // a = headerRow.insertCell(colIndexNo);
    // a.innerHTML = "<input type='text' name='line_item_gender[" + rowNo + "]' id='line_item_gender" + rowNo + "' maxlength='255' value='' class='calu input-number cls_gender' autocomplete='off' >";
    // colIndexNo++;
 var activeOptions = document.getElementById("gender").value;
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<select name='line_item_gender[" + rowNo + "]' id='line_item_gender" + rowNo + "' class='select'>" + activeOptions + "</select>";
    colIndexNo++;

        //Description
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_description[" + rowNo + "]' id='line_item_description" + rowNo + "' maxlength='255' value='' class='calu input-number cls_description' autocomplete='off' >";
    colIndexNo++;
    colIndexNo++;

    // Actions and Hidden
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = '<button type="button" id="line_item_delete_line' + rowNo + '" class="button rel-field-btns" value="" onclick="markLineItemDeleted(' + rowNo + ')"><span class="suitepicon suitepicon-action-clear"></span></button>';
    a.innerHTML += '<input type="hidden" name="line_item_id[' + rowNo + ']" id="line_item_id' + rowNo + '" value="" placeholder="Data Sheet Id" readonly>';
    a.innerHTML += '<input type="hidden" name="line_item_deleted[' + rowNo + ']" id="line_item_deleted' + rowNo + '" value="" placeholder="Deleted" class="ln-deleted" data-row="' + rowNo + '" readonly>';
    a.innerHTML += '<input type="hidden" name="line_item_group_number[' + rowNo + ']" id="line_item_group_number' + rowNo + '" value="' + grpNo + '" class="ln-groupno"></input>';
    colIndexNo++;

    enableQS(true);

    addToValidate('EditView', 'line_item_name' + rowNo, 'id', true, "Please enter something or remove this row.");

    sortableRow();
    sortableGroupRow();
    setRowNo();
    scrollSmoothToBottom('.table_wrapper');
    unfGrid('.tab-body');

    $('#line_item_sr_no' + rowNo).focus();

    rowNo++;

    return rowNo - 1;
}

function groupFooter(grpNo) {
    var table = document.getElementById('group' + grpNo);
    var tablefooter = document.createElement("tfoot");
    table.appendChild(tablefooter);

    // Row 1
    var headerRow = tablefooter.insertRow(-1);
    var colIndexNo = 0;

    col = headerRow.insertCell(colIndexNo);
    col.scope = "row";
    col.width = "80%";
    col.innerHTML = '<input type="button" id="" value="Add New" onclick="addLineItem(' + grpNo + ');">';
    col.innerHTML += '<input type="button" id="" value="Copy Last" class="btn-copy" onclick="copyLineItem(' + grpNo + ');" style="background:#ff9800; display:none;">';
    colIndexNo++;

    if (enableGroups) {

    }
}

// Copy
function copyLineItem(grpNo) {
    var lastRowNo = "";

    $('#product_group' + grpNo + ' tbody').each(function (rowKey, rowValue) {
        $(rowValue).find('tr').each(function (productKey, productValue) {
            if ($(this).find('.ln-deleted').val() != "1") {
                lastRowNo = $(this).find('.ln-deleted').attr('data-row');
            }
        });
    });

    if (lastRowNo != "") {
        var key = 'line_item_';
        var newRowNo = addLineItem(grpNo);

        $('#' + key + 'name' + newRowNo).val($('#' + key + 'name' + lastRowNo).val());
       
    }
    lineCalculation();
}

// Copy Group
function copyGroup() {
    var lastGroupNo = "";

    $('.group_body').each(function (rowKey, rowValue) {
        if ($(this).is(":visible")) {
            lastGroupNo = $(this).find('.group-no').val();
        }
    });

    if (lastGroupNo != "") {
        var key = 'group_';
        var newGroupNo = addGroup();

        $('#' + key + 'name' + newGroupNo).val($('#' + key + 'name' + lastGroupNo).val());

        var key = 'line_item_';
        $('#product_group' + lastGroupNo + ' tbody').each(function (rowKey, rowValue) {
            $(rowValue).find('tr').each(function (productKey, productValue) {
                if ($(this).find('.ln-deleted').val() != "1") {
                    var lastRowNo = $(this).find('.ln-deleted').attr('data-row');
                    if (lastRowNo != "") {
                        var newRowNo = addLineItem(newGroupNo);

                        $('#' + key + 'name' + newRowNo).val($('#' + key + 'name' + lastRowNo).val());
                       
                    }
                }
            });
        });
    }

    lineCalculation();
}

var lineno;
function openProductPopup(ln) {
    lineno = ln;
    var popupRequestData = {
        "call_back_function": "setProductReturn",
        "form_name": "EditView",
        "field_to_name_array": {
            "id": "line_item_unf_employees_id_c" + ln,
            "name": "line_item_name" + ln,
        }
    };
    var filter = '';
    open_popup('UNF_Employees', 800, 850, filter, true, true, popupRequestData);
}

function setProductReturn(popupReplyData) {
    set_return(popupReplyData);
    getProductDetails(lineno);
}

// Get Product Details
function getProductDetails(ln) {
    var productId = $('#line_item_unf_employees_id_c' + ln).val();
    if (productId != '') {
        $.ajax({
            url: "index.php?module=AOS_Products&action=getDetails",
            type: "GET",
            async: false,
            data: {
                product_id: productId,
            },
            success: function (result) {
                var recordDetails = JSON.parse(result);
                $("#line_item_unf_employees_id_c" + ln).val(recordDetails.id);
                $("#line_item_name" + ln).val(recordDetails.name);
            }
        });
    }
    lineCalculation();
}
