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
    <link href="{{ asset('e-commerce-assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('e-commerce-assets/vendors/choices/choices.min.css') }}" rel="stylesheet">
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
    @livewireStyles
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
                                <div class="d-flex align-items-center"><img
                                        src="{{asset('e-commerce-assets/img/icons/easyfix-logo.png')}}"
                                        alt="phoenix" width="27"/>
                                    <p class="logo-text ms-2">Easy Fix</p>
                                </div>
                            </a></div>
                        <div class="col-auto order-md-1">
                            <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                                <li class="nav-item d-flex align-items-center">
                                    <div class="theme-control-toggle fa-icon-wait px-2">
                                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                               data-theme-control="phoenixTheme" value="dark" id="themeControlToggle"/>
                                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                               for="themeControlToggle" data-bs-toggle="tooltip"
                                               data-bs-placement="left" title="Switch theme"><span class="icon"
                                                                                                   data-feather="moon"></span></label>
                                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                               for="themeControlToggle" data-bs-toggle="tooltip"
                                               data-bs-placement="left" title="Switch theme"><span class="icon"
                                                                                                   data-feather="sun"></span></label>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary"
                                                        href="{{route('product.cart')}}" role="button"><span
                                            class="text-700" data-feather="shopping-cart"
                                            style="height:20px;width:20px;"></span><span
                                            class="icon-indicator-number">3</span></a></li>
                                <li class="nav-item dropdown"><a
                                        class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger"
                                        id="navbarTopDropdownNotification" href="#" role="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                        aria-expanded="false"><span class="text-700" data-feather="bell"
                                                                    style="height:20px;width:20px;"></span></a>
                                    <div
                                        class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret mt-2"
                                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                        <div class="card position-relative border-0">
                                            <div class="card-header p-2">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="text-black mb-0">Notificatons</h5>
                                                    <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark
                                                        all as read
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="scrollbar-overlay" style="height: 27rem;">
                                                    <div class="border-300">
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative read border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img
                                                                            class="rounded-circle"
                                                                            src="{{asset('e-commerce-assets/img/team/30.png')}}"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>💬</span>Mentioned
                                                                            you in a comment.<span
                                                                                class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:41 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <div class="avatar-name rounded-circle">
                                                                            <span>J</span></div>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>📅</span>Created an
                                                                            event.<span
                                                                                class="ms-2 text-400 fw-bold fs--2">20m</span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:20 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img
                                                                            class="rounded-circle avatar-placeholder"
                                                                            src="{{asset('e-commerce-assets/img/team/avatar.png')}}"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>👍</span>Liked your
                                                                            comment.<span
                                                                                class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">9:30 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-300">
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img
                                                                            class="rounded-circle"
                                                                            src="{{asset('e-commerce-assets/img/team/57.png')}}"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>💬</span>Mentioned
                                                                            you in a comment.<span
                                                                                class="ms-2 text-400 fw-bold fs--2"></span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">9:11 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img
                                                                            class="rounded-circle"
                                                                            src="{{asset('e-commerce-assets/img/team/59.png')}}"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>👤</span>Tagged you
                                                                            in a comment.<span
                                                                                class="ms-2 text-400 fw-bold fs--2"></span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:58 PM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="p-3 border-300 notification-card position-relative read ">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3"><img
                                                                            class="rounded-circle"
                                                                            src="{{ asset('e-commerce-assets/img/team/58.png') }}"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="me-3 flex-1">
                                                                        <h4 class="fs--1 text-black">Benjamin
                                                                            Button</h4>
                                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs--2'>👍</span>Liked your
                                                                            comment.<span
                                                                                class="ms-2 text-400 fw-bold fs--2"></span>
                                                                        </p>
                                                                        <p class="text-800 fs--1 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:18 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="font-sans-serif d-none d-sm-block">
                                                                    <button
                                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                        type="button"
                                                                        data-stop-propagation="data-stop-propagation"
                                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2 text-900"></span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                            class="dropdown-item" href="#!">Mark as
                                                                            unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 border-top border-0">
                                                <div class="my-2 text-center fw-bold fs--2 text-600"><a
                                                        class="fw-bolder"
                                                        href="../../../pages/pages/notifications.html">Notification
                                                        history</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#"
                                                                 role="button" data-bs-toggle="dropdown"
                                                                 data-bs-auto-close="outside" aria-haspopup="true"
                                                                 aria-expanded="false"><span class="text-700"
                                                                                             data-feather="user"
                                                                                             style="height:20px;width:20px;"></span></a>
                                    <div
                                        class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2"
                                        aria-labelledby="navbarDropdownUser">
                                        <div class="card position-relative border-0">
                                            <div class="card-footer pt-3 border-top">
                                                @if(Route::has('login'))
                                                    @auth
                                                        @if(Auth::user()->role==='ADM')
                                                            <div class="card-body p-0">
                                                                <div class="text-center pt-4 pb-3">
                                                                    <div class="avatar avatar-xl ">
                                                                        <img class="rounded-circle "
                                                                             src="{{asset('e-commerce-assets/img/team/57.png')}}"
                                                                             alt=""/>

                                                                    </div>
                                                                    <h6 class="mt-2 text-black">{{auth()->user()->name}}</h6>
                                                                </div>
                                                            </div>
                                                            <div class="px-3"><a
                                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                    href="{{route('admin.dashboard')}}"> <span class="me-2"
                                                                                                               data-feather="user"> </span>My
                                                                    Dashboard</a></div>
                                                            <hr>
                                                            <div class="px-3"><a
                                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                    href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                    <span class="me-2" data-feather="log-out"> </span>Sign
                                                                    Out</a></div>
                                                            <hr/>
                                                        @elseif(Auth::user()->role==='CST')
                                                            <div class="card-body p-0">
                                                                <div class="text-center pt-4 pb-3">
                                                                    <div class="avatar avatar-xl ">
                                                                        <img class="rounded-circle "
                                                                             src="{{asset('e-commerce-assets/img/team/57.png')}}"
                                                                             alt=""/>

                                                                    </div>
                                                                    <h6 class="mt-2 text-black">{{auth()->user()->name}}</h6>
                                                                </div>
                                                            </div>
                                                            <div class="px-3"><a
                                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                    href="{{route('customer.dashboard')}}"> <span class="me-2"
                                                                                                                  data-feather="user"> </span>My
                                                                    Dashboard</a></div>

                                                            <div class="px-3"><a
                                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                    href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                    <span class="me-2" data-feather="log-out"> </span>Sign
                                                                    Out</a></div>
                                                            <hr/>
                                                        @else
{{--                                                                       Agent link--}}
                                                        @endif

                                                        <form id="logout-form" method="post" action="{{route('logout')}}">
                                                            @csrf
                                                        </form>

                                                    @else
                                                        <div class="px-3"><a
                                                                class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                href="{{route('login')}}"> <span class="me-2"
                                                                                                 data-feather="user"> </span>Go
                                                                to Profile</a></div>
                                                        <hr/>
                                                        <div class="px-3"><a
                                                                class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                                href="{{route('register')}}"> <span class="me-2"
                                                                                                    data-feather="user-plus"> </span>Create
                                                                an Account</a></div>
                                                        <hr/>
                                                    @endif
                                                @endif

                                                {{--                                                <div class="px-3"><a--}}
                                                {{--                                                        class="btn btn-phoenix-secondary d-flex flex-center w-100"--}}
                                                {{--                                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign--}}
                                                {{--                                                        out</a></div>--}}
                                                <div class="my-2 text-center fw-bold fs--2 text-600"><a
                                                        class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a
                                                        class="text-600 mx-1" href="#!">Terms</a>&bull;<a
                                                        class="text-600 ms-1" href="#!">Cookies</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="search-box ecommerce-search-box w-100">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input search form-control-sm" type="search"
                                           placeholder="Search" aria-label="Search"/>
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
                <button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none"
                        data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span
                        class="fas fa-bars me-2"></span>Category
                </button>
                <div class="dropdown-menu border py-0 category-dropdown-menu">
                    <div class="card border-0 scrollbar" style="max-height: 657px;">
                        <div class="card-body p-6 pb-3">
                            <div class="row gx-7 gy-5 mb-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="pocket"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Collectibles</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Antiques</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Sports memorabilia </a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Art</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="home"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Yard, Garden &amp; Outdoor</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Crafts</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Home Improvement</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Pet Supplies</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="globe"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Outdoor Sports</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Team Sports</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Exercise &amp; Fitness</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Golf</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="monitor"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Computers &amp; Tablets</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Camera &amp; Photo</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">TV, Audio &amp; Surveillance</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Cell Ohone &amp; Accessories</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="truck"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">GPS &amp; Security Devices</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Rader &amp; Laser Detectors</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Care &amp; Detailing</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Scooter Parts &amp; Accessories</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="codesandbox"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Radio Control</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Kids Toys</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Action Figures</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Dolls &amp; Bears</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="watch"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Fashion</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Women</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Men</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Jewelry &amp; Watches</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Shoes</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="music"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Guitar</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Pro Audio Equipment</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">String</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Stage Lighting &amp; Effects</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                                                                      data-feather="grid"
                                                                                      style="stroke-width:3;"></span>
                                        <h6 class="text-1000 mb-0 text-nowrap">Other Categories</h6>
                                    </div>
                                    <div class="ms-n2"><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Video Games &amp; Consoles</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Health &amp; Beauty</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Baby</a><a
                                            class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                            href="#!">Business &amp; Industrial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all
                                    Categories<span class="fas fa-angle-right ms-1"
                                                    data-fa-transform="down-1"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active" aria-current="page"
                                                                      href="#!">Home</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Stores</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Free delivery</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Coupons</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Categories</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" aria-current="page" href="#!">Be
                        a vendor</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="#!">Track order</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="#!">Affiliate
                        program</a></li>
                <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a
                        class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-boundary="window" data-bs-reference="parent">
                        More<span class="fas fa-angle-down ms-2"></span></a>
                    <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown"
                         data-category-list="data-category-list"></div>
                </li>
            </ul>
        </div>
    </nav>
    {{$slot}}


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 dark__bg-1100">

        <div class="container-small">
            <div class="row py-md-9 justify-content-between gy-4">
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center mb-3"><img
                            src="{{asset('e-commerce-assets/img/icons/easyfix-logo.png')}}"
                            alt="phoenix" width="27"/>
                        <p class="logo-text ms-2">EasyFix</p>
                    </div>
                    <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">EASY FIX
                        Your one-stop Mobile Phone and repair Shop
                        📱 / 🛠️.</p>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">About EasyFix</h5>
                    <div class="d-flex flex-column">
                        <a> <a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></a>
                    </div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Stay Connected</h5>
                    <div class="d-flex flex-column">
                        <a class="mb-1 fw-semi-bold fs--1" href="#!" target="_blank">
                            <span class="fab fa-facebook-square text-800 me-2 fs-0"></span>
                            <span class="text-800">Facebook</span></a>
                        <a class="mb-1 fw-semi-bold fs--1" href="#!" target="_blank"><span
                                class="fab fa-twitter-square text-800 me-2 fs-0"></span><span
                                class="text-800">Twitter</span></a>

                    </div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Customer Service</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help
                            Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a
                            class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Payment Method</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on
                            Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">M-PESA</a>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </div>

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <footer class="footer">
        <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Developed by<span
                        class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br
                        class="d-sm-none"/>2023 &copy;<a class="mx-1" href="https://themewagon.com">Kennedy Calvins</a>
                </p>
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
<script src="{{ asset('e-commerce-assets/choices/choices.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/js/phoenix.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('e-commerce-assets/vendors/dropzone/dropzone.min.js') }}"></script>


@livewireScripts

</body>

</html>
