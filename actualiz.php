<?php
	include("conectar.php");
	$con=mysql_query("select * from datos");
	$reg=mysql_fetch_array($con);
?>

<form action="" method="post">

	<select name="datos">
	<?php
		do{
		$id=$reg['id_Libro'];
		$tit=$reg['Titulo'];
		
	?>
	   <option value="<?php echo $id; ?>"> <?php echo $tit ?>
	   </option>
	<?php
	}while($reg=mysql_fetch_array($con));

	?>
	</select>
        <input type="submit" name="actu" value="Datos" /> 
     </from>

<?php
	if(isset($_POST['actu'])){
		  $d=$_POST['datos'];
		  $con1=mysql_query("select * from datos where id_Libro='$d'")or die(mysql_error());
                  $reg1=mysql_fetch_array($con1);
			$a=$reg1['Autor'];
			$e=$reg1['Editorial'];	
			$f=$reg1['Fecha'];
			$s=$reg1['Ssa']; 
?>
 <form method="post">
	<br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;
	Autor:<input name="a" value="<?php echo $a; ?>"/><br/> 
    	Editorial:<input name="e" value="<?php echo $e; ?>"/><br/> 		&nbsp;&nbsp;&nbsp;&nbsp;
	Fecha:<input name="f" value="<?php echo $f; ?>"/><br/> 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	SSA:<input name="s" value="<?php echo $s; ?>"/><br/><br/> 
        <input type="hidden" name="id" value="<?php echo $d; ?>" />  
	<input type="submit" name="actuali" value="Actualizar"/>
 </form> 
<?php
}
?>

<?php
	if(isset($_POST['actuali'])){
	   $id=$_POST['id'];
	   $a=$_POST['a'];
	   $e=$_POST['e'];
	   $f=$_POST['f']; 
	   $s=$_POST['s'];
	mysql_query("update datos set Autor='$a', Editorial='$e',Fecha='$f',Ssa='$s'  where id_Libro='$id'")or die(mysql_error());
}
?>
