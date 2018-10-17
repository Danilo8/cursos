<?php
    use app\Controllers\AdminController;
    $admin = new AdminController();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Admin</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="http://<?=DOMINIO?>/public/img/icon/book.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/login-style.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        body{background:url('http://<?=DOMINIO?>/public/img/bg/bg-login.jpg')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>

        <ul class="navbar navbar-expand-lg navbar-dark bg-dark nav justify-content-center">
            <li class="nav-item">
                <a href="http://<?=DOMINIO?>/">
                    <img src="http://<?=DOMINIO?>/public/img/logo/logo.png" alt="">
                </a>                
            </li>        
        </ul>
        
        <div id="right" class="col-4 p-0">
            <div class="card bg-light">
                <div class="card-body">
                    <h3 class="text-center pt-4">
                        <i class="fa fa-sign-in"></i>
                        Login Admin
                    </h3>
                    <form id="form-login" class="mx-4 mt-5" action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <small class="text-danger" style="float: right" id="error_email"></small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            <small class="text-danger" style="float: right" id="error_password"></small>
                        </div>
                        <input type="hidden" name="action" value="logar">
                        <div class="form-group mt-5">
                            <button id="btn-login" class="btn btn-lg btn-dark btn-block" type="button">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="http://<?=DOMINIO?>/public/js/popper.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/bootstrap.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/valida-login.js"></script>
    </body>
</html>