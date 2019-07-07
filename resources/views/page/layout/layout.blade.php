<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle')</title>
	@include('/page/layout/header')
	@include('/page/layout/nav')
	@yield('content')
	@include('page/layout/footer')
</body>
</html>
