<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('admin.inc.head')

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">


        @include('admin.inc.sidebar')

        <div class="page-wrapper">
            @include('admin.inc.header')
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>

                @include('admin.inc.footer')
            </div>
        </div>

        @include('admin.inc.script')
</body>

</html>
