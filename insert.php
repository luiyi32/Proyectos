<?php
	include("conectar.php");
?>

<form action="" method="post">
<center>
	<h1>Ingresar Datos de el Libro</h1><br/>
	Titulo:<input required name="title"><br/><br/>
	Autor:<input name="aut"><br/><br/>
	Editorial:<input name="edit"><br/><br/>
	Anio:<input name="fech"> </br></br>
	SSA: <input name="sa"> </br><br>
<input type="submit"/>
</center>
</form>

<?php
	if($_POST){
	$t=$_POST["title"];
	$a=$_POST["aut"];
	$e=$_POST["edit"];
	$f=$_POST["fech"];
	$s=$_POST["sa"];
	
	mysql_query("insert into datos(Titulo,Autor,Editorial,Fecha,Ssa)values('$t','$a','$e','$f','$s')")or die(mysql_error());

echo "<h3>Datos guardados</h3>";

}
?>
