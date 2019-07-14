<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('pageTitle')</title>
    @include('/user/layout/header')
    @include('/user/layout/sidebar')
    @include('/user/layout/nav')
    @yield('content')
    @yield('script')
    @include('/user/layout/footer')
</body>
</html>
