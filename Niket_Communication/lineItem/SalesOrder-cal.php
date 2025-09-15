        $html .= '<input type="hidden" name="uomhidden" id="uomhidden" value="' . get_select_options_with_id($app_list_strings['uom_list'], '') . '">';
//isme JS ka code hai niche pura...
    // UOM
    // var uomhidden = document.getElementById("uomhidden").value;
    // a = headerRow.insertCell(colIndexNo);
    // a.innerHTML = "<select name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' class=''>" + uomhidden + "</select>";
    // colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' maxlength='255' value='' class='calu input-number cls_uom' autocomplete='off' readonly>";
    colIndexNo++;

$(document).ready(function () {
    $('#discount_amount').prop("readonly", true).addClass('input-number');
    $('#gross_amount').prop("readonly", true).addClass('input-number');
    $('#tax_amount').prop("readonly", true).addClass('input-number');
    $('#total_amount').prop("readonly", true).addClass('input-number');
    $('#total_quantity').prop("readonly", true).addClass('input-number');
    $('#round_off').prop("readonly", true).addClass('input-number');
    $('#taxable_value').prop("readonly", true).addClass('input-number');

});

// keyup keypress 
$(document).on('blur change', '.calu', function () {
    lineCalculation();
});

// Insert Group and Line Items
function setLineDetails(lineItem, ln) {
    return true;
}

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

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Product Code';
    headerCell.width = '120px';

    headerRow.appendChild(headerCell);
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
    headerCell.innerHTML = 'Discount';
    headerCell.width = '80px';
    // headerCell.colSpan = 2;
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = '';
    headerCell.className = 'min-col';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Discounted Rate';
    headerCell.width = '120px';
    headerRow.appendChild(headerCell);


    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Total';
    headerCell.width = '120px';
    headerRow.appendChild(headerCell);

    headerCell = document.createElement("TH");
    headerCell.innerHTML = 'Description';
    headerCell.width = '200px';
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
        "field_list": ["name", "id", "part_number"],
        "populate_list": ["line_item_name[" + rowNo + "]", "line_item_aos_products_id_c[" + rowNo + "]", "line_item_part_number[" + rowNo + "]"],
        "conditions": [{
            "name": "name",
            "op": "like_custom",
            "end": "%",
            "value": ""
        },
        {
            "name": "part_number",
            "op": "like_custom",
            "end": "%",
            "value": ""
        },],
        "order": "name",
        "limit": "30",
        "post_onblur_function": "getProductDetails(" + rowNo + ")",
        "no_match_text": "No Match"
    };

    sqs_objects["EditView_line_item_part_number[" + rowNo + "]"] = {
        "form": "EditView",
        "method": "query",
        "modules": ["AOS_Products"],
        "group": "and",
        "field_list": ["part_number", "id", "name"],
        "populate_list": ["line_item_part_number[" + rowNo + "]", "line_item_aos_products_id_c[" + rowNo + "]", "line_item_name[" + rowNo + "]"],
        "conditions": [{
            "name": "part_number",
            "op": "like_custom",
            "end": "%",
            "value": ""
        }],
        "order": "part_number",
        "limit": "30",
        "post_onblur_function": "getProductDetails(" + rowNo + ")",
        "no_match_text": "No Match"
    };

    a.innerHTML = "<input type='text' name='line_item_name[" + rowNo + "]' id='line_item_name" + rowNo + "' maxlength='255' class='sqsEnabled calu cls_name' autocomplete='off' value='' rel='popover'>";
    colIndexNo++;

    // Code
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_part_number[" + rowNo + "]' id='line_item_part_number" + rowNo + "' maxlength='255' value='' class='sqsEnabled calu cls_part_number' autocomplete='off' >";

    a.innerHTML += "<input type='hidden' name='line_item_aos_products_id_c[" + rowNo + "]' id='line_item_aos_products_id_c" + rowNo + "' maxlength='255' value='' class='calu cls_aos_products_id_c' readonly>";
    colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    a.innerHTML += "<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' class='button rel-field-btns' id='line_item_li_btn" + rowNo + "' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' onclick='openProductPopup(" + rowNo + ");'><span class=\"suitepicon suitepicon-action-select\"></span></button>";
    colIndexNo++;

    // UOM
    // var uomhidden = document.getElementById("uomhidden").value;
    // a = headerRow.insertCell(colIndexNo);
    // a.innerHTML = "<select name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' class=''>" + uomhidden + "</select>";
    // colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_uom[" + rowNo + "]' id='line_item_uom" + rowNo + "' maxlength='255' value='' class='calu input-number cls_uom' autocomplete='off' readonly>";
    colIndexNo++;

    // Quantity
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_quantity[" + rowNo + "]' id='line_item_quantity" + rowNo + "' maxlength='255' value='1' class='calu input-number cls_product_qty' autocomplete='off' >";
    colIndexNo++;

    // Rate
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_rate[" + rowNo + "]' id='line_item_rate" + rowNo + "' maxlength='255' value='' class='calu input-number cls_rate' autocomplete='off' >";
    colIndexNo++;

    // Discount
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_discount[" + rowNo + "]' id='line_item_discount" + rowNo + "' maxlength='255' value='0.00' class='calu input-number cls_product_discount' autocomplete='off' >";
    a.innerHTML += "<input type='hidden' name='line_item_discount_amount[" + rowNo + "]' id='line_item_discount_amount" + rowNo + "' maxlength='255' value='' class='calu input-number cls_product_discount_amount' autocomplete='off' >";
    a.innerHTML += "<input type='hidden' name='line_item_apply_discount[" + rowNo + "]' id='line_item_apply_discount" + rowNo + "' maxlength='1' value='' class='cls_apply_discount' autocomplete='off' >";
    colIndexNo++;

    a = headerRow.insertCell(colIndexNo);
    var discounthidden = document.getElementById("discounthidden").value;
    a.innerHTML = "<select name='line_item_discount_type[" + rowNo + "]' id='line_item_discount_type" + rowNo + "' class='calu cls_discount'>" + discounthidden + "</select>";
    colIndexNo++;

    // Discounted Rate
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_discounted_amount[" + rowNo + "]' id='line_item_discounted_amount" + rowNo + "' maxlength='255' value='' class='calu input-number cls_discounted_amount' autocomplete='off' readonly>";
    colIndexNo++;


    // Total
    a = headerRow.insertCell(colIndexNo);
    a.innerHTML = "<input type='text' name='line_item_total[" + rowNo + "]' id='line_item_total" + rowNo + "' maxlength='255' value='' class='calu input-number cls_total' autocomplete='off' readonly>";
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
        $('#' + key + 'part_number' + newRowNo).val($('#' + key + 'part_number' + lastRowNo).val());
        $('#' + key + 'uom' + newRowNo).val($('#' + key + 'uom' + lastRowNo).val());
        $('#' + key + 'quantity' + newRowNo).val($('#' + key + 'quantity' + lastRowNo).val());
        $('#' + key + 'rate' + newRowNo).val($('#' + key + 'rate' + lastRowNo).val());
        $('#' + key + 'discount' + newRowNo).val($('#' + key + 'discount' + lastRowNo).val());
        $('#' + key + 'discount_type' + newRowNo).val($('#' + key + 'discount_type' + lastRowNo).val());
        $('#' + key + 'discounted_amount' + newRowNo).val($('#' + key + 'discounted_amount' + lastRowNo).val());
        $('#' + key + 'description' + newRowNo).val($('#' + key + 'description' + lastRowNo).val());
        $('#' + key + 'total' + newRowNo).val($('#' + key + 'total' + lastRowNo).val());
        // $('#' + key + 'type' + newRowNo).val($('#' + key + 'type' + lastRowNo).val());
        // $('#' + key + 'tax' + newRowNo).val($('#' + key + 'tax' + lastRowNo).val());
        // $('#' + key + 'tax_value' + newRowNo).val($('#' + key + 'tax_value' + lastRowNo).val());
        // $('#' + key + 'rq1_serial_no' + newRowNo).val($('#' + key + 'rq1_serial_no' + lastRowNo).val());
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
                        $('#' + key + 'part_number' + newRowNo).val($('#' + key + 'part_number' + lastRowNo).val());
                        $('#' + key + 'uom' + newRowNo).val($('#' + key + 'uom' + lastRowNo).val());
                        $('#' + key + 'quantity' + newRowNo).val($('#' + key + 'quantity' + lastRowNo).val());
                        $('#' + key + 'rate' + newRowNo).val($('#' + key + 'rate' + lastRowNo).val());
                        $('#' + key + 'discount' + newRowNo).val($('#' + key + 'discount' + lastRowNo).val());
                        $('#' + key + 'discount_type' + newRowNo).val($('#' + key + 'discount_type' + lastRowNo).val());
                        $('#' + key + 'discounted_amount' + newRowNo).val($('#' + key + 'discounted_amount' + lastRowNo).val());
                        $('#' + key + 'description' + newRowNo).val($('#' + key + 'description' + lastRowNo).val());
                        $('#' + key + 'total' + newRowNo).val($('#' + key + 'total' + lastRowNo).val());
                        // $('#' + key + 'type' + newRowNo).val($('#' + key + 'type' + lastRowNo).val());
                        // $('#' + key + 'tax' + newRowNo).val($('#' + key + 'tax' + lastRowNo).val());
                        // $('#' + key + 'tax_value' + newRowNo).val($('#' + key + 'tax_value' + lastRowNo).val());
                        // $('#' + key + 'rq1_serial_no' + newRowNo).val($('#' + key + 'rq1_serial_no' + lastRowNo).val());
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
    var groupQuantity = 0;
    var groupTotal = 0;
    var groupDiscount = 0;
    var groupGroupTotal = 0;
 

    $('#lineItems').find('.group_body').each(function (key, value) {
        var grpNo = $(this).find('.group-no').val();
        var lineQuantity = 0;
        var lineTotal = 0;
        var lineDiscount = 0;
        var lineGroupTotal = 0;
    

        $(this).find('.li-tr tr').each(function (key, value) {
            if ($(this).find('.ln-deleted').val() != "1") {
                var ln = $(this).find('.ln-deleted').attr('data-row');

                var qty = unformat2Number($('#line_item_quantity' + ln).val());
                $('#line_item_quantity' + ln).val(format2Number(qty, noofDecimals));

                var rate = unformat2Number($('#line_item_rate' + ln).val());
                $('#line_item_rate' + ln).val(format2Number(rate, noofDecimals));

                // Discount
                var discount = $('#line_item_discount_type' + ln).val();
                var productDiscount = unformat2Number($('#line_item_discount' + ln).val());
                var productDiscountAmount = 0;

                if (discount == 'Amount') {
                    if (productDiscount > rate) {
                        productDiscount = rate;
                    }
                    productDiscountAmount = productDiscount;
                } else if (discount == 'Percentage') {
                    if (productDiscount > 100) {
                        productDiscount = 100;
                    }
                    productDiscountAmount = (productDiscount / 100) * rate;
                } else {
                    productDiscountAmount = 0;
                }

                var amount = rate - productDiscountAmount;

                $('#line_item_discount' + ln).val(format2Number(productDiscount, noofDecimals));
                $('#line_item_discount_amount' + ln).val(format2Number(productDiscountAmount, noofDecimals));
                $('#line_item_discounted_amount' + ln).val(format2Number(amount, noofDecimals));

                var totalPrice = amount * qty;
                $('#line_item_total' + ln).val(format2Number(totalPrice, noofDecimals));

                lineQuantity += qty;
                lineTotal += rate * qty;
                lineDiscount += productDiscountAmount * qty * -1;
                lineGroupTotal += totalPrice;
                // lineTax += taxValue;

            }
        });

        groupQuantity += lineQuantity;
        groupTotal += lineTotal;
        groupDiscount += lineDiscount;
        groupGroupTotal += lineGroupTotal;
        // groupTax += lineTax;
    });
    $('#total_quantity').val(format2Number(groupQuantity, noofDecimals));
    $('#gross_amount').val(format2Number(groupTotal, noofDecimals));
    $('#taxable_value').val(format2Number(groupGroupTotal, noofDecimals));
    $('#discount_amount').val(format2Number(groupDiscount, noofDecimals));
    // $('#tax_amount').val(format2Number(groupTax, noofDecimals));
    // $('#total_amount').val(format2Number(groupGroupTotal, noofDecimals));

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
            "part_number": "line_item_part_number" + ln,
            "base_unit_c": "line_item_uom" + ln,
            "price": "line_item_rate" + ln,
            // "taxes_c": "line_item_tax" + ln,
            "description": "line_item_description" + ln,

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
                
                $("#line_item_aos_products_id_c" + ln).val(recordDetails.id);
                $("#line_item_name" + ln).val(recordDetails.name);
                $("#line_item_quantity" + ln).val(1);
                $("#line_item_uom" + ln).val(recordDetails.base_unit_c);
                $("#line_item_rate" + ln).val(recordDetails.price);
                // $("#line_item_tax" + ln).val(recordDetails.taxes_c);
                $("#line_item_description" + ln).val(recordDetails.description);

            }
        });
    }

    lineCalculation(); 
}

