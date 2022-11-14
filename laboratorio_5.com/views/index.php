<body>
    <div class="container-md">
    <form action="<?php echo "index.php?C=".seg::codificar("contacto")."&M=".seg::codificar("mostrar")?>" method="post">
        <h1>Bienvenido al Formulario Web!</h1>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nombre y Apellido</label>
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="<?php echo isset($nombre)?$nombre:"" ?>" name="txtNombre" placeholder="Nombre y Apellido">
        <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:"" ?></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Numero Celular</label>
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="<?php echo isset($numero)?$numero:"" ?>" name="txtNumero" placeholder="+507 6666-6645">
        <div id="textHelp" class="form-text"><?php echo isset($error[1])?$error[1]:"" ?></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo isset($correo)?$correo:"" ?>" placeholder="example@no-replay.com" name="txtCorreo">
        <div id="emailHelp" class="form-text"><?php echo isset($error[2])?$error[2]:"" ?></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtFecha">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="txtGenero" id="flexRadioDefault" checked value="M">
        <label class="form-check-label" for="flexRadioDefault">
            Mujer
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="txtGenero" id="flexRadioDefault" checked value="H">
        <label class="form-check-label" for="flexRadioDefault">
            Hombre
        </label>
    </div>
    
    <section>
    <p>Estado Civil</p>

    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked value="Soltero">
        <label class="btn btn-outline-primary" for="btnradio1">Soltero(a)</label>
    
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="Casado">
        <label class="btn btn-outline-primary" for="btnradio2">Casado(a)</label>
    </div>
    </section>
    <br>
    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
    <?php $_SESSION["user"]="Jean" ?>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>