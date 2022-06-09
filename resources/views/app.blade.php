<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body itemscope itemtype="https://schema.org/WebPage">
<div id="app" class="font-poppins text-txt bg-body flex flex-col min-h-screen">

    @yield('main')

</div>
@include('layouts.partials.js')

</body>
</html>
