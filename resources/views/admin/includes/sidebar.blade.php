 <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center mt-4">
							<img src="{{ asset('assets/admin/images/profile/pic1.jpg')}}" alt="">
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w400 d-block">{{Auth::user()->name}}</span>
									<small class="text-end font-w400">Superadmin</small>
								</div>	
								{{-- <i class="fas fa-chevron-down"></i> --}}
							</div>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="#" class="dropdown-item ai-icon ">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Profile </span>
						</a>
						
						 <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a href="#"  onclick="event.preventDefault();
                                                this.closest('form').submit();"  class="dropdown-item ai-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                     height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                     <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                     <polyline points="16 17 21 12 16 7"></polyline>
                                     <line x1="21" y1="12" x2="9" y2="12"></line>
                                 </svg>
                                 <span class="ms-2">Logout </span>
                             </a>

                        </form>
					</div>
				</div>
				<ul class="metismenu" id="menu">
                    <li><a  href="{{'dashboard'}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       

                    </li>
					{{-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-093-waving"></i>
							<span class="nav-text">Blogs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('blogs.list')}}">View Blogs</a></li>
                            
                        </ul>
                    </li> --}}
					{{-- course --}}
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-box product-icon"></i>
						<span class="nav-text">Product</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="{{route('course.list')}}">View Product</a></li>
						
					</ul>
				</li>
					
					<!--gallary-->
						{{-- <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fas fa-images"></i>
					
						
						<span class="nav-text">Gallary</span>
						
					</a>
					<ul aria-expanded="false">
					<li><a href="{{url('gallarylist')}}">Views Gallary</a></li>	
					</ul>
					</li> --}}
					<!--End Gallary section-->
					
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Enquiry</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('enquiry')}}">Enquiry</a></li>
							<li><a href="{{url('contactus')}}">Contact us</a></li>
							<li><a href="{{url('enquiry')}}">Career</a></li>
                        </ul>
                    </li>
                   
                    
                </ul>
			</div>
        </div>