<!-- BEGIN: Vendor JS-->
<script src="{{ cxl_asset('assets_cms/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ cxl_asset('assets_cms/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ cxl_asset('assets_cms/vendor/js/bootstrap.js') }}"></script>
<script src="{{ cxl_asset('assets_cms/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ cxl_asset('assets_cms/vendor/js/menu.js') }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ cxl_asset('assets_cms/js/main.js') }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
