<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'RSF Israel')</title>
    @include('frontend.layouts.style')
    @yield('style')
</head>

<body>

    @include('frontend.layouts.navbar')


    <main>
        @yield('content')
    </main>


    @include('frontend.includes.event-contact')

    @include('frontend.layouts.footer')

    @include('frontend.layouts.script')
    @yield('script')


</body>

</html>
