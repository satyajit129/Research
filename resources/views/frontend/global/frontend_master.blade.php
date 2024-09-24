<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.global.frontend_css_support')
</head>

<body>
    @include('frontend.layout.header')
    @yield('frontend_custom_stylesheet')
        @yield('frontend_content')
        @include('frontend.layout.footer')
    @include('frontend.global.frontend_js_support')
    @yield('frontend_custom_js')
</body>

</html>
