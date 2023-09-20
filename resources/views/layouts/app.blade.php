<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'Permissions Manager') }}</title>

    <link href="{{ asset('front/logo1.png') }}" rel="icon"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("images/back1.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card
        {
            position: relative;

            display: flex;
            flex-direction: column;

            min-width: 0;

            word-wrap: break-word;

            border: .0625rem solid rgba(0, 0, 0, .05);
            border-radius: .25rem;
            background-color: rgba(245, 245, 245, 0.7);
            /*background-color: #fff;*/
            background-clip: border-box;
        }

        .card-lift--hover:hover
        {
            background-color: rgba(245, 245, 245, 0.9);
            transition: all .15s ease;
            transform: translateY(-20px);
        }
        @media (prefers-reduced-motion: reduce)
        {
            .card-lift--hover:hover
            {
                transition: none;
            }
        }
    </style>
    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page bg">
    <div class="app flex-row align-items-center">
        <div class="container">
            @yield("content")
        </div>
    </div>


    <script src="{{ asset('wbs/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('wbs/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('wbs/js/jquery-ui.js') }}"></script>
    @yield('scripts')
</body>

</html>
