-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 05:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagen` varchar(500) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`codigo`, `nombre`, `descripcion`, `fechaCreacion`, `imagen`, `cantidad`, `precio`) VALUES
(56, 'Guitarra clásica', 'Caja de resonancia tamaño estándar con 10 cm de profundidad, 43 cm desde la base hasta el talón del mástil, 103 cm de largo y una escala tradicional de 65 cm. Los trastes eran de latón cromado y las llaves de afinación gozaban de gran precisión. Las cuerdas eran de tensión media creadas por Yamaha String', '2022-01-14 02:45:28', 'guitarra.jpg', 30, 1000000),
(57, 'Flauta dulce', 'Instrumento de viento madera formado por un tubo cilíndrico con ocho orificios, siete de los cuales están situados en la parte delantera y uno en la trasera', '2022-01-14 02:47:00', 'flauta-dulce.jpg', 50, 50000),
(60, 'Guitarra eléctrica', 'Guitarra Texas de corte Stratocaster es perfecta como primera guitarra. Con sus características se adapta muy bien a quienes están empezando a tocar y no quieren invertir una gran cantidad de dinero en una guitarra. Acabados muy bien elaborados, diversidad de colores. mástil de arce, cuerpo en tilo.', '2022-01-14 03:20:18', 'guitarra-electrica.png', 20, 1500000),
(61, 'Bateria', 'Está compuesta por un conjunto de tambores, comúnmente de madera, cubiertos por dos parches, uno de golpeo (en la parte superior) y otro resonante (en la parte inferior). Estos tambores pueden variar su diámetro, afectando al tono, y la profundidad, variando la sensibilidad sobre el parche de resonancia.', '2022-01-14 03:23:01', 'bateria.png', 10, 2500000),
(62, 'Violin', 'Se compone de una caja de resonancia en forma de 8, un mástil sin trastes y cuatro cuerdas que se hacen sonar con un arco.', '2022-01-14 04:44:02', 'violin.jpg', 10, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contraseña`) VALUES
('dgaviriag', '9012'),
('ecarreno', '5678'),
('mmartinezbe', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
