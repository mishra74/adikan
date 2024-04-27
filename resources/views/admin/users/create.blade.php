@extends('admin.layouts.master')
@section('title')
    Create User
@endsection
@section('content')

    <div class="container-fluid">
        <form action="" name="userForm" id="userForm" method="post">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create User</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                <div class="row">
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label font-w600">Name<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control solid"
                                            placeholder="Name">
                                        <p class="text-danger" id="name-error"></p>
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label font-w600">Email<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text"  name="email" id="slug"
                                            class="form-control solid" placeholder="Email">
                                        <p class="text-danger" id="email-error"></p>
                                    </div>
                                    <div class="col-xl-12  col-md-12 mb-4">
                                        <label class="form-label font-w600">Password<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="password"  name="password" id="password"
                                            class="form-control solid" placeholder="Password">
                                        <p class="text-danger" id="password-error"></p>
                                    </div>

                                    <div class="col-xl-12  col-md-12 mb-4">
                                        <label class="form-label font-w600">Phone<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="tel" name="phone" id="phone" class="form-control solid"
                                            placeholder="Phone">
                                        <p class="text-danger" id="phone-error"></p>
                                    </div>
                                    
                                    <div class="col-xl-4  col-md-4 mb-4">
                                        <label class="form-label font-w600">Status</label>
                                        <span>
                                            <label class="radio-inline mx-3">
                                                <input type="radio" name="status" value="1"
                                                    class="form-check-input">
                                                Active
                                            </label>
                                            <label class="radio-inline me-3">
                                                <input type="radio" name="status" value="0"
                                                    class="form-check-input">
                                                Inactive
                                            </label>
                                        </span>
                                        <p class="text-danger" id="status-error"></p>
                                    </div>

                                </div>



                                <div class="float-end">
                                    <a href="{{ route('admin.user.index') }}" class="btn light btn-secondary">Back</a>
                                    <button type="submit" id="submit-button" class="btn btn-primary  mx-3">Submit</button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>




            </div>
        </form>
    </div>
@endsection
@push('scripts')
    

   
    {{-- User Data Insert code start --}}
    <script>
        $('#userForm').submit(function(event) {
            event.preventDefault();
            let form = $(this);
            let submitButton = $('#submit-button');
            submitButton.prop('disabled', true);

            // Clear existing validation errors
            $('.text-danger').text('');

            $.ajax({
                url: '{{ route('admin.user.store') }}',
                type: 'POST',
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.info) {
                        // Reset the form
                        form[0].reset();

                        // Display a success messages
                        toastr.info(response.info, "info", {
                            positionClass: "toast-bottom-left",
                            progressBar: true
                        });

                        // Redirect to Users List route
                        window.location.href = '{{ route('admin.user.index') }}';
                    }
                },

                error: function(jqXHR) {
                    submitButton.prop('disabled', false);
                    if (jqXHR.status === 422) {
                        // Validation failed, display the errors
                        let errors = jqXHR.responseJSON.errors;
                        $.each(errors, function(field, errorMessage) {
                            // field as key and errorMessage as value
                            // Display the error message for each field
                            $('#' + field + '-error').text(errorMessage[0]);
                        });
                    }
                }
            });
        });
    </script>
    {{-- User Create End --}}
@endpush()

