$(document).ready(function() {
    // Bind blur events to both fields
    $('#last_name, #lead_source_type_c').on('blur', function() {
        checkDuplicate();
    });
    
    // Prevent form submission if duplicate
    $('form').on('submit', function(e) {
        if (isDuplicate) {
            e.preventDefault();
            alert('Please fix duplicate issues before saving.');
            return false;
        }
    });
});


function checkDuplicate() {
    var leadName = $('input[name="record"]').val();
    var lastName = $('#last_name').val();
    console.log(leadName);
    // var sourceType = $('#lead_source_type_c').val();
    $('.duplicate-message').remove();
    isDuplicate = false;

    if (lastName != "" ) {
        $.ajax({
            url: "index.php?module=Leads&   =checkDuplicate",
            type: "GET",
            async: false,
            data: {
                record_id: leadName,
                last_name: lastName,
                // lead_source_type_c: sourceType,  
            },
            success: function (result) {
                result = JSON.parse(result);

                if (result['Status'] == 1) {
                    $('#last_name').after('<div class="required validation-message duplicate-message">Duplicate combination of Last Name </div>');
                    $('#lead_source_type_c').after('<div class="required validation-message duplicate-message">Duplicate combination of Lead Source</div>');

                    isDuplicate = true;
                    $("#SAVE:nth-child(1)").hide();
                    $("#SAVE:nth-child(2)").hide();
                    $(".saveAndContinue").hide();

                }
                else if (result['Status'] == 0) {
                    isDuplicate = false;
                    $("#SAVE:nth-child(1)").show();
                    $("#SAVE:nth-child(2)").show();
                    $(".saveAndContinue").show();

                }
            }
        });
    }
}

function removeExtraSpaces(inputString) {
    // Replace multiple spaces with a single space
    return inputString.replace(/\s+/g, ' ').trim();
}

// Prevent Save on Duplicate

var isDuplicate = false;



