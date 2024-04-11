-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2024 a las 06:13:18
-- Versión del servidor: 8.0.36
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurantedb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PCrearCarrito` (IN `producto` TEXT, IN `precio` FLOAT, IN `cantidad` INT, IN `total` FLOAT, IN `id_usuario` INT)   INSERT INTO carrito(producto, precio, cantidad, total,id_usuario)
VALUES(producto, precio, cantidad, total,id_usuario)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PCrearMenu` (IN `nombre_plato` VARCHAR(500), IN `descripcion` VARCHAR(1000), IN `precio` FLOAT)   INSERT INTO menu(nombre_plato,descripcion,precio)
VALUES (nombre_plato,descripcion,precio)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PCrearReserva` (IN `id_usuario` INT, IN `mesa` INT, IN `cant_personas` INT, IN `fecha` DATE, IN `hora` TIME)   INSERT INTO reserva(id_usuario,mesa,cant_personas,fecha,hora)
VALUES (id_usuario,mesa,cant_personas,fecha,hora)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PCrearUsuario` (IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(100), IN `correo` VARCHAR(100), IN `contrasena` VARCHAR(100), IN `telefono` INT(12))   INSERT INTO usuario(nombre, apellido, correo, contrasena, telefono) VALUES(nombre, apellido,correo,contrasena,telefono)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PMostrarCarrito` ()   SELECT * FROM carrito$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PMostrarMenu` ()   SELECT * FROM menu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PMostrarUsuario` ()   SELECT * FROM usuario$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int NOT NULL,
  `producto` text NOT NULL,
  `precio` int NOT NULL,
  `cantidad` float NOT NULL,
  `total` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `producto`, `precio`, `cantidad`, `total`, `id_usuario`) VALUES
(2, 'hola', 24, 1, 24, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_plato` int NOT NULL,
  `nombre_plato` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_plato`, `nombre_plato`, `descripcion`, `precio`) VALUES
(1, 'Hamburguesa Colombiana', 'Pan Permasano, 150 gr de bondiola de cerdo, tajada de maduro, queso campesino,queso mozzarela, chicharron,aguacate, salsa de panela de la casa.', 20000.00),
(2, 'Hamburguesa Cubana', 'Pan parmesano, 150 gr de bandiola de cerdo, ropa vieja en reduccion de mango,tocineta ahumada,queso mozzarela, salsa de la casa', 27000.00),
(3, 'Hamburguesa Carioca', 'Pan parmesano,150 gr de carne artesanal de res, pollo desmechado con tocino premium en salsa de mango, tocineta ahumada, queso mozzarella, salsa cafe de la casa', 26000.00),
(4, 'Papas Irlandesas', 'Papas rusticas, salchica artesanal irlandesa, trozos de carne de hamburguesa artesanal, queso asado, tocineta ahumada, queso mozzarella y salsa demayo de tamarindo', 28000.00),
(5, 'Papas Mexicanas', 'Papas rusticas, bondiola de cerdo, carne desmechada en salsa mexicana, guacamole, tocineta, mozzarella y salsa de chipotle de la casa(un toque picante)', 25000.00),
(6, 'Papas Romanas', 'Papas rusticas, salchica artesanal italiana de pollo y albaca, peperoni artesenal, tocineta ahumada y salsa napolitana.', 24000.00),
(7, 'Perro Argentino', 'Pan Parmesano con oregano, chorizo artesanal argentino, queso mozzarella apanando con mermlada de frutos amarillos, solomito con chimichurry argertino, queso mozzarella, salsa de ajo de la casa', 25000.00),
(8, 'Perro Britanico', 'Pan Parmesano, salchicha artesanal inglesa, doble tocineta ahumada,queso mozzarella, sour cream, maicitos, huevos de codorniz y salsa de cilantro de la casa', 24000.00),
(9, 'Perro Romano', 'Pan Parmesano cpn oregano, salchicha artesanal italiana de pollo y albaca, peperoni artesanal, sour cream, tocineta ahumada,queso mozzarella y salsa napolitana de la casa', 24000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int NOT NULL,
  `mesa` int NOT NULL,
  `cant_personas` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_usuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`) VALUES
(9, 'juan', 'santa', 'emelyn1@gmail.com', '1234', 1234),
(10, 'Monica', 'santa', 'moni@gmail.com', '1234', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_plato`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_plato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
