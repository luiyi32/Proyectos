<?php
	include("conectar.php");

?>

<form action="" method="post">
	Titulo:<input required name="tit"><br/><br/>
	Autor: <input  name="aut"> <br/><br/>
	Editorial:<input  name="edit"> </br></br>
	Anio: <input name="fech"> </br></br>

<input type="submit" />
</form>

<?php
	if($_POST){ //validacion de datos al precionar botton
	$ti=$_POST["tit"];
	$au=$_POST["aut"];
	$ed=$_POST["edit"];
	
	mysql_query("insert into Registro(Titulo,Autor,Editorial)values('$ti','$au','$ed')")or die(mysql_error());
echo "<h3>Datos Guardados</h3>";
}
?>
