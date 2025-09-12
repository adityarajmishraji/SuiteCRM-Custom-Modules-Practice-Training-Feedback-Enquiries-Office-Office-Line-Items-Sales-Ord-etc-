// Add convert button if not exists
$(document).ready(function() {
if (!$('#convertBtn').length) {
    $('#delete_button').after('<button id="convertBtn" onclick="convertEnquiry()" style="background: #be8ad5ff; color: white; padding: 8px 16px; margin: 10px;">Convert</button>');
}

function convertEnquiry() {
    if (confirm("Convert to Account & Contact?")) {
        location.href = "index.php?module=UNF_Enquiries&action=convertEnquiry&record=" + location.search.split('record=')[1];
    }
}
});