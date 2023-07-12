$(document).ready(function(){
    $(document).on("click","#kt_modal_add_customer_cancel", function(){
        var form = '#'+$(this).parents('div.modal').attr('id');
        hide_modal(form);
    });

    $(document).on("click","#kt_modal_add_customer_close", function() {
        var form = '#'+$(this).parents('div.modal').attr('id');
        hide_modal(form)
    })

    function hide_modal(modal_id) {
        Swal.fire({
            text: "Are you sure you would like to cancel?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, cancel it!",
            cancelButtonText: "No, return",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                $(modal_id).modal('hide'); // Hide modal
            } else if (result.dismiss === 'cancel') {
                Swal.fire({
                    text: "Your form has not been cancelled!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
            }
        });

    }
});

