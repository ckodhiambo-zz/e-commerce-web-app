<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Easy Fix Phone Store | Kenya</title>


    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('e-commerce-assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('e-commerce-assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('e-commerce-assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('e-commerce-assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('e-commerce-assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('e-commerce-assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('e-commerce-assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('e-commerce-assets/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('e-commerce-assets/js/config.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="{{ asset('e-commerce-assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('e-commerce-assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('e-commerce-assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('e-commerce-assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet"
          id="user-style-rtl">
    <link href="{{ asset('e-commerce-assets/css/user.min.css') }}" type="text/css" rel="stylesheet"
          id="user-style-default">
    <script>
        var phoenixIsRTL = JSON.parse(localStorage.getItem('phoenixIsRTL'));
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="{{ asset('e-commerce-assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container-small">
            <div class="ecommerce-topbar">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <div class="row gx-0 gy-2 w-100 flex-between-center">
                        <div class="col-auto"><a class="text-decoration-none" href="../../../index.html">
                                <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                                    <p class="logo-text ms-2">phoenix</p>
                                </div>
                            </a></div>
                        <div class="col-auto order-md-1">
                            <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                                <li class="nav-item d-flex align-items-center">
                                    <div class="theme-control-toggle fa-icon-wait px-2">
                                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="../../../apps/e-commerce/landing/cart.html" role="button"><span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span><span class="icon-indicator-number">3</span></a></li>
                                <li class="nav-item dropdown"><a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a>
                                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret mt-2" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                        <div class="card position-relative border-0">
                                            <div class="card-header p-2">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="text-black mb-0">Notificatons</h5>
                                                    <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="scrollbar-overlay" style="height: 27rem;">
                                                    <div class="border-300">
                                                        <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/30.png" alt="" />
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <div class="avatar-name rounded-circle"><span>J</span></div>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/avatar.png" alt="" />
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-300">
                                                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/57.png" alt="" />
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/59.png" alt="" />
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3 border-300 notification-card position-relative read ">
                                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/58.png" alt="" />
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 border-top border-0">
                                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="../../../pages/pages/notifications.html">Notification history</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="user" style="height:20px;width:20px;"></span></a>
                                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
                                        <div class="card position-relative border-0">
                                            <div class="card-body p-0">
                                                <div class="text-center pt-4 pb-3">
                                                    <div class="avatar avatar-xl ">
                                                        <img class="rounded-circle " src="../../../assets/img/team/57.png" alt="" />

                                                    </div>
                                                    <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                                </div>
                                                <div class="mb-3 mx-3">
                                                    <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                                                </div>
                                            </div>
                                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-0 border-top">
                                                <ul class="nav d-flex flex-column my-3">
                                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                                </ul>
                                                <hr />
                                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="search-box ecommerce-search-box w-100">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>

                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
        <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
            <div class="dropdown">
                <button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span class="fas fa-bars me-2"></span>Category</button>
                <div class="dropdown-menu border py-0 category-dropdown-menu">
                    <div class="card border-0 scrollbar" style="max-height: 657px;">
                        <div class="card-body p-6 pb-3">
                            <div class="row gx-7 gy-5 mb-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Collectibles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Antiques</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Sports memorabilia </a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Art</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="home" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Yard, Garden &amp; Outdoor</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Crafts</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Home Improvement</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pet Supplies</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="globe" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Outdoor Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Team Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Exercise &amp; Fitness</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Golf</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="monitor" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="truck" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">GPS &amp; Security Devices</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Rader &amp; Laser Detectors</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Care &amp; Detailing</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Scooter Parts &amp; Accessories</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="codesandbox" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Radio Control</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Kids Toys</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Action Figures</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Dolls &amp; Bears</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="watch" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Fashion</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Women</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Men</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Jewelry &amp; Watches</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Shoes</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="music" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Guitar</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pro Audio Equipment</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">String</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Stage Lighting &amp; Effects</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="grid" style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Other Categories</h6>
                                    </div>
                                    <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Video Games &amp; Consoles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Health &amp; Beauty</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Baby</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Business &amp; Industrial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Stores</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Free delivery</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Coupons</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Categories</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" aria-current="page" href="#!">Be a vendor</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Track order</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="#!">Affiliate program</a></li>
                <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent">
                        More<span class="fas fa-angle-down ms-2"></span></a>
                    <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
                </li>
            </ul>
        </div>
    </nav>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9 bg-white border-top border-300">

        <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="mb-0">Invoice</h2>
                <div>
                    <button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download Invoice</span></button>
                    <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button>
                </div>
            </div>
            <div class="bg-soft dark__bg-1100 p-4 mb-4 rounded-2">
                <div class="row g-4">
                    <div class="col-12 col-lg-3">
                        <div class="row g-4 g-lg-2">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="mb-0 me-3">Invoice No :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs--1 text-800 fw-semi-bold mb-0">#FLR978282</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="me-3">Invoice Date :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs--1 text-800 fw-semi-bold mb-0">19.06.2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="row g-4 gy-lg-5">
                            <div class="col-12 col-lg-8">
                                <h6 class="mb-2 me-3">Sold by :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">PhoenixMart<br />36 greendowm road, California, Usa</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> PAN No :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">XVCJ963782008</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> GST Reg No :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">IX9878123TC</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order No :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">A-8934792734</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order Date :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">19.06.2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Billing Address :</h6>
                                <div class="fs--1 text-800 fw-semi-bold mb-0">
                                    <p class="mb-2">John Doe,</p>
                                    <p class="mb-2">36, Gree Donwtonwn,<br />Golden road, FL,</p>
                                    <p class="mb-2">johndoe@jeemail.com</p>
                                    <p class="mb-0">+334933029030</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Shipping Address :</h6>
                                <div class="fs--1 text-800 fw-semi-bold mb-0">
                                    <p class="mb-2">John Doe,</p>
                                    <p class="mb-2">36, Gree Donwtonwn,<br />Golden road, FL,</p>
                                    <p class="mb-2">johndoe@jeemail.com</p>
                                    <p class="mb-0">+334933029030</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0">
                <div class="table-responsive scrollbar">
                    <table class="table fs--1 text-900 mb-0">
                        <thead class="bg-200">
                        <tr>
                            <th scope="col" style="width: 24px;"></th>
                            <th scope="col" style="min-width: 60px;">SL NO.</th>
                            <th scope="col" style="min-width: 360px;">Products</th>
                            <th class="ps-5" scope="col" style="min-width: 150px;">Color</th>
                            <th scope="col" style="width: 60px;">Size</th>
                            <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                            <th class="text-end" scope="col" style="width: 100px;">Price</th>
                            <th class="text-end" scope="col" style="width: 138px;">Tax Rate</th>
                            <th class="text-center" scope="col" style="width: 80px;">Tax Type</th>
                            <th class="text-end" scope="col" style="min-width: 92px;">Tax</th>
                            <th class="text-end" scope="col" style="min-width: 60px;">Total</th>
                            <th scope="col" style="width: 24px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border-0"></td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">
                                <p class="line-clamp-1 mb-0 fw-semi-bold">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</p>
                            </td>
                            <td class="align-middle ps-5">Glossy black</td>
                            <td class="align-middle text-700 fw-semi-bold">XL</td>
                            <td class="align-middle text-end text-1000 fw-semi-bold">2</td>
                            <td class="align-middle text-end fw-semi-bold">$299</td>
                            <td class="align-middle text-end">2.5%</td>
                            <td class="align-middle text-center fw-semi-bold">VAT</td>
                            <td class="align-middle text-end fw-semi-bold">$199</td>
                            <td class="align-middle text-end fw-semi-bold">$398</td>
                            <td class="border-0"></td>
                        </tr>
                        <tr>
                            <td class="border-0"></td>
                            <td class="align-middle">2</td>
                            <td class="align-middle">
                                <p class="line-clamp-1 mb-0 fw-semi-bold">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</p>
                            </td>
                            <td class="align-middle ps-5">Black</td>
                            <td class="align-middle text-700 fw-semi-bold">Pro</td>
                            <td class="align-middle text-end text-1000 fw-semi-bold">1</td>
                            <td class="align-middle text-end fw-semi-bold">$199</td>
                            <td class="align-middle text-end">2.75%</td>
                            <td class="align-middle text-center fw-semi-bold">VAT</td>
                            <td class="align-middle text-end fw-semi-bold">$199</td>
                            <td class="align-middle text-end fw-semi-bold">$398</td>
                            <td class="border-0"></td>
                        </tr>
                        <tr>
                            <td class="border-0"></td>
                            <td class="align-middle border-0">1</td>
                            <td class="align-middle border-0">
                                <p class="line-clamp-1 mb-0 fw-semi-bold">PlayStation 5 DualSense Wireless Controller</p>
                            </td>
                            <td class="align-middle ps-5 border-0">White</td>
                            <td class="align-middle text-700 fw-semi-bold border-0">Regular</td>
                            <td class="align-middle text-end text-1000 fw-semi-bold border-0">1</td>
                            <td class="align-middle text-end fw-semi-bold border-0">$185</td>
                            <td class="align-middle text-end border-0">3.5%</td>
                            <td class="align-middle text-center fw-semi-bold border-0">VAT</td>
                            <td class="align-middle text-end fw-semi-bold border-0">$199</td>
                            <td class="align-middle text-end fw-semi-bold border-0">$398</td>
                            <td class="border-0"></td>
                        </tr>
                        <tr class="bg-200">
                            <td></td>
                            <td class="align-middle fw-semi-bold" colspan="9">Subtotal</td>
                            <td class="align-middle text-end fw-bold">$398</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="border-0"></td>
                            <td colspan="6"></td>
                            <td class="align-middle fw-bold ps-15" colspan="2">Shipping Cost</td>
                            <td class="align-middle text-end fw-semi-bold" colspan="2">$50</td>
                            <td class="border-0"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="6"></td>
                            <td class="align-middle fw-bold ps-15" colspan="2">Discount/Voucher</td>
                            <td class="align-middle text-end fw-semi-bold text-danger" colspan="2">-$50</td>
                            <td></td>
                        </tr>
                        <tr class="bg-200">
                            <td class="align-middle ps-4 fw-bold text-1000" colspan="3">Grand Total</td>
                            <td class="align-middle fw-bold text-1000" colspan="7">Three Hundred and Ninenty Eight USD</td>
                            <td class="align-middle text-end fw-bold">$398</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end py-9 border-bottom border-300"><img class="mb-3" src="../../../assets/img/logos/phoenix-mart.png" alt="" />
                    <h4>Authorized Signatory</h4>
                </div>
                <div class="text-center py-4 mb-9">
                    <p class="mb-0">Thank you for buying with Phoenix | 2022 © <a href="https://themewagon.com/">Themewagon</a></p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-primary"><span class="fa-solid fa-bag-shopping me-2"></span>Browse more items</button>
                <div>
                    <button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download Invoice</span></button>
                    <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 dark__bg-1100">

        <div class="container-small">
            <div class="row py-md-9 justify-content-between gy-4">
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center mb-3"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                        <p class="logo-text ms-2">phoenix</p>
                    </div>
                    <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">Phoenix is an admin dashboard template with fascinating features and amazing layout. The template is responsive to all major browsers and is compatible with all available devices and screen sizes.</p>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">About Phoenix</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Stay Connected</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Blogs</a><a class="mb-1 fw-semi-bold fs--1" href="#!"><span class="fab fa-facebook-square text-800 me-2 fs-0"></span><span class="text-800">Facebook</span></a><a class="mb-1 fw-semi-bold fs--1" href="#!"><span class="fab fa-twitter-square text-800 me-2 fs-0"></span><span class="text-800">Twitter</span></a></div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Customer Service</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Payment Method</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Online Payment</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">PayPal</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Installment</a></div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <footer class="footer">
        <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.8.0</p>
            </div>
        </div>
    </footer>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
            <div>
                <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
            </div>
            <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
        </div>
        <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
            <h5 class="setting-panel-item-title">Color Scheme</h5>
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
            </div>
        </div>
        <div class="border rounded-3 p-4 setting-panel-item bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="setting-panel-item-title mb-1">RTL </h5>
                <div class="form-check form-switch mb-0">
                    <input class="form-check-input" type="checkbox" data-theme-control="phoenixIsRTL" />
                </div>
            </div>
            <p class="mb-0 text-700">Change text direction</p>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Navigation Type</h5>
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" data-page-url="../../../documentation/layouts/vertical-navbar.html" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" data-page-url="../../../documentation/layouts/horizontal-navbar.html" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" disabled="disabled" data-page-url="../../../documentation/layouts/combo-navbar.html" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label>
                </div>
            </div>
            <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation type in this page</p>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label>
                </div>
            </div>
            <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" data-page-url="../../../documentation/layouts/horizontal-navbar.html" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" data-page-url="../../../documentation/layouts/vertical-navbar.html#horizontal-navbar-slim" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label>
                </div>
            </div>
            <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label>
                </div>
            </div>
            <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
    </div>
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                  </svg></span></span></span></div>
        </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
</a>


<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('e-commerce-assets/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/is/is.min.js') }}/"></script>
<script src="{{ asset('e-commerce-assets/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/lodash/lodash.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('e-commerce-assets/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/js/phoenix.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/swiper/swiper-bundle.min.js') }}"></script>

</body>

</html>
