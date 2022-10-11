-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-10-2022 a las 15:32:01
-- Versión del servidor: 8.0.26
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `nombre`, `autor`, `descripcion`) VALUES
(1, 'Harry Potter y la Piedra Filosofal', 'J. K. Rowling', 'Un día cerca del undécimo cumpleaños de Harry Potter, un chico huérfano, comienza a percibir extraños acontecimientos a su alrededor, los cuales alcanzan su punto máximo cuando unas cartas enviadas desde el Colegio Hogwarts de Magia y Hechicería llegan a la casa donde vive con sus tíos.'),
(2, 'Harry Potter y la Cámara Secreta', 'J. K. Rowling', 'Un elfo doméstico se presenta en la casa de los tíos de Harry antes de comenzar su segundo año en la escuela; la criatura le advierte que no regrese al colegio ya que hay un complot para causar caos y muertes donde Harry se verá involucrado.'),
(3, 'El Señor de los Anillos I', 'J. R. R. Tolkien', 'La obra comienza con la noticia de la celebración del 111º cumpleaños de Bilbo Bolsón en la Comarca. Sin embargo, para Bilbo esta gran fiesta tenía como motivo principal su partida hacia su último viaje, producto del deseo de terminar sus días en paz y tranquilidad. El mago Gandalf, amigo de Bilbo y quien estaba informado de la decisión del hobbit, también acudió a la fiesta. '),
(4, 'El Señor de los Anillos II', 'J. R. R. Tolkien', 'Días después, Frodo despertó ante Gandalf en Rivendel y este le contó lo ocurrido con los Nazgûl y como unos elfos le habían llevado hasta Elrond y él se encargó de su curación. Luego le informó sobre la celebración de un concilio al que acudirían representantes de los distintos pueblos de la Tierra Media y donde tratarían lo ocurrido y el tema del Anillo.'),
(41, 'Don Quijote', 'Martin Fierro', 'Don quijote y sancho panza'),
(42, 'Harry Potter y El Prisionero de Azkaban', 'J. K. Rowling', 'Sirius Black');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
