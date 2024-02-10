<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="{{ asset('css/yourstylesheet.css') }}" rel="stylesheet">
</head>
<body>
@include('partials.navbar')

<div class="content">
    <h1>Welcome to Our Site</h1>
    <p>This is a demo using external CSS and JS in a Laravel Blade file.</p>
    <a href="{{ url('/about') }}">Learn More About Us</a>
</div>

<script src="{{ asset('js/yourscript.js') }}"></script>
</body>
</html>
