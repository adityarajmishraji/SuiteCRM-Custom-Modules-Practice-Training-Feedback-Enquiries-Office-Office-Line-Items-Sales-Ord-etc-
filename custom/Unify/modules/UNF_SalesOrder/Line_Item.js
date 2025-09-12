$(document).ready(function () {
    $('#total_amount').prop("readonly", true).addClass('input-number');
    $('#total_qty').prop("readonly", true).addClass('input-number');

});

// keyup keypress 
$(document).on('blur change', '.calu', function () {
    lineCalculation();
});

// Insert Group and Line Items
function setLineDetails(lineItem, ln) {
    return true;
};

// Add convert button if not exists
// $(document).ready(function() {
// if (!$('#convertBtn').length) {
//     $('#delete_button').after('<button id="convertBtn" onclick="convertEnquiry()" style="background: #be8ad5ff; color: white; padding: 8px 16px; margin: 10px;">Convert</button>');
// }

// function convertEnquiry() {
//     if (confirm("Convert to Account & Contact?")) {
//         location.href = "index.php?module=UNF_Enquiries&action=convertEnquiry&record=" + location.search.split('record=')[1];
//     }
// }
// });

function addGroup(mode = 1) {
    if (!enableGroups && groupNo > 0) {
        return;
    }

    var tableBody = document.createElement("tr");
    tableBody.id = "group_body" + groupNo;
    tableBody.className = "group_body";
    document.getElementById('lineItems').appendChild(tableBody);

    var colIndexNo = 0;

    if (enableGroups) {
        col = tableBody.insertCell(colIndexNo);
        col.innerHTML = "<span class='dragHandle glyphicon glyphicon-th'></span>";
        col.className = 'sort-handle-group';
        colIndexNo++;
    }

    col = tableBody.insertCell(colIndexNo);
    col.innerHTML = '<table id="group' + groupNo + '" class="group"></table>';
    col.className = '';
    colIndexNo++;

    // add Group Header
    var table = document.getElementById('group' + groupNo);
    var tableheader = document.createElement("thead");
    if (!enableGroups) {
        tableheader.style.display = "none";
    }
    tableheader.className = 'grp-first-thead';
    table.appendChild(tableheader);
    var headerRow = tableheader.insertRow(-1);
    var colIndexNo = 0;

    col = headerRow.insertCell(colIndexNo);
    col.innerHTML = '<input type="hidden" name="group_id[]" id="group_id' + groupNo + '" value="">';
    col.innerHTML += '<input type="hidden" name="group_group_number[]" id="group_group_number' + groupNo + '" class="group-no" value="' + groupNo + '">';
    col.innerHTML += '<input type="hidden" name="group_deleted[]" id="group_deleted' + groupNo + '" value="0" class="group-deleted">';
    col.scope = "row";
    col.style.width = '1%';
    colIndexNo++;

    if (enableGroups) {
        $('.grp-first-thead').show();

        col = headerRow.insertCell(colIndexNo);
        col.innerHTML = 'Group Name<br><input type="text" id="group_name' + groupNo + '" name="group_name[' + groupNo + ']" class=""/>';
        col.scope = "row";
        col.style.width = '50%';
        colIndexNo++;

        col = headerRow.insertCell(colIndexNo);
        col.innerHTML = '<span title="Delete Group" style="float: right;"><a style="cursor: pointer;" id="deleteGroup" tabindex="116" onclick="markGroupDeleted(' + groupNo + ')" class="delete_group"><span class="suitepicon suitepicon-action-clear"></span></a></span>';
        col.scope = "row";
        col.style.width = '4%';
        colIndexNo++;
    }

    // add Group LineItem Table
    var table = document.getElementById('group' + groupNo);
    table.style.display = "block";
    var tableheader = document.createElement("thead");
    table.appendChild(tableheader);
    var headerRow = tableheader.insertRow(-1);
    var colIndexNo = 0;

    col = headerRow.insertCell(colIndexNo);
    col.innerHTML = '<div class="outer_wrapper"><div class="table_wrapper"><table id="product_group' + groupNo + '" class="tab-body product_group"></table></div></div>';
    col.style.width = "100%";
    colIndexNo++;

    // Add Line Item Header
    lineItemHeader(groupNo);

    // add Group Footer
    groupFooter(groupNo);

    if (mode == 0) {
        addLineItem(groupNo);
    }

    groupNo++;

    return groupNo - 1;
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
    headerCell.innerHTML = 'Product Name';
    headerCell.width = '250px';
    headerRow.appendChild(headerCell);

    // headerCell = document.createElement("TH");
    // headerCell.innerHTML = 'Product Code';
    // headerCell.width = '120px';
    // headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = '';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'UOM';
    headerCell.width = '60px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Quantity';
    headerCell.width = '80px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Rate';
    headerCell.width = '80px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Amount';
    headerCell.width = '120px';
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

    // Product / Name
    a = headerRow.insertCell(colIndexNo);
    sqs_objects["EditView_line_item_name[" + rowNo + "]"] = {
        "form": "EditView",
        "method": "query",
        "modules": ["AOS_Products"],
        "group": "or",
        "field_list": ["name", "id"],
        "populate_list": ["line_item_name[" + rowNo + "]", "line_item_aos_products_id_c[" + rowNo + "]"],
        "conditions": [{
            "name": "name",
            "op": "like_custom",
            "end": "%",
            "value": ""
        },],
        "order": "name",
        "limit": "30",
        "post_onblur_function": "getProductDetails(" + rowNo + ")",
        "no_match_text": "No Match"
    };

    a.innerHTML = "<input type='text' name='line_item_name[" + rowNo + "]' id='line_item_name" + rowNo + "' maxlength='255' class='sqsEnabled calu cls_name' autocomplete='off' value='' rel='popover'>";
    //colIndexNo++;

    // Code
   // a = headerRow.insertCell(colIndexNo);
   
    a.innerHTML += "<input type='hidden' name='line_item_aos_products_id_c[" + rowNo + "]' id='line_item_aos_products_id_c" + rowNo + "' maxlength='255' value='' class='calu cls_aos_products_id_c' readonly>";
    colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    a.innerHTML += "<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' class='button rel-field-btns' id='line_item_li_btn" + rowNo + "' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' onclick='openProductPopup(" + rowNo + ");'><span class=\"suitepicon suitepicon-action-select\"></span></button>";
    colIndexNo++;

    // UOM
    var uomhidden = document.getElementById("uomhidden").value;
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<select name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' class=''>" + uomhidden + "</select>";
    colIndexNo++;

    // a = headerRow.insertCell(colIndexNo);
    // a.innerHTML = "<input type='text' name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' maxlength='255' value='' class='calu input-number cls_uom' autocomplete='off' readonly>";
    // colIndexNo++;

    // Quantity
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_qty[" + rowNo + "]' id='line_item_qty" + rowNo + "' maxlength='255' value='1' class='calu input-number cls_product_qty' autocomplete='off' >";
    colIndexNo++;

    // Rate
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_rate[" + rowNo + "]' id='line_item_rate" + rowNo + "' maxlength='255' value='' class='calu input-number cls_rate' autocomplete='off' >";
    colIndexNo++;

    // Total
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_amount[" + rowNo + "]' id='line_item_amount" + rowNo + "' maxlength='255' value='' class='calu input-number cls_amount' autocomplete='off' readonly>";
    colIndexNo++;

    // Description
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = '<textarea name="line_item_description[' + rowNo + ']" id="line_item_description' + rowNo + '" rows="1" class="" style="margin-left:5px;height:60px;"></textarea>';
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

        $('#' + key + 'aos_products_id_c' + newRowNo).val($('#' + key + 'aos_products_id_c' + lastRowNo).val());
        $('#' + key + 'name' + newRowNo).val($('#' + key + 'name' + lastRowNo).val());
        $('#' + key + 'uom' + newRowNo).val($('#' + key + 'uom' + lastRowNo).val());
        $('#' + key + 'qty' + newRowNo).val($('#' + key + 'qty' + lastRowNo).val());
        $('#' + key + 'rate' + newRowNo).val($('#' + key + 'rate' + lastRowNo).val());
         $('#' + key + 'amount' + newRowNo).val($('#' + key + 'amount' + lastRowNo).val());
        $('#' + key + 'description' + newRowNo).val($('#' + key + 'description' + lastRowNo).val());
       
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

                        $('#' + key + 'aos_products_id_c' + newRowNo).val($('#' + key + 'aos_products_id_c' + lastRowNo).val());
                        $('#' + key + 'name' + newRowNo).val($('#' + key + 'name' + lastRowNo).val());
                        $('#' + key + 'uom' + newRowNo).val($('#' + key + 'uom' + lastRowNo).val());
                        $('#' + key + 'qty' + newRowNo).val($('#' + key + 'qty' + lastRowNo).val());
                        $('#' + key + 'rate' + newRowNo).val($('#' + key + 'rate' + lastRowNo).val());
                        $('#' + key + 'amount' + newRowNo).val($('#' + key + 'amount' + lastRowNo).val());
                        $('#' + key + 'description' + newRowNo).val($('#' + key + 'description' + lastRowNo).val());
                        
                    }
                }
            });
        });
    }

    lineCalculation();
}

// Calculation
var noofDecimals = 2;

function lineCalculation() {
    var groupQty = 0;    // Initialize total quantity
    var groupTotal = 0;  // Initialize total amount
    var groupGroupTotal = 0;

    $('#lineItems').find('.group_body').each(function (key, value) {
        var grpNo = $(this).find('.group-no').val();
        var lineQty = 0;
        var lineTotal = 0;
        var lineGroupTotal = 0;

        $(this).find('.li-tr tr').each(function (key, value) {
            if ($(this).find('.ln-deleted').val() != "1") {
                var ln = $(this).find('.ln-deleted').attr('data-row');

                var qty = unformat2Number($('#line_item_qty' + ln).val());
                $('#line_item_qty' + ln).val(format2Number(qty, noofDecimals));

                var rate = unformat2Number($('#line_item_rate' + ln).val());
                $('#line_item_rate' + ln).val(format2Number(rate, noofDecimals));

                // Calculate total price (rate * qty)
                var totalPrice = rate * qty;
                $('#line_item_amount' + ln).val(format2Number(totalPrice, noofDecimals));  // Use totalPrice here

                lineQty += qty;
                lineTotal += totalPrice;  // Add the calculated total price
                lineGroupTotal += totalPrice;  // Add the calculated total price for group total
            }
        });

        groupQty += lineQty;   // Accumulate group quantity
        groupTotal += lineTotal; // Accumulate group total
    });

    $('#total_quantity').val(format2Number(groupQty, noofDecimals));  
    $('#total_amount').val(format2Number(groupTotal, noofDecimals));
}



// Pop ups
var lineno;
function openProductPopup(ln) {

    lineno = ln;
    var popupRequestData = {
        "call_back_function": "setProductReturn",
        "form_name": "EditView",
        "field_to_name_array": {
            "id": "line_item_aos_products_id_c" + ln,
            "name": "line_item_name" + ln,
            "base_unit_c": "line_item_uom" + ln,
            // "qty":"line_item_quantity"+ln,
            "rate": "line_item_rate" + ln,
            // "description": "line_item_description" + ln,

        }
    };

    var filter = '';
    // filter = '&product_type_c_advanced[]=Finish';

    open_popup('AOS_Products', 800, 850, filter, true, true, popupRequestData);
}

function setProductReturn(popupReplyData) {
    set_return(popupReplyData);
    getProductDetails(lineno);
}

// Get Product Details
function getProductDetails(ln) {
    var productId = $('#line_item_aos_products_id_c' + ln).val();
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
            console.log(recordDetails);

                $("#line_item_name" + ln).val(recordDetails.name);
                $("#line_item_uom" + ln).val(recordDetails.uom);
                $("#line_item_rate" + ln).val(recordDetails.price);
                $("#line_item_aos_products_id_c" + ln).val(recordDetails.id);
                
            }
        });
    }

    lineCalculation(); 
}