@extends('admin.layouts.master')
@section('title')
    Edit User
@endsection
@section('content')

    <div class="container-fluid">
        <form action="" name="userUpdateForm" id="userUpdateForm" method="post">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                <div class="row">
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label font-w600">Name<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                                            class="form-control solid" placeholder="Name">
                                        <p class="text-danger" id="name-error"></p>
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label font-w600">Email<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text" name="email" id="slug" value="{{ $user->email }}"
                                            class="form-control solid" placeholder="Email">
                                        <p class="text-danger" id="email-error"></p>
                                    </div>
                                    <div class="col-xl-12  col-md-12 mb-4">
                                        <label class="form-label font-w600">Password<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control solid"
                                            placeholder="Password">
                                        <small>If you want to change your password, please enter a new value. If not, you
                                            can leave it blank.</small>

                                        <p class="text-danger" id="password-error"></p>
                                    </div>

                                    <div class="col-xl-12  col-md-12 mb-4">
                                        <label class="form-label font-w600">Phone<span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="tel" name="phone" id="phone" value="{{ $user->phone }}"
                                            class="form-control solid" placeholder="Phone">
                                        <p class="text-danger" id="phone-error"></p>
                                    </div>
                                    
                                    <div class="d-flex align-items-center">
                                        <span>Status:</span>
                                        <label class="radio-inline mx-3">
                                            <input type="radio" name="status" value="1" class="form-check-input"
                                                {{ $user->status == 1 ? 'checked' : '' }}>
                                            Active
                                        </label>
                                        <label class="radio-inline me-3">
                                            <input type="radio" name="status" value="0" class="form-check-input"
                                                {{ $user->status == 0 ? 'checked' : '' }}>
                                            Inactive
                                        </label>
                                        <p class="text-danger" id="status-error"></p>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a href="{{ route('admin.user.index') }}" class="btn light btn-secondary">Back</a>
                                    <button type="submit" id="update-button" class="btn btn-primary  mx-3">Update</button>
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
    {{-- User Data update code start --}}
    <script>
        $('#userUpdateForm').submit(function(event) {
            event.preventDefault();
            let form = $(this);
            let submitButton = $('#update-button');
            submitButton.prop('disabled', true);

            // Clear existing validation errors
            $('.text-danger').text('');

            $.ajax({
                url: '{{ route('admin.user.update', $user->id) }}',
                type: 'PUT',
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
                            // Display the error message for each field
                            $('#' + field + '-error').text(errorMessage[0]);
                        });
                    }
                }
            });
        });
    </script>
    {{-- User Data Update End --}}
@endpush

