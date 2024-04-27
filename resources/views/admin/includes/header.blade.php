 <div class="nav-header">
     <a href="index.html" class="brand-logo mt-2">
         <img src="{{ asset('assets/admin/images/logo.png') }}" height="200px" width="200px" alt="Your Brand Logo"
             class="img-fluid">
     </a>

     <div class="nav-control">
         <div class="hamburger">
             <span class="line"></span><span class="line"></span><span class="line"></span>
         </div>
     </div>
 </div>

 <div class="header">
     <div class="header-content">
         <nav class="navbar navbar-expand">
             <div class="collapse navbar-collapse justify-content-between">
                 <div class="header-left">
                     <div class="dashboard_bar">
                         Dashboard
                     </div>
                     
                 </div>
                 <ul class="navbar-nav header-right">
                     <li class="nav-item dropdown notification_dropdown ">
                         <a class="nav-link bell-link d-none d-md-block" href="#" target="_black">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  width="24" height="22.871" viewBox="0 0 48 48">
<path d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6367188 13 L 11.15625 39.029297 C 11.43025 41.862297 13.785813 44 16.632812 44 L 31.367188 44 C 34.214187 44 36.56875 41.862297 36.84375 39.029297 L 39.363281 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 19.5 18 C 20.328 18 21 18.671 21 19.5 L 21 34.5 C 21 35.329 20.328 36 19.5 36 C 18.672 36 18 35.329 18 34.5 L 18 19.5 C 18 18.671 18.672 18 19.5 18 z M 28.5 18 C 29.328 18 30 18.671 30 19.5 L 30 34.5 C 30 35.329 29.328 36 28.5 36 C 27.672 36 27 35.329 27 34.5 L 27 19.5 C 27 18.671 27.672 18 28.5 18 z"></path>
</svg>
                         </a>
                     </li>
                     <li class="nav-item dropdown notification_dropdown ">
                         <a class="nav-link bell-link d-none d-md-block" href="#" target="_black">
                             <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="22.871"
                                 viewBox="0 0 1000 1000" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 enable-background="new 0 0 1000 1000" xml:space="preserve">
                                 <g>
                                     <path
                                         d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M199.7,199.7L199.7,199.7c34.4-34.3,73.7-62.2,117.1-83c-31.5,42-57.9,94.6-76.9,154.6H142C158.5,245.6,177.8,221.6,199.7,199.7z M107.8,336.7h114.9c-8.8,41.3-14.3,85.1-16.1,130.7h-130C79.9,422.2,90.5,378.4,107.8,336.7z M76.6,532.7h130c1.8,45.5,7.3,89.4,16.1,130.7H107.8C90.4,621.6,79.9,577.8,76.6,532.7z M199.7,800.2c-21.9-21.9-41.2-45.9-57.7-71.6h97.9c19,60,45.3,112.5,76.9,154.6C273.3,862.4,234,834.6,199.7,800.2z M467.3,919.8c-14.9-4.3-29.7-11.6-44.1-21.8c-27.1-19.1-53.1-48.6-75.1-85.2c-15.2-25.3-28.3-53.5-39.3-84.2h158.5V919.8z M467.3,663.3H289.6c-9.8-41.8-15.7-85.6-17.6-130.7h195.3V663.3z M467.3,467.3H272c1.9-45.1,7.8-88.8,17.6-130.7h177.6V467.3z M467.3,271.4H308.8c11-30.7,24.1-58.8,39.3-84.2c22-36.7,48-66.1,75.1-85.2c14.5-10.2,29.2-17.5,44.1-21.8V271.4z M532.6,80.2c14.9,4.3,29.7,11.6,44.1,21.8c27.1,19.1,53.1,48.6,75.1,85.2c15.2,25.3,28.3,53.5,39.3,84.2H532.6V80.2z M532.6,336.7h177.6c9.8,41.8,15.7,85.6,17.6,130.7H532.6V336.7z M532.6,532.7h195.3c-1.9,45.1-7.8,88.8-17.6,130.7H532.6V532.7z M576.8,898c-14.5,10.2-29.2,17.5-44.1,21.8l-0.1-191.2h158.5c-11,30.7-24.1,58.9-39.2,84.2C629.9,849.5,603.9,879,576.8,898z M800.3,800.2c-34.4,34.4-73.7,62.2-117.1,83c31.6-42,57.9-94.6,76.9-154.6H858C841.5,754.4,822.2,778.4,800.3,800.2z M892.1,663.3H777.2c8.8-41.3,14.3-85.1,16.1-130.7h130C920,577.8,909.5,621.6,892.1,663.3z M923.4,467.3h-130c-1.8-45.5-7.3-89.4-16.1-130.7h114.9C909.5,378.4,920,422.2,923.4,467.3z M760.1,271.4c-19-60-45.3-112.6-76.9-154.6c43.4,20.8,82.8,48.6,117.1,83c21.9,21.9,41.2,45.9,57.7,71.6H760.1z" />
                                 </g>
                             </svg>
                         </a>
                     </li>
                     <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);">
                             <i id="icon-light" class="fas fa-sun"></i>
                             <i id="icon-dark" class="fas fa-moon"></i>

                         </a>
                     </li>

                     <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                 <g data-name="Layer 2" transform="translate(-2 -2)">
                                     <path id="Path_20" data-name="Path 20"
                                         d="M22.571,15.8V13.066a8.5,8.5,0,0,0-7.714-8.455V2.857a.857.857,0,0,0-1.714,0V4.611a8.5,8.5,0,0,0-7.714,8.455V15.8A4.293,4.293,0,0,0,2,20a2.574,2.574,0,0,0,2.571,2.571H9.8a4.286,4.286,0,0,0,8.4,0h5.23A2.574,2.574,0,0,0,26,20,4.293,4.293,0,0,0,22.571,15.8ZM7.143,13.066a6.789,6.789,0,0,1,6.78-6.78h.154a6.789,6.789,0,0,1,6.78,6.78v2.649H7.143ZM14,24.286a2.567,2.567,0,0,1-2.413-1.714h4.827A2.567,2.567,0,0,1,14,24.286Zm9.429-3.429H4.571A.858.858,0,0,1,3.714,20a2.574,2.574,0,0,1,2.571-2.571H21.714A2.574,2.574,0,0,1,24.286,20a.858.858,0,0,1-.857.857Z" />
                                 </g>
                             </svg>
                             <span class="badge light text-white bg-primary rounded-circle">4</span>
                         </a>

                     </li>


                     <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                             <svg xmlns="http://www.w3.org/2000/svg" width="23.262" height="24"
                                 viewBox="0 0 23.262 24">
                                 <g id="icon" transform="translate(-1565 90)">
                                     <path id="setting_1_" data-name="setting (1)"
                                         d="M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z"
                                         transform="translate(1557.127 -90)" />
                                 </g>
                             </svg>

                             <span class="badge light text-white bg-primary rounded-circle">15</span>
                         </a>

                     </li>
                     <li class="nav-item dropdown header-profile">
                         <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                             <img src="{{ asset('assets/admin/images/profile/pic1.jpg') }}" width="20"
                                 alt="">
                         </a>

                         <div class="dropdown-menu dropdown-menu-end">
                             <a href="#" class="dropdown-item ai-icon">
                                 <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                     width="18" height="18" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                     <circle cx="12" cy="7" r="4"></circle>
                                 </svg>
                                 <span class="ms-2">Profile </span>
                             </a>
                             
                              <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a href="#logout"  onclick="event.preventDefault();
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
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
