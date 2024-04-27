@extends('admin.layouts.master')
@push('styles')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="d-flex align-items-center mb-4">
            <h3 class="mb-0 me-auto">Create Category</h3>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form action=""  method="post" id="categoryForm" name="categoryForm" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6  col-md-6 mb-4">
                                    <input type="hidden" name="gallary_id"  value="{{$gallary->id}}">
                                    <label class="form-label font-w600">Gallary Name<span
                                            class="text-danger scale5 ms-2">*</span></label>
                                    <input type="text" class="form-control solid" name="gallary_name" value="{{$gallary->title}}"
                                        id="title" placeholder="Name" value="{{ old('title') }}"
                                        aria-label="title" disabled>
                                        <p class="text-danger" id="name-error"></p>
                                </div>
                                <div class="col-xl-6  col-md-6 mb-4">
                                                                        <label class="form-label font-w600">Name<span
                                            class="text-danger scale5 ms-2">*</span></label>
                                    <input type="text" class="form-control solid" name="title"
                                        id="title" placeholder="Name" value="{{ old('title') }}"
                                        aria-label="title">
                                        <p class="text-danger" id="name-error"></p>
                                </div>
<div class="col-xl-6  col-md-6 mb-4">
                                    <label class="form-label font-w600">Image<span
                                            class="text-danger scale5 ms-2">*</span></label>
                                    <input type="file" class="form-control solid" name="image"
                                        id="link" placeholder="link" value="{{ old('image') }}"
                                        aria-label="link">
                                        <p class="text-danger" id="name-error"></p>
                                </div>
                                
                            
                            </div>
                            <div>
                                <span>Status:</span>
                                <label class="radio-inline mx-3">
                                    <input type="radio" name="status" id="status" value="active"
                                        class="form-check-input" checked> Active
                                </label>
                                <label class="radio-inline mx-3">
                                    <input type="radio" name="status" id="status" value="inactive"
                                        class="form-check-input"> InActive
                                </label>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <div>
                                <a href="#" class="btn btn-danger light me-3">Close</a>
                                <button id="submit-button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

 {{-- Shipping Create and update Ajax Start --}}

    <script>
    $('#categoryForm').submit(function(event) {
        event.preventDefault();
        let form = $(this);
        let submitButton = $('#submit-button');
        submitButton.prop('disabled', true);

        // Clear existing validation errors
        $('.text-danger').text('');

        // Create FormData object
        let formData = new FormData(form[0]);

        $.ajax({
            url: '{{ route('subGallary.store') }}',
            type: 'post',
            data: formData,
            processData: false, // Prevent jQuery from processing data
            contentType: false, // Prevent jQuery from setting content type
            dataType: 'json',
            success: function(response) {
    // Check if the response contains a message property
    if (response.message) {
        // Reset the form
        form[0].reset();
        
        // Redirect to the gallery list page
        window.location.href = '{{ route('subgallary.list',$gallary->id) }}';

        // Display the success message using toastr
        toastr.success(response.message, "Success", {
            positionClass: "toast-bottom-left",
            progressBar: true
        });

        // Re-enable the submit button
        submitButton.prop('disabled', false);
    }
},
            error: function(jqXHR) {
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


    {{-- Shipping Create and update Ajax End --}}
@endpush