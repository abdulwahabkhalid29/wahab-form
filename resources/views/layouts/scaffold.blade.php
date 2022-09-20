<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE</title>
    @include('include.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('include.nav')
    @include('include.logout')
    @include('include.leftnav')
    @yield('content')
    @include('include.script')
</body>
</html>