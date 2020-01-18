$(document).ready(function () {

    $('#frmdata').submit(function (e) {
        e.preventDefault();
        var formData = $('#frmdata').serialize();
        $.ajax({
            type: 'POST',
            url: 'send.php',
            async: true,
            data: formData,
            beforeSend: function (arr, form, options) {
                $('#btnsbmt').html('Submitting ...');
                $('#btnsbmt').prop('disabled', true);
            },
            success: function (respond) {
                if (respond.includes("SUCCESS")) {

                    $('#divSubmitSuccess').removeClass("hideDiv");
                    document.getElementById('divSubmitSuccess').innerHTML = "<strong>Success: </strong>Your information has been submitted successfully.";
                    $('#frmdata')[0].reset();
                    $('#divSubmitAlert').addClass("hideDiv");
                } else {
                    $('#divSubmitAlert').removeClass("hideDiv");
                    $('#divSubmitSuccess').addClass("hideDiv");
                    document.getElementById('divSubmitAlert').innerHTML = respond;
                }
            },
            complete: function () {
                $('#btnsbmt').html('Submit');
                $('#btnsbmt').prop('disabled', false);
            }
        });
    });

});
