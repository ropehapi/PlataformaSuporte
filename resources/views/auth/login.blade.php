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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition login-page">
        <form method="POST" action="{{route("login")}}">
            @csrf
            @include("layout.messages")
            <div class="login-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="" class="h1"><b>Sistema</b>Suporte</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">{{__("Faça login para iniciar sua sessão")}}</p>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            {{__("Lembrar-me")}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">{{__("Acessar")}}</button>
                                </div>
                            </div>
                        </form>
                        <p class="mb-1"><a href="forgot-password.html">{{_("Esqueci minha senha")}}</a></p>
                        <p class="mb-0"><a href="register.html" class="text-center">{{_("Cadastrar")}}</a></p>
                    </div>
                </div>
            </div>
        </form>

        <script src="http://127.0.0.1/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="http://127.0.0.1/vendor/adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>
