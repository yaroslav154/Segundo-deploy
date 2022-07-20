<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $idproveedor = $_POST['idproveedor'];
        ?>
        <h1> <?php echo "ID: " . $idproveedor; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <h1> TELEFONO DEL PROVEEDOR </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select numero
                                        from telefonoproveedor
                                        where telefonoproveedor.idproveedor in (select id
                                                                            from proveedor
                                                                            where proveedor.id = $idproveedor)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $numero = $fila_usu['numero'];
                        ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <td> <a href='../controles/telefonoproveedor_agregar.php?id=<?php echo $idproveedor; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
                <td> <a href='telefonoproveedor_botoneditar.php?id=<?php echo $idproveedor; ?>' class="btn btn-primary" class="button"> EDITAR</a></td>
                <td> <a href='telefonoproveedor_botoneliminar.php?id=<?php echo $idproveedor; ?>' class="btn btn-primary" class="button"> ELIMINAR</a></td>
            </div>
            <div>
                <a href="proveedor.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>