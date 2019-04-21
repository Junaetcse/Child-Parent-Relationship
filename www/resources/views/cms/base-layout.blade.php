@include('cms.layouts.header')
@include('cms.layouts.sidebar')
<!--close-top-serch-->

<!--main-container-part-->
<div id="content">
    @yield('main-content')
    <!--breadcrumbs-->
</div>

<!--end-main-container-part-->
@include('cms.layouts.footer')
