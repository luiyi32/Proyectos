<?php
 
	include("conectar.php");
	$consul=mysql_query("select * from datos")or die(mysql_error());
	

	$registr=mysql_fetch_array($consul);
	do{
	   $tit=$registr['Titulo'];
	echo "<br/>$tit";
}while($registr=mysql_fetch_array($consul));
	
?>
