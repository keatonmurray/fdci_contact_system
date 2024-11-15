$(document).ready(function(){
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault(); 

        var contactId = $(this).data('id');
        var formId = '#delete-form-' + contactId; 

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: $(formId).attr('action'), 
                    type: 'POST',
                    data: $(formId).serialize() + '&_token=' + csrfToken,
                    success: function(response) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        }).then(() => {
                            window.location.href = '/contact'; 
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: "Error!",
                            text: "There was an issue deleting the contact.",
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
});
