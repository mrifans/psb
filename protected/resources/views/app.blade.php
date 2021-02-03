<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="top">

@include('layouts.header')

@yield('section')

@include('layouts.footer')

<script src="{{ url('js/jquery.min.js')}}"></script>
   <script src="{{ url('js/popper.min.js')}}"></script>
   <script src="{{ url('js/bootstrap.js')}}"></script>
   @yield('chart')
    @yield('timer')
    @yield('custom')
</body>
</html>