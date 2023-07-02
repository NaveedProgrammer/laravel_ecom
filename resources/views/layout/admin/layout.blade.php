<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 14:15:12 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard 1 | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- C3 Chart css -->
    <link href="{{ asset('assets/libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/multiSelect.css') }}">
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

</head>

<body data-layout="horizontal">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown d-none d-lg-block">
                            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="lang-image" height="12">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="lang-image" class="mr-1"
                                        height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="lang-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="lang-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="lang-image" class="mr-1"
                                        height="12">
                                    <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow m-0"><span class="float-right">
                                            <span class="badge badge-danger float-right">5</span>
                                        </span>Notification</h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i
                                                class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small
                                                class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-settings-outline"></i>
                                        </div>
                                        <p class="notify-details">New settings
                                            <small class="text-muted">There are new settings available</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-bell-outline"></i>
                                        </div>
                                        <p class="notify-details">Updates
                                            <small class="text-muted">There are 2 new updates available</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user
                                            <small class="text-muted">You have 10 unread messages</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Maxine K <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>


                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">

                        <a href="index.html" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">A</span> -->
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>

                        <a href="index.html" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">A</span> -->
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{ route('index') }}" class="active"> <i class="fe-airplay"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu">
                                <a style="cursor: pointer;">
                                    <i class="fas fa-users-cog"></i>
                                    User Management
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('user.index') }}">
                                            <i class="fas fa-user-cog mx-2"></i>
                                            Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('permission.index') }}">
                                            <i class="fas fa-user-cog mx-2"></i>
                                            Permissions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('role.index') }}">
                                            <i class="fas fa-user-cog mx-2"></i>
                                            Roles
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-briefcase"></i>Admin UI
                                </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span class="menu-title">UI Kit</span>
                                            </li>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-cards.html">Cards</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                            <li><a href="ui-spinners.html">Spinners</a></li>
                                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                                            <li><a href="ui-portlets.html">Portlets</a></li>
                                            <li><a href="ui-tabs.html">Tabs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <span class="menu-title">UI Kit</span>
                                            </li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                            <li><a href="ui-notifications.html">Notification</a></li>
                                            <li><a href="ui-carousel.html">Carousel</a>
                                            <li><a href="ui-video.html">Video</a>
                                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                            <li><a href="ui-images.html">Images</a></li>
                                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                            <li><a href="admin-grid.html">Grid</a></li>
                                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <span class="menu-title">Admin UI</span>
                                            </li>
                                            <li><a href="admin-tiles.html">Tiles Box</a></li>
                                            <li><a href="admin-nestable.html">Nestable List</a></li>
                                            <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                            <li><a href="admin-ratings.html">Ratings</a></li>
                                            <li><a href="admin-filemanager.html">File Manager</a></li>
                                            <li><a href="admin-lightbox.html">Lightbox</a></li>
                                            <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                                            <li><a href="admin-slider.html">Slider</a></li>
                                            <li><a href="admin-treeview.html">Treeview</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-box"></i>Components</a>
                                <ul class="submenu">

                                    <li class="has-submenu">
                                        <a href="#">Icons <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="icons-colored.html">Colored Icons</a></li>
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-feather.html">Feather Icons</a></li>
                                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                            <li><a href="icons-flags.html">Flag Icons</a></li>
                                            <li><a href="icons-file.html">File Icons</a></li>
                                            <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                            <li><a href="icons-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Graphs <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-google.html">Google Chart</a></li>
                                            <li><a href="chart-echart.html">Echarts</a></li>
                                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="chart-c3.html">C3 Chart</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Email <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Inbox</a></li>
                                            <li><a href="email-read.html">Read Email</a></li>
                                            <li><a href="email-compose.html">Compose Email</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                            <li><a href="tables-datatable.html">Data Tables</a></li>
                                            <li><a href="tables-foo-tables.html">Foo Tables</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-editable.html">Editable Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-vector.html">Vector Maps</a></li>
                                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Apps <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="tickets.html">Tickets</a></li>
                                            <li><a href="taskboard.html">Taskboard</a></li>
                                            <li><a href="calendar.html">Calendar</a></li>
                                            <li><a href="todo.html">Todo</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fe-edit"></i>Forms</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-layouts.html">Form Layouts</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                            <li><a href="form-typeahead.html">Typeahead</a></li>
                                            <li><a href="form-x-editable.html">X Editable</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"> <i class="fe-sidebar"></i>Layouts</a>
                                <ul class="submenu">
                                    <li><a href="layouts-vertical.html">Vertical</a></li>
                                    <li><a href="layouts-light-menubar.html">Light Menubar</a></li>
                                    <li><a href="layouts-left-menubar.html">Left Menu</a></li>
                                    <li><a href="layouts-normal-header.html">Unsticky Header</a></li>
                                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fe-file-plus"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-logout.html">Logout</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fe-plus-square"></i>Extras</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extras-about.html">About Us</a></li>
                                            <li><a href="extras-contact.html">Contact</a></li>
                                            <li><a href="extras-companies.html">Companies</a></li>
                                            <li><a href="extras-members.html">Members</a></li>
                                            <li><a href="extras-members-2.html">Members 2</a></li>
                                            <li><a href="extras-timeline.html">Timeline</a></li>
                                            <li><a href="extras-invoice.html">Invoice</a></li>
                                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                            <li><a href="extras-faq.html">FAQ</a></li>
                                            <li><a href="extras-pricing.html">Pricing</a></li>
                                            <li><a href="extras-profile.html">Profile</a></li>
                                            <li><a href="extras-email-template.html">Email Templates</a></li>
                                            <li><a href="extras-search-result.html">Search Results</a></li>
                                            <li><a href="extras-sitemap.html">Site Map</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page bg-white">
            <div class="content">
                @yield('adminContent')
            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2017 - 2019 &copy; Adminox theme by <a href="#">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout, etc.
                </div>
                <div class="mb-2">
                    <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch"
                        checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark-rtl.min.css" />
                    <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>

                <a href="https://1.envato.market/y2YAD" class="btn btn-danger btn-block mt-3 mb-5" target="_blank"><i
                        class="mdi mdi-download mr-1"></i> Download Now</a>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    {{-- <div class="rightbar-overlay"></div>

    <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
    </a> --}}
    <script src="{{ asset('assets/js/jquery3.min.js') }}"></script>
    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!--C3 Chart-->
    <script src="{{ asset('assets/libs/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/c3/c3.min.js') }}"></script>

    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/multiSelect.js')}}"></script>
</body>

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 14:17:25 GMT -->

</html>