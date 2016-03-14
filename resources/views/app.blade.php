<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css"/>


</head>
<body>

@include('partials.nav')


    <div class="container">
        {{--@include('partials.flash')--}}{{-- cusotmer partial--}}

        {{--Facade view for flash--}}
        @include('flash::message')


        @yield('content')
    </div>

    {{--<script src="//code.jquery.com/jquery.js"></script>--}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
//        $('div.alert').not('.alert-important').delay(3000).slideUp(300);

        $('#flash-overlay-modal').modal();

    </script>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/js/select2.min.js"></script>

    @yield('footer')
</body>
</html>
