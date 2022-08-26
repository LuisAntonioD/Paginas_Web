-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-08-2022 a las 13:07:40
-- Versión del servidor: 5.7.39-0ubuntu0.18.04.2
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_luiarr202`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clavecambiada`
--

CREATE TABLE `clavecambiada` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `password` blob,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clavecambiada`
--

INSERT INTO `clavecambiada` (`id`, `usuario`, `password`, `fecha`) VALUES
(35, 'ejemplo', 0x24327924313024583951385269467264712f7768646c393850706d4d656b395544372f4541576f6a6d316f383477357370362f316d714c6744546f36, '2022-08-08 16:35:08'),
(36, 'ejemplo', 0x243279243130246142386b6c4a796f724733305a2f57484a6d3578474f54302e5a6159436c477547634b576c4467754a633651584433705945627036, '2022-08-08 16:45:54'),
(37, 'ejemplo', 0x243279243130247649446944796f62584145596c51644f326b4658457549782f682f326a6b763045514853616f73776d624b4f6b33764972425a5743, '2022-08-08 16:45:57'),
(38, 'ejemplo', 0x243279243130244e614e67727878704a384a6165474979637435416c7559477a324f71573673567a424a6c7335393944677a2e44734e2f346b395553, '2022-08-08 16:48:39'),
(39, 'ejemplo', 0x243279243130246675536b6c554449443333774a31726e6f2e2e3575754662376e586f613067474c7a66486931796c524d69526e772e61786c303143, '2022-08-08 17:51:24'),
(40, 'ejemplo', 0x243279243130246d4b6961484a724e496e55594f384f5a724f54787865456552575979394f4b50424a3372576835566e4e46787a335a412e4d4d354f, '2022-08-08 17:51:28'),
(41, 'ejemplo', 0x24327924313024362e75414279397362694a4c6a62794c72447a6e6a2e49682f4635456e6a6c63345948344762332e637a4a53587a33785a35673457, '2022-08-08 17:53:57'),
(42, 'ejemplo', 0x2432792431302452346d594e79667a516c7941713142524576752f7475564835393961744e547631374d765a5851527979645137596b6d2f527a4961, '2022-08-08 17:57:22'),
(43, 'ejemplo', 0x2432792431302465397868784756564838704b456c3568524a4d796a65444d79307253776c356976545261347a5a2f514e4f62584e77754d39646661, '2022-08-08 18:03:02'),
(44, 'ejemplo', 0x24327924313024676e7435716a4959367a6f45426a44716e65656b6d75524336477a47714f54614f6b647576306346502f3054612f466d736d782f47, '2022-08-08 18:09:10'),
(45, 'ejemplo', 0x243279243130247341673076387630663074595337576534625648344f77694c792e764f4732587554515756734e374e374a6351556f66622e344357, '2022-08-08 18:14:05'),
(46, 'ejemplo', 0x24327924313024384a4f7733395a5a712f6a72684e4e306b7a51722f75693871576472704e34676251757373767130554779326745746f4b64367769, '2022-08-08 18:25:25'),
(47, 'ejemplo', 0x24327924313024553670304c6e7542515157617736715a4d574473632e5457714f4b494f506a4b59523838312f665167335666565a6f717967444b6d, '2022-08-08 18:26:19'),
(48, 'ejemplo', 0x2432792431302478777239564b6b57777145444f51434b6a637559517576334e525a6f50334f55767939633166445a417577704e6d6e5875662e5975, '2022-08-08 18:51:53'),
(80, 'lucas', 0x313233, '2022-08-25 19:22:33'),
(81, 'dafdsf', 0x33343332, '2022-08-25 20:44:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ApellidoPat` varchar(30) DEFAULT NULL,
  `ApellidoMat` varchar(30) DEFAULT NULL,
  `Colonia` varchar(30) DEFAULT NULL,
  `Calle` varchar(30) DEFAULT NULL,
  `No_inte` varchar(4) DEFAULT NULL,
  `No_exte` int(11) DEFAULT NULL,
  `Cp` int(11) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Rfc` char(10) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `password` blob,
  `municipio` varchar(50) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `Nombre`, `ApellidoPat`, `ApellidoMat`, `Colonia`, `Calle`, `No_inte`, `No_exte`, `Cp`, `Telefono`, `Rfc`, `usuario`, `password`, `municipio`, `imagen`) VALUES
(1, 'Cruz', 'Sandiego', 'Jaime', 'Menchaca', 'Rio actopan', '200', 10, 76147, '4421231772', 'SAJC030405', 'Cruzan123', NULL, 'Toliman', NULL),
(2, 'Gerardo', 'Argel', 'Matus', 'Guerrero', 'Av de la luz', '150', 25, 67741, '4423123445', 'GAMH098765', 'GERARDF123', NULL, 'ColÃ³n', NULL),
(3, 'Jorge', 'Angel', 'Perez', 'La esperanza', 'Av tlaloc', '45', 1, 54321, '4098765432', 'JAPP868686', 'JORANN111', NULL, 'Pinal de Amoles', NULL),
(4, 'Jose', 'Luis', 'Argel', 'San pablo', 'Luna', '1', 1, 90900, '4712345678', 'JLAA126765', 'JOSLUD090', NULL, 'Corregidora', NULL),
(5, 'Marlene', 'Sanchez', 'Silva', 'Carrillo', 'La hortaliza', '90', 76, 90761, '4123456732', 'MSSS903221', 'MARSANNN22', NULL, 'Ezequiel Montes', NULL),
(20, 'Luis', 'Ramirez', 'Aguado', 'Lomas', 'SAN JUAN ', '1', 15, 37736, '4421152990', 'LUIS030405', 'RAMLU345', 0x313233, 'Azcapotzalco', NULL),
(1111111, 'CRUZ', 'SANDIGO', 'JAIME', 'Santa', 'Juarez', '2', 5, 45567, '4151152990', 'ASCC090111', 'CRUSAN', 0x313233, 'CoyoacÃ¡n', NULL),
(1111112, 'Bibiana', 'Arredondo', 'Deanda', 'Lindavista', 'Carolina', '14', 1, 37736, '1233344556', 'asdfg56789', 'bib202', 0x313233, 'Gustavo A. Madero', NULL),
(1111113, 'Gabi', 'Mar', 'Tinez', 'Los pinos', 'Durazno', '10', 1, 37738, '4420988776', 'gabi1234lp', 'gabi123', 0x313233, 'Iztapalapa', NULL),
(1111114, 'lnklewnlvf', 'wvevev', 'ewvwev', 'wevvwev', 'ewvewv', '3', 1, 37738, '4151065663', 'EJEM001122', 'ala123', 0x313233, 'Tlalpan', ''),
(1111115, 'jebwqe', 'ewfwef', 'wefewf', 'ewfewf', 'efwewf', '15', 4, 37738, '4421152990', 'LUIS030405', 'Tenerias', 0x313233, 'Acatlan Juarez', NULL),
(1111116, 'jnfjbkc', 'wefewfc', 'wefec', 'ewfcw', 'wefwe', '4', 4, 37738, '4151065663', 'EJEM001122', 'martin', 0x313233, 'Ameca', 'prevuser3.jpg'),
(1111117, 'Juanito', 'De dios', 'Espinosa', 'San martin ', 'Guerrero', '15', 5, 5, '4420988776', 'EJEM001122', 'sandios', 0x313233, 'Ayutla', 'prevuser1.jpg'),
(1111118, 'mose', 'fal', 'so', 'gal', 'dot', '15', 1, 12345, '4420988776', 'EJEM001122', 'Martinez', 0x313233, 'ZapotlÃ¡n el Grande', 'oster.png'),
(1111119, 'Lucas', 'Vazquez', 'Moran', 'Los frailes', 'Unica', 'A', 10, 23345, '4151152990', 'EJEM001122', 'lucas', 0x313233, 'Guadalajara', 'prevuser3.jpg'),
(1111120, 'Luis Antonio', 'Arredondo', 'Deanda', 'Los alces', 'Nuevo Laredo', 'A', 14, 37738, '4151065663', 'AEDL030612', 'luisant12', 0x31323334354c, 'San Miguel de Allende', 'prevuser1.jpg'),
(1111125, 'Agustin', 'sasa', 'sasa', 'menchaca', '13', '10', 12, 76147, '4421231772', 'dasdasd', 'crusan202', 0x717765, 'Queretaro', 'usuario.jpg'),
(1111129, 'juan', 'juan', 'juan', '2', '13', '12', 12, 21345, '4421225588', '12wsd', 'juan', 0x313233, 'Queretaro', 'prevuser1.jpg');

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `insclie` AFTER INSERT ON `cliente` FOR EACH ROW begin
declare idMax int;
     set idMax = ( select MAX(id) from usuario );
      if idMax is null then
			set idMax = 1;
            else
            set idMax = idMax + 1;
			end if;

  insert into usuario(id,usuario,password,tipo,fecha) values (idMax,new.usuario,new.password,"Cliente",now()); 
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `subtotal` float(10,2) DEFAULT NULL,
  `precio` float(10,2) DEFAULT NULL,
  `id_inventario` int(11) DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `subtotal`, `precio`, `id_inventario`, `id_venta`, `cantidad`) VALUES
(1, 5801.00, 5801.00, 1, 4, 1),
(2, 5801.00, 5801.00, 1, 5, 1),
(3, 550.00, 550.00, 4, 5, 1),
(4, 550.00, 550.00, 4, 6, 1),
(5, 5801.00, 5801.00, 1, 7, 1),
(6, 5801.00, 5801.00, 1, 8, 1),
(7, 550.00, 550.00, 4, 8, 1),
(8, 100.00, 100.00, 7, 9, 1),
(9, 5801.00, 5801.00, 1, 10, 1),
(10, 26500.00, 5300.00, 9, 11, 5),
(11, 1680.00, 840.00, 2, 12, 2),
(12, 60000.00, 600.00, 11, 13, 100),
(13, 550.00, 550.00, 4, 14, 1),
(14, 15500.00, 15500.00, 12, 14, 1);

--
-- Disparadores `detalle_venta`
--
DELIMITER $$
CREATE TRIGGER `DESCONTAR` BEFORE INSERT ON `detalle_venta` FOR EACH ROW begin
declare stock int;
declare tic int;
set stock = (select cantidad from inventario where id = new.id_inventario);
set tic = (select count(ticket) from venta) + 1;
if new.cantidad<=stock then
update inventario set cantidad = cantidad - new.cantidad where id = new.id_inventario;
set new.precio = (select precio from producto inner join inventario on (inventario.id_producto  = producto.id) where inventario.id = new.id_inventario);
set new.subtotal = (select precio from producto inner join inventario on (inventario.id_producto  = producto.id) where inventario.id = new.id_inventario) *new.cantidad;
update venta set total = total+ (new.precio*new.cantidad) where id = new.id_venta;
update venta set ticket = tic where id = new.id_venta;
else
set new.id= -1;
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `estatus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `cantidad`, `id_sucursal`, `id_producto`, `estatus`) VALUES
(1, 100, 1, 1, 'DISPONIBLE'),
(2, 100, 2, 2, 'DISPONIBLE'),
(4, 99, 1, 4, 'DISPONIBLE'),
(7, 100, 3, 6, 'DISPONIBLE'),
(9, 100, 2, 8, 'DISPONIBLE'),
(11, 100, 3, 9, 'DISPONIBLE'),
(12, 99, 1, 5, 'DISPONIBLE'),
(14, 100, 1, 7, 'DISPONIBLE'),
(16, 100, 2, 10, 'DISPONIBLE'),
(17, 100, 2, 13, 'DISPONIBLE'),
(18, 100, 2, 15, 'DISPONIBLE'),
(19, 100, 1, 11, 'DISPONIBLE'),
(20, 100, 3, 3, 'DISPONIBLE'),
(21, 100, 3, 14, 'DISPONIBLE'),
(22, 100, 3, 12, 'DISPONIBLE'),
(23, 0, 1, 16, 'AGOTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `msgcode` int(11) NOT NULL DEFAULT '0',
  `mensaje` varchar(255) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`msgcode`, `mensaje`, `tipo`) VALUES
(1, 'Producto insertado', 'info'),
(2, 'Producto modificado', 'info'),
(3, 'Producto eliminado', 'danger'),
(4, 'Producto duplicado', 'danger'),
(5, 'producto inexistente', 'danger'),
(6, 'Cambios no realizados', 'warning'),
(7, 'Tu sesiÃ³n es invalida intenta de nuevo', 'danger'),
(8, 'Tu usuario o contraseÃ±a son incorrectos', 'danger'),
(9, 'Usuario registrado', 'success'),
(10, 'Usuario ya existente', 'danger'),
(11, 'No se pudo subir la foto', 'danger'),
(12, 'Hola no eres un administrador', 'info'),
(13, 'Usuario no existente', 'danger'),
(14, 'ConstraseÃ±a cambiada correctamente', 'success'),
(15, 'Agregado correctamente a la sucursal', 'success'),
(16, 'Agregado correctamente a la secci', 'success'),
(17, 'El usuario no existe', 'danger');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `muni_cliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `muni_cliente` (
`nombreCliente` varchar(61)
,`municipio` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Categoria` varchar(30) DEFAULT NULL,
  `precio` float(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Nombre`, `Categoria`, `precio`, `imagen`) VALUES
(1, 'Lavadora mabe', 'Linea blanca', 5800.00, 'lavadoramabe.jpg'),
(2, 'Licuadora Oster', 'Linea blanca', 840.00, 'licuadoraoster.jpg'),
(3, 'Refrigerador mabe', 'Linea blanca', 10500.00, 'Refrimabe.jpg'),
(4, 'Tostadora oster', 'Linea blanca', 550.00, 'tostadoraoster.jpg'),
(5, 'TelevisiÃ³n LG QLED', 'Linea marrÃ³n', 15500.00, 'televisorlgQNED.jpg'),
(6, 'TelevisiÃ³n Samsung LED', 'Linea PAE', 7800.00, 'televisorsamsung4k.jpg'),
(7, 'Lavadora mabe grafito', 'Linea blanca', 7600.00, 'lavadoramabegrafito.jpg'),
(8, 'Lavadora LG', 'Linea blanca', 8000.00, 'lavadoralg.jpg'),
(9, 'Estufa LG', 'Linea blanca', 5100.00, 'estufaLG30.jpg'),
(10, 'Aspiradora Koblenz', 'Linea PAE', 460.00, 'aspiradoraKoblenz.jpg'),
(11, 'Aspiradora makita', 'Linea PAE', 440.00, 'aspiradoraMakita.jpg'),
(12, 'Aspiradora Truper', 'Linea PAE', 700.00, 'aspiradoraTruper.jpg'),
(13, 'Cafetera oster', 'Linea marrÃ³n', 2300.00, 'cafeteraOster.jpg'),
(14, 'Cafetera Koblenz', 'Linea marrÃ³n', 2300.00, 'cafeteraKoblenz.jpg'),
(15, 'Estufa Samsung', 'Linea blanca', 7900.00, 'estufaSamsung.jpg'),
(16, 'TelevisiÃ³n TCL', 'Linea PAE', 9850.00, 'televisortcl2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `nointe` varchar(4) DEFAULT NULL,
  `noext` int(11) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `colonia`, `calle`, `nointe`, `noext`, `cp`, `municipio`) VALUES
(1, 'Jurica', 'Robles', '40', 12, 76, 'QuerÃ©taro'),
(2, 'Los Angeles', 'Gloria', '38', 15, 9830, 'CDMX'),
(3, 'Jardines Vallarta', 'Las Praderas', '98', 35, 37736, 'Guadalajara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `Telefono`, `id_cliente`) VALUES
(1, '4421231772', 1),
(2, '5513505730', 2),
(3, '6652344332', 3),
(4, '4434091232', 4),
(5, '4123456732', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `password` blob,
  `tipo` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `tipo`, `fecha`) VALUES
(1, 'Luis Antonio', 0x313233, 'Administrador', '2018-10-11'),
(2, 'Cruz Agustin', 0x313233, 'Administrador', '2018-10-11'),
(28, 'dani', 0x675b3cc3a7c2a3462520c3a47a3ec3933f5f213f, 'Cliente', '2022-08-09'),
(29, 'Luisss12', 0x313233, 'Cliente', '2022-08-12'),
(30, 'crusan', 0x313233, 'Cliente', '2022-08-20'),
(31, 'bib202', 0x313233, 'Cliente', '2022-08-21'),
(32, 'gabi123', 0x313233, 'Cliente', '2022-08-22'),
(33, 'ala123', 0x313233, 'Cliente', '2022-08-22'),
(34, 'tel', 0x313233, 'Cliente', '2022-08-22'),
(35, 'olo', 0x313233, 'Cliente', '2022-08-22'),
(36, 'sandios', 0x313233, 'Cliente', '2022-08-22'),
(37, 'jalpa', 0x313233, 'Cliente', '2022-08-23'),
(38, 'lucas', 0x313233, 'Cliente', '2022-08-23'),
(39, 'luisant12', 0x31323334354c, 'Cliente', '2022-08-24'),
(43, 'crusan202', 0x717765, 'Cliente', '2022-08-25'),
(44, 'juan', 0x313233, 'Cliente', '2022-08-25');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `camcontraseña` BEFORE UPDATE ON `usuario` FOR EACH ROW begin
 insert into clavecambiada(usuario, password,fecha) values (old.usuario, old.password,now());
 end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `ticket` mediumtext,
  `fecha` date DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `ticket`, `fecha`, `cliente`, `total`) VALUES
(4, '4', '2022-08-20', 20, '5801'),
(5, '3', '2022-08-21', 1111112, '6351'),
(6, '4', '2022-08-21', 1111112, '550'),
(7, '5', '2022-08-21', 1111112, '5801'),
(8, '6', '2022-08-22', 1111116, '6351'),
(9, '7', '2022-08-22', 1111111, '100'),
(10, '8', '2022-08-22', 1111111, '5801'),
(11, '9', '2022-08-23', 1111119, '26500'),
(12, '10', '2022-08-24', 1111119, '1680'),
(13, '11', '2022-08-24', 1111120, '60000'),
(14, '12', '2022-08-25', 1111119, '16050');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `venta_cliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `venta_cliente` (
`id` int(11)
,`cliente` int(11)
,`nombre` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `muni_cliente`
--
DROP TABLE IF EXISTS `muni_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`luiarr202`@`localhost` SQL SECURITY DEFINER VIEW `muni_cliente`  AS  select concat(`cliente`.`Nombre`,' ',`cliente`.`ApellidoPat`) AS `nombreCliente`,`cliente`.`municipio` AS `municipio` from `cliente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `venta_cliente`
--
DROP TABLE IF EXISTS `venta_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`luiarr202`@`localhost` SQL SECURITY DEFINER VIEW `venta_cliente`  AS  select `venta`.`id` AS `id`,`venta`.`cliente` AS `cliente`,`cliente`.`Nombre` AS `nombre` from (`venta` join `cliente` on((`cliente`.`id` = `venta`.`cliente`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clavecambiada`
--
ALTER TABLE `clavecambiada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkI` (`id_inventario`),
  ADD KEY `fkV` (`id_venta`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkS` (`id_sucursal`),
  ADD KEY `fkP` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nodupli` (`Nombre`),
  ADD KEY `bus` (`Nombre`(3));

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nondep` (`Telefono`),
  ADD KEY `fkIC` (`id_cliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkC` (`cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clavecambiada`
--
ALTER TABLE `clavecambiada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111130;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fkI` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id`),
  ADD CONSTRAINT `fkV` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fkP` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `fkS` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fkIC` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fkC` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
