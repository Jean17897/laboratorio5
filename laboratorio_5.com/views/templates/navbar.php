<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Formulario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Contacto</a>
                </li>
        </div>
        <form class="d-flex">
        <?php if(isset($_SESSION["user"])){?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $_SESSION["user"]; ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo "index.php?C=".seg::codificar("sesion")."&M=".seg::codificar("cerrar")?>">Cerrar Sesion</a>
        </li>
        </ul>
        <?php }else{ ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">User</a>
        </li>
        <?php } ?>
        </ul>
            <button class="btn btn-outline-success" type="submit">Login</button>
        </form>
        
    </div>
</nav>