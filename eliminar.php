<?php
	include("conectar.php");
	$con=mysql_query("select * from datos");
	$reg=mysql_fetch_array($con);
?>
<script>
    function eliminar(){
   if (confirm("Desea Eliminar")){
	mifo.submit();	
        }else{
	 alert("Dato no Eliminado");
    }
 }
</script>	
	
<form method="post" name="mifo">
	Seleccione el que desee  eliminar:<br/>
	<select onchange="eliminar()" name="datos">
            <option>Seleccione</option>
	<?php
		do{
	
	         $id=$reg['id_Libro'];
	         $tit=$reg['Titulo'];
	?>
        <option value="<?php echo $id; ?>"> <?php echo $tit;?> </option>
	<?php
		}while($reg=mysql_fetch_array($con));	
	?>
	</select>
</form>
<?php 	
	if(isset($_POST['datos'])){
         $d=$_POST['datos'];
	mysql_query("delete from datos where id_Libro='$d'")or 		die	(mysql_error());

	echo"<script>alert('Dato Eliminado'); location='eliminar.php';</script>";
}
?>
