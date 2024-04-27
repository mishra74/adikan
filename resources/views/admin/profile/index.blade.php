@extends('admin.layouts.master')
@section('title')
    Profile
@endsection
@push('styles')
    
@endpush

@section('content')
 <div class="container-fluid">
                <!-- row -->
				<div class="row">
					
					<div class="col-xl-12 col-lg-12">
						<div class="card profile-card card-bx">
							<div class="card-header">
								<h6 class="title">Update Profile</h6>
							</div>
							<form action="{{ route('admin.profile.update')}}" method="Post" class="profile-form" enctype="multipart/form-data">
								@csrf
                                <div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">Name</label>
											<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                             @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
											
										<div class="col-sm-6 m-b30">
											<label class="form-label">Phone</label>
											<input type="number" class="form-control" name="phone"  value="{{Auth::user()->phone}}">
                                             @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Email address</label>
											<input type="text" class="form-control" name="email"  value="{{Auth::user()->email}}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">UPDATE</button>
								</div>
							</form>
						</div>
					</div>

                    	<div class="col-xl-12 col-lg-12">
						<div class="card profile-card card-bx">
							<div class="card-header">
								<h6 class="title">Update Password</h6>
							</div>
							<form action="{{ route('admin.password.update')}}" method="Post" class="profile-form" enctype="multipart/form-data">
								@csrf
                                <div class="card-body">
									<div class="row">
                                        
										<div class="col-sm-12 m-b30">
											<label class="form-label">Current Password</label>
											<input type="password" class="form-control" name="current_password">
                                             @error('current_password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 m-b30">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" name="password">
                                             @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 m-b30">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" name="password_confirmation">
                                             @error('password_confirmation')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
										
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">UPDATE</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
				<!--**********************************
					Footer start
				***********************************-->
				
				<!--**********************************
					Footer end
				***********************************-->
            </div>

@endsection

@push('scripts')
    
@endpush