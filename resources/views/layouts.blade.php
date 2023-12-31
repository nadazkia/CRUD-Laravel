<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    {{-- <b class="logo-abbr"><img src="{{ asset('images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('./images/logo-compact.png') }}"
                            alt=""></span> --}}
                    <span class="brand-title">
                        {{-- <img src="{{ asset('images/logo-text.png') }}" alt="Logo"> --}}
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                {{-- <img src="{{ asset('images/user/1.png') }}" height="40" width="40"
                                    alt=""> --}}
                            </div>
                            <div class="drop-down dropdown-profile dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <hr class="my-2">
                                        <li><a href="/logout">
                                                <i class="icon-key"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Apps</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i>
                            <span class="nav-text">
                                Data Master
                            </span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="#"
                                    class="{{ request()->segment('1') == '' || request()->segment('1') == 'data-users' ? 'active' : '' }}">
                                    Data Users
                                </a>
                            </li>
                            <li>
                                <a href="#" class="{{ request()->segment('1') == '' ? 'active' : '' }}">
                                    Data Jenis Barang
                                </a>
                            </li>
                            <li>
                                <a href="#" class="{{ request()->segment('1') == '' ? 'active' : '' }}">
                                    Data Barang
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i>
                            <span class="nav-text {{ $title === 'Setting Diskon' ? 'active' : '' }}">
                                Setting Diskon
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i>
                            <span class="nav-text {{ $title === 'Data Laporan' ? 'active' : '' }}">Data
                                Laporan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i>
                            <span class="nav-text {{ $title === 'Data Transaksi' ? 'active' : '' }}">Data
                                Transaksi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('container')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by
                    <a href="#">Nads.dev</a>
                    2023
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/js/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable-basic.min.js') }}"></script>

</body>

</html>
