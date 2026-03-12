<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('backend.layout.style')
    @yield('style')
</head>

<body>

    <main>
        @yield('content')
    </main>

    @include('backend.layout.script')
    @yield('script')

</body>

</html>
