-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2018 a las 18:22:38
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `svinos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `idalmacen` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`idalmacen`, `nombre`) VALUES
(1, 'SANTA ANITA'),
(2, 'CHOSICA'),
(3, 'SANTA CLARA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nombrecat` varchar(45) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombrecat`, `estado`) VALUES
(1, 'ACEITES', NULL),
(2, 'ZUMOS', NULL),
(3, 'CONSERVAS', NULL),
(4, 'CONDIMENTOS', NULL),
(5, 'BEBIDAS', NULL),
(6, 'LACTEOS', NULL),
(7, 'GOLOSINAS', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `rs` varchar(18) DEFAULT NULL,
  `ruc` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `idpersona`, `rs`, `ruc`) VALUES
(1, 2, 'JONAS SA', '776625255'),
(2, 1, 'LA COTITA SAC', '456782229'),
(18, 3, 'Kings of ', '45577');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes`
--

CREATE TABLE `comprobantes` (
  `idcomprobante` int(11) NOT NULL,
  `idsalidas` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `monto_a_pagar` double DEFAULT NULL,
  `monto_pagado` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_entradas`
--

CREATE TABLE `detalle_entradas` (
  `iddetalle_entradas` int(11) NOT NULL,
  `identradas` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `precio_compra` double DEFAULT NULL,
  `precio_venta` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_salidas`
--

CREATE TABLE `detalle_salidas` (
  `iddetalle_salidas` int(11) NOT NULL,
  `idsalidas` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `precioventa` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_salidas`
--

INSERT INTO `detalle_salidas` (`iddetalle_salidas`, `idsalidas`, `idproducto`, `precioventa`, `cantidad`) VALUES
(1, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idempleado` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `puesto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `idpersona`, `puesto`) VALUES
(1, 1, 'Vendedor'),
(2, 2, 'Despacho'),
(3, 4, 'Vendedor'),
(4, 5, 'Despacho'),
(5, 6, 'Despacho'),
(6, 7, 'Despacho'),
(7, 8, 'Despacho'),
(8, 9, 'Despacho'),
(9, 10, 'Despacho'),
(10, 11, 'Despacho'),
(11, 12, 'Vendedor'),
(12, 13, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `identradas` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipodoc` varchar(45) DEFAULT NULL,
  `numlote` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `idmedida` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `idoferta` int(11) NOT NULL,
  `idproducto_regalo` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `porcentaje` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_requisitos`
--

CREATE TABLE `oferta_requisitos` (
  `idofer_req` int(11) NOT NULL,
  `idoferta` int(11) NOT NULL,
  `idrequisitos` int(11) NOT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idpersona`, `nombre`, `apellido`, `dni`, `telefono`, `direccion`) VALUES
(1, 'Juan', 'Soria', '14345678', 966748554, 'Ica Por ahi'),
(2, 'Harold', 'Cotacallapa', '12345678', 959874515, 'Av. Perú'),
(3, 'Leon', 'adsd', '565656', 998555, 'dsad'),
(4, 'ewqewqe', 'eqwewq', '3245235', 21321321, 'ewqewq'),
(5, 'We usadsa', 'fjdskfjk', '4587877', 99999777, 'fksdflkfl'),
(6, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(7, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(8, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(9, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(10, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(11, 'asdas', 'FOOOO', '42343243', 23123213, 'DASDASD'),
(12, 'qweqwe', 'ewqewq', '21321321', 231323, 'KEANENNENENENE'),
(13, 'qweqwe', 'ewqewq', '21321321', 231323, 'KEANENNENENENE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idmedida` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `stock_actual` int(11) DEFAULT NULL,
  `descripcion` text,
  `volumen` int(11) DEFAULT NULL,
  `preciov_actual` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `idcategoria`, `idmedida`, `codigo`, `nombre`, `stock_actual`, `descripcion`, `volumen`, `preciov_actual`) VALUES
(1, 5, 0, NULL, 'AGUA SIN GAS', 5, NULL, NULL, NULL),
(2, 5, 0, NULL, 'GASEOSAS', 20, NULL, NULL, NULL),
(3, 5, 0, NULL, 'JUGOS', 15, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedor` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `rs` varchar(45) DEFAULT NULL,
  `sectorc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedor`, `idpersona`, `rs`, `sectorc`) VALUES
(1, 0, 'MOLINOS SA', 'PRIMARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

CREATE TABLE `requisitos` (
  `idrequisitos` int(11) NOT NULL,
  `idproducto_requisito` int(11) NOT NULL,
  `cantidad_minima` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `idsalidas` int(11) NOT NULL,
  `idofer_req` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idcliente` int(11) NOT NULL,
  `igv` double DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `monto_deuda` double DEFAULT NULL,
  `monto_favor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`idsalidas`, `idofer_req`, `idusuario`, `idcliente`, `igv`, `fecha`, `estado`, `monto_deuda`, `monto_favor`) VALUES
(1, NULL, 1, 1, 54, '2018-04-29', NULL, 100, 200),
(2, NULL, 1, 1, 18, '2018-05-01', NULL, 0, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `nomuser` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idpersona`, `nomuser`, `clave`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 1, 'lucas', '12345', '2018-05-01 05:28:47', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_roles`
--

CREATE TABLE `usuario_roles` (
  `idusuario_rol` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`idalmacen`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `fk_cliente_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD PRIMARY KEY (`idcomprobante`),
  ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`),
  ADD KEY `fk_comprobante_salidas1_idx` (`idsalidas`);

--
-- Indices de la tabla `detalle_entradas`
--
ALTER TABLE `detalle_entradas`
  ADD PRIMARY KEY (`iddetalle_entradas`),
  ADD KEY `fk_detalle_entradas_entradas1_idx` (`identradas`),
  ADD KEY `fk_detalle_entradas_producto1_idx` (`idproducto`);

--
-- Indices de la tabla `detalle_salidas`
--
ALTER TABLE `detalle_salidas`
  ADD PRIMARY KEY (`iddetalle_salidas`),
  ADD KEY `fk_detalle_salidas_salidas1_idx` (`idsalidas`),
  ADD KEY `fk_detalle_salidas_producto1_idx` (`idproducto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `fk_empleado_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`identradas`),
  ADD KEY `fk_entradas_usuario1_idx` (`idusuario`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`idmedida`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idoferta`),
  ADD KEY `fk_oferta_producto1_idx` (`idproducto_regalo`);

--
-- Indices de la tabla `oferta_requisitos`
--
ALTER TABLE `oferta_requisitos`
  ADD PRIMARY KEY (`idofer_req`),
  ADD KEY `fk_descuentos_oferta1_idx` (`idoferta`),
  ADD KEY `fk_descuentos_requisitos1_idx` (`idrequisitos`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_producto_categoria1_idx` (`idcategoria`),
  ADD KEY `fk_producto_medida1_idx` (`idmedida`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedor`),
  ADD KEY `fk_proveedor_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`idrequisitos`),
  ADD KEY `fk_requisitos_producto1_idx` (`idproducto_requisito`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`idsalidas`),
  ADD KEY `fk_salidas_usuario1_idx` (`idusuario`),
  ADD KEY `fk_salidas_usuario2_idx` (`idcliente`),
  ADD KEY `fk_salidas_oferta_requisito1_idx` (`idofer_req`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD PRIMARY KEY (`idusuario_rol`),
  ADD KEY `fk_usuario_rol_rol1_idx` (`idrol`),
  ADD KEY `fk_usuario_rol_usuario1_idx` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  MODIFY `idcomprobante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_entradas`
--
ALTER TABLE `detalle_entradas`
  MODIFY `iddetalle_entradas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_salidas`
--
ALTER TABLE `detalle_salidas`
  MODIFY `iddetalle_salidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `identradas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `idmedida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `idsalidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_cliente_persona1` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD CONSTRAINT `fk_comprobante_salidas1` FOREIGN KEY (`idsalidas`) REFERENCES `salidas` (`idsalidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_entradas`
--
ALTER TABLE `detalle_entradas`
  ADD CONSTRAINT `fk_detalle_entradas_entradas1` FOREIGN KEY (`identradas`) REFERENCES `entradas` (`identradas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_entradas_producto1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_salidas`
--
ALTER TABLE `detalle_salidas`
  ADD CONSTRAINT `fk_detalle_salidas_producto1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_salidas_salidas1` FOREIGN KEY (`idsalidas`) REFERENCES `salidas` (`idsalidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleado_persona1` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entradas_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `fk_oferta_producto1` FOREIGN KEY (`idproducto_regalo`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `oferta_requisitos`
--
ALTER TABLE `oferta_requisitos`
  ADD CONSTRAINT `fk_descuentos_oferta1` FOREIGN KEY (`idoferta`) REFERENCES `ofertas` (`idoferta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_descuentos_requisitos1` FOREIGN KEY (`idrequisitos`) REFERENCES `requisitos` (`idrequisitos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_medida1` FOREIGN KEY (`idmedida`) REFERENCES `medidas` (`idmedida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `fk_proveedor_persona1` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD CONSTRAINT `fk_requisitos_producto1` FOREIGN KEY (`idproducto_requisito`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `fk_salidas_oferta_requisito1` FOREIGN KEY (`idofer_req`) REFERENCES `oferta_requisitos` (`idofer_req`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_salidas_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_salidas_usuario2` FOREIGN KEY (`idcliente`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD CONSTRAINT `fk_usuario_rol_rol1` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
