var rowNo = 0;
var groupNo = 0;
var group_ids = {};

$(document).ready(function () {
    $('[data-label="LBL_LINE_ITEMS"]').remove();
    $('[field="line_items"]').removeClass('col-sm-8');
    $('#line_item_tab').closest('.tab-content').css('padding', '0px');
});

// Load Line Items
function insertGroupLineItem(lineItem, groupItem) {
    // console.log(lineItem);
    var key = 'line_item_';
    var ln = 0;
    var currentGroup = 0;
    var gid = lineItem.group_id;

    if (typeof group_ids[gid] === 'undefined') {
        currentGroup = addGroup();
        group_ids[gid] = currentGroup;

        for (var g in groupItem) {
            // console.log(g + "-" + groupItem[g]);

            if (document.getElementById('group_' + g + currentGroup) !== null) {
                document.getElementById('group_' + g + currentGroup).value = groupItem[g];
            }
        }
    } else {
        currentGroup = group_ids[gid];
    }

    ln = addLineItem(currentGroup);

    for (var fd in lineItem) {
        // console.log(fd + "-" + lineItem[fd]);        
        if (document.getElementById(key + fd + ln) !== null) {
            document.getElementById(key + fd + ln).value = lineItem[fd];
        }
    }

    // $("#line_item_name" + ln).attr('readonly', true);
    // $("#line_item_sic_code" + ln).attr('readonly', true);
    // $("#line_item_taxes" + ln).attr('readonly', true);
    // $("#line_item_unf_taxes_id_c" + ln).attr('readonly', true);
    // $("#line_item_part_number" + ln).attr('readonly', true);
    // $("#line_item_process_code" + ln).attr('readonly', true);
    // $("#line_item_production_plant_incharge" + ln).attr('readonly', true);
    // $("#line_item_plant_incharge_btn" + ln).hide();

    // $("#line_item_size" + ln).attr('readonly', true);
    // $("#line_item_li_size_btn" + ln).hide();
    // $("#line_item_grade" + ln).attr('readonly', true);
    // $("#line_item_li_grade_btn" + ln).hide();
    // $("#line_item_process_flows" + ln).attr('readonly', true);
    // $("#line_item_li_process_flows_btn" + ln).hide();
    // $("#line_item_quantity" + ln).attr('readonly', true);
    // $("#line_item_rate" + ln).attr('readonly', true);

    $("#line_item_quantity" + ln).data("qty", lineItem.quantity);
    // $("#line_item_li_btn" + ln).hide();

    setLineDetails(lineItem, ln);
    lineCalculation();
}

// Delete
function markGroupDeleted(grpNo) {
    document.getElementById('group_body' + grpNo).style.display = 'none';
    document.getElementById('group_deleted' + grpNo).value = '1';

    var rows = document.getElementById('group_body' + grpNo).getElementsByTagName('tbody');

    for (x = 0; x < rows.length; x++) {
        var input = rows[x].getElementsByTagName('button');
        for (y = 0; y < input.length; y++) {
            if (input[y].id.indexOf('delete_line') != -1) {
                input[y].click();
            }
        }
    }
}

function markLineItemDeleted(ln) {
    // collapse line; update deleted value
    document.getElementById('line_item_tr' + ln).style.display = 'none';
    document.getElementById('line_item_deleted' + ln).value = '1';
    document.getElementById('line_item_delete_line' + ln).onclick = '';

    if (checkValidate('EditView', 'line_item_name' + ln)) {
        removeFromValidate('EditView', 'line_item_name' + ln);
        removeFromValidate('EditView', 'line_item_product_qty' + ln);
    }

    setRowNo();
    lineCalculation();
}

// Sortable
function sortableRow() {
    $(".product_group").sortable({
        connectWith: ".product_group",
        items: '.li-tr',
        handle: ".sort-handle",
        cursor: 'move',
        axis: 'y',
        dropOnEmpty: true,
        placeholder: "sortable-row",
        start: function (event, ui) {
            ui.placeholder.html('<td colspan="100">Move row here</td>');
        },
        stop: function (event, ui) {
            setRowNo();
        },
        update: function (event, ui) {
            setRowNo();
        }
    });
    // $('.product_group').disableSelection();
}

function sortableGroupRow() {
    $("#lineItems").sortable({
        // connectWith: ".product_group",
        items: '.group_body',
        handle: ".sort-handle-group",
        cursor: 'move',
        axis: 'y',
        dropOnEmpty: true,
        placeholder: "sortable-row group_body",
        start: function (event, ui) {
            ui.placeholder.html('<td class="drop-here" colspan="100">Move group here</td>');
            $('.group-li').hide();
            $('.group-footer').hide();
        },
        stop: function (event, ui) {
            setRowNo();
            $('.group-li').show();
            $('.group-footer').show();
        },
        update: function (event, ui) {
            setRowNo();
        }
    });
    // $('.product_group').disableSelection();
}

// Row / Serial No

function setRowNo() {    
    $('#btn_copy_group').hide();
    $('.btn-copy').hide();
    var rowNumber = 1;
    var liGroupNo = 0;
    $('.li-tr tr').each(function (key, value) {

        var eleGroupNo = $(this).closest('.group').find('.group-no').val();

        if (eleGroupNo != liGroupNo) {
            rowNumber = 1;
            liGroupNo = eleGroupNo;
        }

        if ($(this).find('.ln-deleted').val() != "1") {
            $(this).find('.ln_srno').val(rowNumber);
            $(this).find('.ln-groupno').val(liGroupNo);
            $(this).closest('.group').find('.btn-copy').show();
            rowNumber++;
        }

        if ($(this).closest('.group_body').is(":visible")) {
            $('#btn_copy_group').show();
        }
    });
}

// Auto Scroll
function scrollSmoothToBottom (element) {
    $(element).animate({
        scrollTop: $(element).offset().top + $(element)[0].scrollHeight
    }, 0);
}

// Grid
var keyCodes = {
    'up': 38,
    'down': 40,
    'left': 37,
    'right': 39,
    'enter' : 13,
};

function unfGrid(groupElement) {
    $(groupElement).find("input[readonly]").on("focus", function () {
        this.blur();
    });
    $(groupElement).find('input').keyup(function (e) {
        var notReadonly = ":input:not([readonly])",
            input,
            reverse = false,
            col = 'td:eq(' + $(this).closest('td').index() + ')';

        // if (e.keyCode == keyCodes.right) {
        //    input = $(this).closest('td').nextAll();
        // } else if (e.keyCode == keyCodes.left) {
        //     input = $(this).closest('td').prevAll();
        //     reverse = true;
        // } else

        // console.log(e.keyCode);

        if (e.keyCode == keyCodes.down || e.keyCode == keyCodes.enter) {
            input = $(this).closest('.li-tr').nextAll().find('tr').find(col);
        } else if (e.keyCode == keyCodes.up) {
            input = $(this).closest('.li-tr').prevAll().find('tr').find(col);
            reverse = true;
        }

        // console.log(input);

        if (input) {
            if (e.ctrlKey)
                reverse = !reverse;
            if (!reverse)
                input.find(notReadonly).first().focus();
            else
                input.find(notReadonly).last().focus();
        }
    });
}

// Prvent Enter
$(document).ready(function () {
    $(window).keydown(function(event){
        if(event.keyCode == 13 && event.target.nodeName!='TEXTAREA')
        {
            event.preventDefault();
            return false;
        }
    });
});

// Enable / Disable Dropdown
function disableDropdown(dropdownElementId, listName) {
    var ddValue = $('#' + dropdownElementId).val();
    $('#' + dropdownElementId).css('display', 'none');
    $('#ddd_' + dropdownElementId).remove();
    $('#' + dropdownElementId).after('<div style="margin-top: 10px;" id="ddd_' + dropdownElementId + '">' + SUGAR.language.languages.app_list_strings[listName][ddValue] + '</div>');
    $('#ddd_'+dropdownElementId).width('90%');

    // $('[field='+dropdownElementId+']').find('.selection').hide();
}

function enableDropdown(dropdownElementId) {
    $('#' + dropdownElementId).css('display', '');
    $('#ddd_' + dropdownElementId).remove();
    // $('[field='+dropdownElementId+']').find('.selection').show();
}

// Number Formats

function unformat2Number(num) {
    return unformatNumber(num, num_grp_sep, dec_sep);
}

function format2Number(str, sig) {
    if (typeof sig === 'undefined') {
        sig = sig_digits;
    }
    num = Number(str);
    if (sig == 2) {
        str = formatCurrency(num);
    } else {
        str = num.toFixed(sig);
    }

    str = str.split(/,/).join('{,}').split(/\./).join('{.}');
    str = str.split('{,}').join(num_grp_sep).split('{.}').join(dec_sep);

    return str;
}

function formatCurrency(strValue) {
    strValue = strValue.toString().replace(/\$|\,/g, '');
    dblValue = parseFloat(strValue);

    blnSign = (dblValue == (dblValue = Math.abs(dblValue)));
    dblValue = Math.floor(dblValue * 100 + 0.50000000001);
    intCents = dblValue % 100;
    strCents = intCents.toString();
    dblValue = Math.floor(dblValue / 100).toString();
    if (intCents < 10)
        strCents = "0" + strCents;
    for (var i = 0; i < Math.floor((dblValue.length - (1 + i)) / 3); i++)
        dblValue = dblValue.substring(0, dblValue.length - (4 * i + 3)) + ',' +
        dblValue.substring(dblValue.length - (4 * i + 3));
    return (((blnSign) ? '' : '-') + dblValue + '.' + strCents);
}

function formatNumber(n, num_grp_sep, dec_sep, round, precision) {
    if (typeof num_grp_sep == "undefined" || typeof dec_sep == "undefined") {
        return n;
    }
    if (n === 0) n = '0';

    n = n ? n.toString() : "";
    if (n.split) {
        n = n.split(".");
    } else {
        return n;
    }
    if (n.length > 2) {
        return n.join(".");
    }
    if (typeof round != "undefined") {
        if (round > 0 && n.length > 1) {
            n[1] = parseFloat("0." + n[1]);
            n[1] = Math.round(n[1] * Math.pow(10, round)) / Math.pow(10, round);
            if (n[1].toString().includes('.')) {
                n[1] = n[1].toString().split(".")[1];
            } else {
                n[0] = (parseInt(n[0]) + n[1]).toString();
                n[1] = "";
            }
        }
        if (round <= 0) {
            n[0] = Math.round(parseInt(n[0], 10) * Math.pow(10, round)) / Math.pow(10, round);
            n[1] = "";
        }
    }
    if (typeof precision != "undefined" && precision >= 0) {
        if (n.length > 1 && typeof n[1] != "undefined") {
            n[1] = n[1].substring(0, precision);
        } else {
            n[1] = "";
        }
        if (n[1].length < precision) {
            for (var wp = n[1].length; wp < precision; wp++) {
                n[1] += "0";
            }
        }
    }
    regex = /(\d+)(\d{3})/;
    while (num_grp_sep !== "" && regex.test(n[0])) {
        n[0] = n[0].toString().replace(regex, "$1" + num_grp_sep + "$2");
    }
    return n[0] + (n.length > 1 && n[1] !== "" ? dec_sep + n[1] : "");
}