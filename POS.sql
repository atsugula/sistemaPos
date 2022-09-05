-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.15-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para pos
CREATE DATABASE IF NOT EXISTS `pos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `pos`;

-- Volcando estructura para tabla pos.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pos.categorias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
	(1, 'categoria 1', '2019-09-30 22:56:59'),
	(2, 'categoria 2', '2019-09-30 14:34:53'),
	(3, 'categoria 3', '2019-09-30 14:35:11'),
	(4, 'categoria 4', '2019-09-30 14:35:25'),
	(5, 'categoria 5', '2019-09-30 14:35:33'),
	(6, 'categoria 6', '2019-10-01 18:02:59');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla pos.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pos.clientes: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
	(3, 'Juan Villegas', 2147483647, 'juan@hotmail.com', '(300) 341-2345', 'Calle 23 # 45 - 56', '1980-11-02', 7, '2018-02-06 17:47:02', '2018-02-06 22:47:02'),
	(4, 'Pedro Pérez', 2147483647, 'pedro@gmail.com', '(399) 876-5432', 'Calle 34 N33 -56', '1970-08-07', 7, '2017-12-26 17:27:42', '2017-12-26 22:27:42'),
	(5, 'Miguel Murillo', 325235235, 'miguel@hotmail.com', '(254) 545-3446', 'calle 34 # 34 - 23', '1976-03-04', 32, '2017-12-26 17:27:13', '2017-12-27 04:38:13'),
	(6, 'Margarita Londoño', 34565432, 'margarita@hotmail.com', '(344) 345-6678', 'Calle 45 # 34 - 56', '1976-11-30', 16, '2019-10-23 13:20:07', '2019-10-23 13:20:07'),
	(7, 'Julian Ramirez', 786786545, 'julian@hotmail.com', '(675) 674-5453', 'Carrera 45 # 54 - 56', '1980-04-05', 14, '2017-12-26 17:26:28', '2017-12-26 22:26:28'),
	(8, 'Stella Jaramillo', 65756735, 'stella@gmail.com', '(435) 346-3463', 'Carrera 34 # 45- 56', '1956-06-05', 9, '2017-12-26 17:25:55', '2017-12-26 22:25:55'),
	(9, 'Eduardo López', 2147483647, 'eduardo@gmail.com', '(534) 634-6565', 'Carrera 67 # 45sur', '1978-03-04', 12, '2017-12-26 17:25:33', '2017-12-26 22:25:33'),
	(10, 'Ximena Restrepo', 436346346, 'ximena@gmail.com', '(543) 463-4634', 'calle 45 # 23 - 45', '1956-03-04', 18, '2017-12-26 17:25:08', '2017-12-26 22:25:08'),
	(11, 'David Guzman', 43634643, 'david@hotmail.com', '(354) 574-5634', 'carrera 45 # 45 ', '1967-05-04', 10, '2017-12-26 17:24:50', '2017-12-26 22:24:50'),
	(12, 'Gonzalo Pérez', 436346346, 'gonzalo@yahoo.com', '(235) 346-3464', 'Carrera 34 # 56 - 34', '1967-08-09', 24, '2017-12-25 17:24:24', '2017-12-27 00:30:12');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla pos.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pos.productos: ~60 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
	(1, 1, '101', 'Aspiradora Industrial ', 'vistas/img/productos/101/782.png', 20, 1500, 2100, 1, '2019-10-23 13:20:06'),
	(2, 1, '102', 'Plato Flotante para Allanadora', 'vistas/img/productos/102/940.jpg', 20, 4500, 6300, 1, '2019-10-23 13:20:06'),
	(3, 1, '103', 'Compresor de Aire para pintura', 'vistas/img/productos/103/518.jpg', 20, 3000, 4200, 0, '2019-10-23 11:54:02'),
	(4, 1, '104', 'Cortadora de Adobe sin Disco ', 'vistas/img/productos/104/986.jpg', 20, 4000, 5600, 0, '2019-10-23 11:54:24'),
	(5, 1, '105', 'Cortadora de Piso sin Disco ', 'vistas/img/productos/105/496.jpg', 20, 1540, 2156, 0, '2019-10-23 11:54:40'),
	(6, 1, '106', 'Disco Punta Diamante ', 'vistas/img/productos/106/519.jpg', 20, 1100, 1540, 0, '2019-10-23 11:55:27'),
	(7, 1, '107', 'Extractor de Aire ', 'vistas/img/productos/107/293.jpg', 20, 1540, 2156, 0, '2019-10-23 11:55:46'),
	(8, 1, '108', 'Guadañadora ', 'vistas/img/productos/108/847.jpg', 20, 1540, 2156, 0, '2019-10-23 11:56:00'),
	(9, 1, '109', 'Hidrolavadora Eléctrica ', 'vistas/img/productos/109/583.jpg', 20, 2600, 3640, 0, '2019-10-23 11:56:13'),
	(10, 1, '110', 'Hidrolavadora Gasolina', 'vistas/img/productos/110/273.jpg', 20, 2210, 3094, 0, '2019-10-23 11:56:28'),
	(11, 1, '111', 'Motobomba a Gasolina', '', 20, 2860, 4004, 0, '2019-09-30 14:50:13'),
	(12, 1, '112', 'Motobomba Eléctrica', '', 20, 2400, 3360, 0, '2019-10-15 18:56:26'),
	(13, 1, '113', 'Sierra Circular ', '', 20, 1100, 1540, 0, '2019-09-30 14:50:13'),
	(14, 1, '114', 'Disco de tugsteno para Sierra circular', '', 20, 4500, 6300, 0, '2019-10-15 18:56:29'),
	(15, 1, '115', 'Soldador Electrico ', '', 20, 1980, 2772, 0, '2019-09-30 14:50:13'),
	(16, 1, '116', 'Careta para Soldador', '', 20, 4200, 5880, 0, '2019-09-30 14:50:13'),
	(17, 1, '117', 'Torre de iluminacion ', '', 20, 1800, 2520, 0, '2019-09-30 14:50:13'),
	(18, 2, '201', 'Martillo Demoledor de Piso 110V', '', 20, 5600, 7840, 0, '2019-09-30 14:50:13'),
	(19, 2, '202', 'Muela o cincel martillo demoledor piso', '', 20, 9600, 13440, 0, '2019-09-30 14:50:13'),
	(20, 2, '203', 'Taladro Demoledor de muro 110V', '', 20, 3850, 5390, 0, '2019-09-30 14:50:13'),
	(21, 2, '204', 'Muela o cincel martillo demoledor muro', '', 20, 9600, 13440, 0, '2019-09-30 14:50:13'),
	(22, 2, '205', 'Taladro Percutor de 1/2 mm Madera y Metal', '', 20, 8000, 11200, 0, '2019-09-30 21:39:22'),
	(23, 2, '206', 'Taladro Percutor SDS Plus 110V', '', 20, 3900, 5460, 0, '2019-09-30 14:50:13'),
	(24, 2, '207', 'Taladro Percutor SDS Max 110V (Mineria)', '', 20, 4600, 6440, 0, '2019-09-30 14:50:13'),
	(25, 3, '301', 'Andamio colgante', '', 20, 1440, 2016, 0, '2019-09-30 14:50:13'),
	(26, 3, '302', 'Distanciador andamio colgante', '', 20, 1600, 2240, 0, '2019-09-30 14:50:13'),
	(27, 3, '303', 'Marco andamio modular ', '', 20, 900, 1260, 0, '2019-09-30 14:50:13'),
	(28, 3, '304', 'Marco andamio tijera', '', 20, 100, 140, 0, '2019-09-30 14:50:13'),
	(29, 3, '305', 'Tijera para andamio', '', 20, 162, 226, 0, '2019-09-30 14:50:13'),
	(30, 3, '306', 'Escalera interna para andamio', '', 20, 270, 378, 0, '2019-09-30 14:50:13'),
	(31, 3, '307', 'Pasamanos de seguridad', '', 20, 75, 105, 0, '2019-09-30 14:50:13'),
	(32, 3, '308', 'Rueda giratoria para andamio', '', 20, 168, 235, 0, '2019-09-30 14:50:13'),
	(33, 3, '309', 'Arnes de seguridad', '', 20, 1750, 2450, 0, '2019-09-30 14:50:13'),
	(34, 3, '310', 'Eslinga para arnes', '', 20, 175, 245, 0, '2019-09-30 14:50:13'),
	(35, 3, '311', 'Plataforma Metálica', '', 20, 420, 588, 0, '2019-09-30 14:50:13'),
	(36, 4, '401', 'Planta Electrica Diesel 6 Kva', '', 20, 3500, 4900, 0, '2019-09-30 14:50:13'),
	(37, 4, '402', 'Planta Electrica Diesel 10 Kva', '', 20, 3550, 4970, 0, '2019-09-30 14:50:13'),
	(38, 4, '403', 'Planta Electrica Diesel 20 Kva', '', 20, 3600, 5040, 0, '2019-09-30 14:50:13'),
	(39, 4, '404', 'Planta Electrica Diesel 30 Kva', '', 20, 3650, 5110, 0, '2019-09-30 14:50:13'),
	(40, 4, '405', 'Planta Electrica Diesel 60 Kva', '', 20, 3700, 5180, 0, '2019-09-30 14:50:13'),
	(41, 4, '406', 'Planta Electrica Diesel 75 Kva', '', 20, 3750, 5250, 0, '2019-10-15 18:56:47'),
	(42, 4, '407', 'Planta Electrica Diesel 100 Kva', '', 20, 3800, 5320, 0, '2019-09-30 14:50:13'),
	(43, 4, '408', 'Planta Electrica Diesel 120 Kva', '', 20, 3850, 5390, 0, '2019-09-30 14:50:13'),
	(44, 5, '501', 'Escalera de Tijera Aluminio ', '', 20, 350, 490, 0, '2019-10-15 18:56:45'),
	(45, 5, '502', 'Extension Electrica ', '', 20, 370, 518, 0, '2019-09-30 14:50:13'),
	(46, 5, '503', 'Gato tensor', '', 20, 380, 532, 0, '2019-09-30 14:50:13'),
	(47, 5, '504', 'Lamina Cubre Brecha ', '', 20, 380, 532, 0, '2019-09-30 14:50:13'),
	(48, 5, '505', 'Llave de Tubo', '', 20, 480, 672, 0, '2019-09-30 14:50:13'),
	(49, 5, '506', 'Manila por Metro', '', 20, 600, 840, 0, '2019-09-30 14:50:13'),
	(50, 5, '507', 'Polea 2 canales', '', 20, 900, 1260, 0, '2019-09-30 14:50:13'),
	(51, 5, '508', 'Tensor', 'vistas/img/productos/508/944.jpg', 20, 100, 140, 0, '2019-10-23 12:00:23'),
	(52, 5, '509', 'Bascula ', 'vistas/img/productos/509/749.jpg', 20, 130, 182, 0, '2019-10-23 11:59:58'),
	(53, 5, '510', 'Bomba Hidrostatica', 'vistas/img/productos/510/506.jpg', 20, 770, 1078, 0, '2019-10-23 11:59:38'),
	(54, 5, '511', 'Chapeta', 'vistas/img/productos/511/750.jpg', 20, 660, 924, 0, '2019-10-23 11:59:20'),
	(55, 5, '512', 'Cilindro muestra de concreto', 'vistas/img/productos/512/685.jpg', 20, 400, 560, 0, '2019-10-23 11:59:05'),
	(56, 5, '513', 'Cizalla de Palanca', 'vistas/img/productos/513/662.jpg', 20, 450, 630, 0, '2019-10-23 11:58:49'),
	(57, 5, '514', 'Cizalla de Tijera', 'vistas/img/productos/514/736.jpg', 20, 580, 812, 0, '2019-10-23 11:58:33'),
	(58, 5, '515', 'Coche llanta neumatica', 'vistas/img/productos/515/831.jpg', 20, 420, 588, 0, '2019-10-23 11:57:52'),
	(59, 5, '516', 'Cono slump', 'vistas/img/productos/516/828.jpg', 20, 140, 196, 0, '2019-10-23 11:58:17'),
	(60, 5, '517', 'Cortadora de Baldosin', 'vistas/img/productos/517/418.jpg', 20, 930, 1302, 0, '2019-10-23 11:57:03');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla pos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pos.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
	(3, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', '', 1, '2019-10-23 13:19:39', '2019-10-23 13:19:39'),
	(4, 'Vendedor', 'vende', '$2a$07$asxx54ahjppf45sd87a5auO3u9/m5MEx9WUCzEffhx5xz75BDeWLy', 'Vendedor', '', 1, '2019-10-23 13:18:47', '2019-10-23 13:18:47'),
	(5, 'Especial', 'especial', '$2a$07$asxx54ahjppf45sd87a5auf9Eiqdn10E7o/jsGFivN12XE.wRwyp6', 'Especial', '', 1, '2019-10-23 13:19:28', '2019-10-23 13:19:28');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla pos.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pos.ventas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
	(1, 10001, 6, 3, '[{"id":"1","descripcion":"Aspiradora Industrial ","cantidad":"1","stock":"20","precio":"2100","total":"2100"},{"id":"2","descripcion":"Plato Flotante para Allanadora","cantidad":"1","stock":"20","precio":"6300","total":"6300"}]', 1596, 8400, 9996, 'TC-123456', '2019-10-23 13:20:07');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
