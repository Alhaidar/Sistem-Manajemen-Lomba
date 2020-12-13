<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('template/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('template/css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('template/css/app.rtl.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('template/css/vendor-material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('template/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('template/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('template/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{ asset('template/css/vendor-ion-rangeslider.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('template/css/vendor-ion-rangeslider.rtl.css') }}" rel="stylesheet">

</head>

<body class="layout-default">












    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- Header -->
        @include('includes.pagecap')
        <!-- // END Header -->
        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">
            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" style="min-height:625px">
                <div class="mdk-drawer-layout__content page">
                    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css') }}" rel="stylesheet">
                    <div class="home-banner text-white mb-4">
                    </div>
                </div>
                <!-- // END drawer-layout__content -->
                @include('includes.basenav')
                </div>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
                <script>
                    AOS.init();
                </script>
                @include('includes.footer')
            </div>
            <!-- // END drawer-layout -->
        </div>
        <!-- // END header-layout__content -->
    </div>
    <!-- // END header-layout -->
    <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>


                <div class="sidebar-block p-0 m-0">
                    <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light">
                        <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                            <span class="flex d-flex flex-column">
                                <strong>{{config('app.name')}}</strong>
                                <small class="text-muted text-uppercase">Be Winner</small>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-block p-0">
                    <div class="sidebar-heading">Kegiatan</div>
                    <ul class="sidebar-menu mt-0">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fluid-student-dashboard.html">
                                <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                  <!-- Tempate ICON -->
                                </span>
                                <span class="sidebar-menu-text">Jadwal</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fluid-student-dashboard.html">
                                <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                  <!-- Tempate ICON -->
                                </span>
                                <span class="sidebar-menu-text">Pengumuman</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-block p-0">
                    <div class="sidebar-heading">Akun</div>
                    <ul class="sidebar-menu mt-0">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fluid-student-dashboard.html">
                                <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                  <!-- Tempate ICON -->
                                </span>
                                <span class="sidebar-menu-text">Daftar</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fluid-student-dashboard.html">
                                <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                  <!-- Tempate ICON -->
                                </span>
                                <span class="sidebar-menu-text">Masuk</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- App Settings FAB -->
    <div id="app-settings" style="display:none">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('template/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('template/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('template/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('template/vendor/material-design-kit.js') }}"></script>

    <!-- Range Slider -->
    <script src="{{ asset('template/vendor/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('template/js/ion-rangeslider.js') }}"></script>

    <!-- App -->
    <script src="{{ asset('template/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('template/js/check-selected-row.js') }}"></script>
    <script src="{{ asset('template/js/dropdown.js') }}"></script>
    <script src="{{ asset('template/js/sidebar-mini.js') }}"></script>
    <script src="{{ asset('template/js/app.js') }}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('template/js/app-settings.js') }}"></script>




</body>

</html>