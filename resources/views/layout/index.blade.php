<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>SistemaSuporte</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="jf2CzyXan1v0MfrTkf8vboSOl1kNO6iLLz8hVAl5">
    <link rel="stylesheet" href="http://127.0.0.1/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield("css")
</head>

<body class="sidebar-mini">
<div class="wrapper">
    <!--<div class="preloader flex-column justify-content-center align-items-center">
        <img src="http://127.0.0.1/vendor/adminlte/dist/img/AdminLTELogo.png" class="animation__shake" alt="AdminLTE Preloader Image" width="60" height="60">
    </div>-->

    @include("layout.navbar")
    @include("layout.sidebar")

    <div class="content-wrapper ">
        <div class="content-header">
            @include("layout.messages")
            <div class="container-fluid">
                <h1>@yield("content_header")</h1>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                @yield("content")
            </div>
        </div>
    </div>
</div>

<script src="http://127.0.0.1/vendor/jquery/jquery.min.js"></script>
<script src="http://127.0.0.1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://127.0.0.1/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="http://127.0.0.1/vendor/adminlte/dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
@yield("js")
</body>
</html>
