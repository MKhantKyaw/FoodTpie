<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('pageTitle')</title>
    @include('/partials/header')
    @include('/partials/sidebar')
    @include('/partials/nav')
    @yield('content')
    @yield('script')
    @include('/partials/footer')
</body>
</html>
