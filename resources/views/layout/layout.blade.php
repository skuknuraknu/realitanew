<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="SPRUKO™">
    <meta name="keywords" content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">
     <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- title -->
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/unsyiah.ico') }}"/>
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet" />
    <link id="theme" rel="stylesheet" type="text/css }}" media="all" href="{{ asset('assets/css/color1.css') }}" />
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet" />
    @stack('yss')
</head>
<body class="app sidebar-mini ltr">
     <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="https://laravel8.spruko.com/sash" class="btn ripple btn-primary mt-0">View Demo</a>
                                <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671" class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
                                                name="darkPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#6c5ffc" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Bg-Image Style</h4>
                            <div class="skin-body switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Bg-Image Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#7e44d5" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="{{ asset('assets/images/media/bg-img1.html') }}"  alt="Bg-Image" id="bgimage1"></a>
                                    <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="{{ asset('assets/images/media/bg-img2.html') }}"  alt="Bg-Image"  id="bgimage2"></a>
                                    <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="{{ asset('assets/images/media/bg-img3.html') }}"  alt="Bg-Image" id="bgimage3"></a>
                                    <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="{{ asset('assets/images/media/bg-img4.html') }}"  alt="Bg-Image" id="bgimage4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block resetCustomStyles" type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <div class="page">
        <div class="page-main">
            @include('layout.header')
            @include('layout.sidebar')
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- container -->
                        <div class="main-container container-fluid">
                        @yield('content')
                        </div>
                    </div>
                </div>
            </div> 
            @include('layout.rightSide')
            @include('layout.footer')
        </div>
    </div>
    <script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.html') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.html') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.full.min.html') }}"></script>
    <script src="{{ asset('assets/js/select2.html') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.html') }}"></script>
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.html') }}"></script>
    <script src="{{ asset('assets/plugins/chart/rounded-barchart.html') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.html') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.full.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.html') }}"></script>
    {{-- <script src="{{ asset('assets/js/apexcharts.html') }}"></script> --}}
    <script src="{{ asset('assets/plugins/apexchart/irregular-data-series.html') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/c3-chart.html') }}"></script>
    <script src="{{ asset('assets/js/charts.html') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.html') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.html') }}"></script>
    <script src="{{ asset('assets/plugins/flot/chart.flot.sampledata.html') }}"></script>
    <script src="{{ asset('assets/plugins/flot/dashboard.sampledata.html') }}"></script>
    {{-- <script src="https://jvectormap.com/js/jquery-jvectormap-1.2.2.min.js" ></script> --}}
    {{-- <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.html') }}"></script> --}}
    <script src="{{ asset('assets/js/index.html') }}"></script>
    <script src="{{ asset('assets/js/index1.html') }}"></script>
    <script src="{{ asset('assets/js/index2.html') }}"></script>
    <script src="{{ asset('assets/js/themeColors.html') }}"></script>
    <script src="{{ asset('assets/js/sticky.html') }}"></script>
    <script src="{{ asset('assets/switcher/js/switcher.html') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.full.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/edit-table/bst-edittable.js') }}"></script>
    <script src="{{ asset('assets/plugins/edit-table/edit-table.js') }}"></script>

    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    </body>
</html>
