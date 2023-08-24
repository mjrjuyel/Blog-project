<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Project -</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="JUYEL" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon.ico">
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
         integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link  rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/vendor/jquery-jvectormap-1.2.2.css"/>
        <link  rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/all.min.css"/>
        <link  rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/icons.min.css"/>
        <link  rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/app.min.css"/>
        @yield('style')
        <link  rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css">

        <script src="{{asset('contents/admin')}}/assets/js/jquery-3.6.4.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/sweetalert.min.js"></script>
    </head>

    <body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
        <div class="wrapper">
            <div class="leftside-menu">
                <a href="{{url('dashboard')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('contents/admin')}}/assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('contents/admin')}}/assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>
                <!-- LOGO -->
                <a href="{{url('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('contents/admin')}}/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('contents/admin')}}/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-title side-nav-item">Navigation</li>
                        <li class="side-nav-item">
                            <a href="{{url('dashboard')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Dashboards </span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Apps</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarUser" aria-expanded="false" aria-controls="sidebarUser" class="side-nav-link">
                                <i class="uil-nerd"></i>
                                <span> User </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarUser">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{url('dashboard/user')}}">All User</a>
                                    </li>
                                    <li>
                                        <a href="{{url('dashboard/user/add')}}">Add User</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#roleUser" aria-expanded="false" aria-controls="roleUser">
                                            <span> Role </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="roleUser">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{url('dashboard/user/role')}}">All Role</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('dashboard/user/role/add')}}">Add Role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#BlogSideBar" aria-expanded="false" aria-controls="BlogSideBar" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Blog </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="BlogSideBar">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#CategorySideBar" aria-expanded="false" aria-controls="CategorySideBar">
                                            <span> Category </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="CategorySideBar">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{url('dashboard/blog/category')}}">All</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('dashboard/blog/category/add')}}">Add</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarTag" aria-expanded="false" aria-controls="sidebarTag">
                                            <span> Tag </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarTag">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{url('/dashboard/blog/tag')}}">All Tag</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/dashboard/blog/tag/add')}}">Add Tag</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPost" aria-expanded="false" aria-controls="sidebarPost">
                                            <span> Post </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPost">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{url('/dashboard/blog/post')}}">All Post</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/dashboard/blog/post/add')}}">Add Post</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{url('/')}}" class="side-nav-link" target="_blank">
                                <i class="uil-meeting-board"></i>
                                <span> Live Site </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultiLevel">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                            <span> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarSecondLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                            <span> Third Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                        <span> Item 2 </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="side-nav-forth-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="uil-exit"></i>
                                <span> Log Out </span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title px-3">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="px-3" style="max-height: 300px;" data-simplebar>
                                        <h5 class="text-muted font-13 fw-normal mt-0">Today</h5>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>
                                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="{{asset('contents/admin')}}/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14"></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                         <!-- item-->
                                         <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="{{asset('contents/admin')}}/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <div class="text-center">
                                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{asset('uploads/admin/user/avatar.png')}}" style="object-fit: cover;" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{Auth::user()->name}}</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                    
                                </div>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
                        <button class="button-menu-mobile open-left"> <i class="mdi mdi-menu"></i></button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="{{asset('contents/admin')}}/assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    
                                        @yield('content')
                    </div>
                </div>
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        <div class="end-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>
                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->
            </div>
        </div>
        <div class="rightbar-overlay"></div>

        <script src="{{asset('contents/admin')}}/assets/js/vendor.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/app.min.js"></script>
        @yield('script')
        <script src="{{asset('contents/admin')}}/assets/js/vendor/apexcharts.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/pages/demo.dashboard.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
        <!-- end demo js-->
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 10:14:07 GMT -->
</html>
