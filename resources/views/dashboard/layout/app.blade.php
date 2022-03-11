<!DOCTYPE html>
<html dir="rtl" style="direction: rtl;">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'dashboard')</title>
  <!-- start styles -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.rtl.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  @yield('styles')
  <link rel="stylesheet" href="{{asset('css/shop.css')}}">
  <!-- end styles -->
</head>

<body>
<div id="app" class="mt-5">
  <div class="container">
    <div class="page my-5">
      @yield('page')
    </div>
    @yield('content')
  </div>

</div>

<!-- start scripts -->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script>

  const LOCALE = "{{ app()->getLocale() }}";
  const BASE_URL = "{{ url('/') }}";
  const CURRENT_USER = {!! auth()->check() ? auth()->user() : 'null' !!};
  const c_token = '{{ csrf_token() }}';

</script>
@yield('scripts')
<script src="{{mix('js/app.js')}}"></script>
<!-- end scripts -->
</body>

</html>