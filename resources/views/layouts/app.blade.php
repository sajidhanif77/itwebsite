<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Infiniti Tech</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

 </head>
<body>
    @include('inc.navbar')
    @if(Request::is('/'))
        @include('inc.header')
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                @include('inc.messages')
                @yield('content')
            </div>
{{--            <div class="col-md-4 col-lg-4">--}}
{{--                @include('inc.sidebar')--}}
{{--            </div>--}}
        </div>
    </div>
    @include('inc.footer')


</body>
</html>
