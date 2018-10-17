<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CURSOS</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="http://<?=DOMINIO?>/public/img/icon/book.ico" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/navbar-style.css">
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/dashboard-template.css">
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/scrollbar.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--cdn Sweet Alert 2-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    </head>
    <body>
        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            CATEGORIAS
                        </div>    
                        <div class="card-body p-0">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
                            </div>
                        </div>                                          
                    </div>     
                </div>
                <div class="col-8">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">

                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="http://<?=DOMINIO?>/public/js/popper.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/bootstrap.js"></script>
        <script></script>
    </body>
</html>