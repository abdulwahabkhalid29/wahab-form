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
    @if(auth()->user()->role_id == 1)
    @include('include.left_admin')
    @elseif(auth()->user()->role_id == 3)
    @include('include.left_author')
    @endif
    
    @yield('content')
    @include('include.script')
</body>
</html>