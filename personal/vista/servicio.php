<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> SERVICIOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COSTO</th>
                            <th>CATEGORIA SERVICIO</th>
                            <th>CATEGORIA DISPOSITIVO</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select servicio.id ,servicio.costo,categoriaservicio.descripcion,categoriadispositivo.tipo
                                     from servicio,categoriaservicio,categoriadispositivo 
                                     where servicio.idcategoriaservicio=categoriaservicio.id  and servicio.idcategoriadispositivo=categoriadispositivo.id";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_servicio = $fila_usu['id'];
                            $costo = $fila_usu['costo'];
                            $categoría_servicio = $fila_usu['descripcion'];
                            $categoria_dispositivo = $fila_usu['tipo'];

                        ?>
                            <tr>
                                <td><?php echo $id_servicio; ?></td>
                                <td><?php echo  $costo; ?></td>
                                <td><?php echo  $categoría_servicio; ?></td>
                                <td><?php echo  $categoria_dispositivo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <a href="../controles/servicio_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="servicio_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="servicio_boton_eliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
            </div>
        </div>
    </div>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
<?php include("piedecodigo.php"); ?>