<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Site</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/images/overlay.png') }}" rel="stylesheet">

</head>
<body>

{{-- Uncomment and use @include if you have a navbar partial --}}
{{-- @include('partials.navbar') --}}

{{-- Wrapping content in a container div if needed --}}
<div class="container">
    @yield('content')
</div>

<!-- Include JavaScript files -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>


{{--<head>--}}
{{--    <title>Story by HTML5 UP</title>--}}
{{--    <meta charset="utf-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />--}}
{{--    <link rel="stylesheet" href="assets/css/main.css" />--}}
{{--    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>--}}
{{--</head>--}}
