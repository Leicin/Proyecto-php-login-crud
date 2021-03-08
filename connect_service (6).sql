-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2021 a las 13:42:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `connect_service`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_ciudades` (IN `_Codigo_ciudad` VARCHAR(11), IN `_Ubicacion` VARCHAR(50), IN `_departamentos` ENUM('ANTIOQUIA','ATLÁNTICO','BOGOTÁ, D.C','BOLÍVAR','BOYACÁ','CALDAS','CAQUETÁ','CAUCA','CESAR','CÓRDOBA','CUNDINAMARCA','CHOCÓ','HUILA','LA GUAJIRA','MAGDALENA','META','NARIÑO','NORTE DE SANTANDER','QUINDIO','RISARALDA','SANTANDER','SUCRE','TOLIMA','VALLE DEL CAUCA','ARAUCA','CASANARE','PUTUMAYO','ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA','AMAZONAS','GUAINÍA','GUAVIARE','VAUPÉS','VICHADA'), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN 
INSERT INTO ciudades (Codigo_ciudad,Ubicación,departamentos) VALUE (_Codigo_ciudad,_Ubicacion,_departamentos);
WHEN 'editar' THEN 
UPDATE ciudades
SET  Ubicación = _Ubicacion, departamentos = _departamentos WHERE Codigo_ciudad = _Codigo_ciudad;
WHEN 'eliminar' THEN
DELETE FROM ciudades WHERE Codigo_ciudad = _Codigo_ciudad;
WHEN 'consultar' THEN 
SELECT * FROM ciudades WHERE Codigo_ciudad = _Codigo_ciudad;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_clientes` (IN `_id_cliente` VARCHAR(11), IN `_Nit` VARCHAR(11), IN `_Razon_social` VARCHAR(100), IN `_direccion_cliente` VARCHAR(100), IN `_Responsable` VARCHAR(100), IN `_Telefono_clien` VARCHAR(8), IN `_Celular_cliente` VARCHAR(16), IN `_Codigo_ciudad` VARCHAR(11), IN `accion` VARCHAR(11))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO clientes (id_cliente,Nit,Razon_social,dirección_cliente,Responsable,Telefono_clien,Celular_cliente,Codigo_ciudad) VALUE (_id_cliente,_Nit,_Razon_social,_direccion_cliente,_Responsable,_Telefono_clien,_Celular_cliente,_Codigo_ciudad);
WHEN 'editar' THEN
UPDATE clientes
SET Nit = _Nit, Razon_social = _Razon_social, dirección_cliente = _direccion_cliente, Responsable = _Responsable, Telefono_clien = _Telefono_clien, Celular_cliente = _Celular_cliente, Codigo_ciudad = _Codigo_ciudad WHERE id_cliente = _id_cliente;
WHEN 'eliminar' THEN
DELETE FROM clientes WHERE id_cliente = _id_cliente;
WHEN 'consultar' THEN 
SELECT * FROM clientes WHERE id_cliente = _id_cliente;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_codigos_verificacion` (IN `_id_codigo` INT(11), IN `_Cedula` BIGINT(5), `_codigo` VARCHAR(100), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO codigos_verificacion (id_codigo,Cedula,codigo) VALUE (_id_codigo,_Cedula,_codigo);
WHEN 'editar' THEN
UPDATE codigos_verificacion
SET Cedula = _Cedula, codigo = _codigo WHERE id_codigo = _id_codigo;
WHEN 'eliminar' THEN
DELETE FROM codigos_verificacion WHERE id_codigo = _id_codigo;
WHEN 'consultar' THEN
SELECT * FROM codigos_verificacion WHERE id_codigo = _id_codigo;

END case;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_componentes` (IN `_codigo_componente` INT(5), IN `_Descripcion` VARCHAR(50), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO componentes (codigo_componente,Descripción) VALUE (_codigo_componente,_Descripcion);
WHEN 'editar' THEN
UPDATE componentes 
SET Descripción = _Descripcion WHERE codigo_componente = _codigo_componente;
WHEN 'eliminar' THEN
DELETE FROM componentes WHERE codigo_componente = _codigo_componente;
WHEN 'consultar' THEN 
SELECT * FROM componentes WHERE codigo_componente = _codigo_componente;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_configuraciones` (IN `_codigo` VARCHAR(6), IN `_tipo_config` VARCHAR(50), IN `_Descripcion_config` VARCHAR(200), IN `_Estado` INT(11), IN `_valor` MEDIUMTEXT, IN `accion` VARCHAR(11))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO configuraciones (codigo,tipo_config,Descripcion_config,Estado,valor) VALUE (_codigo,_tipo_config,_Descripcion_config,_Estado,_valor);
WHEN 'editar' THEN
UPDATE configuraciones 
SET tipo_config = _tipo_config, Descripcion_config = _Descripcion_config, Estado = _Estado, valor = _valor  WHERE codigo = _codigo;
WHEN 'eliminar' THEN 
DELETE FROM configuraciones WHERE codigo = _codigo;
WHEN 'consultar' THEN 
SELECT * FROM configuraciones WHERE codigo = _codigo;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_equipos` (IN `_id_equipo` VARCHAR(11), IN `_Modelo` VARCHAR(50), IN `_Fabricante` VARCHAR(50), IN `_Serial` VARCHAR(20), IN `_Ubicacion` VARCHAR(30), IN `_Codigo_interno` VARCHAR(30), IN `_id_tipo` VARCHAR(5), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO equipos (id_equipo,Modelo,Fabricante,Serial,Ubicación,Codigo_interno,id_tipo) VALUE (_id_equipo,_Modelo,_Fabricante,_Serial,_Ubicacion,_Codigo_interno,_id_tipo);
WHEN 'editar' THEN
UPDATE equipos 
SET Modelo = _Modelo, Fabricante = _Fabricante, Serial = _Serial, Ubicación = _Ubicacion, Codigo_interno = _Codigo_interno WHERE id_equipo = _id_equipo;
WHEN 'eliminar' THEN
DELETE FROM equipos WHERE id_equipo = _id_equipo;
WHEN 'consultar' THEN 
SELECT * FROM equipos WHERE id_equipo = _id_equipo;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_esquemas` (IN `_Cod_Esquema` INT, IN `_imagen` LONGBLOB, IN `_Descripcion` VARCHAR(100), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN 
INSERT INTO esquemas (Cod_Esquema,imagen,Descripcion) VALUE (_Cod_Esquema,_imagen,_Descripcion);
WHEN 'editar' THEN
UPDATE esquemas
SET imagen = _imagen , Descripcion = _Descripcion WHERE Cod_Esquema = _Cod_Esquema; 
WHEN 'eliminar' THEN 
DELETE FROM esquemas WHERE Cod_Esquema = _Cod_esquema;
WHEN 'consultar' THEN
SELECT * FROM esquemas WHERE Cod_Esquema = _Cod_esquema;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_exactitud` (IN `_id_exactitud` BIGINT(20), IN `_Carga_exa` FLOAT, IN `_indicacion_exa` FLOAT, IN `_Error_exa` FLOAT, IN `_id_protocolo` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO exactitud (id_exactitud,Carga_exa,Indicacion_exa,Error_exa,id_protocolo) VALUE (_id_exactitud,_Carga_exa,_Indicacion_exa,_Error_exa,_id_protocolo);
WHEN 'editar' THEN
UPDATE exactitud
SET Carga_exa = _Carga_exa, Indicacion_exa = _Indicacion_exa, Error_exa = _Error_exa, id_protocolo = _id_protocolo WHERE id_exactitud = _id_exactitud;
WHEN 'eliminar' THEN 
DELETE FROM exactitud WHERE id_exactitud = _id_exactitud;
WHEN 'consultar' THEN 
SELECT * FROM exactitud WHERE id_exactitud = _id_exactitud;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_excentricidad` (IN `_id_excentricidad` BIGINT(20), IN `_Carga_excen` FLOAT, IN `_Indicacion_exc` FLOAT, IN `_Error_exc` FLOAT, IN `_id_protocolo` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN 
INSERT INTO excentrecidad (id_excentricidad,Carga_excen,Indicacion_exc,Error_exc,id_protocolo) VALUE (_id_excentricidad,_Carga_excen,_Indicacion_exc,_Error_exc,_id_protocolo);
WHEN 'editar' THEN
UPDATE excentrecidad
SET Carga_excen = _Carga_excen, Indicacion_exc = _Indicacion_exc, Error_exc = _Error_exc, id_protocolo = _id_protocolo WHERE id_excentricidad = _id_excentricidad; 
WHEN 'eliminar' THEN
DELETE FROM excentrecidad WHERE id_excentricidad = _id_excentricidad;
WHEN 'consultar' THEN
SELECT * FROM excentrecidad WHERE id_excentricidad = _id_excentricidad;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_informes_servicios` (IN `_id_informe` VARCHAR(11), IN `_observaciones` VARCHAR(300), IN `_fecha_informe` DATETIME, IN `_revisado` VARCHAR(200), IN `_id_cliente` VARCHAR(11), IN `_id_equipo` VARCHAR(11), IN `_codigo_medicion` INT(5), IN `_Cedula` BIGINT(20), IN `_id_protocolo` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO informes_servicios (id_informe,observaciones,fecha_informe,revisado,id_cliente,id_equipo,codigo_medición,Cedula,id_protocolo) VALUE (_id_informe,_observaciones,_fecha_informe,_revisado,_id_cliente,_id_equipo,_codigo_medicion,_Cedula,_id_protocolo);
WHEN 'editar' THEN
UPDATE informes_servicios 
SET observaciones = _observaciones, fecha_informe = _fecha_informe, revisado = _revisado, id_cliente = _id_cliente, id_equipo = _id_equipo, codigo_medición = _codigo_medicion, Cedula = _Cedula, id_protocolo = _id_protocolo WHERE id_informe = _id_informe;
WHEN 'eliminar' THEN
DELETE FROM informes_servicios WHERE id_informe = _id_informe;
WHEN 'consultar' THEN
SELECT * FROM informes_servicios WHERE id_informe = _id_informe;

END CASE; 

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_inspecciones` (IN `_Nro_inspeccion` BIGINT(20), IN `_Componente` VARCHAR(50), IN `_Estado` VARCHAR(50), IN `_Fecha_inspeccion` DATE, IN `_Observaciones` VARCHAR(200), IN `_id_equipo` VARCHAR(11), IN `_id_informe` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO inspecciones (Nro_inspeccion,Componente,Estado,Fecha_inspección,Observaciones,id_equipo,id_informe)
VALUE (_Nro_inspeccion,_Componente,_Estado,_Fecha_inspeccion,_Observaciones,_id_equipo,_id_informe);
WHEN 'editar' THEN
UPDATE inspecciones
SET Componente = _Componente, Estado = _Estado, Fecha_inspección = _Fecha_inspeccion, id_equipo = _id_equipo, id_informe = _id_informe WHERE Nro_inspeccion = _Nro_inspeccion;
WHEN 'eliminar' THEN
DELETE FROM inspecciones WHERE Nro_inspeccion = _Nro_inspeccion;
WHEN 'consultar' THEN
SELECT * FROM inspecciones WHERE Nro_inspeccion = _Nro_inspeccion;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_mediciones_electricas` (IN `_codigo_medicion` INT(5), IN `_Vfase_neutro` FLOAT, IN `_Vfase_tierra` FLOAT, IN `_Vneutro_tierra` FLOAT, `accion` VARCHAR(12))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO mediciones_electricas (codigo_medición,Vfase_neutro,Vfase_tierra,Vneutro_tierra)
VALUE (_codigo_medicion, _Vfase_neutro, _Vfase_tierra, _Vneutro_tierra);
WHEN 'editar' THEN
UPDATE mediciones_electricas
SET Vfase_neutro = _Vfase_neutro, Vfase_tierra = _Vfase_tierra, Vneutro_tierra = _Vneutro_tierra WHERE codigo_medición = _codigo_medicion;
WHEN 'eliminar' THEN 
DELETE FROM mediciones_electricas WHERE codigo_medición = _codigo_medicion;
WHEN 'consultar' THEN 
SELECT * FROM mediciones_electricas WHERE codigo_medición = _codigo_medicion;

END CASE ;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_protocolos` (IN `_id_protocolo` VARCHAR(11), IN `_Codigo_pq` VARCHAR(11), IN `_Trazabilidad` VARCHAR(100), IN `_Incertidumbre` VARCHAR(300), IN `_comentarios` VARCHAR(300), IN `_Esquema` VARCHAR(30), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO protocolos (id_protocolo,Codigo_pq,Trazabilidad,Incertidumbre,comentarios,Esquema) VALUE (_id_protocolo,_Codigo_pq,_Trazabilidad,_Incertidumbre,_comentarios,_Esquema);
WHEN 'editar' THEN
UPDATE protocolos
SET Codigo_pq = _Codigo_pq, Trazabilidad = _Trazabilidad, Incertidumbre = _Incertidumbre, comentarios = _comentarios, Esquema = _Esquema WHERE  id_protocolo = _id_protocolo;
WHEN 'eliminar' THEN
DELETE FROM protocolos WHERE  id_protocolo = _id_protocolo;
WHEN 'consultar' THEN
SELECT * FROM protocolos WHERE id_protocolo = _id_protocolo;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_protocolos_rangos` (IN `_id_protocolo` VARCHAR(11), IN `_id_rango` INT(5), IN `accion` VARCHAR(11))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO protocolos_rangos (id_protocolo,id_rango) VALUE (_id_protocolo,_id_rango);
WHEN 'editar' THEN
UPDATE protocolos_rangos
SET id_rango = _id_rango WHERE id_protocolo = _id_protocolo;
WHEN 'eliminar' THEN
DELETE FROM protocolos_rangos WHERE id_protocolo = _id_protocolo;
WHEN 'consultar' THEN
SELECT * FROM protocolos_rangos WHERE id_protocolo = _id_protocolo;

 END CASE;
 
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_rangos_tolerancia` (IN `_id_rango` INT(5), IN `_Valor_minimo` FLOAT, IN `_Operador_relacional` VARCHAR(5), IN `_Valor_maximo` FLOAT, IN `_Tolerancia` FLOAT, IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN
    INSERT INTO rangos_tolerancia(id_rango,Valor_minimo,Operador_relacional,Valor_maximo,Tolerancia)
    VALUES (_id_rango,_Valor_minimo,_Operador_relacional,_Valor_maximo,_Tolerancia);
WHEN 'editar' THEN
    UPDATE rangos_tolerancia
    SET Valor_minimo = _Valor_minimo, Operador_relacional = _Operador_relacional, Valor_maximo = _Valor_maximo,             	Tolerancia=_Tolerancia 
    WHERE id_rango = _id_rango;
WHEN 'eliminar' THEN
    DELETE FROM rangos_tolerancia WHERE id_rango = _id_rango;
WHEN 'consultar' THEN
    SELECT * FROM rangos_tolerancia WHERE id_rango = _id_rango;
END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_repetibilidad` (IN `_id_repetibilidad` BIGINT(20), IN `_carga` FLOAT, IN `_indicacion_I` FLOAT, IN `_Error_E` FLOAT, IN `_id_protocolo` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion 
WHEN 'nuevo' THEN
INSERT INTO repetibilidad (id_repetibilidad,carga,indicacion_I,Error_E,id_protocolo) VALUE (_id_repetibilidad,_carga,_indicacion_I,_Error_E,_id_protocolo);
WHEN 'editar' THEN
UPDATE repetibilidad
SET carga = _carga, indicacion_I = _indicacion_I, Error_E = _Error_E, id_protocolo = _id_protocolo 
WHERE id_repetibilidad = _id_repetibilidad;  
WHEN 'eliminar' THEN
DELETE FROM repetibilidad WHERE id_repetibilidad = _id_repetibilidad;
WHEN 'consultar' THEN 
SELECT * FROM repetibilidad WHERE id_repetibilidad = _id_repetibilidad;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_requisitos_metrologicos` (IN `_id_requisito` INT(11), IN `_Capacidad` FLOAT, IN `_Valor_d` FLOAT, IN `_Valor_e` FLOAT, IN `_Clase` VARCHAR(20), IN `_Capacidad_min` FLOAT, IN `_id_protocolo` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN 
INSERT INTO requisitos_metrologicos (id_requisito,Capacidad,Valor_d,Valor_e,Clase,Capacidad_min,id_protocolo) VALUE (_id_requisito,_Capacidad,_Valor_d,_Valor_e,_Clase,_Capacidad_min,_id_protocolo);
WHEN 'editar' THEN
UPDATE requisitos_metrologicos
SET Capacidad = _Capacidad, Valor_d = _Valor_d, Clase = _Clase, Capacidad_min = _Capacidad_min WHERE id_requisito = _id_requisito;
WHEN 'eliminar' THEN 
DELETE FROM requisitos_metrologicos WHERE id_requisito = _id_requisito;
WHEN 'consultar' THEN 
SELECT * FROM requisitos_metrologicos WHERE id_requisito = _id_requisito;

END CASE;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_tipos_componentes` (IN `_codigo_componente` INT(5), IN `_id_tipo` VARCHAR(5), IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO tipos_componentes (codigo_componente,id_tipo) VALUE (_codigo_componente,_id_tipo);
WHEN 'editar' THEN
UPDATE tipos_componentes
SET id_tipo = _id_tipo WHERE codigo_componente = _codigo_componente;
WHEN 'eliminar' THEN
DELETE FROM tipos_componentes WHERE codigo_componente = _codigo_componente;
WHEN 'consultar' THEN 
SELECT * FROM tipos_componentes WHERE codigo_componente = _codigo_componente;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_tipos_equipos` (IN `_id_tipo` VARCHAR(5), IN `_Descripcion` VARCHAR(50), IN `accion` VARCHAR(10))  BEGIN
CASE accion
WHEN 'nuevo' THEN
INSERT INTO tipos_equipos (id_tipo,Descripción) VALUE (_id_tipo,_Descripcion);
WHEN 'editar' THEN
UPDATE tipos_equipos
SET Descripción = _Descripcion WHERE id_tipo = _id_tipo;
WHEN 'eliminar' THEN
DELETE FROM tipos_equipos WHERE id_tipo = _id_tipo;
WHEN 'consultar' THEN
SELECT * FROM tipos_equipos WHERE id_tipo = _id_tipo;

END CASE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crud_usuarios` (IN `_Cedula` BIGINT(20), IN `_Nombres` VARCHAR(100), IN `_Apellidos` VARCHAR(100), `_Cargo` VARCHAR(50), IN `_Tel_usu` VARCHAR(8), IN `_tipo_de_usuario` ENUM('administrador','supervisor','colaborador','usuario'), IN `_Nickname` VARCHAR(20), IN `_Contraseña` VARCHAR(30), IN `_Foto` LONGBLOB, IN `_correo_electronico` VARCHAR(150), IN `_Codigo_sede` VARCHAR(11), IN `accion` VARCHAR(10))  BEGIN

CASE accion
WHEN 'nuevo' THEN
INSERT INTO usuarios (Cedula,Nombres,Apellidos,Cargo,Tel_usu,tipo_de_usuario,Nickname,Contraseña,Foto,correo_electronico,Codigo_sede) VALUES (_Cedula,_Nombres,_Apellidos,_Cargo,_Tel_usu,_tipo_de_usuario,_Nickname,_Contraseña,_Foto,_correo_electronico,_Codigo_sede);
WHEN 'editar' THEN
UPDATE usuarios
SET Nombres = _Nombres, Apellidos = _Apellidos, Cargo = _Cargo, Tel_usu = _Tel_usu, tipo_de_usuario = _tipo_de_usuario, Nickname = _Nickname, Contraseña = _Contraseña, Foto = _Foto, correo_electronico = _correo_electronico, Codigo_sede = _Codigo_sede WHERE Cedula = _Cedula;
WHEN 'eliminar' THEN
DELETE FROM usuarios WHERE Cedula = _Cedula;
WHen 'consultar'     THEN
SELECT * FROM  usuarios WHERE Nickname = _Nickname and Contraseña = _Contraseña;

END CASE;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `Codigo_ciudad` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Ubicación` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `departamentos` enum('ANTIOQUIA','ATLANTICO','BOGOTA D.C','BOLIVAR','BOYACA','CALDAS','CAQUETA','CAUCA','CESAR','CORDOBA','CUNDINAMARCA','CHOCO','HUILA','LA GUAJIRA','MAGDALENA','META','NARIÑO','NORTE DE SANTANDER','QUINDIO','RISARALDA','SANTANDER','SUCRE','TOLIMA','VALLE DEL CAUCA','ARAUCA','CASANARE','PUTUMAYO','ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA','AMAZONAS','GUAINÍA','GUAVIARE','VAUPÉS','VICHADA') CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`Codigo_ciudad`, `Ubicación`, `departamentos`) VALUES
('1231', 'colombia', 'CAUCA'),
('1992', 'calazan', 'HUILA'),
('21111', 'colombia', 'CHOCO'),
('21222', 'cardinal', 'CHOCO'),
('22211', 'cardinal', 'MAGDALENA'),
('22222', 'cardinal', 'ANTIOQUIA'),
('343333', 'cardinall', 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),
('344', 'Cardinal ', 'CHOCO'),
('5', 'colombia', 'ANTIOQUIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Nit` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Razon_social` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `dirección_cliente` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Responsable` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Telefono_clien` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `Celular_cliente` varchar(16) CHARACTER SET utf8mb4 NOT NULL,
  `Codigo_ciudad` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Nit`, `Razon_social`, `dirección_cliente`, `Responsable`, `Telefono_clien`, `Celular_cliente`, `Codigo_ciudad`) VALUES
('1222', '3433443', 'cliente ', 'calle 51 # 83 91', 'importante', 'nuevo', '3113088331', '5'),
('211223', '45677', 'importante', 'calle 51 # 83 96', 'carlosfff', '233453', '4534332223', '5'),
('23222', '23445443', 'prueba', 'calle 50a', 'juan', '23233443', '2322333', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos_verificacion`
--

CREATE TABLE `codigos_verificacion` (
  `id_codigo` int(11) NOT NULL,
  `Cedula` bigint(5) NOT NULL,
  `codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigos_verificacion`
--

INSERT INTO `codigos_verificacion` (`id_codigo`, `Cedula`, `codigo`) VALUES
(122, 1152195734, '5444334'),
(787, 1152195734, '222111'),
(1122, 115219573, '733'),
(3332, 1152195734, '1123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `codigo_componente` int(5) NOT NULL,
  `Descripción` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`codigo_componente`, `Descripción`) VALUES
(321, 'mundo'),
(434, 'mundo'),
(734, 'prueba'),
(1111, ' finalicima'),
(2322, 'final'),
(3433, 'sisis'),
(21111, 'hola'),
(32222, 'sipi'),
(211222, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `codigo` varchar(6) NOT NULL,
  `tipo_config` varchar(50) NOT NULL,
  `Descripcion_config` varchar(200) NOT NULL,
  `Estado` varchar(11) NOT NULL,
  `valor` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`codigo`, `tipo_config`, `Descripcion_config`, `Estado`, `valor`) VALUES
('233222', 'admin', '1holas', '22222', '22333'),
('34433', 'admin', 'hola', '232223', '232223');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Modelo` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Fabricante` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Serial` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Ubicación` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Codigo_interno` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `id_tipo` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `Modelo`, `Fabricante`, `Serial`, `Ubicación`, `Codigo_interno`, `id_tipo`) VALUES
('123456789', 'nuevo', 'carlos vallejo', '3222222', 'cardinal', '343455', '66767'),
('34567', 'fox', 'fox sportss', '2345676', 'calle 51 a # 70 90', '23222', '66767'),
('9999', 'finals', 'carlos vallejo', '2323444', 'colombia', '232222', '66767');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esquemas`
--

CREATE TABLE `esquemas` (
  `Cod_Esquema` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `esquemas`
--

INSERT INTO `esquemas` (`Cod_Esquema`, `imagen`, `Descripcion`) VALUES
(2222, 0x696e64696361646f722e706e67, 'nuevo'),
(23222, 0x696e64696361646f7265735f64655f7065736f2e706e67, 'mi tio'),
(45566, 0x42617363756c615f63616d696f6e6572615f2e706e67, 'mi tia'),
(234433, 0x42617363756c615f63616d696f6e6572615f2e706e67, 'final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exactitud`
--

CREATE TABLE `exactitud` (
  `id_exactitud` bigint(20) NOT NULL,
  `Carga_exa` float NOT NULL,
  `Indicacion_exa` float NOT NULL,
  `Error_exa` float NOT NULL,
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `exactitud`
--

INSERT INTO `exactitud` (`id_exactitud`, `Carga_exa`, `Indicacion_exa`, `Error_exa`, `id_protocolo`) VALUES
(454, 4434, 1030, 4390, '098977'),
(34333, 675454, 556677, 322344, '098977'),
(34555, 22222, 345666, 322344, '098977');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excentrecidad`
--

CREATE TABLE `excentrecidad` (
  `id_excentricidad` bigint(20) NOT NULL,
  `Carga_excen` float NOT NULL,
  `Indicacion_exc` float NOT NULL,
  `Error_exc` float NOT NULL,
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `excentrecidad`
--

INSERT INTO `excentrecidad` (`id_excentricidad`, `Carga_excen`, `Indicacion_exc`, `Error_exc`, `id_protocolo`) VALUES
(888, 4443330, 34333400, 2232220, '098977'),
(23222, 55555, 45444, 223222, '098977'),
(23322, 100008, 120000, 15000, '098977'),
(23456, 55555, 23334500, 223222, '098977'),
(289988, 4443330, 45444, 223222, '098977'),
(345444, 4444460, 554344, 3344440, '098977');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_servicios`
--

CREATE TABLE `informes_servicios` (
  `id_informe` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `observaciones` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `fecha_informe` datetime NOT NULL,
  `revisado` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `id_cliente` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `id_equipo` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `codigo_medición` int(5) NOT NULL,
  `Cedula` bigint(20) NOT NULL,
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informes_servicios`
--

INSERT INTO `informes_servicios` (`id_informe`, `observaciones`, `fecha_informe`, `revisado`, `id_cliente`, `id_equipo`, `codigo_medición`, `Cedula`, `id_protocolo`) VALUES
('2222', 'programadores ', '2021-01-13 00:00:00', 'Yony cordobasss', '1222', '9999', 44444, 3456, '098977'),
('23222', 'hola mundo', '2021-01-13 00:00:00', 'juan carlos vallejo ', '1222', '123456789', 4444, 3456, '098977'),
('234433', 'hola mundoss', '2021-01-13 00:00:00', 'carlos ', '1222', '123456789', 44444, 1152195734, '098977');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspecciones`
--

CREATE TABLE `inspecciones` (
  `Nro_inspeccion` bigint(20) NOT NULL,
  `Componente` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Estado` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Fecha_inspección` date NOT NULL,
  `Observaciones` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `id_equipo` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `id_informe` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inspecciones`
--

INSERT INTO `inspecciones` (`Nro_inspeccion`, `Componente`, `Estado`, `Fecha_inspección`, `Observaciones`, `id_equipo`, `id_informe`) VALUES
(101, 'termometros', 'unidos', '2019-12-03', 'hola juan', '9999', '2222'),
(343443443, 'termometro', 'california', '2020-11-23', 'hola mundos', '9999', '2222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones_electricas`
--

CREATE TABLE `mediciones_electricas` (
  `codigo_medición` int(5) NOT NULL,
  `Vfase_neutro` float NOT NULL,
  `Vfase_tierra` float NOT NULL,
  `Vneutro_tierra` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mediciones_electricas`
--

INSERT INTO `mediciones_electricas` (`codigo_medición`, `Vfase_neutro`, `Vfase_tierra`, `Vneutro_tierra`) VALUES
(1111, 0, 454445, 22322),
(2323, 2222, 2222, 22222),
(4444, 0, 0, 0),
(44444, 0, 0, 0),
(44445, 0, 565666, 3334430),
(77777, 0, 565666, 3334430);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos`
--

CREATE TABLE `protocolos` (
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Codigo_pq` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Trazabilidad` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Incertidumbre` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `comentarios` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `Esquema` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `protocolos`
--

INSERT INTO `protocolos` (`id_protocolo`, `Codigo_pq`, `Trazabilidad`, `Incertidumbre`, `comentarios`, `Esquema`) VALUES
('098977', '987', 'correcta la prueba', 'correcta', 'hola mundo', 'grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos_rangos`
--

CREATE TABLE `protocolos_rangos` (
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `id_rango` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `protocolos_rangos`
--

INSERT INTO `protocolos_rangos` (`id_protocolo`, `id_rango`) VALUES
('098977', 123),
('098977', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos_tolerancia`
--

CREATE TABLE `rangos_tolerancia` (
  `id_rango` int(5) NOT NULL,
  `Valor_minimo` float NOT NULL,
  `Operador_relacional` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `Valor_maximo` float NOT NULL,
  `Tolerancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rangos_tolerancia`
--

INSERT INTO `rangos_tolerancia` (`id_rango`, `Valor_minimo`, `Operador_relacional`, `Valor_maximo`, `Tolerancia`) VALUES
(123, 123333, '>', 6666670, 3333330);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repetibilidad`
--

CREATE TABLE `repetibilidad` (
  `id_repetibilidad` bigint(20) NOT NULL,
  `carga` float NOT NULL,
  `indicacion_I` float NOT NULL,
  `Error_E` float NOT NULL,
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `repetibilidad`
--

INSERT INTO `repetibilidad` (`id_repetibilidad`, `carga`, `indicacion_I`, `Error_E`, `id_protocolo`) VALUES
(1234, 1450, 4544, 4333, '098977'),
(5643, 12004, 4556, 4556, '098977');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos_metrologicos`
--

CREATE TABLE `requisitos_metrologicos` (
  `id_requisito` int(11) NOT NULL,
  `Capacidad` float NOT NULL,
  `Valor_d` float NOT NULL,
  `Valor_e` float NOT NULL,
  `Clase` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Capacidad_min` float NOT NULL,
  `id_protocolo` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `requisitos_metrologicos`
--

INSERT INTO `requisitos_metrologicos` (`id_requisito`, `Capacidad`, `Valor_d`, `Valor_e`, `Clase`, `Capacidad_min`, `id_protocolo`) VALUES
(98, 15000, 455, 45, 'tipos b', 5000, '098977');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `Codigo_sede` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Dirección` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Telefono` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`Codigo_sede`, `Nombre`, `Dirección`, `Telefono`) VALUES
('4592', 'medellin', 'car45', '5241990'),
('9898', 'bogota', 'car23', '3569898');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_componentes`
--

CREATE TABLE `tipos_componentes` (
  `codigo_componente` int(5) NOT NULL,
  `id_tipo` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_componentes`
--

INSERT INTO `tipos_componentes` (`codigo_componente`, `id_tipo`) VALUES
(321, '66767'),
(434, '787');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_equipos`
--

CREATE TABLE `tipos_equipos` (
  `id_tipo` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `Descripción` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_equipos`
--

INSERT INTO `tipos_equipos` (`id_tipo`, `Descripción`) VALUES
('45', 'coders'),
('66767', 'hola mundo'),
('787', 'juancvp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Cedula` bigint(20) NOT NULL,
  `Nombres` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Apellidos` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Cargo` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Tel_usu` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `tipo_de_usuario` int(2) DEFAULT NULL,
  `Nickname` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Contraseña` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Foto` longblob NOT NULL,
  `correo_electronico` varchar(250) NOT NULL,
  `Codigo_sede` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombres`, `Apellidos`, `Cargo`, `Tel_usu`, `tipo_de_usuario`, `Nickname`, `Contraseña`, `Foto`, `correo_electronico`, `Codigo_sede`) VALUES
(455556, 'juan carlos ', 'vallejos', 'devops', '5698787', 1, 'juan', 'juan', 0x636f6e6e6563742d3032202831292e706e67, 'juan@gmail.com', '4592'),
(569999, 'andres felipe', 'merchan arenas', 'desarrollador', '5968965', 2, 'merchan', 'merchan', 0x5265637572736f20312e706e67, 'merchan@gmail.com', '4592'),
(35695495, 'yony', 'canserbero', 'canserbero', '5693695', 1, 'vale', 'valentina', 0x50616e656c436f6e74726f6c2e706e67, 'valentina2014@gmail.com', '4592');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`Codigo_ciudad`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `Codigo_ciudad` (`Codigo_ciudad`);

--
-- Indices de la tabla `codigos_verificacion`
--
ALTER TABLE `codigos_verificacion`
  ADD PRIMARY KEY (`id_codigo`),
  ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`codigo_componente`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `esquemas`
--
ALTER TABLE `esquemas`
  ADD PRIMARY KEY (`Cod_Esquema`);

--
-- Indices de la tabla `exactitud`
--
ALTER TABLE `exactitud`
  ADD PRIMARY KEY (`id_exactitud`),
  ADD KEY `id_protocolo` (`id_protocolo`);

--
-- Indices de la tabla `excentrecidad`
--
ALTER TABLE `excentrecidad`
  ADD PRIMARY KEY (`id_excentricidad`),
  ADD KEY `id_protocolo` (`id_protocolo`);

--
-- Indices de la tabla `informes_servicios`
--
ALTER TABLE `informes_servicios`
  ADD PRIMARY KEY (`id_informe`),
  ADD KEY `codigo_medición` (`codigo_medición`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_protocolo` (`id_protocolo`),
  ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `inspecciones`
--
ALTER TABLE `inspecciones`
  ADD PRIMARY KEY (`Nro_inspeccion`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_informe` (`id_informe`);

--
-- Indices de la tabla `mediciones_electricas`
--
ALTER TABLE `mediciones_electricas`
  ADD PRIMARY KEY (`codigo_medición`);

--
-- Indices de la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`id_protocolo`);

--
-- Indices de la tabla `protocolos_rangos`
--
ALTER TABLE `protocolos_rangos`
  ADD KEY `id_protocolo` (`id_protocolo`),
  ADD KEY `id_rango` (`id_rango`);

--
-- Indices de la tabla `rangos_tolerancia`
--
ALTER TABLE `rangos_tolerancia`
  ADD PRIMARY KEY (`id_rango`);

--
-- Indices de la tabla `repetibilidad`
--
ALTER TABLE `repetibilidad`
  ADD PRIMARY KEY (`id_repetibilidad`),
  ADD KEY `id_protocolo` (`id_protocolo`);

--
-- Indices de la tabla `requisitos_metrologicos`
--
ALTER TABLE `requisitos_metrologicos`
  ADD PRIMARY KEY (`id_requisito`),
  ADD KEY `id_protocolo` (`id_protocolo`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`Codigo_sede`);

--
-- Indices de la tabla `tipos_componentes`
--
ALTER TABLE `tipos_componentes`
  ADD KEY `codigo_componente` (`codigo_componente`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `tipos_equipos`
--
ALTER TABLE `tipos_equipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cedula`),
  ADD KEY `Codigo_sede` (`Codigo_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `codigo_componente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211223;

--
-- AUTO_INCREMENT de la tabla `exactitud`
--
ALTER TABLE `exactitud`
  MODIFY `id_exactitud` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233223;

--
-- AUTO_INCREMENT de la tabla `excentrecidad`
--
ALTER TABLE `excentrecidad`
  MODIFY `id_excentricidad` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2122333;

--
-- AUTO_INCREMENT de la tabla `inspecciones`
--
ALTER TABLE `inspecciones`
  MODIFY `Nro_inspeccion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3434443444;

--
-- AUTO_INCREMENT de la tabla `mediciones_electricas`
--
ALTER TABLE `mediciones_electricas`
  MODIFY `codigo_medición` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77778;

--
-- AUTO_INCREMENT de la tabla `rangos_tolerancia`
--
ALTER TABLE `rangos_tolerancia`
  MODIFY `id_rango` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `repetibilidad`
--
ALTER TABLE `repetibilidad`
  MODIFY `id_repetibilidad` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5644;

--
-- AUTO_INCREMENT de la tabla `requisitos_metrologicos`
--
ALTER TABLE `requisitos_metrologicos`
  MODIFY `id_requisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Codigo_ciudad`) REFERENCES `ciudades` (`Codigo_ciudad`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`Codigo_ciudad`) REFERENCES `ciudades` (`Codigo_ciudad`);

--
-- Filtros para la tabla `codigos_verificacion`
--
ALTER TABLE `codigos_verificacion`
  ADD CONSTRAINT `codigos_verificacion_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `usuarios` (`Cedula`);

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_equipos` (`id_tipo`);

--
-- Filtros para la tabla `exactitud`
--
ALTER TABLE `exactitud`
  ADD CONSTRAINT `exactitud_ibfk_1` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`);

--
-- Filtros para la tabla `excentrecidad`
--
ALTER TABLE `excentrecidad`
  ADD CONSTRAINT `excentrecidad_ibfk_1` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`);

--
-- Filtros para la tabla `informes_servicios`
--
ALTER TABLE `informes_servicios`
  ADD CONSTRAINT `informes_servicios_ibfk_1` FOREIGN KEY (`codigo_medición`) REFERENCES `mediciones_electricas` (`codigo_medición`),
  ADD CONSTRAINT `informes_servicios_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `informes_servicios_ibfk_3` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`),
  ADD CONSTRAINT `informes_servicios_ibfk_4` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`),
  ADD CONSTRAINT `informes_servicios_ibfk_5` FOREIGN KEY (`Cedula`) REFERENCES `usuarios` (`Cedula`);

--
-- Filtros para la tabla `inspecciones`
--
ALTER TABLE `inspecciones`
  ADD CONSTRAINT `inspecciones_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`),
  ADD CONSTRAINT `inspecciones_ibfk_2` FOREIGN KEY (`id_informe`) REFERENCES `informes_servicios` (`id_informe`);

--
-- Filtros para la tabla `protocolos_rangos`
--
ALTER TABLE `protocolos_rangos`
  ADD CONSTRAINT `protocolos_rangos_ibfk_1` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`),
  ADD CONSTRAINT `protocolos_rangos_ibfk_2` FOREIGN KEY (`id_rango`) REFERENCES `rangos_tolerancia` (`id_rango`);

--
-- Filtros para la tabla `repetibilidad`
--
ALTER TABLE `repetibilidad`
  ADD CONSTRAINT `repetibilidad_ibfk_1` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`);

--
-- Filtros para la tabla `requisitos_metrologicos`
--
ALTER TABLE `requisitos_metrologicos`
  ADD CONSTRAINT `requisitos_metrologicos_ibfk_1` FOREIGN KEY (`id_protocolo`) REFERENCES `protocolos` (`id_protocolo`);

--
-- Filtros para la tabla `tipos_componentes`
--
ALTER TABLE `tipos_componentes`
  ADD CONSTRAINT `tipos_componentes_ibfk_1` FOREIGN KEY (`codigo_componente`) REFERENCES `componentes` (`codigo_componente`),
  ADD CONSTRAINT `tipos_componentes_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_equipos` (`id_tipo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Codigo_sede`) REFERENCES `sedes` (`Codigo_sede`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
