<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idproveedor = $_GET['id'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
            <h1>AGREGAR CORREO DEL PROVEEDOR</h1>
                <form action="../modelo/correoproveedor_agregar_guardar.php" method="POST">
                    CORREO
                    <input type="hidden" name="idproveedor" value="<?php echo $idproveedor;?>" required="required">     
                    <input type="text" name="correo" class="form-control" required="required">
                            
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">                
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>