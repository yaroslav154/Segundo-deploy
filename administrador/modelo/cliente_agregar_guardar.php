<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

				<?php



$ID_cliente=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellidop'];
$apellido2=$_POST['apellidom'];
$sexo=$_POST['sexo'];


$sql_insert="INSERT INTO cliente (id,nombrecliente,apellidop,apellidom,sexo)
       VALUES ('$ID_cliente','$nombre','$apellido1','$apellido2','$sexo')";
	   
$resultado=$mysqli->query($sql_insert);


	if($resultado)
{

//------------------BITACORA-------------------------------------
$accion='Agrego un nuevo cliente';
 $ejecutor=$_SESSION['nombre_usu_lg'] ;

 $sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
 $resultado_usu2=$mysqli->query($sql_insert2);
 //------------------------------------------------------------------------


 echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
}ELSE {
	echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
}
?>


<BR>
<BR>
			<a href="../vista/cliente.php" class="btn btn-danger" class="button">VOLVER</a>	
  </div>
  <div>
  
  
 
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