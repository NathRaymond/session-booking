<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("admin-assets/images/favicon.ico")}}">

    <!-- jsvectormap css -->
    <link href="{{asset("admin-assets/libs/jsvectormap/css/jsvectormap.min.css")}}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{asset("admin-assets/libs/swiper/swiper-bundle.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset("admin-assets/js/layout.js")}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset("admin-assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset("admin-assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset("admin-assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset("admin-assets/css/custom.min.css")}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('headlinks')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            @include("layouts.admin-layouts.header")
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            @include("layouts.admin-layouts.sidebar")
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield("contents")
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include("layouts.admin-layouts.footer")
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset("admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("admin-assets/libs/simplebar/simplebar.min.js")}}"></script>
    <script src="{{asset("admin-assets/libs/node-waves/waves.min.js")}}"></script>
    <script src="{{asset("admin-assets/libs/feather-icons/feather.min.js")}}"></script>
    <script src="{{asset("admin-assets/js/pages/plugins/lord-icon-2.1.0.js")}}"></script>
    <script src="{{asset("admin-assets/js/plugins.js")}}"></script>

    <!-- apexcharts -->
    <script src="{{asset("admin-assets/libs/apexcharts/apexcharts.min.js")}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/datatables.init.js"></script>
    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/passowrd-create.init.js"></script>

    <!-- Vector map-->
    <script src="{{asset("admin-assets/libs/jsvectormap/js/jsvectormap.min.js")}}"></script>
    <script src="{{asset("admin-assets/libs/jsvectormap/maps/world-merc.js")}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset("admin-assets/libs/swiper/swiper-bundle.min.js")}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset("admin-assets/js/pages/dashboard-ecommerce.init.js")}}"></script>

    <!-- App js -->
    <script src="{{asset("admin-assets/js/app.js")}}"></script>
    @yield('scripts')
</body>

</html>