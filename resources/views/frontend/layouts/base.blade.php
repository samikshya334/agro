<!DOCTYPE html>
<html>
@include('frontend.layouts.head')
<body>
    @include('frontend.layouts.navigation')
    {{-- @include('frontend.layouts.slider') --}}
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
@stack('footer-script')
</html>
