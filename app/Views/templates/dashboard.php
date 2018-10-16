<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <span id="logo-text">LOGO</span>
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">
            ADMINISTRADOR
        </h3>
    </ul>
    <ul class="nav justify-content-end">                
        <span class="nav-item">
            <button style="border: none" type="button" class="nav-link btn btn-link" data-toggle="modal" data-target="#logoutModal">
                <span style="font-size: 18px" id="logout" class="mx-4">
                    Sair
                    <i class="fa fa-sign-out"></i>                
                </span>
            </button>
        </span>
    </ul>
</nav>
<nav class="navbar navbar-info bg-info">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <?php if($route->File == "dashboard") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/admin/dashboard">DASHBOARD</a>           
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/admin/dashboard">DASHBOARD</a>           
            <?php } ?>
        </li>
        <li class="nav-item">
            <?php if($route->File == "cursos") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/admin/cursos">CURSOS</a>
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/admin/cursos">CURSOS</a>
            <?php } ?>
        </li>
        <li class="nav-item border">
        </li>
        <li class="nav-item">
            <?php if($route->File == "administrador") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/admin/administrador">ADMINISTRADOR</a>           
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/admin/administrador">ADMINISTRADOR</a>           
            <?php } ?>
        </li>
    </ul>
    <span></span>
</nav>

<!-- Modal Sair-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Tem certeza que deseja sair?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a href="<?=$_SERVER['REQUEST_URI']?>/logout" class="btn btn-danger">Sair</a>
        </div>
        </div>
    </div>
</div>