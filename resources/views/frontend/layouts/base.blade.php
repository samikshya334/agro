<!DOCTYPE html>
<html>
@include('frontend.layouts.head')
<body>
    @include('frontend.layouts.navigation')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
</body>
</html>
