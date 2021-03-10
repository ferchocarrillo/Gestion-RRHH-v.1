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

-- Volcando datos para la tabla recursos.adicional: ~40 rows (aproximadamente)
/*!40000 ALTER TABLE `adicional` DISABLE KEYS */;
REPLACE INTO `adicional` (`id`, `adicional`) VALUES
	(1, 'Agrupación'),
	(2, 'Apartamento'),
	(3, 'Bloque'),
	(4, 'Bodega'),
	(5, 'Casa'),
	(6, 'Célula'),
	(7, 'Conjunto'),
	(8, 'Consultorio'),
	(9, 'Depósito'),
	(10, 'Edificio'),
	(11, 'Este'),
	(12, 'Etapa'),
	(13, 'Garaje'),
	(14, 'Garaje Sótano'),
	(15, 'Interior'),
	(16, 'Kiosko'),
	(17, 'Local'),
	(18, 'Lote'),
	(19, 'Manzana'),
	(20, 'Mezzanine'),
	(21, 'Módulo'),
	(22, 'Norte'),
	(23, 'Occidente'),
	(24, 'Oeste'),
	(25, 'Oficina'),
	(26, 'Penthouse'),
	(27, 'Piso'),
	(28, 'Puesto'),
	(29, 'Salon Comunal'),
	(30, 'Sector'),
	(31, 'Sede'),
	(32, 'Semisótano'),
	(33, 'Solar'),
	(34, 'Supermanzana'),
	(35, 'Sur'),
	(36, 'Torre'),
	(37, 'Unidad'),
	(38, 'Unidad Residencial'),
	(39, 'Urbanización'),
	(40, 'Vereda');
/*!40000 ALTER TABLE `adicional` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.adicional2
CREATE TABLE IF NOT EXISTS `adicional2` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adicional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.adicional2: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `adicional2` DISABLE KEYS */;
REPLACE INTO `adicional2` (`id`, `adicional`) VALUES
	(1, 'Casa'),
	(2, 'Local'),
	(3, 'Lote'),
	(4, 'Manzana'),
	(5, 'Mezzanine'),
	(6, 'Oficina'),
	(7, 'Piso'),
	(8, 'Apartamento'),
	(9, 'Etapa'),
	(10, 'Garaje'),
	(11, 'Garaje Sótano'),
	(12, 'Interior'),
	(13, 'Penthouse'),
	(14, 'Puesto'),
	(15, 'Módulo'),
	(16, 'Sede'),
	(17, 'Semisótano'),
	(18, 'Supermanzana'),
	(19, 'Torre'),
	(20, 'Unidad');
/*!40000 ALTER TABLE `adicional2` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.aprobacions
CREATE TABLE IF NOT EXISTS `aprobacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aprobacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.aprobacions: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `aprobacions` DISABLE KEYS */;
REPLACE INTO `aprobacions` (`id`, `aprobacion`) VALUES
	(1, 'Aprobado'),
	(2, 'No aprobado');
/*!40000 ALTER TABLE `aprobacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Id_dependencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.area: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
REPLACE INTO `area` (`id_area`, `Id_dependencia`, `Area`) VALUES
	(1, 'Gerencia Administrativa y Financiera', 'Staff Administrativo'),
	(2, 'Gerencia Administrativa y Financiera', 'Área recursos humanos'),
	(3, 'Gerencia Administrativa y Financiera', 'Formación'),
	(4, 'Gerencia Administrativa y Financiera', 'Área  contable/ Financiera'),
	(5, 'Gerencia Administrativa y Financiera', 'Área administrativa'),
	(6, 'Gerencia Comercial y Operativa', 'Direccion de operaciones'),
	(7, 'Operaciones', 'Área de calidad'),
	(8, 'Operaciones', 'Back Office'),
	(9, 'Operaciones', 'Métricas y datos'),
	(10, 'Operaciones', 'Dirección IT');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.asignacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `asignacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.asignacions
CREATE TABLE IF NOT EXISTS `asignacions` (
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

-- Volcando datos para la tabla recursos.asignacions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `asignacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.bancos
CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.bancos: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
REPLACE INTO `bancos` (`id`, `banco`) VALUES
	(1, 'Banco Colpatria'),
	(2, 'Banco de Bogotá'),
	(3, 'Banco Popular'),
	(4, 'Banco CorpBanca'),
	(5, 'Bancolombia'),
	(6, 'Citibank'),
	(7, 'Banco GNB Sudameris'),
	(8, 'BBVA Colombia'),
	(9, 'Banco de Occidente'),
	(10, 'Banco Caja Social S.A.'),
	(11, 'Banco Davivienda'),
	(12, 'Banagrario'),
	(13, 'AV Villas'),
	(14, 'Credifinanciera S.A.'),
	(15, 'Bancamía S.A.'),
	(16, 'Banco W S.A.'),
	(17, 'Bancoomeva'),
	(18, 'Finandina'),
	(19, 'Banco Falabella S.A.'),
	(20, 'Banco Pichincha S.A.'),
	(21, 'Coopcentral'),
	(22, 'Banco Santander'),
	(23, 'Banco Mundo Mujer S.A.'),
	(24, 'Mibanco S.A.'),
	(25, 'Banco Serfinanza S.A.');
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.caja_compensacions
CREATE TABLE IF NOT EXISTS `caja_compensacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.caja_compensacions: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `caja_compensacions` DISABLE KEYS */;
REPLACE INTO `caja_compensacions` (`id`, `entidad`) VALUES
	(1, 'Compensar'),
	(2, 'Colsubsidio'),
	(3, 'Cafam'),
	(4, 'Comfaboy');
/*!40000 ALTER TABLE `caja_compensacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.campanas
CREATE TABLE IF NOT EXISTS `campanas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.campanas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `campanas` DISABLE KEYS */;
REPLACE INTO `campanas` (`id`, `campana`) VALUES
	(1, 'ETB'),
	(2, 'Movistar'),
	(3, 'QNT'),
	(4, 'Staff Mentius'),
	(5, 'Vanti'),
	(6, 'Vanti S A C');
/*!40000 ALTER TABLE `campanas` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.capacitacions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `capacitacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacitacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cargo: ~48 rows (aproximadamente)
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
REPLACE INTO `cargo` (`id`, `cargo`) VALUES
	(1, 'Analista Contable'),
	(2, 'Analista de bases'),
	(3, 'Analista de Calidad'),
	(4, 'Analista de Contratacion'),
	(5, 'Analista de nomina'),
	(6, 'Analista de Reclutamiento y Seleccion'),
	(7, 'Analista IT'),
	(8, 'Aprendiz Sena'),
	(9, 'Asesor Comercial'),
	(10, 'Asesor de Cartera'),
	(11, 'Asesor de Servicio al Cliente'),
	(12, 'Asistente Contable'),
	(13, 'Auxiliar administrativo'),
	(14, 'Auxiliar contable'),
	(15, 'Auxiliar IT'),
	(16, 'Auxiliar SST'),
	(17, 'Backoffice'),
	(18, 'Coord. Administrativo'),
	(19, 'Coordinador administrativo'),
	(20, 'Coordinador de Operacion'),
	(21, 'Coordinador de operaciones'),
	(22, 'Datamarshall Junior'),
	(23, 'Datamarshall Senior'),
	(24, 'Director de operaciones'),
	(25, 'Director financiero'),
	(26, 'Director IT'),
	(27, 'Director RRHH'),
	(28, 'Formador junior'),
	(29, 'Formador senior'),
	(30, 'Gerencia Administrativa'),
	(31, 'Gerencia Comercial'),
	(32, 'Gerencia General'),
	(33, 'Gerente comercial'),
	(34, 'Gerente financiero'),
	(35, 'Gerente general'),
	(36, 'Gestor documental'),
	(37, 'Jefe de operaciones'),
	(38, 'Lider Backoffice'),
	(39, 'Lider datos y metricas'),
	(40, 'Lider de Calidad'),
	(41, 'Lider de Formacion'),
	(42, 'Lider desarrollo'),
	(43, 'Recepcionista'),
	(44, 'Recuperador de ventas'),
	(45, 'Servicios generales'),
	(46, 'Supervisor'),
	(47, 'Supervisor'),
	(48, 'Torre de control');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.cargoent
CREATE TABLE IF NOT EXISTS `cargoent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cargoent: ~48 rows (aproximadamente)
/*!40000 ALTER TABLE `cargoent` DISABLE KEYS */;
REPLACE INTO `cargoent` (`id`, `cargo`) VALUES
	(1, 'Analista Contable'),
	(2, 'Analista de bases'),
	(3, 'Analista de Calidad'),
	(4, 'Analista de Contratacion'),
	(5, 'Analista de nomina'),
	(6, 'Analista de Reclutamiento y Seleccion'),
	(7, 'Analista IT'),
	(8, 'Aprendiz Sena'),
	(9, 'Asesor Comercial'),
	(10, 'Asesor de Cartera'),
	(11, 'Asesor de Servicio al Cliente'),
	(12, 'Asistente Contable'),
	(13, 'Auxiliar administrativo'),
	(14, 'Auxiliar contable'),
	(15, 'Auxiliar IT'),
	(16, 'Auxiliar SST'),
	(17, 'Backoffice'),
	(18, 'Coord. Administrativo'),
	(19, 'Coordinador administrativo'),
	(20, 'Coordinador de Operacion'),
	(21, 'Coordinador de operaciones'),
	(22, 'Datamarshall Junior'),
	(23, 'Datamarshall Senior'),
	(24, 'Director de operaciones'),
	(25, 'Director financiero'),
	(26, 'Director IT'),
	(27, 'Director RRHH'),
	(28, 'Formador junior'),
	(29, 'Formador senior'),
	(30, 'Gerencia Administrativa'),
	(31, 'Gerencia Comercial'),
	(32, 'Gerencia General'),
	(33, 'Gerente comercial'),
	(34, 'Gerente financiero'),
	(35, 'Gerente general'),
	(36, 'Gestor documental'),
	(37, 'Jefe de operaciones'),
	(38, 'Lider Backoffice'),
	(39, 'Lider datos y metricas'),
	(40, 'Lider de Calidad'),
	(41, 'Lider de Formacion'),
	(42, 'Lider desarrollo'),
	(43, 'Recepcionista'),
	(44, 'Recuperador de ventas'),
	(45, 'Servicios generales'),
	(46, 'Supervisor'),
	(47, 'Supervisor'),
	(48, 'Torre de control');
/*!40000 ALTER TABLE `cargoent` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.cargo_nuevos
CREATE TABLE IF NOT EXISTS `cargo_nuevos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cargo_nuevos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cargo_nuevos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo_nuevos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.causas_retiros
CREATE TABLE IF NOT EXISTS `causas_retiros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `causalesR` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.causas_retiros: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `causas_retiros` DISABLE KEYS */;
REPLACE INTO `causas_retiros` (`id`, `causalesR`) VALUES
	(1, 'Abandono'),
	(2, 'Renuncia'),
	(3, 'Retirado'),
	(4, 'Terminación De Contrato');
/*!40000 ALTER TABLE `causas_retiros` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.cesantias
CREATE TABLE IF NOT EXISTS `cesantias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cesantias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `cesantias` DISABLE KEYS */;
REPLACE INTO `cesantias` (`id`, `fondo`) VALUES
	(1, 'Colfondos'),
	(2, 'Colpensiones'),
	(3, 'Compensar'),
	(4, 'Fondo Nacional Del Ahorro'),
	(5, 'Porvenir'),
	(6, 'Protección');
/*!40000 ALTER TABLE `cesantias` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `Id_departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Municipio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ciudad: ~1.140 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
REPLACE INTO `ciudad` (`id_ciudad`, `Id_departamento`, `Municipio`) VALUES
	(1, 'Bogotá D.C.', 'Bogotá D.C.'),
	(2, 'Amazonas', 'Leticia'),
	(3, 'Amazonas', 'La Chorrera'),
	(4, 'Amazonas', 'La Pedrera'),
	(5, 'Amazonas', 'La Victoria'),
	(6, 'Amazonas', 'Mirití-Paraná'),
	(7, 'Amazonas', 'Puerto Alegría'),
	(8, 'Amazonas', 'Puerto Arica'),
	(9, 'Amazonas', 'Puerto Nariño'),
	(10, 'Amazonas', 'Puerto Santander'),
	(11, 'Amazonas', 'Tarapacá'),
	(12, 'Antioquia', 'Medellín'),
	(13, 'Antioquia', 'Abejorral'),
	(14, 'Antioquia', 'Abriaquí'),
	(15, 'Antioquia', 'Alejandría'),
	(16, 'Antioquia', 'Amagá'),
	(17, 'Antioquia', 'Amalfi'),
	(18, 'Antioquia', 'Andes'),
	(19, 'Antioquia', 'Angelópolis'),
	(20, 'Antioquia', 'Angostura'),
	(21, 'Antioquia', 'Anorí'),
	(22, 'Antioquia', 'Anzá'),
	(23, 'Antioquia', 'Apartadó'),
	(24, 'Antioquia', 'Arboletes'),
	(25, 'Antioquia', 'Argelia'),
	(26, 'Antioquia', 'Armenia'),
	(27, 'Antioquia', 'Barbosa'),
	(28, 'Antioquia', 'Bello'),
	(29, 'Antioquia', 'Belmira'),
	(30, 'Antioquia', 'Betania'),
	(31, 'Antioquia', 'Betulia'),
	(32, 'Antioquia', 'Briceño'),
	(33, 'Antioquia', 'Buriticá'),
	(34, 'Antioquia', 'Cáceres'),
	(35, 'Antioquia', 'Caicedo'),
	(36, 'Antioquia', 'Caldas'),
	(37, 'Antioquia', 'Campamento'),
	(38, 'Antioquia', 'Cañasgordas'),
	(39, 'Antioquia', 'Caracolí'),
	(40, 'Antioquia', 'Caramanta'),
	(41, 'Antioquia', 'Carepa'),
	(42, 'Antioquia', 'Carolina del Príncipe'),
	(43, 'Antioquia', 'Caucasia'),
	(44, 'Antioquia', 'Chigorodó'),
	(45, 'Antioquia', 'Cisneros'),
	(46, 'Antioquia', 'Ciudad Bolívar'),
	(47, 'Antioquia', 'Cocorná'),
	(48, 'Antioquia', 'Concepción'),
	(49, 'Antioquia', 'Concordia'),
	(50, 'Antioquia', 'Copacabana'),
	(51, 'Antioquia', 'Dabeiba'),
	(52, 'Antioquia', 'Donmatías'),
	(53, 'Antioquia', 'Ebéjico'),
	(54, 'Antioquia', 'El Bagre'),
	(55, 'Antioquia', 'El Carmen de Viboral'),
	(56, 'Antioquia', 'El Peñol'),
	(57, 'Antioquia', 'El Retiro'),
	(58, 'Antioquia', 'El Santuario'),
	(59, 'Antioquia', 'Entrerríos'),
	(60, 'Antioquia', 'Envigado'),
	(61, 'Antioquia', 'Fredonia'),
	(62, 'Antioquia', 'Frontino'),
	(63, 'Antioquia', 'Giraldo'),
	(64, 'Antioquia', 'Girardota'),
	(65, 'Antioquia', 'Gómez Plata'),
	(66, 'Antioquia', 'Granada'),
	(67, 'Antioquia', 'Guadalupe'),
	(68, 'Antioquia', 'Guarne'),
	(69, 'Antioquia', 'Guatapé'),
	(70, 'Antioquia', 'Heliconia'),
	(71, 'Antioquia', 'Hispania'),
	(72, 'Antioquia', 'Itagüí'),
	(73, 'Antioquia', 'Ituango'),
	(74, 'Antioquia', 'Jardín'),
	(75, 'Antioquia', 'Jericó'),
	(76, 'Antioquia', 'La Ceja'),
	(77, 'Antioquia', 'La Estrella'),
	(78, 'Antioquia', 'La Pintada'),
	(79, 'Antioquia', 'La Unión'),
	(80, 'Antioquia', 'Liborina'),
	(81, 'Antioquia', 'Maceo'),
	(82, 'Antioquia', 'Marinilla'),
	(83, 'Antioquia', 'Montebello'),
	(84, 'Antioquia', 'Murindó'),
	(85, 'Antioquia', 'Mutatá'),
	(86, 'Antioquia', 'Nariño'),
	(87, 'Antioquia', 'Nechí'),
	(88, 'Antioquia', 'Necoclí'),
	(89, 'Antioquia', 'Olaya'),
	(90, 'Antioquia', 'Peque'),
	(91, 'Antioquia', 'Pueblorrico'),
	(92, 'Antioquia', 'Puerto Berrío'),
	(93, 'Antioquia', 'Puerto Nare'),
	(94, 'Antioquia', 'Puerto Triunfo'),
	(95, 'Antioquia', 'Remedios'),
	(96, 'Antioquia', 'Rionegro'),
	(97, 'Antioquia', 'Sabanalarga'),
	(98, 'Antioquia', 'Sabaneta'),
	(99, 'Antioquia', 'Salgar'),
	(100, 'Antioquia', 'San Andrés de Cuerquia'),
	(101, 'Antioquia', 'San Carlos'),
	(102, 'Antioquia', 'San Francisco'),
	(103, 'Antioquia', 'San Jerónimo'),
	(104, 'Antioquia', 'San José de la Montaña'),
	(105, 'Antioquia', 'San Juan de Urabá'),
	(106, 'Antioquia', 'San Luis'),
	(107, 'Antioquia', 'San Pedro de los Milagros'),
	(108, 'Antioquia', 'San Pedro de Urabá'),
	(109, 'Antioquia', 'San Rafael'),
	(110, 'Antioquia', 'San Roque'),
	(111, 'Antioquia', 'San Vicente'),
	(112, 'Antioquia', 'Santa Bárbara'),
	(113, 'Antioquia', 'Santa Fe de Antioquia'),
	(114, 'Antioquia', 'Santa Rosa de Osos'),
	(115, 'Antioquia', 'Santo Domingo'),
	(116, 'Antioquia', 'Segovia'),
	(117, 'Antioquia', 'Sonsón'),
	(118, 'Antioquia', 'Sopetrán'),
	(119, 'Antioquia', 'Támesis'),
	(120, 'Antioquia', 'Tarazá'),
	(121, 'Antioquia', 'Tarso'),
	(122, 'Antioquia', 'Titiribí'),
	(123, 'Antioquia', 'Toledo'),
	(124, 'Antioquia', 'Turbo'),
	(125, 'Antioquia', 'Uramita'),
	(126, 'Antioquia', 'Urrao'),
	(127, 'Antioquia', 'Valdivia'),
	(128, 'Antioquia', 'Valparaíso'),
	(129, 'Antioquia', 'Vegachí'),
	(130, 'Antioquia', 'Venecia'),
	(131, 'Antioquia', 'Vigía del Fuerte'),
	(132, 'Antioquia', 'Yalí'),
	(133, 'Antioquia', 'Yarumal'),
	(134, 'Antioquia', 'Yolombó'),
	(135, 'Antioquia', 'Yondó'),
	(136, 'Antioquia', 'Zaragoza'),
	(137, 'Arauca', 'Arauca'),
	(138, 'Arauca', 'Arauquita'),
	(139, 'Arauca', 'Cravo Norte'),
	(140, 'Arauca', 'Fortul'),
	(141, 'Arauca', 'Puerto Rondón'),
	(142, 'Arauca', 'Saravena'),
	(143, 'Arauca', 'Tame'),
	(144, 'Atlántico', 'Barranquilla'),
	(145, 'Atlántico', 'Baranoa'),
	(146, 'Atlántico', 'Campo de la Cruz'),
	(147, 'Atlántico', 'Candelaria'),
	(148, 'Atlántico', 'Galapa'),
	(149, 'Atlántico', 'Juan de Acosta'),
	(150, 'Atlántico', 'Luruaco'),
	(151, 'Atlántico', 'Malambo'),
	(152, 'Atlántico', 'Manatí'),
	(153, 'Atlántico', 'Palmar de Varela'),
	(154, 'Atlántico', 'Piojó'),
	(155, 'Atlántico', 'Polonuevo'),
	(156, 'Atlántico', 'Ponedera'),
	(157, 'Atlántico', 'Puerto Colombia'),
	(158, 'Atlántico', 'Repelón'),
	(159, 'Atlántico', 'Sabanagrande'),
	(160, 'Atlántico', 'Sabanalarga'),
	(161, 'Atlántico', 'Santa Lucía'),
	(162, 'Atlántico', 'Santo Tomás'),
	(163, 'Atlántico', 'Soledad'),
	(164, 'Atlántico', 'Suan'),
	(165, 'Atlántico', 'Tubará'),
	(166, 'Atlántico', 'Usiacurí'),
	(167, 'Bolívar', 'Cartagena de Indias'),
	(168, 'Bolívar', 'Achí'),
	(169, 'Bolívar', 'Altos del Rosario'),
	(170, 'Bolívar', 'Arenal'),
	(171, 'Bolívar', 'Arjona'),
	(172, 'Bolívar', 'Arroyohondo'),
	(173, 'Bolívar', 'Barranco de Loba'),
	(174, 'Bolívar', 'Calamar'),
	(175, 'Bolívar', 'Cantagallo'),
	(176, 'Bolívar', 'Cicuco'),
	(177, 'Bolívar', 'Clemencia'),
	(178, 'Bolívar', 'Córdoba'),
	(179, 'Bolívar', 'El Carmen de Bolívar'),
	(180, 'Bolívar', 'El Guamo'),
	(181, 'Bolívar', 'El Peñón'),
	(182, 'Bolívar', 'Hatillo de Loba'),
	(183, 'Bolívar', 'Magangué'),
	(184, 'Bolívar', 'Mahates'),
	(185, 'Bolívar', 'Margarita'),
	(186, 'Bolívar', 'María La Baja'),
	(187, 'Bolívar', 'Montecristo'),
	(188, 'Bolívar', 'Morales'),
	(189, 'Bolívar', 'Norosí'),
	(190, 'Bolívar', 'Pinillos'),
	(191, 'Bolívar', 'Regidor'),
	(192, 'Bolívar', 'Río Viejo'),
	(193, 'Bolívar', 'San Cristóbal'),
	(194, 'Bolívar', 'San Estanislao'),
	(195, 'Bolívar', 'San Fernando'),
	(196, 'Bolívar', 'San Jacinto'),
	(197, 'Bolívar', 'San Jacinto del Cauca'),
	(198, 'Bolívar', 'San Juan Nepomuceno'),
	(199, 'Bolívar', 'San Martín de Loba'),
	(200, 'Bolívar', 'San Pablo'),
	(201, 'Bolívar', 'Santa Catalina'),
	(202, 'Bolívar', 'Santa Cruz de Mompox'),
	(203, 'Bolívar', 'Santa Rosa'),
	(204, 'Bolívar', 'Santa Rosa del Sur'),
	(205, 'Bolívar', 'Simití'),
	(206, 'Bolívar', 'Soplaviento'),
	(207, 'Bolívar', 'Talaigua Nuevo'),
	(208, 'Bolívar', 'Tiquisio'),
	(209, 'Bolívar', 'Turbaco'),
	(210, 'Bolívar', 'Turbaná'),
	(211, 'Bolívar', 'Villanueva'),
	(212, 'Bolívar', 'Zambrano'),
	(213, 'Boyacá', 'Tunja'),
	(214, 'Boyacá', 'Almeida'),
	(215, 'Boyacá', 'Aquitania'),
	(216, 'Boyacá', 'Arcabuco'),
	(217, 'Boyacá', 'Belén'),
	(218, 'Boyacá', 'Berbeo'),
	(219, 'Boyacá', 'Betéitiva'),
	(220, 'Boyacá', 'Boavita'),
	(221, 'Boyacá', 'Boyacá'),
	(222, 'Boyacá', 'Briceño'),
	(223, 'Boyacá', 'Buenavista'),
	(224, 'Boyacá', 'Busbanzá'),
	(225, 'Boyacá', 'Caldas'),
	(226, 'Boyacá', 'Campohermoso'),
	(227, 'Boyacá', 'Cerinza'),
	(228, 'Boyacá', 'Chinavita'),
	(229, 'Boyacá', 'Chiquinquirá'),
	(230, 'Boyacá', 'Chíquiza'),
	(231, 'Boyacá', 'Chiscas'),
	(232, 'Boyacá', 'Chita'),
	(233, 'Boyacá', 'Chitaraque'),
	(234, 'Boyacá', 'Chivatá'),
	(235, 'Boyacá', 'Chivor'),
	(236, 'Boyacá', 'Ciénega'),
	(237, 'Boyacá', 'Cómbita'),
	(238, 'Boyacá', 'Coper'),
	(239, 'Boyacá', 'Corrales'),
	(240, 'Boyacá', 'Covarachía'),
	(241, 'Boyacá', 'Cubará'),
	(242, 'Boyacá', 'Cucaita'),
	(243, 'Boyacá', 'Cuítiva'),
	(244, 'Boyacá', 'Duitama'),
	(245, 'Boyacá', 'El Cocuy'),
	(246, 'Boyacá', 'El Espino'),
	(247, 'Boyacá', 'Firavitoba'),
	(248, 'Boyacá', 'Floresta'),
	(249, 'Boyacá', 'Gachantivá'),
	(250, 'Boyacá', 'Gámeza'),
	(251, 'Boyacá', 'Garagoa'),
	(252, 'Boyacá', 'Guacamayas'),
	(253, 'Boyacá', 'Guateque'),
	(254, 'Boyacá', 'Guayatá'),
	(255, 'Boyacá', 'Güicán'),
	(256, 'Boyacá', 'Iza'),
	(257, 'Boyacá', 'Jenesano'),
	(258, 'Boyacá', 'Jericó'),
	(259, 'Boyacá', 'La Capilla'),
	(260, 'Boyacá', 'La Uvita'),
	(261, 'Boyacá', 'La Victoria'),
	(262, 'Boyacá', 'Labranzagrande'),
	(263, 'Boyacá', 'Macanal'),
	(264, 'Boyacá', 'Maripí'),
	(265, 'Boyacá', 'Miraflores'),
	(266, 'Boyacá', 'Mongua'),
	(267, 'Boyacá', 'Monguí'),
	(268, 'Boyacá', 'Moniquirá'),
	(269, 'Boyacá', 'Motavita'),
	(270, 'Boyacá', 'Muzo'),
	(271, 'Boyacá', 'Nobsa'),
	(272, 'Boyacá', 'Nuevo Colón'),
	(273, 'Boyacá', 'Oicatá'),
	(274, 'Boyacá', 'Otanche'),
	(275, 'Boyacá', 'Pachavita'),
	(276, 'Boyacá', 'Páez'),
	(277, 'Boyacá', 'Paipa'),
	(278, 'Boyacá', 'Pajarito'),
	(279, 'Boyacá', 'Panqueba'),
	(280, 'Boyacá', 'Pauna'),
	(281, 'Boyacá', 'Paya'),
	(282, 'Boyacá', 'Paz de Río'),
	(283, 'Boyacá', 'Pesca'),
	(284, 'Boyacá', 'Pisba'),
	(285, 'Boyacá', 'Puerto Boyacá'),
	(286, 'Boyacá', 'Quípama'),
	(287, 'Boyacá', 'Ramiriquí'),
	(288, 'Boyacá', 'Ráquira'),
	(289, 'Boyacá', 'Rondón'),
	(290, 'Boyacá', 'Saboyá'),
	(291, 'Boyacá', 'Sáchica'),
	(292, 'Boyacá', 'Samacá'),
	(293, 'Boyacá', 'San Eduardo'),
	(294, 'Boyacá', 'San José de Pare'),
	(295, 'Boyacá', 'San Luis de Gaceno'),
	(296, 'Boyacá', 'San Mateo'),
	(297, 'Boyacá', 'San Miguel de Sema'),
	(298, 'Boyacá', 'San Pablo de Borbur'),
	(299, 'Boyacá', 'Santa María'),
	(300, 'Boyacá', 'Santa Rosa de Viterbo'),
	(301, 'Boyacá', 'Santa Sofía'),
	(302, 'Boyacá', 'Santana'),
	(303, 'Boyacá', 'Sativanorte'),
	(304, 'Boyacá', 'Sativasur'),
	(305, 'Boyacá', 'Siachoque'),
	(306, 'Boyacá', 'Soatá'),
	(307, 'Boyacá', 'Socha'),
	(308, 'Boyacá', 'Socotá'),
	(309, 'Boyacá', 'Sogamoso'),
	(310, 'Boyacá', 'Somondoco'),
	(311, 'Boyacá', 'Sora'),
	(312, 'Boyacá', 'Soracá'),
	(313, 'Boyacá', 'Sotaquirá'),
	(314, 'Boyacá', 'Susacón'),
	(315, 'Boyacá', 'Sutamarchán'),
	(316, 'Boyacá', 'Sutatenza'),
	(317, 'Boyacá', 'Tasco'),
	(318, 'Boyacá', 'Tenza'),
	(319, 'Boyacá', 'Tibaná'),
	(320, 'Boyacá', 'Tibasosa'),
	(321, 'Boyacá', 'Tinjacá'),
	(322, 'Boyacá', 'Tipacoque'),
	(323, 'Boyacá', 'Toca'),
	(324, 'Boyacá', 'Togüí'),
	(325, 'Boyacá', 'Tópaga'),
	(326, 'Boyacá', 'Tota'),
	(327, 'Boyacá', 'Tununguá'),
	(328, 'Boyacá', 'Turmequé'),
	(329, 'Boyacá', 'Tuta'),
	(330, 'Boyacá', 'Tutazá'),
	(331, 'Boyacá', 'Úmbita'),
	(332, 'Boyacá', 'Ventaquemada'),
	(333, 'Boyacá', 'Villa de Leyva'),
	(334, 'Boyacá', 'Viracachá'),
	(335, 'Boyacá', 'Zetaquira'),
	(336, 'Caldas', 'Risaralda'),
	(337, 'Caldas', 'Aguadas'),
	(338, 'Caldas', 'Anserma'),
	(339, 'Caldas', 'Aranzazu'),
	(340, 'Caldas', 'Belalcázar'),
	(341, 'Caldas', 'Chinchiná'),
	(342, 'Caldas', 'Filadelfia'),
	(343, 'Caldas', 'La Dorada'),
	(344, 'Caldas', 'La Merced'),
	(345, 'Caldas', 'Manizales'),
	(346, 'Caldas', 'Manzanares'),
	(347, 'Caldas', 'Marmato'),
	(348, 'Caldas', 'Marquetalia'),
	(349, 'Caldas', 'Marulanda'),
	(350, 'Caldas', 'Neira'),
	(351, 'Caldas', 'Norcasia'),
	(352, 'Caldas', 'Pácora'),
	(353, 'Caldas', 'Palestina'),
	(354, 'Caldas', 'Pensilvania'),
	(355, 'Caldas', 'Riosucio'),
	(356, 'Caldas', 'Salamina'),
	(357, 'Caldas', 'Samaná'),
	(358, 'Caldas', 'San José'),
	(359, 'Caldas', 'Supía'),
	(360, 'Caldas', 'Victoria'),
	(361, 'Caldas', 'Villamaría'),
	(362, 'Caldas', 'Viterbo'),
	(363, 'Caquetá', 'Florencia'),
	(364, 'Caquetá', 'Albania'),
	(365, 'Caquetá', 'Belén de los Andaquíes'),
	(366, 'Caquetá', 'Cartagena del Chairá'),
	(367, 'Caquetá', 'Curillo'),
	(368, 'Caquetá', 'El Doncello'),
	(369, 'Caquetá', 'El Paujil'),
	(370, 'Caquetá', 'La Montañita'),
	(371, 'Caquetá', 'Morelia'),
	(372, 'Caquetá', 'Puerto Milán'),
	(373, 'Caquetá', 'Puerto Rico'),
	(374, 'Caquetá', 'San José del Fragua'),
	(375, 'Caquetá', 'San Vicente del Caguán'),
	(376, 'Caquetá', 'Solano'),
	(377, 'Caquetá', 'Solita'),
	(378, 'Caquetá', 'Valparaíso'),
	(379, 'Casanare', 'Yopal'),
	(380, 'Casanare', 'Aguazul'),
	(381, 'Casanare', 'Chámeza'),
	(382, 'Casanare', 'Hato Corozal'),
	(383, 'Casanare', 'La Salina'),
	(384, 'Casanare', 'Maní'),
	(385, 'Casanare', 'Monterrey'),
	(386, 'Casanare', 'Nunchía'),
	(387, 'Casanare', 'Orocué'),
	(388, 'Casanare', 'Paz de Ariporo'),
	(389, 'Casanare', 'Pore'),
	(390, 'Casanare', 'Recetor'),
	(391, 'Casanare', 'Sabanalarga'),
	(392, 'Casanare', 'Sácama'),
	(393, 'Casanare', 'San Luis de Palenque'),
	(394, 'Casanare', 'Támara'),
	(395, 'Casanare', 'Tauramena'),
	(396, 'Casanare', 'Trinidad'),
	(397, 'Casanare', 'Villanueva'),
	(398, 'Casanare', 'Yopal'),
	(399, 'Casanare', 'Aguazul'),
	(400, 'Casanare', 'Chámeza'),
	(401, 'Casanare', 'Hato Corozal'),
	(402, 'Casanare', 'La Salina'),
	(403, 'Casanare', 'Maní'),
	(404, 'Casanare', 'Monterrey'),
	(405, 'Casanare', 'Nunchía'),
	(406, 'Casanare', 'Orocué'),
	(407, 'Casanare', 'Paz de Ariporo'),
	(408, 'Casanare', 'Pore'),
	(409, 'Casanare', 'Recetor'),
	(410, 'Casanare', 'Sabanalarga'),
	(411, 'Casanare', 'Sácama'),
	(412, 'Casanare', 'San Luis de Palenque'),
	(413, 'Casanare', 'Támara'),
	(414, 'Casanare', 'Tauramena'),
	(415, 'Casanare', 'Trinidad'),
	(416, 'Casanare', 'Villanueva'),
	(417, 'Cauca', 'Popayán'),
	(418, 'Cauca', 'Almaguer'),
	(419, 'Cauca', 'Argelia'),
	(420, 'Cauca', 'Balboa'),
	(421, 'Cauca', 'Bolívar'),
	(422, 'Cauca', 'Buenos Aires'),
	(423, 'Cauca', 'Cajibío'),
	(424, 'Cauca', 'Caldono'),
	(425, 'Cauca', 'Caloto'),
	(426, 'Cauca', 'Corinto'),
	(427, 'Cauca', 'El Tambo'),
	(428, 'Cauca', 'Florencia'),
	(429, 'Cauca', 'Guachené'),
	(430, 'Cauca', 'Guapi'),
	(431, 'Cauca', 'Inzá'),
	(432, 'Cauca', 'Jambaló'),
	(433, 'Cauca', 'La Sierra'),
	(434, 'Cauca', 'La Vega'),
	(435, 'Cauca', 'López de Micay'),
	(436, 'Cauca', 'Mercaderes'),
	(437, 'Cauca', 'Miranda'),
	(438, 'Cauca', 'Morales'),
	(439, 'Cauca', 'Padilla'),
	(440, 'Cauca', 'Páez'),
	(441, 'Cauca', 'Patía'),
	(442, 'Cauca', 'Piamonte'),
	(443, 'Cauca', 'Piendamó'),
	(444, 'Cauca', 'Puerto Tejada'),
	(445, 'Cauca', 'Puracé - Coconuco'),
	(446, 'Cauca', 'Rosas'),
	(447, 'Cauca', 'San Sebastián'),
	(448, 'Cauca', 'Santa Rosa'),
	(449, 'Cauca', 'Santander de Quilichao'),
	(450, 'Cauca', 'Silvia'),
	(451, 'Cauca', 'Sotará'),
	(452, 'Cauca', 'Suárez'),
	(453, 'Cauca', 'Sucre'),
	(454, 'Cauca', 'Timbío'),
	(455, 'Cauca', 'Timbiquí'),
	(456, 'Cauca', 'Toribío'),
	(457, 'Cauca', 'Totoró'),
	(458, 'Cauca', 'Villa Rica'),
	(459, 'Cesar', 'Valledupar'),
	(460, 'Cesar', 'Aguachica'),
	(461, 'Cesar', 'Agustín Codazzi'),
	(462, 'Cesar', 'Astrea'),
	(463, 'Cesar', 'Becerril'),
	(464, 'Cesar', 'Bosconia'),
	(465, 'Cesar', 'Chimichagua'),
	(466, 'Cesar', 'Chiriguaná'),
	(467, 'Cesar', 'Curumaní'),
	(468, 'Cesar', 'El Copey'),
	(469, 'Cesar', 'El Paso'),
	(470, 'Cesar', 'Gamarra'),
	(471, 'Cesar', 'González'),
	(472, 'Cesar', 'La Gloria'),
	(473, 'Cesar', 'La Jagua de Ibirico'),
	(474, 'Cesar', 'La Paz'),
	(475, 'Cesar', 'Manaure Balcón del Cesar'),
	(476, 'Cesar', 'Pailitas'),
	(477, 'Cesar', 'Pelaya'),
	(478, 'Cesar', 'Pueblo Bello'),
	(479, 'Cesar', 'Río de Oro'),
	(480, 'Cesar', 'San Alberto'),
	(481, 'Cesar', 'San Diego'),
	(482, 'Cesar', 'San Martín'),
	(483, 'Cesar', 'Tamalameque'),
	(484, 'Chocó', 'Quibdó'),
	(485, 'Chocó', 'Acandí'),
	(486, 'Chocó', 'Alto Baudó'),
	(487, 'Chocó', 'Atrato'),
	(488, 'Chocó', 'Bagadó'),
	(489, 'Chocó', 'Bahía Solano'),
	(490, 'Chocó', 'Bajo Baudó'),
	(491, 'Chocó', 'Bojayá'),
	(492, 'Chocó', 'Cértegui'),
	(493, 'Chocó', 'Condoto'),
	(494, 'Chocó', 'El Cantón de San Pablo'),
	(495, 'Chocó', 'El Carmen de Atrato'),
	(496, 'Chocó', 'El Carmen del Darién'),
	(497, 'Chocó', 'El Litoral de San Juan'),
	(498, 'Chocó', 'Istmina'),
	(499, 'Chocó', 'Juradó'),
	(500, 'Chocó', 'Lloró'),
	(501, 'Chocó', 'Medio Atrato'),
	(502, 'Chocó', 'Medio Baudó'),
	(503, 'Chocó', 'Medio San Juan'),
	(504, 'Chocó', 'Nóvita'),
	(505, 'Chocó', 'Nuquí'),
	(506, 'Chocó', 'Río Iró'),
	(507, 'Chocó', 'Río Quito'),
	(508, 'Chocó', 'Riosucio'),
	(509, 'Chocó', 'San José del Palmar'),
	(510, 'Chocó', 'Sipí'),
	(511, 'Chocó', 'Tadó'),
	(512, 'Chocó', 'Unguía'),
	(513, 'Chocó', 'Unión Panamericana'),
	(514, 'Córdoba', 'Montería'),
	(515, 'Córdoba', 'Ayapel'),
	(516, 'Córdoba', 'Buenavista'),
	(517, 'Córdoba', 'Canalete'),
	(518, 'Córdoba', 'Cereté'),
	(519, 'Córdoba', 'Chimá'),
	(520, 'Córdoba', 'Chinú'),
	(521, 'Córdoba', 'Ciénaga de Oro'),
	(522, 'Córdoba', 'Cotorra'),
	(523, 'Córdoba', 'La Apartada'),
	(524, 'Córdoba', 'Los Córdobas'),
	(525, 'Córdoba', 'Momil'),
	(526, 'Córdoba', 'Montelíbano'),
	(527, 'Córdoba', 'Moñitos'),
	(528, 'Córdoba', 'Planeta Rica'),
	(529, 'Córdoba', 'Pueblo Nuevo'),
	(530, 'Córdoba', 'Puerto Escondido'),
	(531, 'Córdoba', 'Puerto Libertador'),
	(532, 'Córdoba', 'Purísima'),
	(533, 'Córdoba', 'Sahagún'),
	(534, 'Córdoba', 'San Andrés de Sotavento'),
	(535, 'Córdoba', 'San Antero'),
	(536, 'Córdoba', 'San Bernardo del Viento'),
	(537, 'Córdoba', 'San Carlos'),
	(538, 'Córdoba', 'San José de Uré'),
	(539, 'Córdoba', 'San Pelayo'),
	(540, 'Córdoba', 'Santa Cruz de Lorica'),
	(541, 'Córdoba', 'Tierralta'),
	(542, 'Córdoba', 'Tuchín'),
	(543, 'Córdoba', 'Valencia'),
	(544, 'Cundinamarca', 'Agua de Dios'),
	(545, 'Cundinamarca', 'Albán'),
	(546, 'Cundinamarca', 'Anapoima'),
	(547, 'Cundinamarca', 'Anolaima'),
	(548, 'Cundinamarca', 'Apulo'),
	(549, 'Cundinamarca', 'Arbeláez'),
	(550, 'Cundinamarca', 'Beltrán'),
	(551, 'Cundinamarca', 'Bituima'),
	(552, 'Cundinamarca', 'Bojacá'),
	(553, 'Cundinamarca', 'Cabrera'),
	(554, 'Cundinamarca', 'Cachipay'),
	(555, 'Cundinamarca', 'Cajicá'),
	(556, 'Cundinamarca', 'Caparrapí'),
	(557, 'Cundinamarca', 'Cáqueza'),
	(558, 'Cundinamarca', 'Carmen de Carupa'),
	(559, 'Cundinamarca', 'Chaguaní'),
	(560, 'Cundinamarca', 'Chía'),
	(561, 'Cundinamarca', 'Chipaque'),
	(562, 'Cundinamarca', 'Choachí'),
	(563, 'Cundinamarca', 'Chocontá'),
	(564, 'Cundinamarca', 'Cogua'),
	(565, 'Cundinamarca', 'Cota'),
	(566, 'Cundinamarca', 'Cucunubá'),
	(567, 'Cundinamarca', 'El Colegio'),
	(568, 'Cundinamarca', 'El Peñón'),
	(569, 'Cundinamarca', 'El Rosal'),
	(570, 'Cundinamarca', 'Facatativá'),
	(571, 'Cundinamarca', 'Fómeque'),
	(572, 'Cundinamarca', 'Fosca'),
	(573, 'Cundinamarca', 'Funza'),
	(574, 'Cundinamarca', 'Fúquene'),
	(575, 'Cundinamarca', 'Fusagasugá'),
	(576, 'Cundinamarca', 'Gachalá'),
	(577, 'Cundinamarca', 'Gachancipá'),
	(578, 'Cundinamarca', 'Gachetá'),
	(579, 'Cundinamarca', 'Gama'),
	(580, 'Cundinamarca', 'Girardot'),
	(581, 'Cundinamarca', 'Granada'),
	(582, 'Cundinamarca', 'Guachetá'),
	(583, 'Cundinamarca', 'Guaduas'),
	(584, 'Cundinamarca', 'Guasca'),
	(585, 'Cundinamarca', 'Guataquí'),
	(586, 'Cundinamarca', 'Guatavita'),
	(587, 'Cundinamarca', 'Guayabal de Síquima'),
	(588, 'Cundinamarca', 'Guayabetal'),
	(589, 'Cundinamarca', 'Gutiérrez'),
	(590, 'Cundinamarca', 'Jerusalén'),
	(591, 'Cundinamarca', 'Junín'),
	(592, 'Cundinamarca', 'La Calera'),
	(593, 'Cundinamarca', 'La Mesa'),
	(594, 'Cundinamarca', 'La Palma'),
	(595, 'Cundinamarca', 'La Peña'),
	(596, 'Cundinamarca', 'La Vega'),
	(597, 'Cundinamarca', 'Lenguazaque'),
	(598, 'Cundinamarca', 'Machetá'),
	(599, 'Cundinamarca', 'Madrid'),
	(600, 'Cundinamarca', 'Manta'),
	(601, 'Cundinamarca', 'Medina'),
	(602, 'Cundinamarca', 'Mosquera'),
	(603, 'Cundinamarca', 'Nariño'),
	(604, 'Cundinamarca', 'Nemocón'),
	(605, 'Cundinamarca', 'Nilo'),
	(606, 'Cundinamarca', 'Nimaima'),
	(607, 'Cundinamarca', 'Nocaima'),
	(608, 'Cundinamarca', 'Pacho'),
	(609, 'Cundinamarca', 'Paime'),
	(610, 'Cundinamarca', 'Pandi'),
	(611, 'Cundinamarca', 'Paratebueno'),
	(612, 'Cundinamarca', 'Pasca'),
	(613, 'Cundinamarca', 'Puerto Salgar'),
	(614, 'Cundinamarca', 'Pulí'),
	(615, 'Cundinamarca', 'Quebradanegra'),
	(616, 'Cundinamarca', 'Quetame'),
	(617, 'Cundinamarca', 'Quipile'),
	(618, 'Cundinamarca', 'Ricaurte'),
	(619, 'Cundinamarca', 'San Antonio del Tequendama'),
	(620, 'Cundinamarca', 'San Bernardo'),
	(621, 'Cundinamarca', 'San Cayetano'),
	(622, 'Cundinamarca', 'San Francisco'),
	(623, 'Cundinamarca', 'San Juan de Rioseco'),
	(624, 'Cundinamarca', 'Sasaima'),
	(625, 'Cundinamarca', 'Sesquilé'),
	(626, 'Cundinamarca', 'Sibaté'),
	(627, 'Cundinamarca', 'Silvania'),
	(628, 'Cundinamarca', 'Simijaca'),
	(629, 'Cundinamarca', 'Soacha'),
	(630, 'Cundinamarca', 'Sopó'),
	(631, 'Cundinamarca', 'Subachoque'),
	(632, 'Cundinamarca', 'Suesca'),
	(633, 'Cundinamarca', 'Supatá'),
	(634, 'Cundinamarca', 'Susa'),
	(635, 'Cundinamarca', 'Sutatausa'),
	(636, 'Cundinamarca', 'Tabio'),
	(637, 'Cundinamarca', 'Tausa'),
	(638, 'Cundinamarca', 'Tena'),
	(639, 'Cundinamarca', 'Tenjo'),
	(640, 'Cundinamarca', 'Tibacuy'),
	(641, 'Cundinamarca', 'Tibirita'),
	(642, 'Cundinamarca', 'Tocaima'),
	(643, 'Cundinamarca', 'Tocancipá'),
	(644, 'Cundinamarca', 'Topaipí'),
	(645, 'Cundinamarca', 'Ubalá'),
	(646, 'Cundinamarca', 'Ubaque'),
	(647, 'Cundinamarca', 'Ubaté'),
	(648, 'Cundinamarca', 'Une'),
	(649, 'Cundinamarca', 'Útica'),
	(650, 'Cundinamarca', 'Venecia'),
	(651, 'Cundinamarca', 'Vergara'),
	(652, 'Cundinamarca', 'Vianí'),
	(653, 'Cundinamarca', 'Villagómez'),
	(654, 'Cundinamarca', 'Villapinzón'),
	(655, 'Cundinamarca', 'Villeta'),
	(656, 'Cundinamarca', 'Viotá'),
	(657, 'Cundinamarca', 'Yacopí'),
	(658, 'Cundinamarca', 'Zipacón'),
	(659, 'Cundinamarca', 'Zipaquirá'),
	(660, 'Guainía', 'Inírida'),
	(661, 'Guainía', 'Barrancominas'),
	(662, 'Guainía', 'Cacahual'),
	(663, 'Guainía', 'La Guadalupe'),
	(664, 'Guainía', 'Morichal Nuevo'),
	(665, 'Guainía', 'Pana Pana'),
	(666, 'Guainía', 'Puerto Colombia'),
	(667, 'Guainía', 'San Felipe'),
	(668, 'Guaviare', 'San José del Guaviare'),
	(669, 'Guaviare', 'Calamar'),
	(670, 'Guaviare', 'El Retorno'),
	(671, 'Guaviare', 'Miraflores'),
	(672, 'Huila', 'Neiva'),
	(673, 'Huila', 'Acevedo'),
	(674, 'Huila', 'Agrado'),
	(675, 'Huila', 'Aipe'),
	(676, 'Huila', 'Algeciras'),
	(677, 'Huila', 'Altamira'),
	(678, 'Huila', 'Baraya'),
	(679, 'Huila', 'Campoalegre'),
	(680, 'Huila', 'Colombia'),
	(681, 'Huila', 'Elías'),
	(682, 'Huila', 'Garzón'),
	(683, 'Huila', 'Gigante'),
	(684, 'Huila', 'Guadalupe'),
	(685, 'Huila', 'Hobo'),
	(686, 'Huila', 'Íquira'),
	(687, 'Huila', 'Isnos'),
	(688, 'Huila', 'La Argentina'),
	(689, 'Huila', 'La Plata'),
	(690, 'Huila', 'Nátaga'),
	(691, 'Huila', 'Oporapa'),
	(692, 'Huila', 'Paicol'),
	(693, 'Huila', 'Palermo'),
	(694, 'Huila', 'Palestina'),
	(695, 'Huila', 'Pital'),
	(696, 'Huila', 'Pitalito'),
	(697, 'Huila', 'Rivera'),
	(698, 'Huila', 'Saladoblanco'),
	(699, 'Huila', 'San Agustín'),
	(700, 'Huila', 'Santa María'),
	(701, 'Huila', 'Suaza'),
	(702, 'Huila', 'Tarqui'),
	(703, 'Huila', 'Tello'),
	(704, 'Huila', 'Teruel'),
	(705, 'Huila', 'Tesalia'),
	(706, 'Huila', 'Timaná'),
	(707, 'Huila', 'Villavieja'),
	(708, 'Huila', 'Yaguará'),
	(709, 'La Guajira', 'Riohacha'),
	(710, 'La Guajira', 'Albania'),
	(711, 'La Guajira', 'Barrancas'),
	(712, 'La Guajira', 'Dibulla'),
	(713, 'La Guajira', 'Distracción'),
	(714, 'La Guajira', 'El Molino'),
	(715, 'La Guajira', 'Fonseca'),
	(716, 'La Guajira', 'Hatonuevo'),
	(717, 'La Guajira', 'La Jagua del Pilar'),
	(718, 'La Guajira', 'Maicao'),
	(719, 'La Guajira', 'Manaure'),
	(720, 'La Guajira', 'San Juan del Cesar'),
	(721, 'La Guajira', 'Uribia'),
	(722, 'La Guajira', 'Urumita'),
	(723, 'La Guajira', 'Villanueva'),
	(724, 'Magdalena', 'Santa Marta'),
	(725, 'Magdalena', 'Algarrobo'),
	(726, 'Magdalena', 'Aracataca'),
	(727, 'Magdalena', 'Ariguaní'),
	(728, 'Magdalena', 'Cerro de San Antonio'),
	(729, 'Magdalena', 'Chibolo'),
	(730, 'Magdalena', 'Ciénaga'),
	(731, 'Magdalena', 'Concordia'),
	(732, 'Magdalena', 'El Banco'),
	(733, 'Magdalena', 'El Piñón'),
	(734, 'Magdalena', 'El Retén'),
	(735, 'Magdalena', 'Fundación'),
	(736, 'Magdalena', 'Guamal'),
	(737, 'Magdalena', 'Nueva Granada'),
	(738, 'Magdalena', 'Pedraza'),
	(739, 'Magdalena', 'Pijiño del Carmen'),
	(740, 'Magdalena', 'Pivijay'),
	(741, 'Magdalena', 'Plato'),
	(742, 'Magdalena', 'Pueblo Viejo'),
	(743, 'Magdalena', 'Remolino'),
	(744, 'Magdalena', 'Sabanas de San Ángel'),
	(745, 'Magdalena', 'Salamina'),
	(746, 'Magdalena', 'San Sebastián de Buenavista'),
	(747, 'Magdalena', 'San Zenón'),
	(748, 'Magdalena', 'Santa Ana'),
	(749, 'Magdalena', 'Santa Bárbara de Pinto'),
	(750, 'Magdalena', 'Sitionuevo'),
	(751, 'Magdalena', 'Tenerife'),
	(752, 'Magdalena', 'Zapayán'),
	(753, 'Magdalena', 'Zona Bananera'),
	(754, 'Meta', 'Villavicencio'),
	(755, 'Meta', 'Acacías'),
	(756, 'Meta', 'Barranca de Upía'),
	(757, 'Meta', 'Cabuyaro'),
	(758, 'Meta', 'Castilla La Nueva'),
	(759, 'Meta', 'Cubarral'),
	(760, 'Meta', 'Cumaral'),
	(761, 'Meta', 'El Calvario'),
	(762, 'Meta', 'El Castillo'),
	(763, 'Meta', 'El Dorado'),
	(764, 'Meta', 'Fuente de Oro'),
	(765, 'Meta', 'Granada'),
	(766, 'Meta', 'Guamal'),
	(767, 'Meta', 'La Macarena'),
	(768, 'Meta', 'La Uribe'),
	(769, 'Meta', 'Lejanías'),
	(770, 'Meta', 'Mapiripán'),
	(771, 'Meta', 'Mesetas'),
	(772, 'Meta', 'Puerto Concordia'),
	(773, 'Meta', 'Puerto Gaitán'),
	(774, 'Meta', 'Puerto Lleras'),
	(775, 'Meta', 'Puerto López'),
	(776, 'Meta', 'Puerto Rico'),
	(777, 'Meta', 'Restrepo'),
	(778, 'Meta', 'San Carlos de Guaroa'),
	(779, 'Meta', 'San Juan de Arama'),
	(780, 'Meta', 'San Juanito'),
	(781, 'Meta', 'San Martín'),
	(782, 'Meta', 'Vista Hermosa'),
	(783, 'Nariño', 'Pasto'),
	(784, 'Nariño', 'Albán'),
	(785, 'Nariño', 'Aldana'),
	(786, 'Nariño', 'Ancuya'),
	(787, 'Nariño', 'Arboleda'),
	(788, 'Nariño', 'Barbacoas'),
	(789, 'Nariño', 'Belén'),
	(790, 'Nariño', 'Buesaco'),
	(791, 'Nariño', 'Chachagüí'),
	(792, 'Nariño', 'Colón'),
	(793, 'Nariño', 'Consacá'),
	(794, 'Nariño', 'Contadero'),
	(795, 'Nariño', 'Córdoba'),
	(796, 'Nariño', 'Cuaspud'),
	(797, 'Nariño', 'Cumbal'),
	(798, 'Nariño', 'Cumbitara'),
	(799, 'Nariño', 'El Charco'),
	(800, 'Nariño', 'El Peñol'),
	(801, 'Nariño', 'El Rosario'),
	(802, 'Nariño', 'El Tablón de Gómez'),
	(803, 'Nariño', 'El Tambo'),
	(804, 'Nariño', 'Francisco Pizarro'),
	(805, 'Nariño', 'Funes'),
	(806, 'Nariño', 'Guachucal'),
	(807, 'Nariño', 'Guaitarilla'),
	(808, 'Nariño', 'Gualmatán'),
	(809, 'Nariño', 'Iles'),
	(810, 'Nariño', 'Imués'),
	(811, 'Nariño', 'Ipiales'),
	(812, 'Nariño', 'La Cruz'),
	(813, 'Nariño', 'La Florida'),
	(814, 'Nariño', 'La Llanada'),
	(815, 'Nariño', 'La Tola'),
	(816, 'Nariño', 'La Unión'),
	(817, 'Nariño', 'Leiva'),
	(818, 'Nariño', 'Linares'),
	(819, 'Nariño', 'Los Andes'),
	(820, 'Nariño', 'Magüí Payán'),
	(821, 'Nariño', 'Mallama'),
	(822, 'Nariño', 'Mosquera'),
	(823, 'Nariño', 'Nariño'),
	(824, 'Nariño', 'Olaya Herrera'),
	(825, 'Nariño', 'Ospina'),
	(826, 'Nariño', 'Policarpa'),
	(827, 'Nariño', 'Potosí'),
	(828, 'Nariño', 'Providencia'),
	(829, 'Nariño', 'Puerres'),
	(830, 'Nariño', 'Pupiales'),
	(831, 'Nariño', 'Ricaurte'),
	(832, 'Nariño', 'Roberto Payán'),
	(833, 'Nariño', 'Samaniego'),
	(834, 'Nariño', 'San Bernardo'),
	(835, 'Nariño', 'San Lorenzo'),
	(836, 'Nariño', 'San Pablo'),
	(837, 'Nariño', 'San Pedro de Cartago'),
	(838, 'Nariño', 'Sandoná'),
	(839, 'Nariño', 'Santa Bárbara'),
	(840, 'Nariño', 'Santacruz'),
	(841, 'Nariño', 'Sapuyes'),
	(842, 'Nariño', 'Taminango'),
	(843, 'Nariño', 'Tangua'),
	(844, 'Nariño', 'Tumaco'),
	(845, 'Nariño', 'Túquerres'),
	(846, 'Nariño', 'Yacuanquer'),
	(847, 'Norte de Santander', 'Cúcuta'),
	(848, 'Norte de Santander', 'Ábrego'),
	(849, 'Norte de Santander', 'Arboledas'),
	(850, 'Norte de Santander', 'Bochalema'),
	(851, 'Norte de Santander', 'Bucarasica'),
	(852, 'Norte de Santander', 'Cáchira'),
	(853, 'Norte de Santander', 'Cácota'),
	(854, 'Norte de Santander', 'Chinácota'),
	(855, 'Norte de Santander', 'Chitagá'),
	(856, 'Norte de Santander', 'Convención'),
	(857, 'Norte de Santander', 'Cucutilla'),
	(858, 'Norte de Santander', 'Durania'),
	(859, 'Norte de Santander', 'El Carmen'),
	(860, 'Norte de Santander', 'El Tarra'),
	(861, 'Norte de Santander', 'El Zulia'),
	(862, 'Norte de Santander', 'Gramalote'),
	(863, 'Norte de Santander', 'Hacarí'),
	(864, 'Norte de Santander', 'Herrán'),
	(865, 'Norte de Santander', 'La Esperanza'),
	(866, 'Norte de Santander', 'La Playa de Belén'),
	(867, 'Norte de Santander', 'Labateca'),
	(868, 'Norte de Santander', 'Los Patios'),
	(869, 'Norte de Santander', 'Lourdes'),
	(870, 'Norte de Santander', 'Mutiscua'),
	(871, 'Norte de Santander', 'Ocaña'),
	(872, 'Norte de Santander', 'Pamplona'),
	(873, 'Norte de Santander', 'Pamplonita'),
	(874, 'Norte de Santander', 'Puerto Santander'),
	(875, 'Norte de Santander', 'Ragonvalia'),
	(876, 'Norte de Santander', 'Salazar de Las Palmas'),
	(877, 'Norte de Santander', 'San Calixto'),
	(878, 'Norte de Santander', 'San Cayetano'),
	(879, 'Norte de Santander', 'Santiago'),
	(880, 'Norte de Santander', 'Santo Domingo de Silos'),
	(881, 'Norte de Santander', 'Sardinata'),
	(882, 'Norte de Santander', 'Teorama'),
	(883, 'Norte de Santander', 'Tibú'),
	(884, 'Norte de Santander', 'Toledo'),
	(885, 'Norte de Santander', 'Villa Caro'),
	(886, 'Norte de Santander', 'Villa del Rosario'),
	(887, 'Putumayo', 'Mocoa'),
	(888, 'Putumayo', 'Colón'),
	(889, 'Putumayo', 'Orito'),
	(890, 'Putumayo', 'Puerto Asís'),
	(891, 'Putumayo', 'Puerto Caicedo'),
	(892, 'Putumayo', 'Puerto Guzmán'),
	(893, 'Putumayo', 'Puerto Leguízamo'),
	(894, 'Putumayo', 'San Francisco'),
	(895, 'Putumayo', 'San Miguel'),
	(896, 'Putumayo', 'Santiago'),
	(897, 'Putumayo', 'Sibundoy'),
	(898, 'Putumayo', 'Valle del Guamuez'),
	(899, 'Putumayo', 'Villagarzón'),
	(900, 'Quindío', 'Armenia'),
	(901, 'Quindío', 'Buenavista'),
	(902, 'Quindío', 'Calarcá'),
	(903, 'Quindío', 'Circasia'),
	(904, 'Quindío', 'Córdoba'),
	(905, 'Quindío', 'Filandia'),
	(906, 'Quindío', 'Génova'),
	(907, 'Quindío', 'La Tebaida'),
	(908, 'Quindío', 'Montenegro'),
	(909, 'Quindío', 'Pijao'),
	(910, 'Quindío', 'Quimbaya'),
	(911, 'Quindío', 'Salento'),
	(912, 'Risaralda', 'Pereira'),
	(913, 'Risaralda', 'Apía'),
	(914, 'Risaralda', 'Balboa'),
	(915, 'Risaralda', 'Belén de Umbría'),
	(916, 'Risaralda', 'Dosquebradas'),
	(917, 'Risaralda', 'Guática'),
	(918, 'Risaralda', 'La Celia'),
	(919, 'Risaralda', 'La Virginia'),
	(920, 'Risaralda', 'Marsella'),
	(921, 'Risaralda', 'Mistrató'),
	(922, 'Risaralda', 'Pueblo Rico'),
	(923, 'Risaralda', 'Quinchía'),
	(924, 'Risaralda', 'Santa Rosa de Cabal'),
	(925, 'Risaralda', 'Santuario'),
	(926, 'San Andrés y Providencia', 'San Andres Isla'),
	(927, 'San Andrés y Providencia', 'Providencia'),
	(928, 'San Andrés y Providencia', 'Santa Catalina'),
	(929, 'Santander', 'Bucaramanga'),
	(930, 'Santander', 'Aguada'),
	(931, 'Santander', 'Albania'),
	(932, 'Santander', 'Aratoca'),
	(933, 'Santander', 'Barbosa'),
	(934, 'Santander', 'Barichara'),
	(935, 'Santander', 'Barrancabermeja'),
	(936, 'Santander', 'Betulia'),
	(937, 'Santander', 'Bolívar'),
	(938, 'Santander', 'Cabrera'),
	(939, 'Santander', 'California'),
	(940, 'Santander', 'Capitanejo'),
	(941, 'Santander', 'Carcasí'),
	(942, 'Santander', 'Cepitá'),
	(943, 'Santander', 'Cerrito'),
	(944, 'Santander', 'Charalá'),
	(945, 'Santander', 'Charta'),
	(946, 'Santander', 'Chima'),
	(947, 'Santander', 'Chipatá'),
	(948, 'Santander', 'Cimitarra'),
	(949, 'Santander', 'Concepción'),
	(950, 'Santander', 'Confines'),
	(951, 'Santander', 'Contratación'),
	(952, 'Santander', 'Coromoro'),
	(953, 'Santander', 'Curití'),
	(954, 'Santander', 'El Carmen de Chucurí'),
	(955, 'Santander', 'El Guacamayo'),
	(956, 'Santander', 'El Peñón'),
	(957, 'Santander', 'El Playón'),
	(958, 'Santander', 'Encino'),
	(959, 'Santander', 'Enciso'),
	(960, 'Santander', 'Florián'),
	(961, 'Santander', 'Floridablanca'),
	(962, 'Santander', 'Galán'),
	(963, 'Santander', 'Gámbita'),
	(964, 'Santander', 'Girón'),
	(965, 'Santander', 'Guaca'),
	(966, 'Santander', 'Guadalupe'),
	(967, 'Santander', 'Guapotá'),
	(968, 'Santander', 'Guavatá'),
	(969, 'Santander', 'Güepsa'),
	(970, 'Santander', 'Hato'),
	(971, 'Santander', 'Jesús María'),
	(972, 'Santander', 'Jordán'),
	(973, 'Santander', 'La Belleza'),
	(974, 'Santander', 'La Paz'),
	(975, 'Santander', 'Landázuri'),
	(976, 'Santander', 'Lebrija'),
	(977, 'Santander', 'Los Santos'),
	(978, 'Santander', 'Macaravita'),
	(979, 'Santander', 'Málaga'),
	(980, 'Santander', 'Matanza'),
	(981, 'Santander', 'Mogotes'),
	(982, 'Santander', 'Molagavita'),
	(983, 'Santander', 'Ocamonte'),
	(984, 'Santander', 'Oiba'),
	(985, 'Santander', 'Onzaga'),
	(986, 'Santander', 'Palmar'),
	(987, 'Santander', 'Palmas del Socorro'),
	(988, 'Santander', 'Páramo'),
	(989, 'Santander', 'Piedecuesta'),
	(990, 'Santander', 'Pinchote'),
	(991, 'Santander', 'Puente Nacional'),
	(992, 'Santander', 'Puerto Parra'),
	(993, 'Santander', 'Puerto Wilches'),
	(994, 'Santander', 'Rionegro'),
	(995, 'Santander', 'Sabana de Torres'),
	(996, 'Santander', 'San Andrés'),
	(997, 'Santander', 'San Benito'),
	(998, 'Santander', 'San Gil'),
	(999, 'Santander', 'San Joaquín'),
	(1000, 'Santander', 'San José de Miranda'),
	(1001, 'Santander', 'San Miguel'),
	(1002, 'Santander', 'San Vicente de Chucurí'),
	(1003, 'Santander', 'Santa Bárbara'),
	(1004, 'Santander', 'Santa Helena del Opón'),
	(1005, 'Santander', 'Simacota'),
	(1006, 'Santander', 'Socorro'),
	(1007, 'Santander', 'Suaita'),
	(1008, 'Santander', 'Sucre'),
	(1009, 'Santander', 'Suratá'),
	(1010, 'Santander', 'Tona'),
	(1011, 'Santander', 'Valle de San José'),
	(1012, 'Santander', 'Vélez'),
	(1013, 'Santander', 'Vetas'),
	(1014, 'Santander', 'Villanueva'),
	(1015, 'Santander', 'Zapatoca'),
	(1016, 'Sucre', 'Sincelejo'),
	(1017, 'Sucre', 'Buenavista'),
	(1018, 'Sucre', 'Caimito'),
	(1019, 'Sucre', 'Chalán'),
	(1020, 'Sucre', 'Colosó'),
	(1021, 'Sucre', 'Corozal'),
	(1022, 'Sucre', 'Coveñas'),
	(1023, 'Sucre', 'El Roble'),
	(1024, 'Sucre', 'Galeras'),
	(1025, 'Sucre', 'Guaranda'),
	(1026, 'Sucre', 'La Unión'),
	(1027, 'Sucre', 'Los Palmitos'),
	(1028, 'Sucre', 'Majagual'),
	(1029, 'Sucre', 'Morroa'),
	(1030, 'Sucre', 'Ovejas'),
	(1031, 'Sucre', 'Palmito'),
	(1032, 'Sucre', 'Sampués'),
	(1033, 'Sucre', 'San Benito Abad'),
	(1034, 'Sucre', 'San Juan de Betulia'),
	(1035, 'Sucre', 'San Marcos'),
	(1036, 'Sucre', 'San Onofre'),
	(1037, 'Sucre', 'San Pedro'),
	(1038, 'Sucre', 'Santiago de Tolú'),
	(1039, 'Sucre', 'Sincé'),
	(1040, 'Sucre', 'Sucre'),
	(1041, 'Sucre', 'Toluviejo'),
	(1042, 'Tolima', 'Ibagué'),
	(1043, 'Tolima', 'Alpujarra'),
	(1044, 'Tolima', 'Alvarado'),
	(1045, 'Tolima', 'Ambalema'),
	(1046, 'Tolima', 'Anzoátegui'),
	(1047, 'Tolima', 'Armero'),
	(1048, 'Tolima', 'Ataco'),
	(1049, 'Tolima', 'Cajamarca'),
	(1050, 'Tolima', 'Carmen de Apicalá'),
	(1051, 'Tolima', 'Casabianca'),
	(1052, 'Tolima', 'Chaparral'),
	(1053, 'Tolima', 'Coello'),
	(1054, 'Tolima', 'Coyaima'),
	(1055, 'Tolima', 'Cunday'),
	(1056, 'Tolima', 'Dolores'),
	(1057, 'Tolima', 'Espinal'),
	(1058, 'Tolima', 'Falan'),
	(1059, 'Tolima', 'Flandes'),
	(1060, 'Tolima', 'Fresno'),
	(1061, 'Tolima', 'Guamo'),
	(1062, 'Tolima', 'Herveo'),
	(1063, 'Tolima', 'Honda'),
	(1064, 'Tolima', 'Icononzo'),
	(1065, 'Tolima', 'Lérida'),
	(1066, 'Tolima', 'Líbano'),
	(1067, 'Tolima', 'Melgar'),
	(1068, 'Tolima', 'Murillo'),
	(1069, 'Tolima', 'Natagaima'),
	(1070, 'Tolima', 'Ortega'),
	(1071, 'Tolima', 'Palocabildo'),
	(1072, 'Tolima', 'Piedras'),
	(1073, 'Tolima', 'Planadas'),
	(1074, 'Tolima', 'Prado'),
	(1075, 'Tolima', 'Purificación'),
	(1076, 'Tolima', 'Rioblanco'),
	(1077, 'Tolima', 'Roncesvalles'),
	(1078, 'Tolima', 'Rovira'),
	(1079, 'Tolima', 'Saldaña'),
	(1080, 'Tolima', 'San Antonio'),
	(1081, 'Tolima', 'San Luis'),
	(1082, 'Tolima', 'San Sebastián de Mariquita'),
	(1083, 'Tolima', 'Santa Isabel'),
	(1084, 'Tolima', 'Suárez'),
	(1085, 'Tolima', 'Valle de San Juan'),
	(1086, 'Tolima', 'Venadillo'),
	(1087, 'Tolima', 'Villahermosa'),
	(1088, 'Tolima', 'Villarrica'),
	(1089, 'Valle del Cauca', 'Cali'),
	(1090, 'Valle del Cauca', 'Alcalá'),
	(1091, 'Valle del Cauca', 'Andalucía'),
	(1092, 'Valle del Cauca', 'Ansermanuevo'),
	(1093, 'Valle del Cauca', 'Argelia'),
	(1094, 'Valle del Cauca', 'Bolívar'),
	(1095, 'Valle del Cauca', 'Buenaventura'),
	(1096, 'Valle del Cauca', 'Buga'),
	(1097, 'Valle del Cauca', 'Bugalagrande'),
	(1098, 'Valle del Cauca', 'Caicedonia'),
	(1099, 'Valle del Cauca', 'Calima - El Darién'),
	(1100, 'Valle del Cauca', 'Candelaria'),
	(1101, 'Valle del Cauca', 'Cartago'),
	(1102, 'Valle del Cauca', 'Dagua'),
	(1103, 'Valle del Cauca', 'El Águila'),
	(1104, 'Valle del Cauca', 'El Cairo'),
	(1105, 'Valle del Cauca', 'El Cerrito'),
	(1106, 'Valle del Cauca', 'El Dovio'),
	(1107, 'Valle del Cauca', 'Florida'),
	(1108, 'Valle del Cauca', 'Ginebra'),
	(1109, 'Valle del Cauca', 'Guacarí'),
	(1110, 'Valle del Cauca', 'Jamundí'),
	(1111, 'Valle del Cauca', 'La Cumbre'),
	(1112, 'Valle del Cauca', 'La Unión'),
	(1113, 'Valle del Cauca', 'La Victoria'),
	(1114, 'Valle del Cauca', 'Obando'),
	(1115, 'Valle del Cauca', 'Palmira'),
	(1116, 'Valle del Cauca', 'Pradera'),
	(1117, 'Valle del Cauca', 'Restrepo'),
	(1118, 'Valle del Cauca', 'Riofrío'),
	(1119, 'Valle del Cauca', 'Roldanillo'),
	(1120, 'Valle del Cauca', 'San Pedro'),
	(1121, 'Valle del Cauca', 'Sevilla'),
	(1122, 'Valle del Cauca', 'Toro'),
	(1123, 'Valle del Cauca', 'Trujillo'),
	(1124, 'Valle del Cauca', 'Tuluá'),
	(1125, 'Valle del Cauca', 'Ulloa'),
	(1126, 'Valle del Cauca', 'Versalles'),
	(1127, 'Valle del Cauca', 'Vijes'),
	(1128, 'Valle del Cauca', 'Yotoco'),
	(1129, 'Valle del Cauca', 'Yumbo'),
	(1130, 'Valle del Cauca', 'Zarzal'),
	(1131, 'Vaupés', 'Mitú'),
	(1132, 'Vaupés', 'Carurú'),
	(1133, 'Vaupés', 'Pacoa'),
	(1134, 'Vaupés', 'Papunaua'),
	(1135, 'Vaupés', 'Taraira'),
	(1136, 'Vaupés', 'Yavaraté'),
	(1137, 'Vichada', 'Puerto Carreño'),
	(1138, 'Vichada', 'Cumaribo'),
	(1139, 'Vichada', 'La Primavera'),
	(1140, 'Vichada', 'Santa Rosalía');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.contratacions
CREATE TABLE IF NOT EXISTS `contratacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.contratacions: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contratacions` DISABLE KEYS */;
REPLACE INTO `contratacions` (`id`, `id_filtro`, `cedula`, `nombre`, `telefono`, `correo`, `cargos`, `campaña`, `fuente`, `residencia`, `id_localidad`, `hv`, `serv_publico`, `cert_bancaria`, `bancos`, `ex_medico`, `ant_procuraduria`, `ant_ponal`, `copia_cedula`, `cantidadcedula`, `libreta_militar`, `cert_bachiller`, `cert_otros`, `cantidadcert`, `ref_laborales`, `cantidadlab`, `ref_personales`, `cantidadper`, `cert_eps`, `cert_pensiones`, `cert_cesantias`, `nucleo_familiar`, `documentos`, `observaciones`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'Banco Colpatria', 'ETB', 'Vincuventas', 'Aledaños', 'Madrid', 'Si', 'Si', 'Si', 'Banco Colpatria', 'Si', 'Si', 'Si', 'Si', 5, 'Si', 'Si', 'Si', 5, 'Si', 2, 'Si', 2, 'Si', 'Si', 'Si', 'Si', 'sdfsfsdfsd', 'sdfsdfsdfsf', 'activo', '2021-03-05 18:08:33', '2021-03-05 18:10:34'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', 'Asesor de Cartera', 'QNT', 'redes', 'Bogotá', 'Bosa', 'Si', 'Si', 'Si', 'Banco Colpatria', 'Si', 'Si', 'Si', 'Si', 5, 'Si', 'Si', 'Si', 2, 'Si', 2, 'Si', 2, 'Si', 'Si', 'Si', 'Si', 'prueba de registro de datos', 'ok ok', 'activo', '2021-03-08 14:48:10', '2021-03-08 14:48:10'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', 'Banco Colpatria', 'ETB', 'Computrabajo', 'Aledaños', 'Chía', 'Si', 'Si', 'Si', 'Banco Colpatria', 'Si', 'Si', 'Si', 'Si', 5, 'No aplica', 'Si', 'Si', 3, 'Si', 2, 'Si', 2, 'Si', 'Si', 'Si', 'No Aplica', NULL, 'ok todo', 'activo', '2021-03-10 12:36:11', '2021-03-10 12:37:36');
/*!40000 ALTER TABLE `contratacions` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.coordinadores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `coordinadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `coordinadores` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `Id_departamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.departamentos: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
REPLACE INTO `departamentos` (`Id_departamento`, `Nombre`) VALUES
	(1, 'Bogotá D.C.'),
	(2, 'Amazonas'),
	(3, 'Antioquia'),
	(4, 'Arauca'),
	(5, 'Atlántico'),
	(6, 'Bolívar'),
	(7, 'Boyacá'),
	(8, 'Caldas'),
	(9, 'Caquetá'),
	(10, 'Casanare'),
	(11, 'Cauca'),
	(12, 'Cesar'),
	(13, 'Chocó'),
	(14, 'Córdoba'),
	(15, 'Cundinamarca'),
	(16, 'Guainía'),
	(17, 'Guaviare'),
	(18, 'Huila'),
	(19, 'La Guajira'),
	(20, 'Magdalena'),
	(21, 'Meta'),
	(22, 'Nariño'),
	(23, 'Norte de Santander'),
	(24, 'Putumayo'),
	(25, 'Quindío'),
	(26, 'Risaralda'),
	(27, 'San Andrés y Providencia'),
	(28, 'Santander'),
	(29, 'Sucre'),
	(30, 'Tolima'),
	(31, 'Valle del Cauca'),
	(32, 'Vaupés'),
	(33, 'Vichada');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.dependencia
CREATE TABLE IF NOT EXISTS `dependencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dependencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.dependencia: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dependencia` DISABLE KEYS */;
REPLACE INTO `dependencia` (`id`, `dependencia`) VALUES
	(1, 'Gerencia Administrativa y Financiera'),
	(2, 'Gerencia Comercial y Operativa'),
	(3, 'Operaciones ');
/*!40000 ALTER TABLE `dependencia` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.documentos
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.documentos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.entgerencia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entgerencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `entgerencia` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista1s: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista1s` DISABLE KEYS */;
REPLACE INTO `entrevista1s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `cargo`, `referencia`, `fnacimiento`, `departamento`, `id_ciudad`, `edad`, `TipoVia`, `dr1`, `prefijo1`, `dr2`, `prefijo2`, `dr3`, `orientacion`, `adicional`, `ad1`, `adicional2`, `ad2`, `adicional3`, `ad3`, `barrio`, `residencia`, `id_localidad`, `tFijo`, `tCelular`, `tCelular2`, `tVivienda`, `valor`, `arrendador`, `correoArr`, `sMilitar`, `donde`, `eCivil`, `cuanto`, `quien`, `conoce`, `entvOK`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'Formador senior', 'rector de la universidad', '1980-05-31', 'Bogotá D.C.', 'Bogotá D.C.', 40, 'Carrera', '105', 'B', '56', NULL, '56', 'SUR', 'Casa', '528', 'Conjunto', '483', 'Interior', '15', 'calleja real', 'Aledaños', 'Madrid', NULL, 3215321325, NULL, 'Propia', NULL, NULL, NULL, 'No', NULL, 'Union libre', '15 años', 'esposa e hijos', 'sskdjfhskjhsdk', 'entrevista 1 ok', '2021-03-05 17:59:34', '2021-03-05 17:59:34'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', 'Asesor Comercial', 'una persona que ya trabajo con la empresa', '1990-11-20', 'Antioquia', 'Medellín', 30, 'Calle', '21', NULL, '23', NULL, '55', 'sur', NULL, NULL, NULL, NULL, NULL, NULL, 'calleja real', 'Bogotá', 'Bosa', NULL, 3215467946, NULL, 'Arrendada', 950000, 'sandra torres', 'sandra@torres.com', 'Si', 'distrito 1', 'Casado(a)', '10 AÑOS', 'esposa e hijos', 'buen lugar', 'entrevista 1 ok', '2021-03-08 09:33:08', '2021-03-08 09:33:08'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', 'Lider datos y metricas', 'una persona que ya trabajo con la empresa', '1980-01-20', 'Antioquia', 'Medellín', 41, 'Carrera', '12', 'a', '29', 'b', '51', 'sur', 'Agrupación', 'el puerto del sol', 'Edificio', '54', 'Apartamento', '2052', 'bella suiza', 'Aledaños', 'Chía', NULL, 3210000000, NULL, 'Familiar', NULL, NULL, NULL, 'No', NULL, 'Casado(a)', '2 años', 'esposa e hijos', 'buen lugar', 'entrevista 1 ok', '2021-03-10 12:28:56', '2021-03-10 12:28:56'),
	(4, 18, 52966866, 'JORGE EMIRO ZAMORA ACEVEDO', 3104497477, 'LORENABLANQUICETT@GMAIL.COM', 'Analista de Calidad', 'nadie', '2002-09-09', 'Casanare', 'Recetor', 18, 'Carrera', '1', NULL, '55', NULL, '92', 'SUR', 'Edificio', '12', NULL, NULL, NULL, NULL, 'atalayas', 'Bogotá', 'Fontibón', NULL, 3215468484, NULL, 'Propia', NULL, NULL, NULL, 'No', NULL, 'Casado(a)', '2 años', 'ESPOSEA E HIJOS', 'buen lugar', 'entrevista 1 ok', '2021-03-10 13:59:04', '2021-03-10 13:59:04');
/*!40000 ALTER TABLE `entrevista1s` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista2s: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista2s` DISABLE KEYS */;
REPLACE INTO `entrevista2s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `sinfamilia`, `familiarp1`, `parentescop1`, `edadp1`, `ocupacionp1`, `telefonop1`, `familiarp2`, `parentescop2`, `edadp2`, `ocupacionp2`, `telefonop2`, `familiarp3`, `parentescop3`, `edadp3`, `ocupacionp3`, `telefonop3`, `familiarp4`, `parentescop4`, `edadp4`, `ocupacionp4`, `telefonop4`, `familiarp5`, `parentescop5`, `edadp5`, `ocupacionp5`, `telefonop5`, `familiarp6`, `parentescop6`, `edadp6`, `ocupacionp6`, `telefonop6`, `familiarp7`, `parentescop7`, `edadp7`, `ocupacionp7`, `telefonop7`, `entvOK`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'No registran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'entrevista 2 ok', '2021-03-05 17:59:56', '2021-03-05 17:59:56'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', NULL, 'maria giraldo', 'MADRE', '50', 'HOGAR', '55555555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'entrevista 2 ok', '2021-03-08 09:34:41', '2021-03-08 09:34:41'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', 'No registran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'entrevista 2 ok', '2021-03-10 12:29:22', '2021-03-10 12:29:22'),
	(4, 18, 52966866, 'JORGE EMIRO ZAMORA ACEVEDO', 3104497477, 'LORENABLANQUICETT@GMAIL.COM', NULL, 'clara marina llanos', 'tio', '59', 'HOGAR', '3212134679', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'entrevista 2 ok', '2021-03-10 14:05:36', '2021-03-10 14:05:36');
/*!40000 ALTER TABLE `entrevista2s` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista3s: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista3s` DISABLE KEYS */;
REPLACE INTO `entrevista3s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `Grado1`, `institucion1`, `años1`, `fecha1`, `titulo1`, `estado1`, `Grado2`, `institucion2`, `años2`, `fecha2`, `titulo2`, `estado2`, `Grado3`, `institucion3`, `años3`, `fecha3`, `titulo3`, `estado3`, `Grado4`, `institucion4`, `años4`, `fecha4`, `titulo4`, `estado4`, `Grado5`, `institucion5`, `años5`, `fecha5`, `titulo5`, `estado5`, `Grado6`, `institucion6`, `años6`, `fecha6`, `titulo6`, `estado6`, `Grado7`, `institucion7`, `años7`, `fecha7`, `titulo7`, `estado7`, `Grado8`, `institucion8`, `años8`, `fecha8`, `titulo8`, `estado8`, `entvOK`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'Primaria', 'nuestra señora del carmen', '5 años', '2010-03-05', 'edu basica primaria', 'Veriicado', 'Secundaria', 'inem santiago perez', '6 años', '2021-03-05', 'EDUCACION BASICA SECUNDARIA', 'Aprobado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', 'Otros', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', 'entrevista 3 ok', '2021-03-05 18:00:33', '2021-03-05 18:00:33'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', 'Primaria', 'maria auxiliadora', '5 años', '1999-03-08', 'edu basica primaria', 'Veriicado', 'Secundaria', 'AGUNTINO SOTOMAYOR', '6 años', '2005-03-08', 'EDUCACION BASICA SECUNDARIA', 'Veriicado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', 'Otros', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', 'entrevista 3 ok', '2021-03-08 09:35:18', '2021-03-08 09:35:18'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', 'Primaria', 'maria auxiliadora', '5 años', '2013-03-10', 'edu basica primaria', 'Veriicado', 'Secundaria', 'inem santiago perez', '6 años', '2017-03-11', 'EDUCACION BASICA SECUNDARIA', 'Veriicado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', 'Otros', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', 'entrevista 3 ok', '2021-03-10 12:29:55', '2021-03-10 12:29:55'),
	(4, 18, 52966866, 'JORGE EMIRO ZAMORA ACEVEDO', 3104497477, 'LORENABLANQUICETT@GMAIL.COM', 'Primaria', 'maria auxiliadora', '5 años', '2007-03-10', 'edu basica primaria', 'Veriicado', 'Secundaria', 'AGUNTINO SOTOMAYOR', '6 años', '2020-07-10', 'EDUCACION BASICA SECUNDARIA', 'Aprobado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', 'Otros', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', 'entrevista 3 ok', '2021-03-10 14:06:23', '2021-03-10 14:06:23');
/*!40000 ALTER TABLE `entrevista3s` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista4s: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista4s` DISABLE KEYS */;
REPLACE INTO `entrevista4s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `sinExp`, `empresa1`, `fechain1`, `fechart1`, `tiempo1`, `hlcargo1`, `jefeinm1`, `teleinf1`, `salarioh1`, `motivor1`, `empresa2`, `fechain2`, `fechart2`, `tiempo2`, `hlcargo2`, `jefeinm2`, `teleinf2`, `salarioh2`, `motivor2`, `empresa3`, `fechain3`, `fechart3`, `tiempo3`, `hlcargo3`, `jefeinm3`, `teleinf3`, `salarioh3`, `motivor3`, `empresa4`, `fechain4`, `fechart4`, `tiempo4`, `hlcargo4`, `jefeinm4`, `teleinf4`, `salarioh4`, `motivor4`, `empresa5`, `fechain5`, `fechart5`, `tiempo5`, `hlcargo5`, `jefeinm5`, `teleinf5`, `salarioh5`, `motivor5`, `entvOK`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'Sin Experiencia', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'entrevista 4 ok', '2021-03-05 18:00:46', '2021-03-05 18:00:46'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', 'Sin Experiencia', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'entrevista 4 ok', '2021-03-08 09:35:32', '2021-03-08 09:35:32'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', NULL, 'claro', '2008-03-16', '2021-03-09', 4741, 'analista', 'pedro maria rodriguez', 5464621322, '980000', 'voluntario', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'entrevista 4 ok', '2021-03-10 12:30:32', '2021-03-10 12:30:32'),
	(4, 18, 52966866, 'JORGE EMIRO ZAMORA ACEVEDO', 3104497477, 'LORENABLANQUICETT@GMAIL.COM', 'Sin Experiencia', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'entrevista 4 ok', '2021-03-10 14:06:39', '2021-03-10 14:06:39');
/*!40000 ALTER TABLE `entrevista4s` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista5s: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista5s` DISABLE KEYS */;
REPLACE INTO `entrevista5s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `aspiracion`, `personasC`, `acCambio`, `tiempoDes`, `queHizo`, `otroProceso`, `CualOtra`, `fortalezas`, `debilidades`, `valores`, `satisfaccion`, `traumaticos`, `cancelado`, `motivoC`, `problemas`, `motivoJ`, `fuma`, `frecuencia`, `deudas`, `debeA`, `cuantoDebe`, `plazo`, `grupoSoc`, `cualGr`, `cuantoTiempo`, `tiempoLibre`, `estadoSalud`, `tratamiento`, `accidentes`, `cualAc`, `procesosAnt`, `familiaresMent`, `entvOK`, `created_at`, `updated_at`) VALUES
	(1, 1, 1090503894, 'MARIA MARLEN SUAREZ RODRIGUEZ', 3007495834, 'FGUTIERREZ0012@GMAIL.COM', '980000', 'si', 'CUIDAR A MIS PADRES', '3 MESES', 'LABORES CASERAS', 'si', 'ninguna', 'RESILENCIA', 'NO ME GUSTA EL TRABAJO BAJO PRESION', 'SOY HONESTA Y CUMPLIDORA DE MIS DEBERES', 'MI CARRERA Y MI FAMILIA', 'muerte de mi madre', 'no', 'fuerza mayor', 'no', 'por alimentos', 'si', 'nunca', 'si', 'nadie', '0', NULL, 'si', 'kkk', 'un año y medio', 'COLCHAS PARA PECES', 'bueno', 'visito a un yerbatero', 'no', 'me cai de un camarote', 'no', 'si', 'entrevista 5 ok', '2021-03-05 18:02:25', '2021-03-05 18:02:25'),
	(2, 9, 28756239, 'GLORIA ROSA ANGARITA CARRASCAL', 3004351477, 'oscargustavonovoarojas@gmail.com', '2500000', 'si', 'hobbies', '3 MESES', 'LABORES CASERAS', 'si', 'ninguna', 'comer y  dormir', 'NO ME GUSTA EL TRABAJO BAJO PRESION', 'SOY HONESTA Y CUMPLIDORA DE MIS DEBERES', 'terminar mis estudios', 'NO SABER NADAR', 'si', 'fuerza mayor', 'si', 'pelea en bares', 'si', 'nunca', 'si', 'nadie', '1000000', '3 AÑOS', 'no', NULL, 'un año y medio', 'COLCHAS PARA PECES', 'bueno', 'ninguno', 'si', 'diabetes', 'si', 'no', 'entrevista 5 ok', '2021-03-08 09:36:28', '2021-03-08 09:36:28'),
	(3, 13, 10012108, 'YAMILE MARTINEZ', 3188464800, 'ROC.KHAN@HOTMAIL.COM', '980000', 'si', 'CUIDAR A MIS PADRES', '3 MESES', 'LABORES CASERAS', 'si', 'ninguna', 'RESILENCIA', 'ninguna', 'honestidad', 'MI CARRERA Y MI FAMILIA', 'perdias de famliares', 'si', 'fuerza mayor', 'si', 'por alimentos', 'si', 'todo el tiempo', 'si', 'bancos y gota a gota', '5200000', 'ninguno', 'si', 'ninguno', 'un año y medio', 'no mucho en realidad', 'PERFECTO', 'si para la gota', 'no', 'diabetes', 'si', 'no', 'entrevista 5 ok', '2021-03-10 12:31:46', '2021-03-10 12:31:46'),
	(4, 18, 52966866, 'JORGE EMIRO ZAMORA ACEVEDO', 3104497477, 'LORENABLANQUICETT@GMAIL.COM', '1200000', 'si', 'recoger perritos', 'un mes', 'oficios varios', 'no', 'NINGUNO', 'todas', 'NO ME GUSTA EL TRABAJO BAJO PRESION', 'no robar', 'MI CARRERA Y MI FAMILIA', 'muerte de mi madre', 'si', 'fuerza mayor', 'si', 'pelea en bares', 'si', 'todo el tiempo', 'si', 'bancos y gota a gota', '120000', '3 AÑOS', 'si', 'ninguno', 'un año y medio', 'COLCHAS PARA PECES', 'PERFECTO', 'si para la gota', 'si', 'tropece con la misma piedra varias veces', 'si', 'si', 'entrevista 5 ok', '2021-03-10 14:07:57', '2021-03-10 14:07:57');
/*!40000 ALTER TABLE `entrevista5s` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.entrevista_fulls: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista_fulls` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrevista_fulls` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ent_finalizacions
CREATE TABLE IF NOT EXISTS `ent_finalizacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsFinales` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoGer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoJefe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsJefe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCont` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ent_finalizacions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_finalizacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ent_finalizacions` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.ent_jefe: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_jefe` DISABLE KEYS */;
/*!40000 ALTER TABLE `ent_jefe` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ent_r_r_h_h_s
CREATE TABLE IF NOT EXISTS `ent_r_r_h_h_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ent_r_r_h_h_s: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_r_r_h_h_s` DISABLE KEYS */;
/*!40000 ALTER TABLE `ent_r_r_h_h_s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.eps
CREATE TABLE IF NOT EXISTS `eps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.eps: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `eps` DISABLE KEYS */;
REPLACE INTO `eps` (`id`, `entidad`) VALUES
	(1, 'Aliansalud Eps (Antes Colmedica)'),
	(2, 'Atme salud '),
	(3, 'Cafesalud'),
	(4, 'Cajacopi Atlantico'),
	(5, 'Capital Salud'),
	(6, 'Comfachoco'),
	(7, 'Comfacundi'),
	(8, 'Comparta'),
	(9, 'Compensar'),
	(10, 'Convida'),
	(11, 'Coomeva'),
	(12, 'Coosalud'),
	(13, 'Cruz Blanca'),
	(14, 'Eps Ecoopsos S.A.S'),
	(15, 'EPS Sanitas'),
	(16, 'Eps Sura (Antes Susalud)'),
	(17, 'Famisanar'),
	(18, 'Medimas'),
	(19, 'Mutual Ser'),
	(20, 'Nueva E.P.S.'),
	(21, 'S.O.S. Servicio Occidental De Salud S.A.'),
	(22, 'Salud Total'),
	(23, 'Salud Vida '),
	(24, 'Sanidad Militar');
/*!40000 ALTER TABLE `eps` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.e_civils
CREATE TABLE IF NOT EXISTS `e_civils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `e_civil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.e_civils: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `e_civils` DISABLE KEYS */;
REPLACE INTO `e_civils` (`id`, `e_civil`) VALUES
	(1, 'Soltero(a)'),
	(2, 'Casado(a)'),
	(3, 'Separado(a)'),
	(4, 'Union libre'),
	(5, 'Viudo(a)');
/*!40000 ALTER TABLE `e_civils` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

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
  `resultadoFormacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obsFormacion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaFormacion` date DEFAULT NULL,
  `fechaCont` date DEFAULT NULL,
  `causalesR` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iDesde` date DEFAULT NULL,
  `apretencion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retejefe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reterrhh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempoTotal` int(11) DEFAULT NULL,
  `obsRetiro` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.filtros: ~39 rows (aproximadamente)
/*!40000 ALTER TABLE `filtros` DISABLE KEYS */;
REPLACE INTO `filtros` (`id`, `fregistro`, `nombre`, `cedula`, `telefono`, `correo`, `perfil`, `campaña`, `fuente`, `citadoE`, `noAplica`, `noInteresado`, `enviadoCapa`, `enviadoExm`, `PruebasE`, `yaTrabaja`, `numeroEqu`, `observacion`, `noAsiste`, `NoResponde2`, `YaNoInt`, `Estudiante`, `noAsisteEnt`, `entrevistaJefeInm`, `entrevistaGerencia`, `enviadocontratacion`, `observacion2`, `entvOK`, `resultadoRrhh`, `obsRrhh`, `fechaRrhh`, `resultadoGer`, `obsGerencia`, `fechaGerencia`, `resultadoJefe`, `obsJefe`, `fechaJefe`, `resultadoFormacion`, `obsFormacion`, `fechaFormacion`, `fechaCont`, `causalesR`, `estado`, `iDesde`, `apretencion`, `retejefe`, `reterrhh`, `tiempoTotal`, `obsRetiro`, `usuario`, `created_at`, `updated_at`) VALUES
	(1, '2021-02-15', 'YAMILE MARTINEZ', 1090503894, 3007495834, 'FGUTIERREZ0012@GMAIL.COM', 'Asesor Comercial', 'ETB', 'Vincuventas', 'Citado Entrevista', '', '', 'enviadoCapa', '', '', '', '', NULL, '', '', '', '', '', '', '', 'enviadocontratacion', 'registro nuevo de prueba', '', 'Enviado a contratación', 'sdfsgfsdfsdf', '2021-03-05', NULL, NULL, '2021-03-05', 'Aprobado', 'dfgdfgdfgdfg', '2021-03-05', 'Aprobado', NULL, '2021-03-05', '2021-03-15', 'Terminación De Contrato', 'inactivo', '2021-04-05', 'on', 'on', 'on', NULL, 'pppppppp', '4,admin', NULL, '2021-03-10 18:39:40'),
	(2, '2021-02-15', 'WALDER ROA CORRAL', 1003163721, 3003250773, 'PAO_RU15@HOTMAIL.COM', 'Analista de Calidad', 'Movistar', 'Computrabajo', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(3, '2021-02-15', 'YAMILE MARTINEZ', 10012108, 3017512997, 'ROC.KHAN@HOTMAIL.COM', 'Asesor Comercial', 'QNT', 'Computrabajo', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Renuncia', 'inactivo', '2021-03-15', 'on', 'on', 'on', NULL, 'se quiere ir', '4,admin', NULL, '2021-03-10 17:02:21'),
	(4, '2021-02-15', 'NAZLY MARGARITA TOBAR VAZQUEZ', 1235045853, 3214355077, 'HUGOMARIOHURTADO@HOTMAIL.COM', 'Analista de nomina', 'Staff Mentius', 'Compensar', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(5, '2021-02-15', 'ALIX LUCIA ORTIZ LOPEZ', 1022402678, 3023888812, 'LUDISE77@HOTMAIL.COM', 'Analista de Reclutamiento y Seleccion', 'Vanti', 'rt', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(6, '2021-02-15', 'ADRIANA MERCHAN ACEVEDO', 1075317066, 3134391062, 'KAROLDAYANA30@GMAIL.COM', 'Analista IT', 'Vanti S A C', 'rj', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(7, '2021-02-15', 'JUAN FERNANDO GIL', 45520570, 3505172933, 'THAROL630114@GMAIL.COM', 'Aprendiz Sena', 'ETB', 'rc', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(8, '2021-02-15', 'NESTOR FABIAN SANCHEZ MALPICA', 1090495367, 3126944354, 'juandtamayo3091@gmail.com', 'Asesor Comercial', 'Movistar', 'univ', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(9, '2021-02-15', 'GLORIA ROSA ANGARITA CARRASCAL', 1090503894, 3004351477, 'FGUTIERREZ0012@GMAIL.COM', '0', 'ETB', 'Vincuventas', 'Citado Entrevista', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', 'enviadocontratacion', 'ok', '', 'Enviado a contratación', 'ok', '2021-03-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15', 'Renuncia', 'inactivo', '2021-04-02', 'on', 'on', 'on', NULL, 'sdasdrrrrrrrrrrr', '4,admin', NULL, '2021-03-10 18:43:17'),
	(10, '2021-02-15', 'INGRITH VANESA GOMEZ MARTINEZ', 1115077284, 3006170191, 'ARQJOSELUIS84@GMAIL.COM', 'Asesor de Servicio al Cliente', 'Staff Mentius', 'hv', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(11, '2021-02-15', 'LADY CAROLINA GARCIA BARRERO', 1065627181, 3053635014, 'katiaccastillo01@gmail.com', 'Asistente Contable', 'Vanti', 'funda', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(12, '2021-02-15', 'YERLIS ALEGRE MESTRA', 36697579, 3105771014, 'juansernahoyos@gmail.com', 'Auxiliar administrativo', 'Vanti S A C', 'Vincuventas', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(13, '2021-02-15', 'YAMILE MARTINEZ', 10012108, 3188464800, 'ROC.KHAN@HOTMAIL.COM', 'Asesor Comercial', 'QNT', 'Computrabajo', 'Citado Entrevista', '', '', 'enviadoCapa', 'enviado a exam', '', '', '', NULL, '', '', '', '', '', '', '', 'enviadocontratacion', NULL, '', 'Cargo requiere segunda entrevista', 'segunda', '2021-03-10', 'Aprobado', 'ok gerente', '2021-03-10', 'Aprobado', 'ok jefe', '2021-03-10', 'Aprobado', 'ok capa', '2021-03-10', NULL, 'Renuncia', 'inactivo', '2021-03-10', 'on', 'on', 'on', NULL, 'se vuelve a borrar datos', '4,admin', NULL, '2021-03-10 17:08:46'),
	(14, '2021-02-15', 'ANDREW STEWENS CASTELLANOS OVALLE', 23011013, 3158367050, 'SARAI380@HOTMAIL.COM', 'Auxiliar IT', 'Movistar', 'SNE', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(15, '2021-02-15', 'LIZETH NATALY PRIETO BUITRAGO', 1067925643, 3108584436, 'ELIMADRIDRANGEL@GMAIL.COM', 'Auxiliar SST', 'QNT', 'Compensar', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(16, '2021-02-15', 'FLOR ERMINDA VELANDIA NOVOA', 1120365405, 3046337312, 'MILEISY@GHOTMAIL.COM', 'Backoffice', 'Staff Mentius', 'rt', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(17, '2021-02-15', 'SOL MARIA MANOTAS PALMA', 31176158, 3004919335, 'ESTEBAN27.28@OUTLOOK.ES', 'Coord. Administrativo', 'Vanti', 'rj', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(18, '2021-02-15', 'JORGE EMIRO ZAMORA ACEVEDO', 52966866, 3104497477, 'LORENABLANQUICETT@GMAIL.COM', 'Coordinador administrativo', 'Vanti S A C', 'rc', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(19, '2021-02-15', 'MARBELI JUDITH GARCIA', 1005297258, 3206917607, 'villajhon36@gmail.com', 'Coordinador de Operacion', 'ETB', 'univ', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(20, '2021-02-15', 'MAYRA ISABEL MEZA LIZARAZO', 51811234, 3117797954, 'rafaelsuarezdt@gmail.com', 'Coordinador de operaciones', 'Movistar', 'redes', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(21, '2021-02-15', 'JHONY LEANDRO GUTIERREZ MARTINEZ', 14650182, 3242169680, 'luisortizzz.1904@gmail.com', 'Datamarshall Junior', 'QNT', 'hv', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(22, '2021-02-15', 'OSCAR EDUARDO MOURAD SAUMETH', 1006772209, 3015545236, 'hectorserna94@gmail.com', 'Datamarshall Senior', 'Staff Mentius', 'funda', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(23, '2021-02-15', 'NEILYN MARICELL ROJAS GARCIA', 80471480, 3142675830, 'lvriosv@gmail.com', 'Director de operaciones', 'Vanti', 'Vincuventas', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(24, '2021-02-15', 'JUAN PABLO LATORRE BERNAL', 1045738940, 3155771123, 'DIEGOALEJANDROJOSE@GMAIL.COM', 'Director financiero', 'Vanti S A C', 'Computrabajo', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(25, '2021-02-15', 'ROBERTO EDUARDO GOMEZ ORDUZ GONZALEZ', 1065867114, 3104263857, 'jarolandreschacon@gmail.com', 'Director IT', 'ETB', 'SNE', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(26, '2021-02-15', 'ANTONIO MARIA BOLAÑO PATERNINA', 1018410341, 3103412332, 'angelamatilde06@gmail.com', 'Director RRHH', 'Movistar', 'Compensar', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(27, '2021-02-15', 'LUIS RAMON RODRIGUEZ ROLON RODRIGUEZ ROLON', 1128280017, 3157406646, 'mfduartes95@gmail.com', 'Formador junior', 'QNT', 'rt', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(28, '2021-02-15', 'CARLOS ARMANDO RIVER MESA', 1233695565, 3167734833, 'ninijesus.8@gmail.com', 'Formador senior', 'Staff Mentius', 'rj', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(29, '2021-02-15', 'JORGE LEONARDO VELASQUEZ GONZALEZ', 80811397, 3148331556, 'luisacuadro25@gmail.com', 'Gerencia Administrativa', 'Vanti', 'rc', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(30, '2021-02-15', 'LUIS CARLOS GARCIA RADA', 76324235, 3017907738, 'DAIROGIM@GMAIL.COM', 'Gerencia Comercial', 'Vanti S A C', 'univ', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(31, '2021-02-15', 'SANTIAGO RESTREPO LOPEZ', 1028014491, 3125728151, 'andaduran727@gmail.com', 'Gerencia General', 'ETB', 'redes', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(32, '2021-02-15', 'WILSON OSWALDO CASTRO', 1013659874, 3014790185, 'jotajotagp21@gmail.com', 'Gerente comercial', 'Movistar', 'hv', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(33, '2021-02-15', 'ASTRID MARCELA SANTANA GARCIA', 1019059117, 3112347743, 'XILENAREYES@GMAIL.COM', 'Gerente financiero', 'QNT', 'funda', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(34, '2021-02-15', 'angie marcela ospina cuesta', 1018496130, 3133848815, 'MACHADOALEX72@GMAIL.COM', 'Gerente general', 'Staff Mentius', 'Vincuventas', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(35, '2021-02-15', 'JESSICA PAOLA HOYOS LUQUE', 1013593447, 3041560628, 'MACHADOALEX72@GMAIL.COM', 'Gestor documental', 'ETB', 'Computrabajo', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(36, '2021-02-15', 'JENNY PAOLA HERNDEZ FAJARDO', 1048274522, 3196806691, 'andreita-201180@hotmail.com', 'Jefe de operaciones', 'Movistar', 'SNE', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(37, '2021-02-15', 'KELLY DAYANA HERNANDEZ ORDUS', 43163632, 3134911348, 'alvarolaverde@gmail.com', 'Lider Backoffice', 'QNT', 'Compensar', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(38, '2021-02-15', 'YACENIS PATRICIA BELTRAN MEJIA', 1019122164, 3207541203, 'MAIRINALANA01@GMAIL.COM', 'Lider datos y metricas', 'QNT', 'rt', 'Citado Entrevista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,admin', NULL, NULL),
	(39, '2021-03-05', 'Sandra Rodriguez', 58254563, 3215467985, 'Sandra@rodriguez.com', 'Supervisor', 'Vanti', 'redes', 'Citado Entrevista', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registro nuevo por fuera de los seeders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1,admin', '2021-03-05 16:50:11', '2021-03-05 16:50:11');
/*!40000 ALTER TABLE `filtros` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.focos
CREATE TABLE IF NOT EXISTS `focos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.focos: ~46 rows (aproximadamente)
/*!40000 ALTER TABLE `focos` DISABLE KEYS */;
REPLACE INTO `focos` (`id`, `foco`) VALUES
	(1, 'Azteca'),
	(2, 'B2B'),
	(3, 'Banda Ancha'),
	(4, 'Banda Ancha Pymes'),
	(5, 'Banda Ancha Soho'),
	(6, 'CDS'),
	(7, 'CDS Móvil'),
	(8, 'Coorserpark'),
	(9, 'ETB'),
	(10, 'Inbound'),
	(11, 'Inbound Chat'),
	(12, 'Mentius'),
	(13, 'Movistar Libre'),
	(14, 'Nexo Créditos'),
	(15, 'Phoenix'),
	(16, 'Portabilidad'),
	(17, 'Portabilidad Digital'),
	(18, 'Portabilidad Lab'),
	(19, 'Portabilidad Pymes'),
	(20, 'Portabilidad Soho'),
	(21, 'Premium'),
	(22, 'Prepost'),
	(23, 'QNT'),
	(24, 'Reno Repo'),
	(25, 'Staff'),
	(26, 'Staff Administrativo'),
	(27, 'Staff Calidad'),
	(28, 'Staff Comercial'),
	(29, 'Staff Datos Métricas Y Workforce'),
	(30, 'Staff Desarrollo'),
	(31, 'Staff Financiero'),
	(32, 'Staff Formación'),
	(33, 'Staff Gerencial'),
	(34, 'Staff IT'),
	(35, 'Staff RRHH'),
	(36, 'Staff Validación'),
	(37, 'Totalización'),
	(38, 'Up Grade'),
	(39, 'Up Grade fija'),
	(40, 'Up Grade Lab'),
	(41, 'Up Grade Pymes'),
	(42, 'Vanti'),
	(43, 'Vanti Retención'),
	(44, 'Vanti S A C RPO'),
	(45, 'Vanti S A C SAP'),
	(46, 'Vanti Ventas');
/*!40000 ALTER TABLE `focos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.fuentes
CREATE TABLE IF NOT EXISTS `fuentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fuente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.fuentes: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `fuentes` DISABLE KEYS */;
REPLACE INTO `fuentes` (`id`, `fuente`) VALUES
	(1, 'Vincuventas'),
	(2, 'Computrabajo'),
	(3, 'SNE'),
	(4, 'Compensar'),
	(5, 'rt'),
	(6, 'rj'),
	(7, 'rc'),
	(8, 'univ'),
	(9, 'redes'),
	(10, 'hv'),
	(11, 'funda');
/*!40000 ALTER TABLE `fuentes` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.generos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
REPLACE INTO `generos` (`id`, `genero`) VALUES
	(1, 'Masculino'),
	(2, 'femenino'),
	(3, 'Otro');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.localidad
CREATE TABLE IF NOT EXISTS `localidad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.localidad: ~38 rows (aproximadamente)
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
REPLACE INTO `localidad` (`id`, `id_residencia`, `localidad`) VALUES
	(1, 'Bogotá', 'Usaquén'),
	(2, 'Bogotá', 'Chapinero'),
	(3, 'Bogotá', 'Santa Fe'),
	(4, 'Bogotá', 'San Cristóbal'),
	(5, 'Bogotá', 'Usme'),
	(6, 'Bogotá', 'Tunjuelito'),
	(7, 'Bogotá', 'Bosa'),
	(8, 'Bogotá', 'Kennedy'),
	(9, 'Bogotá', 'Fontibón'),
	(10, 'Bogotá', 'Engativá'),
	(11, 'Bogotá', 'Suba'),
	(12, 'Bogotá', 'Barrios Unidos'),
	(13, 'Bogotá', 'Teusaquillo'),
	(14, 'Bogotá', 'Los Mártires'),
	(15, 'Bogotá', 'Antonio Nariño'),
	(16, 'Bogotá', 'Puente Aranda'),
	(17, 'Bogotá', 'La Candelaria'),
	(18, 'Bogotá', 'Rafael Uribe Uribe'),
	(19, 'Bogotá', 'Ciudad Bolívar'),
	(20, 'Bogotá', 'Sumapaz'),
	(21, 'Aledaños', 'Soacha'),
	(22, 'Aledaños', 'Facatativá'),
	(23, 'Aledaños', 'Chía'),
	(24, 'Aledaños', 'Zipaquirá'),
	(25, 'Aledaños', 'Mosquera'),
	(26, 'Aledaños', 'Madrid'),
	(27, 'Aledaños', 'Funza'),
	(28, 'Aledaños', 'Cajicá'),
	(29, 'Aledaños', 'Sibaté'),
	(30, 'Aledaños', 'Tocancipá'),
	(31, 'Aledaños', 'Tabio'),
	(32, 'Aledaños', 'La Calera'),
	(33, 'Aledaños', 'Sopó'),
	(34, 'Aledaños', 'Cota'),
	(35, 'Aledaños', 'Tenjo'),
	(36, 'Aledaños', 'El Rosal'),
	(37, 'Aledaños', 'Gachancipá'),
	(38, 'Aledaños', 'Bojacá');
/*!40000 ALTER TABLE `localidad` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=462 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.migrations: ~72 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(68, '2021_02_19_173053_create_entfinalizacion2_table', 1),
	(391, '2014_10_12_000000_create_users_table', 2),
	(392, '2014_10_12_100000_create_password_resets_table', 2),
	(393, '2019_08_19_000000_create_failed_jobs_table', 2),
	(394, '2020_03_31_113105_create_roles_table', 2),
	(395, '2020_03_31_113548_create_role_user_table', 2),
	(396, '2020_04_06_125005_create_permissions_table', 2),
	(397, '2020_04_06_125249_create_permission_role_table', 2),
	(398, '2020_11_12_110949_create_requisicions_table', 2),
	(399, '2020_11_12_114806_create_cargo', 2),
	(400, '2020_11_12_140358_create_sede', 2),
	(401, '2020_11_13_112230_create_dependencia', 2),
	(402, '2020_11_19_185140_create_reclutamiento', 2),
	(403, '2020_11_23_185359_create_filtros_table', 2),
	(404, '2020_11_23_201901_create_TipoVia_table', 2),
	(405, '2020_11_23_201901_create_perfil_table', 2),
	(406, '2020_12_10_120608_create_departamentos_table', 2),
	(407, '2020_12_10_155148_create_ciudad_table', 2),
	(408, '2020_12_10_174851_create_prefijo_table', 2),
	(409, '2020_12_10_190056_create_orientacion_table', 2),
	(410, '2020_12_10_195950_create_adicional2_table', 2),
	(411, '2020_12_10_195950_create_adicional_table', 2),
	(412, '2020_12_10_211652_create_localidad_table', 2),
	(413, '2020_12_10_212259_create_residencia_table', 2),
	(414, '2020_12_17_131430_create_entrevista1s_table', 2),
	(415, '2020_12_21_171846_create_entrevista2s_table', 2),
	(416, '2020_12_22_130059_create_entrevista3s_table', 2),
	(417, '2020_12_22_165145_create_entrevista4s_table', 2),
	(418, '2020_12_23_094211_create_entrevista5s_table', 2),
	(419, '2020_12_23_132536_create_ent_finalizacions_table', 2),
	(420, '2021_01_04_174756_create_cargo_ent_table', 2),
	(421, '2021_01_05_164959_create_entgerencia_table', 2),
	(422, '2021_01_06_182452_create_ent_jefe_table', 2),
	(423, '2021_01_06_194538_create_resumens_table', 2),
	(424, '2021_01_08_170442_create_capacitacions_table', 2),
	(425, '2021_01_08_194058_create_contratacions_table', 2),
	(426, '2021_01_13_003314_create_bancos_table', 2),
	(427, '2021_01_16_184104_create_documentos_table', 2),
	(428, '2021_01_21_140903_create_cargo_nuevos_table', 2),
	(429, '2021_01_21_163625_create_area_table', 2),
	(430, '2021_01_27_111010_create_novedades_table', 2),
	(431, '2021_01_27_121931_create_asignacions_table', 2),
	(432, '2021_01_28_165718_create_coordinadores_table', 2),
	(433, '2021_01_28_174922_create_nuevo_empleados_table', 2),
	(434, '2021_01_29_160257_create_focos_table', 2),
	(435, '2021_01_29_162135_create_campana_table', 2),
	(436, '2021_02_01_131626_create_nivel_edus_table', 2),
	(437, '2021_02_02_142528_create_parentescos_table', 2),
	(438, '2021_02_02_164124_create_tipo_docs_table', 2),
	(439, '2021_02_02_193739_create_tipo_contratos_table', 2),
	(440, '2021_02_02_195412_create_supervisors_table', 2),
	(441, '2021_02_02_204649_create_modalidads_table', 2),
	(442, '2021_02_02_205045_create_tipo_modalidads_table', 2),
	(443, '2021_02_02_212219_create_cesantias_table', 2),
	(444, '2021_02_02_214255_create_pensiones_table', 2),
	(445, '2021_02_02_215342_create_eps_table', 2),
	(446, '2021_02_03_103422_create_caja_compensacions_table', 2),
	(447, '2021_02_04_163022_create_aprobacions_table', 2),
	(448, '2021_02_05_140818_create_entrevista_fulls_table', 2),
	(449, '2021_02_09_160555_create_motivo_retiros_table', 2),
	(450, '2021_02_09_164104_create_tipo_novedads_table', 2),
	(451, '2021_02_15_084737_create_fuentes_table', 2),
	(452, '2021_02_15_094718_create_t_viviendas_table', 2),
	(453, '2021_02_15_104221_create_s_militars_table', 2),
	(454, '2021_02_15_105555_create_e_civils_table', 2),
	(455, '2021_02_15_171612_create_generos_table', 2),
	(456, '2021_02_15_172141_create_tipo_doc2s_table', 2),
	(457, '2021_02_15_173951_create_rhs_table', 2),
	(458, '2021_02_22_175629_create_resultado_r_r_h_h_s_table', 2),
	(459, '2021_02_24_130016_create_ent_r_r_h_h_s_table', 2),
	(460, '2021_03_02_164706_create_ver_novedades_table', 2),
	(461, '2021_03_10_094931_create_causas_retiros_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.modalidads
CREATE TABLE IF NOT EXISTS `modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.modalidads: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `modalidads` DISABLE KEYS */;
REPLACE INTO `modalidads` (`id`, `modalidad`) VALUES
	(1, 'Sede'),
	(2, 'Home Office');
/*!40000 ALTER TABLE `modalidads` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.motivo_retiros
CREATE TABLE IF NOT EXISTS `motivo_retiros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `motivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.motivo_retiros: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `motivo_retiros` DISABLE KEYS */;
REPLACE INTO `motivo_retiros` (`id`, `motivo`) VALUES
	(1, 'Renuncia Voluntaria'),
	(2, 'Abandono De Cargo'),
	(3, 'Terminacion De Contrato Justa Causa'),
	(4, 'Malas Practicas'),
	(5, 'Procesos Disciplinarios'),
	(6, 'Finalizacion Etapa Productiva Sena'),
	(7, 'Periodo De Prueba'),
	(8, 'Sin Justa Causa'),
	(9, 'Periodo De Prueba Y Abandono De Cargo');
/*!40000 ALTER TABLE `motivo_retiros` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.nivel_edus
CREATE TABLE IF NOT EXISTS `nivel_edus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivelEdu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.nivel_edus: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `nivel_edus` DISABLE KEYS */;
REPLACE INTO `nivel_edus` (`id`, `nivelEdu`) VALUES
	(1, 'Bachiller'),
	(2, 'Bachiller - Técnico'),
	(3, 'Técnico'),
	(4, 'Técnico Profesional'),
	(5, 'Técnico Laboral'),
	(6, 'Tecnólogo'),
	(7, 'Universitario'),
	(8, 'Pregrado'),
	(9, 'Profesional'),
	(10, 'Postgrado'),
	(11, 'Especialización'),
	(12, 'Licenciado');
/*!40000 ALTER TABLE `nivel_edus` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.novedades
CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `campaña` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `totalDias` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.novedades: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `novedades` DISABLE KEYS */;
REPLACE INTO `novedades` (`id`, `id_filtro`, `nombres`, `cedula`, `campaña`, `foco`, `cargo`, `supervisor`, `estado`, `novedad`, `observaciones`, `desde`, `hasta`, `totalDias`, `created_at`, `updated_at`) VALUES
	(1, 1, 'MARIA MARLEN SUAREZ RODRIGUEZ', 1090503894, 'ETB', 'ETB', 'Analista Contable', 'Jenny Rocio Murillo Meneses', 'activo', 'Calamidad', 'se cayo', '2021-03-05', '2021-03-09', 3, '2021-03-05 18:15:26', '2021-03-05 18:15:26'),
	(2, 1, 'MARIA MARLEN SUAREZ RODRIGUEZ', 1090503894, 'ETB', 'ETB', 'Analista Contable', 'Jenny Rocio Murillo Meneses', 'activo', 'No Reporta', 'se registra otra novedad', '2021-03-08', '2021-03-08', 1, '2021-03-08 13:10:32', '2021-03-08 13:10:32'),
	(3, 9, 'GLORIA ROSA ANGARITA CARRASCAL', 28756239, 'Vanti S A C', 'Portabilidad', '0', 'Johanny Alexander Rodríguez Veloza', 'activo', 'Permiso', 'registro nuevo', '2021-03-08', '2021-03-15', 6, '2021-03-08 18:02:44', '2021-03-08 18:02:44'),
	(4, 13, 'YAMILE MARTINEZ', 10012108, 'QNT', 'ETB', 'Asesor Comercial', 'Edwin Jair Roman Buitrago', 'activo', 'Incapacidad', 'se cayo del bus', '2021-03-10', '2021-03-29', 19, '2021-03-10 12:45:05', '2021-03-10 12:45:05');
/*!40000 ALTER TABLE `novedades` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.nuevoempleado
CREATE TABLE IF NOT EXISTS `nuevoempleado` (
  `cargos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla recursos.nuevoempleado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `nuevoempleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `nuevoempleado` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.nuevo_empleados
CREATE TABLE IF NOT EXISTS `nuevo_empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporativo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaContacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentesco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaDireccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactof` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `cargos` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.nuevo_empleados: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `nuevo_empleados` DISABLE KEYS */;
REPLACE INTO `nuevo_empleados` (`id`, `id_filtro`, `nombres`, `tipoDoc`, `cedula`, `fexpe`, `depNac`, `id_ciudad`, `correo`, `tCelular`, `tFijo`, `eCivil`, `direccion`, `residencia`, `lugarNac`, `edad`, `genero`, `rh`, `nivelEdu`, `cargo`, `corporativo`, `personaContacto`, `parentesco`, `personaDireccion`, `contactof`, `contactoCelular`, `numHijos`, `hijosMAs`, `hijosFem`, `Preexistencia`, `alergias`, `medicamentos`, `familiarp1`, `familiarp2`, `familiarp3`, `familiarp4`, `salario`, `ingreso`, `tipo_contratos`, `supervisor`, `sede`, `modalidad`, `tipoModalidad`, `cesantias`, `pensiones`, `eps`, `cajaComp`, `ips`, `arl`, `Tcuenta`, `nCuenta`, `bancos`, `estado`, `foco`, `campaña`, `fuente`, `cargos`, `usuario`, `created_at`, `updated_at`) VALUES
	(1, 1, 'MARIA MARLEN SUAREZ RODRIGUEZ', 'CC', 1090503894, '2021-03-05', 'Córdoba', 'Purísima', 'FGUTIERREZ0012@GMAIL.COM', 3215321325, NULL, 'Union', 'Carrera 105  # 56  - 56 SUR Casa 528 Conjunto 483 Interior 15', 'Aledaños', 'Bogotá', 40, 'Masculino', 'O-', 'Bachiller - Técnico', 'Formador senior', 'on', 'martiza gomez', 'Amigo(a)', 'carrera 12 #25 41', '56421321', '3215215122', NULL, NULL, NULL, NULL, NULL, NULL, ',,,,,,', ',,,,,,', ',,,,,,', ',,,,,,', 980000, '2021-03-15', 'Indefidido', 'Jenny Rocio Murillo Meneses', '100', 'Sede', 'Suplementario', 'Colpensiones', 'Colpensiones', 'Coosalud', 'Compensar', 'nueva ips del caribe', 'Arl Sura', 'Ahorros', 654654132165, 'Banco Colpatria', 'activo', 'ETB', 'ETB', 'Vincuventas', 'Analista Contable', '1,admin', '2021-03-05 18:13:34', '2021-03-05 18:14:39'),
	(2, 9, 'GLORIA ROSA ANGARITA CARRASCAL', 'CC', 28756239, '2007-03-15', 'Cesar', 'Gamarra', 'oscargustavonovoarojas@gmail.com', 3215467946, NULL, 'Casado(a)', 'Calle 21  # 23  - 55 sur', 'Bogotá', 'Antioquia', 30, 'femenino', 'A-', 'Profesional', 'Asesor Comercial', 'on', 'martiza gomez', 'Pareja', 'calle 2 # 3 2 sur', '4581254', '3512461312', NULL, NULL, NULL, NULL, NULL, NULL, 'CC,12312312313,maria giraldo,MADRE,50,on,on', ',,,,,,', ',,,,,,', ',,,,,,', 980000, '2021-03-08', 'Indefidido', 'Johanny Alexander Rodríguez Veloza', 'Suba', 'Sede', 'Presencial', 'Colfondos', 'Colpensiones', 'Cruz Blanca', 'Colsubsidio', 'nueva ips del caribe', 'Arl Sura', 'Ahorros', 6546542185851, 'Banco Colpatria', 'activo', 'Portabilidad', 'Vanti S A C', 'redes', '0', '1,admin', '2021-03-08 17:59:51', '2021-03-08 17:59:51'),
	(3, 13, 'YAMILE MARTINEZ', 'CC', 10012108, '2005-03-10', 'Bogotá D.C.', 'Bogotá D.C.', 'ROC.KHAN@HOTMAIL.COM', 3210000000, 5462525, 'Casado(a)', 'Carrera 12  # 29  - 51 sur Agrupación el puerto del sol Edificio 54 Apartamento 2052', 'Aledaños', 'Antioquia', 41, 'femenino', 'O-', 'Postgrado', NULL, 'on', 'martiza gomez', 'Compañero(a)', 'carrera 12 #25 41', '4581254', '3512461312', 2, 1, 1, NULL, NULL, 'aspirina', ',,,,,,', ',,,,,,', ',,,,,,', ',,,,,,', 980000, '2021-03-29', 'Indefidido', 'Edwin Jair Roman Buitrago', 'Suba', 'Sede', 'Presencial', 'Compensar', 'Colpensiones', 'Mutual Ser', 'Colsubsidio', 'nueva ips del caribe', 'Arl Sura', 'Ahorros', 6546546216, 'Banco Colpatria', 'activo', 'ETB', 'QNT', 'Computrabajo', 'Asesor Comercial', '1,admin', '2021-03-10 12:42:16', '2021-03-10 12:43:17');
/*!40000 ALTER TABLE `nuevo_empleados` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.orientacion
CREATE TABLE IF NOT EXISTS `orientacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `orientacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.orientacion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `orientacion` DISABLE KEYS */;
REPLACE INTO `orientacion` (`id`, `orientacion`) VALUES
	(1, 'ESTE'),
	(2, 'NORTE'),
	(3, 'OCCIDENTE'),
	(4, 'OESTE'),
	(5, 'SUR');
/*!40000 ALTER TABLE `orientacion` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.parentescos
CREATE TABLE IF NOT EXISTS `parentescos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.parentescos: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
REPLACE INTO `parentescos` (`id`, `parentesco`) VALUES
	(1, 'Abuelo(a)'),
	(2, 'Amigo(a)'),
	(3, 'Compañero(a)'),
	(4, 'Conyugue'),
	(5, 'Cuñado(a)'),
	(6, 'Esposo(a)'),
	(7, 'Expareja'),
	(8, 'Hermano(a)'),
	(9, 'Hijo(a)'),
	(10, 'Madre'),
	(11, 'Novio(a)'),
	(12, 'Padre'),
	(13, 'Pareja'),
	(14, 'Primo(a)'),
	(15, 'Suegro(a)'),
	(16, 'Tio(a)'),
	(17, 'Ninguno');
/*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.pensiones
CREATE TABLE IF NOT EXISTS `pensiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.pensiones: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `pensiones` DISABLE KEYS */;
REPLACE INTO `pensiones` (`id`, `fondo`) VALUES
	(1, 'Colfondos'),
	(2, 'Colpensiones'),
	(3, 'Compensar'),
	(4, 'Oldmutual'),
	(5, 'Porvenir'),
	(6, 'Protección');
/*!40000 ALTER TABLE `pensiones` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.perfils
CREATE TABLE IF NOT EXISTS `perfils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.perfils: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `perfils` DISABLE KEYS */;
REPLACE INTO `perfils` (`id`, `perfil`) VALUES
	(1, 'Atención al cliente'),
	(2, 'Ventas telefonía'),
	(3, 'Ventas seguros'),
	(4, 'Cobranza'),
	(5, 'Supervisor'),
	(6, 'Administrativo'),
	(7, 'Archivo'),
	(8, 'Servicios generales​'),
	(9, 'Atención presencial​'),
	(10, 'Venta presencial'),
	(11, 'Ya estuvo en Mentius'),
	(12, 'Nacionalidad'),
	(13, 'No experiencia'),
	(14, 'Contable'),
	(15, 'SST'),
	(16, 'Backoffice'),
	(17, 'Calidad'),
	(18, 'Bienestar'),
	(19, 'Contratación'),
	(20, 'Reclutamiento');
/*!40000 ALTER TABLE `perfils` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.permissions: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
REPLACE INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Index role', 'role.index', 'Un usuario puede listar un Rol', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(2, 'Show role', 'role.show', 'Un usuario puede Ver un Rol', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(3, 'Create role', 'role.create', 'Un usuario puede Crear un Rol', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(4, 'Edit role', 'role.edit', 'Un usuario puede Editar un Rol', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(5, 'Destroy role', 'role.destroy', 'Un usuario puede Destruir un Rol', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(6, 'List user', 'user.index', 'Un usuario puede Listar un Usuario', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(7, 'Show user', 'user.show', 'Un usuario puede Ver un Usuario', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(8, 'Edit user', 'user.edit', 'Un usuario puede Editar un Usuario', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(9, 'Destroy user', 'user.destroy', 'Un usuario puede Destriur un Usuario', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(10, 'Show own user', 'userown.show', 'Un usuario puede Ver a si mismo', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(11, 'Edit own user', 'userown.edit', 'Un usuario puede Editar a si mismo', '2021-03-05 12:45:24', '2021-03-05 12:45:24');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.permission_role: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.prefijo
CREATE TABLE IF NOT EXISTS `prefijo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prefijo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.prefijo: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `prefijo` DISABLE KEYS */;
REPLACE INTO `prefijo` (`id`, `prefijo`) VALUES
	(1, 'A'),
	(2, 'A BIS'),
	(3, 'B'),
	(4, 'B BIS'),
	(5, 'BIS'),
	(6, 'C'),
	(7, 'C BIS'),
	(8, 'D'),
	(9, 'D BIS'),
	(10, 'E'),
	(11, 'E BIS'),
	(12, 'ESTE'),
	(13, 'F'),
	(14, 'F BIS'),
	(15, 'G'),
	(16, 'G BIS'),
	(17, 'H'),
	(18, 'H BIS'),
	(19, 'I'),
	(20, 'I BIS'),
	(21, 'J'),
	(22, 'J BIS'),
	(23, 'NORTE'),
	(24, 'OESTE'),
	(25, 'SUR');
/*!40000 ALTER TABLE `prefijo` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.reclutamientos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `reclutamientos` DISABLE KEYS */;
REPLACE INTO `reclutamientos` (`id`, `titulo`, `foco`, `informacion`, `foto`, `tiempo`, `finicio`, `vincuventas`, `computrabajo`, `sne`, `compensar`, `rt`, `rj`, `rc`, `univ`, `redes`, `Hv`, `fundaciones`, `publica`, `created_at`, `updated_at`) VALUES
	(1, 'SE BUSCA EMPLEADO', 'Servicio al Cliente', 'en este punto de pueden registrar los datos de la publicación y adicionalmente se podrá consultar luego la información', 'C:\\Users\\fcarrillo\\AppData\\Local\\Temp\\php7D91.tmp', 'un mes', '2021-03-08', 'vincuventas', NULL, NULL, NULL, NULL, NULL, NULL, 'univ', NULL, NULL, 'fundaciones', '1,admin', '2021-03-05 16:23:47', '2021-03-05 16:23:47'),
	(2, 'administrador', 'Staff Calidad', 'Prueba de registro', 'C:\\Users\\fcarrillo\\AppData\\Local\\Temp\\php3F20.tmp', 'obra labor', '2021-03-05', 'vincuventas', NULL, NULL, 'compensar', NULL, NULL, NULL, NULL, 'redes', NULL, NULL, '1,admin', '2021-03-05 16:31:10', '2021-03-05 16:31:10');
/*!40000 ALTER TABLE `reclutamientos` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.requisicions: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `requisicions` DISABLE KEYS */;
REPLACE INTO `requisicions` (`id`, `cargo`, `cantidad`, `sede`, `dependencias`, `area`, `motivos`, `reemplaza`, `cual`, `tiempo`, `dias`, `jornada`, `finicio`, `solicita`, `revisado`, `observaciones`, `edad`, `profesion`, `orientacion`, `raza`, `culto`, `imposibilita`, `sexo`, `disfisica`, `dismental`, `nacionalidad`, `created_at`, `updated_at`) VALUES
	(1, 'Analista de bases', 19, 'Suba', 'Gerencia Administrativa y Financiera', 'Área recursos humanos', 'nuevoCupo', NULL, NULL, 'indefinido', 'lunes a viernes', 'completo', '2021-03-05', '1,admin', 'Aprobado', 'registro y tramite', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-05 13:44:41', '2021-03-05 14:36:02'),
	(2, 'Aprendiz Sena', 6, 'Suba', 'Operaciones', 'Métricas y datos', 'maternidad/incapacidad', 'Liliana Pardo', NULL, 'obra labor', 'domingo a domingo', 'completo', '2021-03-15', '1,admin', 'Aprobado', 'requerimiento ok', '20 a 30', NULL, NULL, 'raizal', NULL, NULL, NULL, NULL, NULL, 'colombo - suizo', '2021-03-05 14:21:52', '2021-03-05 14:38:22'),
	(3, 'Asesor Comercial', 35, 'Suba', 'Gerencia Administrativa y Financiera', 'Área recursos humanos', 'Otro', NULL, 'registro de nuevo ciclo de ventas', 'un mes', 'lunes a viernes', 'completo', '2021-04-01', '1,admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-05 14:26:03', '2021-03-05 14:26:03');
/*!40000 ALTER TABLE `requisicions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.residencia
CREATE TABLE IF NOT EXISTS `residencia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `residencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.residencia: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `residencia` DISABLE KEYS */;
REPLACE INTO `residencia` (`id`, `residencia`) VALUES
	(1, 'Bogotá'),
	(2, 'Aledaños');
/*!40000 ALTER TABLE `residencia` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.resultado_r_r_h_h_s
CREATE TABLE IF NOT EXISTS `resultado_r_r_h_h_s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resultado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.resultado_r_r_h_h_s: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `resultado_r_r_h_h_s` DISABLE KEYS */;
REPLACE INTO `resultado_r_r_h_h_s` (`id`, `resultado`) VALUES
	(1, 'Cargo requiere segunda entrevista'),
	(2, 'Enviado a capacitacion'),
	(3, 'Enviado a contratación'),
	(4, 'No aplica para el cargo'),
	(5, 'No contratado'),
	(6, 'Postulado desistio de la oferta'),
	(7, 'Otro');
/*!40000 ALTER TABLE `resultado_r_r_h_h_s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.resumens
CREATE TABLE IF NOT EXISTS `resumens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.resumens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `resumens` DISABLE KEYS */;
/*!40000 ALTER TABLE `resumens` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.rhs
CREATE TABLE IF NOT EXISTS `rhs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_rh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.rhs: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `rhs` DISABLE KEYS */;
REPLACE INTO `rhs` (`id`, `tipo_rh`) VALUES
	(1, 'O-'),
	(2, 'O+'),
	(3, 'A-'),
	(4, 'A+'),
	(5, 'B-'),
	(6, 'B+'),
	(7, 'AB'),
	(8, 'AB+');
/*!40000 ALTER TABLE `rhs` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.roles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `name`, `slug`, `description`, `full-access`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'Administrador', 'yes', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(2, 'Registered User', 'registereduser', 'Usuario Registrado', 'no', '2021-03-05 12:45:24', '2021-03-05 12:45:24'),
	(3, 'Analista User', 'analistauser', 'perfil analista', 'no', '2021-03-05 12:45:24', '2021-03-05 12:45:24');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.role_user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
REPLACE INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2021-03-05 12:45:24', '2021-03-05 12:45:24');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.sede: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
REPLACE INTO `sede` (`id`, `sede`) VALUES
	(1, 'Suba'),
	(2, '100');
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.supervisors
CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.supervisors: ~36 rows (aproximadamente)
/*!40000 ALTER TABLE `supervisors` DISABLE KEYS */;
REPLACE INTO `supervisors` (`id`, `supervisor`) VALUES
	(1, 'Adriana Marcela Caro Montenegro'),
	(2, 'Andres Eduardo Salcedo Guillen'),
	(3, 'Brayan Alejandro Aristizabal Bolivar'),
	(4, 'Edwin Jair Roman Buitrago'),
	(5, 'Fausto Leandro Bustos Tinoco'),
	(6, 'Fernando Alexander Carrillo Leon'),
	(7, 'German Antonio Yepes Castaño'),
	(8, 'Ginna Paola Alarcon Peña'),
	(9, 'Holman Alberto Plazas Sanchez'),
	(10, 'Jackson Javier Castellanos Bohorquez'),
	(11, 'Jenny Geraldine Suarez Gonzalez'),
	(12, 'Jenny Patricia Barbosa Alvarado'),
	(13, 'Jenny Rocio Murillo Meneses'),
	(14, 'Jesus Antonio Archila Soracipa'),
	(15, 'Jhemaina Diaan Gómez Méndez'),
	(16, 'Johanna Paola Castrillon Londoño'),
	(17, 'Johanny Alexander Rodríguez Veloza'),
	(18, 'Jose Alexander Espitia Chinchilla'),
	(19, 'Jose Luis Aponte Blanco'),
	(20, 'Juan Camilo Parra Restrepo'),
	(21, 'Leidy Yiseth Monroy Barragan'),
	(22, 'Lina Maria Devia Escobar'),
	(23, 'Luis Carlos Cuellar Morales'),
	(24, 'Luis Fernando Suarez Cano'),
	(25, 'Magda Andrea Medina Barrios'),
	(26, 'Martin Ricardo Garcia Solano'),
	(27, 'Mentius'),
	(28, 'Miguel Leonardo Tocara Campos'),
	(29, 'Oscar Raúl Sánchez Salgado'),
	(30, 'Rafael Augusto Archila Soracipa'),
	(31, 'Rosa Elvira Leguizamon Carrillo'),
	(32, 'Rosa Helena Martínez Acero'),
	(33, 'Tatiana Sofia Caceres Pinzon'),
	(34, 'Williams Henry Muñoz Ospina'),
	(35, 'Yesica Cristina Aguilar Galeano'),
	(36, 'Zully Paola Vargas Vargas');
/*!40000 ALTER TABLE `supervisors` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.s_militars
CREATE TABLE IF NOT EXISTS `s_militars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sMilitar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.s_militars: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `s_militars` DISABLE KEYS */;
REPLACE INTO `s_militars` (`id`, `sMilitar`) VALUES
	(1, 'Si'),
	(2, 'No');
/*!40000 ALTER TABLE `s_militars` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_contratos
CREATE TABLE IF NOT EXISTS `tipo_contratos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoCon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_contratos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_contratos` DISABLE KEYS */;
REPLACE INTO `tipo_contratos` (`id`, `tipoCon`) VALUES
	(1, 'Indefidido'),
	(2, 'Temporal'),
	(3, 'Aprendizaje'),
	(4, 'Practicas'),
	(5, 'Obra labor'),
	(6, 'Prestacion de servicios');
/*!40000 ALTER TABLE `tipo_contratos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_doc2s
CREATE TABLE IF NOT EXISTS `tipo_doc2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_doc2s: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_doc2s` DISABLE KEYS */;
REPLACE INTO `tipo_doc2s` (`id`, `tipo_doc2`) VALUES
	(1, 'CC'),
	(2, 'CE'),
	(3, 'PEP');
/*!40000 ALTER TABLE `tipo_doc2s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_docs
CREATE TABLE IF NOT EXISTS `tipo_docs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_docs: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_docs` DISABLE KEYS */;
REPLACE INTO `tipo_docs` (`id`, `tipo_doc`) VALUES
	(1, 'CC'),
	(2, 'CE'),
	(3, 'PEP'),
	(4, 'RC'),
	(5, 'TI'),
	(6, 'MS'),
	(7, 'AS'),
	(8, 'PAS');
/*!40000 ALTER TABLE `tipo_docs` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_modalidads
CREATE TABLE IF NOT EXISTS `tipo_modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoModalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_modalidads: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_modalidads` DISABLE KEYS */;
REPLACE INTO `tipo_modalidads` (`id`, `tipoModalidad`) VALUES
	(1, 'Presencial'),
	(2, 'Suplementario'),
	(3, 'Autonomo');
/*!40000 ALTER TABLE `tipo_modalidads` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_novedads
CREATE TABLE IF NOT EXISTS `tipo_novedads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TipoNovedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_novedads: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_novedads` DISABLE KEYS */;
REPLACE INTO `tipo_novedads` (`id`, `TipoNovedad`) VALUES
	(1, 'Abandono'),
	(2, 'Aislamiento'),
	(3, 'Calamidad'),
	(4, 'Capacitación'),
	(5, 'Cumplimiento De Meta'),
	(6, 'Eps'),
	(7, 'Incapacidad'),
	(8, 'Injustificada'),
	(9, 'Licencia De Luto'),
	(10, 'Licencia De Maternidad'),
	(11, 'Licencia No Remunerada'),
	(12, 'No Reporta'),
	(13, 'Permiso'),
	(14, 'Posible Renuncia'),
	(15, 'Problemas Técnicos'),
	(16, 'Renuncia'),
	(17, 'Retirado'),
	(18, 'Sin Conexión'),
	(19, 'Suspensión'),
	(20, 'Terminación De Contrato'),
	(21, 'Vacaciones');
/*!40000 ALTER TABLE `tipo_novedads` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_vias
CREATE TABLE IF NOT EXISTS `tipo_vias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_vias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_vias: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_vias` DISABLE KEYS */;
REPLACE INTO `tipo_vias` (`id`, `tipo_vias`) VALUES
	(1, 'Autopista'),
	(2, 'Avenida'),
	(3, 'Avenida calle'),
	(4, 'Avenida carrera'),
	(5, 'Calle'),
	(6, 'Callejon'),
	(7, 'Camino'),
	(8, 'Campo'),
	(9, 'Carrera'),
	(10, 'Carretera'),
	(11, 'Centro'),
	(12, 'Centro administrativo'),
	(13, 'Centro comercial'),
	(14, 'Centro urbano'),
	(15, 'Comuna'),
	(16, 'Corregimiento'),
	(17, 'Cruce'),
	(18, 'Crucero'),
	(19, 'Cubis'),
	(20, 'Diagonal'),
	(21, 'Distrito militar'),
	(22, 'Entrada'),
	(23, 'Esquina'),
	(24, 'Finca'),
	(25, 'KDX'),
	(26, 'Kilometro'),
	(27, 'LLorente'),
	(28, 'Mercado'),
	(29, 'Parcela'),
	(30, 'Parque'),
	(31, 'Pasaje'),
	(32, 'Paseo'),
	(33, 'Playa'),
	(34, 'Plaza'),
	(35, 'Polideportivo'),
	(36, 'Pozo'),
	(37, 'Pozon'),
	(38, 'Puente'),
	(39, 'Resguardo'),
	(40, 'Retiro'),
	(41, 'Salida'),
	(42, 'Subida'),
	(43, 'Tabiles'),
	(44, 'Terminal'),
	(45, 'Timba'),
	(46, 'Transversal'),
	(47, 'Troncal'),
	(48, 'Via'),
	(49, 'Zona');
/*!40000 ALTER TABLE `tipo_vias` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.t_viviendas
CREATE TABLE IF NOT EXISTS `t_viviendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tvivienda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.t_viviendas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `t_viviendas` DISABLE KEYS */;
REPLACE INTO `t_viviendas` (`id`, `tvivienda`) VALUES
	(1, 'Arrendada'),
	(2, 'Propia'),
	(3, 'Familiar');
/*!40000 ALTER TABLE `t_viviendas` ENABLE KEYS */;

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

-- Volcando datos para la tabla recursos.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `cedula`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 123456789, 'admin@admin.com', NULL, '$2y$10$uYcFNS9ABmCFc9zcCsyhYeh64PSRNwOeHlo90C7Ys.n4DkYSlJl.O', NULL, '2021-03-05 12:45:24', '2021-03-05 12:45:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ver_novedades
CREATE TABLE IF NOT EXISTS `ver_novedades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ver_novedades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ver_novedades` DISABLE KEYS */;
/*!40000 ALTER TABLE `ver_novedades` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
