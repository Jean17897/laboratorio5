<div class="container-md">
    <br>
    <h1>Datos del Formulario</h1>
    <br>
    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <td> <?php echo $result["nombre"] ?> </td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <tr>
                <th scope="col">Numero</th>
                <td> <?php echo $result["numero"] ?> </td>
            </tr>
            </tr>
            <tr>
            <tr>
                <th scope="col">Correo</th>
                <td> <?php echo $result["correo"] ?> </td>
            </tr>
            </tr>
            <tr>
            <tr>
                <th scope="col">Fecha Nacimiento</th>
                <td> <?php echo $result["fechanacimiento"] ?> </td>
            </tr>
            </tr>
            <tr>
            <tr>
                <th scope="col">Genero</th>
                <td> <?php echo $result["genero"] ?> </td>
            </tr>
            </tr>
            <tr>
            <tr>
                <th scope="col">Estado Civil</th>
                <td> <?php echo $result["ecivil"] ?> </td>
            </tr>
            </tr>
        </tbody>
    </table>
</div>