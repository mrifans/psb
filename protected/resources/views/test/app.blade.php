<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="top">

@include('test.layouts.header')

@yield('section')

@include('layouts.footer')

@include('layouts.js')
</body>
</html>
