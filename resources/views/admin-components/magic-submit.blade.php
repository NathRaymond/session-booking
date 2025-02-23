<script src="{{ asset('admin-assets/js/jquery.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/sweetalert/dist/sweetalert2@11.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

<script>
    $(document).ready(function () {
        $('.magicFormSubmit').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting immediately

            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to Book a Session? After booking, kindly check your mail for some other informations',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Book',
                cancelButtonText: 'No, Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    // If "Yes" is clicked, submit the form via AJAX
                    var formData = new FormData(this); // Create FormData object with the form
                    var action = $(this).data('nextaction');
                    var nextUrl = $(this).data('nexturl');

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        processData: false, // Prevent jQuery from converting FormData into a string
                        contentType: false, // Let the browser set the Content-Type, including boundary for FormData
                        success: function (response) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Session booked successfully! Kindly check your mail for payment',
                                icon: 'success',
                            });
                            if (action === 'reload') {
                                window.location.reload();
                            } else if (action === 'anotherurl') {
                                window.location.replace(nextUrl);
                            } else {
                                loadPageDatatable(); // Reload the table or update the UI
                                $('.magicFormSubmit').trigger('reset'); // Reset the form
                                $('.btn-close').click(); // Close any modal if necessary
                            }
                        },
                        error: function (xhr, status, error) {
                            // Handle error response
                            var errorMessage = JSON.parse(xhr.responseText).message || 'Something went wrong!';
                            Swal.fire({
                                title: 'Error!',
                                text: errorMessage,
                                icon: 'error',
                            });
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // If "No" is clicked
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'Session Booking cancelled!',
                        icon: 'info',
                    });
                }
            });
        });
    });
</script>
