--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE `Registro` (
  `id_Libro` int(5) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Registro`
--

INSERT INTO `Registro` (`id_Libro`, `Titulo`, `Autor`, `Editorial`) VALUES
(1, 'El Padrino', 'Mario Puzo', 'santillan'),
(2, 'El Padrino', 'Mario Puzo', 'santillan'),
(3, 'El Padrino', 'Mario Puzo', 'santillan'),
(4, 'El Padrino', 'Mario Puzo', 'santillan'),
(5, 'El Padrino', 'Mario Puzo', 'santillan'),
(6, 'El Padrino', 'Mario Puzo', 'santillan'),
(7, 'El Padrino', 'Mario Puzo', 'santillan'),
(8, 'El Padrino', 'Mario Puzo', 'santillan'),
(9, 'El Padrino', 'Mario Puzo', 'santillan'),
(10, 'El Padrino', 'Mario Puzo', 'santillan'),
(11, 'El Padrino', 'Mario Puzo', 'santillan'),
(12, 'El Padrino', 'Mario Puzo', 'santillan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`id_Libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Registro`
--
ALTER TABLE `Registro`
  MODIFY `id_Libro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;<?php
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
