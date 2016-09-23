<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Jurusan</title>

    {{--Normalize CSS--}}
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">

    {{--Jquery 1.11.3--}}
    <script type="text/javascript" src="{{ asset('jquery/jquery-1.11.3.min.js') }}"></script>

    {{--Bootstrap Jquery--}}
    <script type="text/javascript" src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>

    {{--Custom JavaScript--}}
    <script type="text/javascript" src="{{ asset('JavaScript/Custom_JS.js') }}"></script>

    {{--Bootstrap CSS--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap-theme.min.css') }}">

    {{--Custom CSS--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Custom_Style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    {{--Mobile Adjustment--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datepick.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/datepicker/jquery.plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datepicker/jquery.datepick.js') }}"></script>

</head>

@yield('body')

</html>