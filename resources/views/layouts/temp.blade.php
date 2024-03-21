<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Urban Craft | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/Template/dist/assets/media/logos/icon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="/Template/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="/Template/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="/Template/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/Template/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
    <style>
        .invisible-cell {
            display: none;
        }

        .modal-confirm {
            color: #636363;
            width: 400px;
        }

        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
            text-align: center;
            font-size: 14px;
        }

        .modal-confirm .modal-header {
            border-bottom: none;
            position: relative;
        }

        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -10px;
        }

        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -2px;
        }

        .modal-confirm .modal-body {
            color: #999;
        }

        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
            padding: auto;
            margin-right: 35px;
        }

        .modal-confirm .modal-footer a {
            color: #999;
        }

        .modal-confirm .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            z-index: 9;
            text-align: center;
            border: 3px solid #ffb01e;
        }

        .modal-confirm .icon-box i {
            color: #ffb01e;
            font-size: 46px;
            display: inline-block;
            margin-top: 13px;
        }

        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            min-width: 120px;
            border: none;
            min-height: 40px;
            border-radius: 3px;
            margin: 0 5px;
            outline: none !important;
        }

        .modal-confirm .btn-info {
            background: #c1c1c1;
        }

        .modal-confirm .btn-info:hover,
        .modal-confirm .btn-info:focus {
            background: #a8a8a8;
        }

        .modal-confirm .btn-danger {
            background: #f15e5e;
        }

        .modal-confirm .btn-danger:hover,
        .modal-confirm .btn-danger:focus {
            background: #ee3535;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.nav')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @yield('content')
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="/Template/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/Template/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="/Template/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="/Template/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="/Template/dist/assets/js/custom/apps/ecommerce/customers/listing/listing.js"></script>
    <script src="/Template/dist/assets/js/custom/apps/ecommerce/customers/listing/add.js"></script>
    <script src="/Template/dist/assets/js/custom/apps/ecommerce/customers/listing/export.js"></script>
    <script src="/Template/dist/assets/js/widgets.bundle.js"></script>
    <script src="/Template/dist/assets/js/custom/widgets.js"></script>
    <script src="/Template/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/Template/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/Template/dist/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="/Template/dist/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Page Custom Javascript-->
    <script>
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
    <script>
        var KTBootstrapDatetimepicker = {
            init: function() {
                $("#kt_datetimepicker_1").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    format: "yyyy.mm.dd hh:ii"
                }), $("#kt_datetimepicker_1_modal").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    format: "yyyy.mm.dd hh:ii"
                }), $(
                    "#kt_datetimepicker_2, #kt_datetimepicker_1_validate, #kt_datetimepicker_2_validate, #kt_datetimepicker_3_validate"
                    ).datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left",
                    format: "yyyy/mm/dd hh:ii"
                }), $("#kt_datetimepicker_2_modal").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left",
                    format: "yyyy/mm/dd hh:ii"
                }), $("#kt_datetimepicker_3").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left",
                    todayBtn: !0,
                    format: "yyyy/mm/dd hh:ii"
                }), $("#kt_datetimepicker_3_modal").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left",
                    todayBtn: !0,
                    format: "yyyy/mm/dd hh:ii"
                }), $("#kt_datetimepicker_4_1").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left",
                    format: "yyyy.mm.dd hh:ii"
                }), $("#kt_datetimepicker_4_2").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-right",
                    format: "yyyy/mm/dd hh:ii"
                }), $("#kt_datetimepicker_4_3").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "top-left",
                    format: "yyyy-mm-dd hh:ii"
                }), $("#kt_datetimepicker_4_4").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "top-right",
                    format: "yyyy-mm-dd hh:ii"
                }), $("#kt_datetimepicker_5").datetimepicker({
                    format: "dd MM yyyy - HH:ii P",
                    showMeridian: !0,
                    todayHighlight: !0,
                    autoclose: !0,
                    pickerPosition: "bottom-left"
                }), $("#kt_datetimepicker_6").datetimepicker({
                    format: "yyyy/mm/dd",
                    todayHighlight: !0,
                    autoclose: !0,
                    startView: 2,
                    minView: 2,
                    forceParse: 0,
                    pickerPosition: "bottom-left"
                }), $("#kt_datetimepicker_7").datetimepicker({
                    format: "hh:ii",
                    showMeridian: !0,
                    todayHighlight: !0,
                    autoclose: !0,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0,
                    pickerPosition: "bottom-left"
                }), $("#kt_datetimepicker_8").datetimepicker({
                    todayHighlight: !0,
                    autoclose: !0,
                    format: "yyyy.mm.dd hh:ii",
                    language: "fr"
                })
            }
        };
        jQuery(document).ready(function() {
            KTBootstrapDatetimepicker.init()
        });
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
