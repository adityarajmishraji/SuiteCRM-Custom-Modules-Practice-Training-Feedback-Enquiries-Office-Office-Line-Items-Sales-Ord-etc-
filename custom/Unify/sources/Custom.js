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
    // if ($(this).val() === ddValue) {
        $('#' + dropdownElementId).css('display', 'none');
        $('#ddd_' + dropdownElementId).remove();
        $('#' + dropdownElementId).after('<div style="margin-top: 10px;" id="ddd_' + dropdownElementId + '">' + SUGAR.language.languages.app_list_strings[listName][ddValue] + '</div>');
        $('#ddd_'+dropdownElementId).width('90%');
        $(this).attr("disabled", "disabled");
    // }
    $('[field='+dropdownElementId+']').find('.selection').hide();
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