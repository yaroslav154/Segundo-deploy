<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <?php
                include('../config/conexion.php');
                $nro_factura = $_POST['nrofactura'];
                $nit = $_POST['nit'];
                $nombre = $_POST['nombre'];
                $nro_notaentrega = $_POST['nronotaentrega'];
                $sql_insert = "INSERT INTO factura(nrofactura,nit,nombre,nronotaentrega) 
VALUES ( '$nro_factura', '$nit','$nombre','$nro_notaentrega')";
                $resultado = $mysqli->query($sql_insert);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Agrego una nueva factura';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------

                    echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>


                <br>


            </div>
            <div>

                <a href="../vista/factura.php" class="btn btn-danger" class="button">VOLVER</a>

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
<?php include("../vista/piedecodigo.php"); ?>