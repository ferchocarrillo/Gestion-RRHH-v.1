-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.5.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para recursos
CREATE DATABASE IF NOT EXISTS `recursos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `recursos`;

-- Volcando estructura para tabla recursos.adicional
CREATE TABLE IF NOT EXISTS `adicional` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adicional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.adicional2
CREATE TABLE IF NOT EXISTS `adicional2` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adicional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.aprobacions
CREATE TABLE IF NOT EXISTS `aprobacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aprobacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Id_dependencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.asignacion
CREATE TABLE IF NOT EXISTS `asignacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinmedato` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedades` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.bancos
CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.caja_compensacions
CREATE TABLE IF NOT EXISTS `caja_compensacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.campanas
CREATE TABLE IF NOT EXISTS `campanas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.capacitacions
CREATE TABLE IF NOT EXISTS `capacitacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.cargoent
CREATE TABLE IF NOT EXISTS `cargoent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.cargo_nuevos
CREATE TABLE IF NOT EXISTS `cargo_nuevos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.cesantias
CREATE TABLE IF NOT EXISTS `cesantias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `Id_departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Municipio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.contratacions
CREATE TABLE IF NOT EXISTS `contratacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned DEFAULT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_publico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_bancaria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_medico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ant_procuraduria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ant_ponal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copia_cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadcedula` int(10) unsigned NOT NULL,
  `libreta_militar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_bachiller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_otros` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadcert` int(10) unsigned DEFAULT NULL,
  `ref_laborales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadlab` int(10) unsigned NOT NULL,
  `ref_personales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadper` int(10) unsigned NOT NULL,
  `cert_eps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_pensiones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_cesantias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nucleo_familiar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.coordinadores
CREATE TABLE IF NOT EXISTS `coordinadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `Id_departamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.dependencia
CREATE TABLE IF NOT EXISTS `dependencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dependencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.documentos
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entgerencia
CREATE TABLE IF NOT EXISTS `entgerencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `resultadoGer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista1s
CREATE TABLE IF NOT EXISTS `entrevista1s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(10) unsigned NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fnacimiento` date NOT NULL,
  `departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `TipoVia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefijo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefijo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barrio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tFijo` bigint(20) DEFAULT NULL,
  `tCelular` bigint(20) unsigned NOT NULL,
  `tCelular2` bigint(20) unsigned DEFAULT NULL,
  `tVivienda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(10) unsigned DEFAULT NULL,
  `arrendador` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correoArr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sMilitar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donde` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eCivil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuanto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista2s
CREATE TABLE IF NOT EXISTS `entrevista2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinfamilia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista3s
CREATE TABLE IF NOT EXISTS `entrevista3s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grado1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha1` date DEFAULT NULL,
  `titulo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha2` date DEFAULT NULL,
  `titulo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha3` date DEFAULT NULL,
  `titulo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha4` date DEFAULT NULL,
  `titulo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha5` date DEFAULT NULL,
  `titulo5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha6` date DEFAULT NULL,
  `titulo6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha7` date DEFAULT NULL,
  `titulo7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha8` date DEFAULT NULL,
  `titulo8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista4s
CREATE TABLE IF NOT EXISTS `entrevista4s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinExp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain1` date DEFAULT NULL,
  `fechart1` date DEFAULT NULL,
  `tiempo1` int(11) DEFAULT NULL,
  `hlcargo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf1` bigint(20) DEFAULT NULL,
  `salarioh1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain2` date DEFAULT NULL,
  `fechart2` date DEFAULT NULL,
  `tiempo2` int(11) DEFAULT NULL,
  `hlcargo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf2` bigint(20) DEFAULT NULL,
  `salarioh2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain3` date DEFAULT NULL,
  `fechart3` date DEFAULT NULL,
  `tiempo3` int(11) DEFAULT NULL,
  `hlcargo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf3` bigint(20) DEFAULT NULL,
  `salarioh3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain4` date DEFAULT NULL,
  `fechart4` date DEFAULT NULL,
  `tiempo4` int(11) DEFAULT NULL,
  `hlcargo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf4` bigint(20) DEFAULT NULL,
  `salarioh4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain5` date DEFAULT NULL,
  `fechart5` date DEFAULT NULL,
  `tiempo5` int(11) DEFAULT NULL,
  `hlcargo5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf5` bigint(20) DEFAULT NULL,
  `salarioh5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista5s
CREATE TABLE IF NOT EXISTS `entrevista5s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspiracion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personasC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acCambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempoDes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queHizo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otroProceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CualOtra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fortalezas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debilidades` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valores` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satisfaccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traumaticos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancelado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivoC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problemas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivoJ` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frecuencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deudas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debeA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantoDebe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grupoSoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cualGr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantoTiempo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempoLibre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoSalud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accidentes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cualAc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procesosAnt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familiaresMent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.entrevista_fulls
CREATE TABLE IF NOT EXISTS `entrevista_fulls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCont` date NOT NULL,
  `resultadoRrhh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsRrhh` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoGer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoJefe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsJefe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.ent_finalizacions
CREATE TABLE IF NOT EXISTS `ent_finalizacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsFinales` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoGer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultadoJefe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsJefe` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.ent_jefe
CREATE TABLE IF NOT EXISTS `ent_jefe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoJefe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsjefe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.eps
CREATE TABLE IF NOT EXISTS `eps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.e_civils
CREATE TABLE IF NOT EXISTS `e_civils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `e_civil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.filtros
CREATE TABLE IF NOT EXISTS `filtros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fregistro` date NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citadoE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAplica` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noInteresado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadoCapa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadoExm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PruebasE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yaTrabaja` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroEqu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAsiste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoResponde2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `YaNoInt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estudiante` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAsisteEnt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrevistaJefeInm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrevistaGerencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadocontratacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entvOK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultadoRrhh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsRrhh` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaRrhh` date DEFAULT NULL,
  `resultadoGer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaGerencia` date DEFAULT NULL,
  `resultadoJefe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsJefe` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaJefe` date DEFAULT NULL,
  `resultadoFormacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsFormacion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaFormacion` date DEFAULT NULL,
  `fechaCont` date DEFAULT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.focos
CREATE TABLE IF NOT EXISTS `focos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.fuentes
CREATE TABLE IF NOT EXISTS `fuentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.localidad
CREATE TABLE IF NOT EXISTS `localidad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.modalidads
CREATE TABLE IF NOT EXISTS `modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.motivo_retiros
CREATE TABLE IF NOT EXISTS `motivo_retiros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `motivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.nivel_edus
CREATE TABLE IF NOT EXISTS `nivel_edus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivelEdu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.novedades
CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `totalDias` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.nuevoempleado
CREATE TABLE IF NOT EXISTS `nuevoempleado` (
  `cargos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.nuevo_empleados
CREATE TABLE IF NOT EXISTS `nuevo_empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `fexpe` date NOT NULL,
  `depNac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tCelular` bigint(20) unsigned NOT NULL,
  `tFijo` bigint(20) unsigned DEFAULT NULL,
  `eCivil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugarNac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(10) unsigned NOT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivelEdu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corporativo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `personaContacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentesco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaDireccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactoCelular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numHijos` int(10) unsigned DEFAULT NULL,
  `hijosMAs` int(10) unsigned DEFAULT NULL,
  `hijosFem` int(10) unsigned DEFAULT NULL,
  `Preexistencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicamentos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salario` bigint(20) unsigned DEFAULT NULL,
  `ingreso` date NOT NULL,
  `tipo_contratos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoModalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cesantias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pensiones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cajaComp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ips` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tcuenta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nCuenta` bigint(20) unsigned NOT NULL,
  `bancos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.orientacion
CREATE TABLE IF NOT EXISTS `orientacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `orientacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.parentescos
CREATE TABLE IF NOT EXISTS `parentescos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.pensiones
CREATE TABLE IF NOT EXISTS `pensiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.perfils
CREATE TABLE IF NOT EXISTS `perfils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `permission_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.prefijo
CREATE TABLE IF NOT EXISTS `prefijo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prefijo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.reclutamientos
CREATE TABLE IF NOT EXISTS `reclutamientos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vincuventas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computrabajo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compensar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `univ` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fundaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.requisicions
CREATE TABLE IF NOT EXISTS `requisicions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependencias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reemplaza` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jornada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finicio` date NOT NULL,
  `solicita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raza` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `culto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imposibilita` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disfisica` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dismental` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacionalidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.residencia
CREATE TABLE IF NOT EXISTS `residencia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.resultado_r_r_h_h_s
CREATE TABLE IF NOT EXISTS `resultado_r_r_h_h_s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resultado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.resumens
CREATE TABLE IF NOT EXISTS `resumens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.rhs
CREATE TABLE IF NOT EXISTS `rhs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_rh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full-access` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.supervisors
CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.s_militars
CREATE TABLE IF NOT EXISTS `s_militars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sMilitar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_contratos
CREATE TABLE IF NOT EXISTS `tipo_contratos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoCon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_doc2s
CREATE TABLE IF NOT EXISTS `tipo_doc2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_docs
CREATE TABLE IF NOT EXISTS `tipo_docs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_modalidads
CREATE TABLE IF NOT EXISTS `tipo_modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoModalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_novedads
CREATE TABLE IF NOT EXISTS `tipo_novedads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TipoNovedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.tipo_vias
CREATE TABLE IF NOT EXISTS `tipo_vias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_vias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.t_viviendas
CREATE TABLE IF NOT EXISTS `t_viviendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tvivienda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla recursos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
