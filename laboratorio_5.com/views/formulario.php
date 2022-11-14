<div class="container-md">
    <?php  if($msg != "") {?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error en Login</strong> <?php  echo $msg ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php  }?>
    <form action="<?php echo "index.php?C=".seg::codificar("sesion")."&M=".seg::codificar("login") ?>" method="post">
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">User</label>
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="user">
        <div id="textHelp" class="form-text">Ingrese Nombre de Usuario</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" name="pass">
        <div id="passwordHelp" class="form-text">Ingrese Password.</div>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="chkrecordar" type="checkbox" value="1" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Recordar Datos
        </label>
    </div>
    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
    <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>