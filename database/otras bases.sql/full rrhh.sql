-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.5.5-MariaDB-log - mariadb.org binary distribution
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
  `adicional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.adicional: ~40 rows (aproximadamente)
/*!40000 ALTER TABLE `adicional` DISABLE KEYS */;
INSERT INTO `adicional` (`id`, `adicional`) VALUES
	('Agrupación'),
	('Apartamento'),
	('Bloque'),
	('Bodega'),
	('Casa'),
	('Célula'),
	('Conjunto'),
	('Consultorio'),
	('Depósito'),
	( 'Edificio'),
	( 'Este'),
	( 'Etapa'),
	( 'Garaje'),
	( 'Garaje Sótano'),
	( 'Interior'),
	( 'Kiosko'),
	( 'Local'),
	( 'Lote'),
	( 'Manzana'),
	( 'Mezzanine'),
	( 'Módulo'),
	( 'Norte'),
	( 'Occidente'),
	( 'Oeste'),
	( 'Oficina'),
	( 'Penthouse'),
	( 'Piso'),
	( 'Puesto'),
	( 'Salon Comunal'),
	( 'Sector'),
	( 'Sede'),
	( 'Semisótano'),
	( 'Solar'),
	( 'Supermanzana'),
	( 'Sur'),
	( 'Torre'),
	( 'Unidad'),
	( 'Unidad Residencial'),
	( 'Urbanización'),
	( 'Vereda');
/*!40000 ALTER TABLE `adicional` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.adicional2
CREATE TABLE IF NOT EXISTS `adicional2` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adicional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.adicional2: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `adicional2` DISABLE KEYS */;
INSERT INTO `adicional2` (`id`, `adicional`) VALUES
	('Casa'),
	('Local'),
	('Lote'),
	('Manzana'),
	('Mezzanine'),
	('Oficina'),
	('Piso'),
	('Apartamento'),
	('Etapa'),
	( 'Garaje'),
	( 'Garaje Sótano'),
	( 'Interior'),
	( 'Penthouse'),
	( 'Puesto'),
	( 'Módulo'),
	( 'Sede'),
	( 'Semisótano'),
	( 'Supermanzana'),
	( 'Torre'),
	( 'Unidad');
/*!40000 ALTER TABLE `adicional2` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Id_dependencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.area: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`id_area`, `Id_dependencia`, `Area`) VALUES
	('Gerencia Administrativa y Financiera', 'Staff Administrativo'),
	('Gerencia Administrativa y Financiera', 'Área recursos humanos'),
	('Gerencia Administrativa y Financiera', 'Formación'),
	('Gerencia Administrativa y Financiera', 'Área  contable/ Financiera'),
	('Gerencia Administrativa y Financiera', 'Área administrativa'),
	('Gerencia Comercial y Operativa', 'Direccion de operaciones'),
	('Operaciones', 'Área de calidad'),
	('Operaciones', 'Back Office'),
	('Operaciones', 'Métricas y datos'),
	( 'Operaciones', 'Dirección IT');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.asignacions
CREATE TABLE IF NOT EXISTS `asignacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinmedato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `banco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.bancos: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
INSERT INTO `bancos` ( `banco`) VALUES
	('Banco Colpatria'),
	('Banco de Bogotá'),
	('Banco Popular'),
	('Banco CorpBanca'),
	('Bancolombia'),
	('Citibank'),
	('Banco GNB Sudameris'),
	('BBVA Colombia'),
	('Banco de Occidente'),
	( 'Banco Caja Social S.A.'),
	( 'Banco Davivienda'),
	( 'Banagrario'),
	( 'AV Villas'),
	( 'Credifinanciera S.A.'),
	( 'Bancamía S.A.'),
	( 'Banco W S.A.'),
	( 'Bancoomeva'),
	( 'Finandina'),
	( 'Banco Falabella S.A.'),
	( 'Banco Pichincha S.A.'),
	( 'Coopcentral'),
	( 'Banco Santander'),
	( 'Banco Mundo Mujer S.A.'),
	( 'Mibanco S.A.'),
	( 'Banco Serfinanza S.A.');
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.caja_compensacions
CREATE TABLE IF NOT EXISTS `caja_compensacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.caja_compensacions: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `caja_compensacions` DISABLE KEYS */;
INSERT INTO `caja_compensacions` ( `entidad`) VALUES
	( 'Compensar'),
	( 'Colsubsidio'),
	( 'Cafam'),
	( 'Comfaboy');
/*!40000 ALTER TABLE `caja_compensacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.campanas
CREATE TABLE IF NOT EXISTS `campanas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.campanas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `campanas` DISABLE KEYS */;
INSERT INTO `campanas` (`campana`) VALUES
	( 'ETB'),
	( 'Movistar'),
	( 'QNT'),
	( 'Staff Mentius'),
	( 'Vanti'),
	( 'Vanti S A C');
/*!40000 ALTER TABLE `campanas` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.capacitacions
CREATE TABLE IF NOT EXISTS `capacitacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cargo: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` ( `cargo`) VALUES
	('Analista Contable'),
	('Analista de Calidad'),
	('Analista de Contratacion'),
	('Analista de Reclutamiento y Seleccion'),
	('Analista IT'),
	('Asesor Comercial'),
	('Asesor de Cartera'),
	('Asesor de Servicio al Cliente'),
	('Asistente Contable'),
	( 'Auxiliar IT'),
	( 'Coord. Administrativo'),
	( 'Coordinador de Operacion'),
	( 'Datamarshall'),
	( 'Dir. de Operaciones'),
	( 'Dir. IT'),
	( 'Dir. RRHH'),
	( 'Formador'),
	( 'Gerencia Administrativa'),
	( 'Gerencia Comercial'),
	( 'Gerencia General'),
	( 'Lider de Backoffice'),
	( 'Lider de Calidad'),
	( 'Lider de Formacion'),
	( 'Recepcionista'),
	( 'Supervisor');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.cargoent
CREATE TABLE IF NOT EXISTS `cargoent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cargoent: ~37 rows (aproximadamente)
/*!40000 ALTER TABLE `cargoent` DISABLE KEYS */;
INSERT INTO `cargoent` ( `cargo`) VALUES
	('Analista contable'),
	('Analista de bases'),
	('Analista de calidad'),
	('Analista de contratación'),
	('Analista de nomina'),
	('Analista IT'),
	('Aprendiz Sena'),
	('Asesor comercial'),
	('Auxiliar administrativo'),
	('Auxiliar contable'),
	('Auxiliar SST'),
	('Backoffice'),
	('Torre de control'),
	('Coordinador administrativo'),
	('Coordinador de operaciones'),
	('Datamarshall Junior'),
	('Datamarshall Senior'),
	('Director de operaciones'),
	('Director financiero'),
	('Director IT'),
	('Director RRHH'),
	('Formador junior'),
	('Formador senior'),
	('Gerente comercial'),
	('Gerente financiero'),
	('Gerente general'),
	('Gestor documental'),
	('Jefe de operaciones'),
	('Lider Backoffice'),
	('Lider datos y metricas'),
	('Lider de calidad'),
	('Lider de formación'),
	('Lider desarrollo'),
	('Recepcionista'),
	('Recuperador de ventas'),
	('Servicios generales'),
	('Supervisor');
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

-- Volcando estructura para tabla recursos.cesantias
CREATE TABLE IF NOT EXISTS `cesantias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.cesantias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `cesantias` DISABLE KEYS */;
INSERT INTO `cesantias` ( `fondo`) VALUES
	('Colfondos'),
	('Colpensiones'),
	('Compensar'),
	('Fondo Nacional Del Ahorro'),
	('Porvenir'),
	('Protección');
/*!40000 ALTER TABLE `cesantias` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `Id_departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ciudad: ~1.140 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` (`id_ciudad`, `Id_departamento`, `Municipio`) VALUES
	('Bogotá D.C.', 'Bogotá D.C.'),
	('Amazonas', 'Leticia'),
	('Amazonas', 'La Chorrera'),
	('Amazonas', 'La Pedrera'),
	('Amazonas', 'La Victoria'),
	('Amazonas', 'Mirití-Paraná'),
	('Amazonas', 'Puerto Alegría'),
	('Amazonas', 'Puerto Arica'),
	('Amazonas', 'Puerto Nariño'),
	( 'Amazonas', 'Puerto Santander'),
	( 'Amazonas', 'Tarapacá'),
	( 'Antioquia', 'Medellín'),
	( 'Antioquia', 'Abejorral'),
	( 'Antioquia', 'Abriaquí'),
	( 'Antioquia', 'Alejandría'),
	( 'Antioquia', 'Amagá'),
	( 'Antioquia', 'Amalfi'),
	( 'Antioquia', 'Andes'),
	( 'Antioquia', 'Angelópolis'),
	( 'Antioquia', 'Angostura'),
	( 'Antioquia', 'Anorí'),
	( 'Antioquia', 'Anzá'),
	( 'Antioquia', 'Apartadó'),
	( 'Antioquia', 'Arboletes'),
	( 'Antioquia', 'Argelia'),
	( 'Antioquia', 'Armenia'),
	( 'Antioquia', 'Barbosa'),
	( 'Antioquia', 'Bello'),
	( 'Antioquia', 'Belmira'),
	( 'Antioquia', 'Betania'),
	( 'Antioquia', 'Betulia'),
	( 'Antioquia', 'Briceño'),
	( 'Antioquia', 'Buriticá'),
	( 'Antioquia', 'Cáceres'),
	( 'Antioquia', 'Caicedo'),
	( 'Antioquia', 'Caldas'),
	( 'Antioquia', 'Campamento'),
	( 'Antioquia', 'Cañasgordas'),
	( 'Antioquia', 'Caracolí'),
	( 'Antioquia', 'Caramanta'),
	( 'Antioquia', 'Carepa'),
	( 'Antioquia', 'Carolina del Príncipe'),
	( 'Antioquia', 'Caucasia'),
	( 'Antioquia', 'Chigorodó'),
	( 'Antioquia', 'Cisneros'),
	( 'Antioquia', 'Ciudad Bolívar'),
	( 'Antioquia', 'Cocorná'),
	( 'Antioquia', 'Concepción'),
	( 'Antioquia', 'Concordia'),
	( 'Antioquia', 'Copacabana'),
	( 'Antioquia', 'Dabeiba'),
	( 'Antioquia', 'Donmatías'),
	( 'Antioquia', 'Ebéjico'),
	( 'Antioquia', 'El Bagre'),
	( 'Antioquia', 'El Carmen de Viboral'),
	( 'Antioquia', 'El Peñol'),
	( 'Antioquia', 'El Retiro'),
	( 'Antioquia', 'El Santuario'),
	( 'Antioquia', 'Entrerríos'),
	( 'Antioquia', 'Envigado'),
	( 'Antioquia', 'Fredonia'),
	( 'Antioquia', 'Frontino'),
	( 'Antioquia', 'Giraldo'),
	( 'Antioquia', 'Girardota'),
	( 'Antioquia', 'Gómez Plata'),
	( 'Antioquia', 'Granada'),
	( 'Antioquia', 'Guadalupe'),
	( 'Antioquia', 'Guarne'),
	( 'Antioquia', 'Guatapé'),
	( 'Antioquia', 'Heliconia'),
	( 'Antioquia', 'Hispania'),
	( 'Antioquia', 'Itagüí'),
	( 'Antioquia', 'Ituango'),
	( 'Antioquia', 'Jardín'),
	( 'Antioquia', 'Jericó'),
	( 'Antioquia', 'La Ceja'),
	( 'Antioquia', 'La Estrella'),
	( 'Antioquia', 'La Pintada'),
	( 'Antioquia', 'La Unión'),
	( 'Antioquia', 'Liborina'),
	( 'Antioquia', 'Maceo'),
	( 'Antioquia', 'Marinilla'),
	( 'Antioquia', 'Montebello'),
	( 'Antioquia', 'Murindó'),
	( 'Antioquia', 'Mutatá'),
	( 'Antioquia', 'Nariño'),
	( 'Antioquia', 'Nechí'),
	( 'Antioquia', 'Necoclí'),
	( 'Antioquia', 'Olaya'),
	( 'Antioquia', 'Peque'),
	( 'Antioquia', 'Pueblorrico'),
	( 'Antioquia', 'Puerto Berrío'),
	( 'Antioquia', 'Puerto Nare'),
	( 'Antioquia', 'Puerto Triunfo'),
	( 'Antioquia', 'Remedios'),
	( 'Antioquia', 'Rionegro'),
	( 'Antioquia', 'Sabanalarga'),
	( 'Antioquia', 'Sabaneta'),
	( 'Antioquia', 'Salgar'),
	('Antioquia', 'San Andrés de Cuerquia'),
	('Antioquia', 'San Carlos'),
	('Antioquia', 'San Francisco'),
	('Antioquia', 'San Jerónimo'),
	('Antioquia', 'San José de la Montaña'),
	('Antioquia', 'San Juan de Urabá'),
	('Antioquia', 'San Luis'),
	('Antioquia', 'San Pedro de los Milagros'),
	('Antioquia', 'San Pedro de Urabá'),
	('Antioquia', 'San Rafael'),
	('Antioquia', 'San Roque'),
	('Antioquia', 'San Vicente'),
	('Antioquia', 'Santa Bárbara'),
	('Antioquia', 'Santa Fe de Antioquia'),
	('Antioquia', 'Santa Rosa de Osos'),
	('Antioquia', 'Santo Domingo'),
	('Antioquia', 'Segovia'),
	('Antioquia', 'Sonsón'),
	('Antioquia', 'Sopetrán'),
	('Antioquia', 'Támesis'),
	('Antioquia', 'Tarazá'),
	('Antioquia', 'Tarso'),
	('Antioquia', 'Titiribí'),
	('Antioquia', 'Toledo'),
	('Antioquia', 'Turbo'),
	('Antioquia', 'Uramita'),
	('Antioquia', 'Urrao'),
	('Antioquia', 'Valdivia'),
	('Antioquia', 'Valparaíso'),
	('Antioquia', 'Vegachí'),
	('Antioquia', 'Venecia'),
	('Antioquia', 'Vigía del Fuerte'),
	('Antioquia', 'Yalí'),
	('Antioquia', 'Yarumal'),
	('Antioquia', 'Yolombó'),
	('Antioquia', 'Yondó'),
	('Antioquia', 'Zaragoza'),
	('Arauca', 'Arauca'),
	('Arauca', 'Arauquita'),
	('Arauca', 'Cravo Norte'),
	('Arauca', 'Fortul'),
	('Arauca', 'Puerto Rondón'),
	('Arauca', 'Saravena'),
	('Arauca', 'Tame'),
	('Atlántico', 'Barranquilla'),
	('Atlántico', 'Baranoa'),
	('Atlántico', 'Campo de la Cruz'),
	('Atlántico', 'Candelaria'),
	('Atlántico', 'Galapa'),
	('Atlántico', 'Juan de Acosta'),
	('Atlántico', 'Luruaco'),
	('Atlántico', 'Malambo'),
	('Atlántico', 'Manatí'),
	('Atlántico', 'Palmar de Varela'),
	('Atlántico', 'Piojó'),
	('Atlántico', 'Polonuevo'),
	('Atlántico', 'Ponedera'),
	('Atlántico', 'Puerto Colombia'),
	('Atlántico', 'Repelón'),
	('Atlántico', 'Sabanagrande'),
	('Atlántico', 'Sabanalarga'),
	('Atlántico', 'Santa Lucía'),
	('Atlántico', 'Santo Tomás'),
	('Atlántico', 'Soledad'),
	('Atlántico', 'Suan'),
	('Atlántico', 'Tubará'),
	('Atlántico', 'Usiacurí'),
	('Bolívar', 'Cartagena de Indias'),
	('Bolívar', 'Achí'),
	('Bolívar', 'Altos del Rosario'),
	('Bolívar', 'Arenal'),
	('Bolívar', 'Arjona'),
	('Bolívar', 'Arroyohondo'),
	('Bolívar', 'Barranco de Loba'),
	('Bolívar', 'Calamar'),
	('Bolívar', 'Cantagallo'),
	('Bolívar', 'Cicuco'),
	('Bolívar', 'Clemencia'),
	('Bolívar', 'Córdoba'),
	('Bolívar', 'El Carmen de Bolívar'),
	('Bolívar', 'El Guamo'),
	('Bolívar', 'El Peñón'),
	('Bolívar', 'Hatillo de Loba'),
	('Bolívar', 'Magangué'),
	('Bolívar', 'Mahates'),
	('Bolívar', 'Margarita'),
	('Bolívar', 'María La Baja'),
	('Bolívar', 'Montecristo'),
	('Bolívar', 'Morales'),
	('Bolívar', 'Norosí'),
	('Bolívar', 'Pinillos'),
	('Bolívar', 'Regidor'),
	('Bolívar', 'Río Viejo'),
	('Bolívar', 'San Cristóbal'),
	('Bolívar', 'San Estanislao'),
	('Bolívar', 'San Fernando'),
	('Bolívar', 'San Jacinto'),
	('Bolívar', 'San Jacinto del Cauca'),
	('Bolívar', 'San Juan Nepomuceno'),
	('Bolívar', 'San Martín de Loba'),
	('Bolívar', 'San Pablo'),
	('Bolívar', 'Santa Catalina'),
	('Bolívar', 'Santa Cruz de Mompox'),
	('Bolívar', 'Santa Rosa'),
	('Bolívar', 'Santa Rosa del Sur'),
	('Bolívar', 'Simití'),
	('Bolívar', 'Soplaviento'),
	('Bolívar', 'Talaigua Nuevo'),
	('Bolívar', 'Tiquisio'),
	('Bolívar', 'Turbaco'),
	('Bolívar', 'Turbaná'),
	('Bolívar', 'Villanueva'),
	('Bolívar', 'Zambrano'),
	('Boyacá', 'Tunja'),
	('Boyacá', 'Almeida'),
	('Boyacá', 'Aquitania'),
	('Boyacá', 'Arcabuco'),
	('Boyacá', 'Belén'),
	('Boyacá', 'Berbeo'),
	('Boyacá', 'Betéitiva'),
	('Boyacá', 'Boavita'),
	('Boyacá', 'Boyacá'),
	('Boyacá', 'Briceño'),
	('Boyacá', 'Buenavista'),
	('Boyacá', 'Busbanzá'),
	('Boyacá', 'Caldas'),
	('Boyacá', 'Campohermoso'),
	('Boyacá', 'Cerinza'),
	('Boyacá', 'Chinavita'),
	('Boyacá', 'Chiquinquirá'),
	('Boyacá', 'Chíquiza'),
	('Boyacá', 'Chiscas'),
	('Boyacá', 'Chita'),
	('Boyacá', 'Chitaraque'),
	('Boyacá', 'Chivatá'),
	('Boyacá', 'Chivor'),
	('Boyacá', 'Ciénega'),
	('Boyacá', 'Cómbita'),
	('Boyacá', 'Coper'),
	('Boyacá', 'Corrales'),
	('Boyacá', 'Covarachía'),
	('Boyacá', 'Cubará'),
	('Boyacá', 'Cucaita'),
	('Boyacá', 'Cuítiva'),
	('Boyacá', 'Duitama'),
	('Boyacá', 'El Cocuy'),
	('Boyacá', 'El Espino'),
	('Boyacá', 'Firavitoba'),
	('Boyacá', 'Floresta'),
	('Boyacá', 'Gachantivá'),
	('Boyacá', 'Gámeza'),
	('Boyacá', 'Garagoa'),
	('Boyacá', 'Guacamayas'),
	('Boyacá', 'Guateque'),
	('Boyacá', 'Guayatá'),
	('Boyacá', 'Güicán'),
	('Boyacá', 'Iza'),
	('Boyacá', 'Jenesano'),
	('Boyacá', 'Jericó'),
	('Boyacá', 'La Capilla'),
	('Boyacá', 'La Uvita'),
	('Boyacá', 'La Victoria'),
	('Boyacá', 'Labranzagrande'),
	('Boyacá', 'Macanal'),
	('Boyacá', 'Maripí'),
	('Boyacá', 'Miraflores'),
	('Boyacá', 'Mongua'),
	('Boyacá', 'Monguí'),
	('Boyacá', 'Moniquirá'),
	('Boyacá', 'Motavita'),
	('Boyacá', 'Muzo'),
	('Boyacá', 'Nobsa'),
	('Boyacá', 'Nuevo Colón'),
	('Boyacá', 'Oicatá'),
	('Boyacá', 'Otanche'),
	('Boyacá', 'Pachavita'),
	('Boyacá', 'Páez'),
	('Boyacá', 'Paipa'),
	('Boyacá', 'Pajarito'),
	('Boyacá', 'Panqueba'),
	('Boyacá', 'Pauna'),
	('Boyacá', 'Paya'),
	('Boyacá', 'Paz de Río'),
	('Boyacá', 'Pesca'),
	('Boyacá', 'Pisba'),
	('Boyacá', 'Puerto Boyacá'),
	('Boyacá', 'Quípama'),
	('Boyacá', 'Ramiriquí'),
	('Boyacá', 'Ráquira'),
	('Boyacá', 'Rondón'),
	('Boyacá', 'Saboyá'),
	('Boyacá', 'Sáchica'),
	('Boyacá', 'Samacá'),
	('Boyacá', 'San Eduardo'),
	('Boyacá', 'San José de Pare'),
	('Boyacá', 'San Luis de Gaceno'),
	('Boyacá', 'San Mateo'),
	('Boyacá', 'San Miguel de Sema'),
	('Boyacá', 'San Pablo de Borbur'),
	('Boyacá', 'Santa María'),
	('Boyacá', 'Santa Rosa de Viterbo'),
	('Boyacá', 'Santa Sofía'),
	('Boyacá', 'Santana'),
	('Boyacá', 'Sativanorte'),
	('Boyacá', 'Sativasur'),
	('Boyacá', 'Siachoque'),
	('Boyacá', 'Soatá'),
	('Boyacá', 'Socha'),
	('Boyacá', 'Socotá'),
	('Boyacá', 'Sogamoso'),
	('Boyacá', 'Somondoco'),
	('Boyacá', 'Sora'),
	('Boyacá', 'Soracá'),
	('Boyacá', 'Sotaquirá'),
	('Boyacá', 'Susacón'),
	('Boyacá', 'Sutamarchán'),
	('Boyacá', 'Sutatenza'),
	('Boyacá', 'Tasco'),
	('Boyacá', 'Tenza'),
	('Boyacá', 'Tibaná'),
	('Boyacá', 'Tibasosa'),
	('Boyacá', 'Tinjacá'),
	('Boyacá', 'Tipacoque'),
	('Boyacá', 'Toca'),
	('Boyacá', 'Togüí'),
	('Boyacá', 'Tópaga'),
	('Boyacá', 'Tota'),
	('Boyacá', 'Tununguá'),
	('Boyacá', 'Turmequé'),
	('Boyacá', 'Tuta'),
	('Boyacá', 'Tutazá'),
	('Boyacá', 'Úmbita'),
	('Boyacá', 'Ventaquemada'),
	('Boyacá', 'Villa de Leyva'),
	('Boyacá', 'Viracachá'),
	('Boyacá', 'Zetaquira'),
	('Caldas', 'Risaralda'),
	('Caldas', 'Aguadas'),
	('Caldas', 'Anserma'),
	('Caldas', 'Aranzazu'),
	('Caldas', 'Belalcázar'),
	('Caldas', 'Chinchiná'),
	('Caldas', 'Filadelfia'),
	('Caldas', 'La Dorada'),
	('Caldas', 'La Merced'),
	('Caldas', 'Manizales'),
	('Caldas', 'Manzanares'),
	('Caldas', 'Marmato'),
	('Caldas', 'Marquetalia'),
	('Caldas', 'Marulanda'),
	('Caldas', 'Neira'),
	('Caldas', 'Norcasia'),
	('Caldas', 'Pácora'),
	('Caldas', 'Palestina'),
	('Caldas', 'Pensilvania'),
	('Caldas', 'Riosucio'),
	('Caldas', 'Salamina'),
	('Caldas', 'Samaná'),
	('Caldas', 'San José'),
	('Caldas', 'Supía'),
	('Caldas', 'Victoria'),
	('Caldas', 'Villamaría'),
	('Caldas', 'Viterbo'),
	('Caquetá', 'Florencia'),
	('Caquetá', 'Albania'),
	('Caquetá', 'Belén de los Andaquíes'),
	('Caquetá', 'Cartagena del Chairá'),
	('Caquetá', 'Curillo'),
	('Caquetá', 'El Doncello'),
	('Caquetá', 'El Paujil'),
	('Caquetá', 'La Montañita'),
	('Caquetá', 'Morelia'),
	('Caquetá', 'Puerto Milán'),
	('Caquetá', 'Puerto Rico'),
	('Caquetá', 'San José del Fragua'),
	('Caquetá', 'San Vicente del Caguán'),
	('Caquetá', 'Solano'),
	('Caquetá', 'Solita'),
	('Caquetá', 'Valparaíso'),
	('Casanare', 'Yopal'),
	('Casanare', 'Aguazul'),
	('Casanare', 'Chámeza'),
	('Casanare', 'Hato Corozal'),
	('Casanare', 'La Salina'),
	('Casanare', 'Maní'),
	('Casanare', 'Monterrey'),
	('Casanare', 'Nunchía'),
	('Casanare', 'Orocué'),
	('Casanare', 'Paz de Ariporo'),
	('Casanare', 'Pore'),
	('Casanare', 'Recetor'),
	('Casanare', 'Sabanalarga'),
	('Casanare', 'Sácama'),
	('Casanare', 'San Luis de Palenque'),
	('Casanare', 'Támara'),
	('Casanare', 'Tauramena'),
	('Casanare', 'Trinidad'),
	('Casanare', 'Villanueva'),
	('Casanare', 'Yopal'),
	('Casanare', 'Aguazul'),
	('Casanare', 'Chámeza'),
	('Casanare', 'Hato Corozal'),
	('Casanare', 'La Salina'),
	('Casanare', 'Maní'),
	('Casanare', 'Monterrey'),
	('Casanare', 'Nunchía'),
	('Casanare', 'Orocué'),
	('Casanare', 'Paz de Ariporo'),
	('Casanare', 'Pore'),
	('Casanare', 'Recetor'),
	('Casanare', 'Sabanalarga'),
	('Casanare', 'Sácama'),
	('Casanare', 'San Luis de Palenque'),
	('Casanare', 'Támara'),
	('Casanare', 'Tauramena'),
	('Casanare', 'Trinidad'),
	('Casanare', 'Villanueva'),
	('Cauca', 'Popayán'),
	('Cauca', 'Almaguer'),
	('Cauca', 'Argelia'),
	('Cauca', 'Balboa'),
	('Cauca', 'Bolívar'),
	('Cauca', 'Buenos Aires'),
	('Cauca', 'Cajibío'),
	('Cauca', 'Caldono'),
	('Cauca', 'Caloto'),
	('Cauca', 'Corinto'),
	('Cauca', 'El Tambo'),
	('Cauca', 'Florencia'),
	('Cauca', 'Guachené'),
	('Cauca', 'Guapi'),
	('Cauca', 'Inzá'),
	('Cauca', 'Jambaló'),
	('Cauca', 'La Sierra'),
	('Cauca', 'La Vega'),
	('Cauca', 'López de Micay'),
	('Cauca', 'Mercaderes'),
	('Cauca', 'Miranda'),
	('Cauca', 'Morales'),
	('Cauca', 'Padilla'),
	('Cauca', 'Páez'),
	('Cauca', 'Patía'),
	('Cauca', 'Piamonte'),
	('Cauca', 'Piendamó'),
	('Cauca', 'Puerto Tejada'),
	('Cauca', 'Puracé - Coconuco'),
	('Cauca', 'Rosas'),
	('Cauca', 'San Sebastián'),
	('Cauca', 'Santa Rosa'),
	('Cauca', 'Santander de Quilichao'),
	('Cauca', 'Silvia'),
	('Cauca', 'Sotará'),
	('Cauca', 'Suárez'),
	('Cauca', 'Sucre'),
	('Cauca', 'Timbío'),
	('Cauca', 'Timbiquí'),
	('Cauca', 'Toribío'),
	('Cauca', 'Totoró'),
	('Cauca', 'Villa Rica'),
	('Cesar', 'Valledupar'),
	('Cesar', 'Aguachica'),
	('Cesar', 'Agustín Codazzi'),
	('Cesar', 'Astrea'),
	('Cesar', 'Becerril'),
	('Cesar', 'Bosconia'),
	('Cesar', 'Chimichagua'),
	('Cesar', 'Chiriguaná'),
	('Cesar', 'Curumaní'),
	('Cesar', 'El Copey'),
	('Cesar', 'El Paso'),
	('Cesar', 'Gamarra'),
	('Cesar', 'González'),
	('Cesar', 'La Gloria'),
	('Cesar', 'La Jagua de Ibirico'),
	('Cesar', 'La Paz'),
	('Cesar', 'Manaure Balcón del Cesar'),
	('Cesar', 'Pailitas'),
	('Cesar', 'Pelaya'),
	('Cesar', 'Pueblo Bello'),
	('Cesar', 'Río de Oro'),
	('Cesar', 'San Alberto'),
	('Cesar', 'San Diego'),
	('Cesar', 'San Martín'),
	('Cesar', 'Tamalameque'),
	('Chocó', 'Quibdó'),
	('Chocó', 'Acandí'),
	('Chocó', 'Alto Baudó'),
	('Chocó', 'Atrato'),
	('Chocó', 'Bagadó'),
	('Chocó', 'Bahía Solano'),
	('Chocó', 'Bajo Baudó'),
	('Chocó', 'Bojayá'),
	('Chocó', 'Cértegui'),
	('Chocó', 'Condoto'),
	('Chocó', 'El Cantón de San Pablo'),
	('Chocó', 'El Carmen de Atrato'),
	('Chocó', 'El Carmen del Darién'),
	('Chocó', 'El Litoral de San Juan'),
	('Chocó', 'Istmina'),
	('Chocó', 'Juradó'),
	('Chocó', 'Lloró'),
	('Chocó', 'Medio Atrato'),
	('Chocó', 'Medio Baudó'),
	('Chocó', 'Medio San Juan'),
	('Chocó', 'Nóvita'),
	('Chocó', 'Nuquí'),
	('Chocó', 'Río Iró'),
	('Chocó', 'Río Quito'),
	('Chocó', 'Riosucio'),
	('Chocó', 'San José del Palmar'),
	('Chocó', 'Sipí'),
	('Chocó', 'Tadó'),
	('Chocó', 'Unguía'),
	('Chocó', 'Unión Panamericana'),
	('Córdoba', 'Montería'),
	('Córdoba', 'Ayapel'),
	('Córdoba', 'Buenavista'),
	('Córdoba', 'Canalete'),
	('Córdoba', 'Cereté'),
	('Córdoba', 'Chimá'),
	('Córdoba', 'Chinú'),
	('Córdoba', 'Ciénaga de Oro'),
	('Córdoba', 'Cotorra'),
	('Córdoba', 'La Apartada'),
	('Córdoba', 'Los Córdobas'),
	('Córdoba', 'Momil'),
	('Córdoba', 'Montelíbano'),
	('Córdoba', 'Moñitos'),
	('Córdoba', 'Planeta Rica'),
	('Córdoba', 'Pueblo Nuevo'),
	('Córdoba', 'Puerto Escondido'),
	('Córdoba', 'Puerto Libertador'),
	('Córdoba', 'Purísima'),
	('Córdoba', 'Sahagún'),
	('Córdoba', 'San Andrés de Sotavento'),
	('Córdoba', 'San Antero'),
	('Córdoba', 'San Bernardo del Viento'),
	('Córdoba', 'San Carlos'),
	('Córdoba', 'San José de Uré'),
	('Córdoba', 'San Pelayo'),
	('Córdoba', 'Santa Cruz de Lorica'),
	('Córdoba', 'Tierralta'),
	('Córdoba', 'Tuchín'),
	('Córdoba', 'Valencia'),
	('Cundinamarca', 'Agua de Dios'),
	('Cundinamarca', 'Albán'),
	('Cundinamarca', 'Anapoima'),
	('Cundinamarca', 'Anolaima'),
	('Cundinamarca', 'Apulo'),
	('Cundinamarca', 'Arbeláez'),
	('Cundinamarca', 'Beltrán'),
	('Cundinamarca', 'Bituima'),
	('Cundinamarca', 'Bojacá'),
	('Cundinamarca', 'Cabrera'),
	('Cundinamarca', 'Cachipay'),
	('Cundinamarca', 'Cajicá'),
	('Cundinamarca', 'Caparrapí'),
	('Cundinamarca', 'Cáqueza'),
	('Cundinamarca', 'Carmen de Carupa'),
	('Cundinamarca', 'Chaguaní'),
	('Cundinamarca', 'Chía'),
	('Cundinamarca', 'Chipaque'),
	('Cundinamarca', 'Choachí'),
	('Cundinamarca', 'Chocontá'),
	('Cundinamarca', 'Cogua'),
	('Cundinamarca', 'Cota'),
	('Cundinamarca', 'Cucunubá'),
	('Cundinamarca', 'El Colegio'),
	('Cundinamarca', 'El Peñón'),
	('Cundinamarca', 'El Rosal'),
	('Cundinamarca', 'Facatativá'),
	('Cundinamarca', 'Fómeque'),
	('Cundinamarca', 'Fosca'),
	('Cundinamarca', 'Funza'),
	('Cundinamarca', 'Fúquene'),
	('Cundinamarca', 'Fusagasugá'),
	('Cundinamarca', 'Gachalá'),
	('Cundinamarca', 'Gachancipá'),
	('Cundinamarca', 'Gachetá'),
	('Cundinamarca', 'Gama'),
	('Cundinamarca', 'Girardot'),
	('Cundinamarca', 'Granada'),
	('Cundinamarca', 'Guachetá'),
	('Cundinamarca', 'Guaduas'),
	('Cundinamarca', 'Guasca'),
	('Cundinamarca', 'Guataquí'),
	('Cundinamarca', 'Guatavita'),
	('Cundinamarca', 'Guayabal de Síquima'),
	('Cundinamarca', 'Guayabetal'),
	('Cundinamarca', 'Gutiérrez'),
	('Cundinamarca', 'Jerusalén'),
	('Cundinamarca', 'Junín'),
	('Cundinamarca', 'La Calera'),
	('Cundinamarca', 'La Mesa'),
	('Cundinamarca', 'La Palma'),
	('Cundinamarca', 'La Peña'),
	('Cundinamarca', 'La Vega'),
	('Cundinamarca', 'Lenguazaque'),
	('Cundinamarca', 'Machetá'),
	('Cundinamarca', 'Madrid'),
	('Cundinamarca', 'Manta'),
	('Cundinamarca', 'Medina'),
	('Cundinamarca', 'Mosquera'),
	('Cundinamarca', 'Nariño'),
	('Cundinamarca', 'Nemocón'),
	('Cundinamarca', 'Nilo'),
	('Cundinamarca', 'Nimaima'),
	('Cundinamarca', 'Nocaima'),
	('Cundinamarca', 'Pacho'),
	('Cundinamarca', 'Paime'),
	('Cundinamarca', 'Pandi'),
	('Cundinamarca', 'Paratebueno'),
	('Cundinamarca', 'Pasca'),
	('Cundinamarca', 'Puerto Salgar'),
	('Cundinamarca', 'Pulí'),
	('Cundinamarca', 'Quebradanegra'),
	('Cundinamarca', 'Quetame'),
	('Cundinamarca', 'Quipile'),
	('Cundinamarca', 'Ricaurte'),
	('Cundinamarca', 'San Antonio del Tequendama'),
	('Cundinamarca', 'San Bernardo'),
	('Cundinamarca', 'San Cayetano'),
	('Cundinamarca', 'San Francisco'),
	('Cundinamarca', 'San Juan de Rioseco'),
	('Cundinamarca', 'Sasaima'),
	('Cundinamarca', 'Sesquilé'),
	('Cundinamarca', 'Sibaté'),
	('Cundinamarca', 'Silvania'),
	('Cundinamarca', 'Simijaca'),
	('Cundinamarca', 'Soacha'),
	('Cundinamarca', 'Sopó'),
	('Cundinamarca', 'Subachoque'),
	('Cundinamarca', 'Suesca'),
	('Cundinamarca', 'Supatá'),
	('Cundinamarca', 'Susa'),
	('Cundinamarca', 'Sutatausa'),
	('Cundinamarca', 'Tabio'),
	('Cundinamarca', 'Tausa'),
	('Cundinamarca', 'Tena'),
	('Cundinamarca', 'Tenjo'),
	('Cundinamarca', 'Tibacuy'),
	('Cundinamarca', 'Tibirita'),
	('Cundinamarca', 'Tocaima'),
	('Cundinamarca', 'Tocancipá'),
	('Cundinamarca', 'Topaipí'),
	('Cundinamarca', 'Ubalá'),
	('Cundinamarca', 'Ubaque'),
	('Cundinamarca', 'Ubaté'),
	('Cundinamarca', 'Une'),
	('Cundinamarca', 'Útica'),
	('Cundinamarca', 'Venecia'),
	('Cundinamarca', 'Vergara'),
	('Cundinamarca', 'Vianí'),
	('Cundinamarca', 'Villagómez'),
	('Cundinamarca', 'Villapinzón'),
	('Cundinamarca', 'Villeta'),
	('Cundinamarca', 'Viotá'),
	('Cundinamarca', 'Yacopí'),
	('Cundinamarca', 'Zipacón'),
	('Cundinamarca', 'Zipaquirá'),
	('Guainía', 'Inírida'),
	('Guainía', 'Barrancominas'),
	('Guainía', 'Cacahual'),
	('Guainía', 'La Guadalupe'),
	('Guainía', 'Morichal Nuevo'),
	('Guainía', 'Pana Pana'),
	('Guainía', 'Puerto Colombia'),
	('Guainía', 'San Felipe'),
	('Guaviare', 'San José del Guaviare'),
	('Guaviare', 'Calamar'),
	('Guaviare', 'El Retorno'),
	('Guaviare', 'Miraflores'),
	('Huila', 'Neiva'),
	('Huila', 'Acevedo'),
	('Huila', 'Agrado'),
	('Huila', 'Aipe'),
	('Huila', 'Algeciras'),
	('Huila', 'Altamira'),
	('Huila', 'Baraya'),
	('Huila', 'Campoalegre'),
	('Huila', 'Colombia'),
	('Huila', 'Elías'),
	('Huila', 'Garzón'),
	('Huila', 'Gigante'),
	('Huila', 'Guadalupe'),
	('Huila', 'Hobo'),
	('Huila', 'Íquira'),
	('Huila', 'Isnos'),
	('Huila', 'La Argentina'),
	('Huila', 'La Plata'),
	('Huila', 'Nátaga'),
	('Huila', 'Oporapa'),
	('Huila', 'Paicol'),
	('Huila', 'Palermo'),
	('Huila', 'Palestina'),
	('Huila', 'Pital'),
	('Huila', 'Pitalito'),
	('Huila', 'Rivera'),
	('Huila', 'Saladoblanco'),
	('Huila', 'San Agustín'),
	('Huila', 'Santa María'),
	('Huila', 'Suaza'),
	('Huila', 'Tarqui'),
	('Huila', 'Tello'),
	('Huila', 'Teruel'),
	('Huila', 'Tesalia'),
	('Huila', 'Timaná'),
	('Huila', 'Villavieja'),
	('Huila', 'Yaguará'),
	('La Guajira', 'Riohacha'),
	('La Guajira', 'Albania'),
	('La Guajira', 'Barrancas'),
	('La Guajira', 'Dibulla'),
	('La Guajira', 'Distracción'),
	('La Guajira', 'El Molino'),
	('La Guajira', 'Fonseca'),
	('La Guajira', 'Hatonuevo'),
	('La Guajira', 'La Jagua del Pilar'),
	('La Guajira', 'Maicao'),
	('La Guajira', 'Manaure'),
	('La Guajira', 'San Juan del Cesar'),
	('La Guajira', 'Uribia'),
	('La Guajira', 'Urumita'),
	('La Guajira', 'Villanueva'),
	('Magdalena', 'Santa Marta'),
	('Magdalena', 'Algarrobo'),
	('Magdalena', 'Aracataca'),
	('Magdalena', 'Ariguaní'),
	('Magdalena', 'Cerro de San Antonio'),
	('Magdalena', 'Chibolo'),
	('Magdalena', 'Ciénaga'),
	('Magdalena', 'Concordia'),
	('Magdalena', 'El Banco'),
	('Magdalena', 'El Piñón'),
	('Magdalena', 'El Retén'),
	('Magdalena', 'Fundación'),
	('Magdalena', 'Guamal'),
	('Magdalena', 'Nueva Granada'),
	('Magdalena', 'Pedraza'),
	('Magdalena', 'Pijiño del Carmen'),
	('Magdalena', 'Pivijay'),
	('Magdalena', 'Plato'),
	('Magdalena', 'Pueblo Viejo'),
	('Magdalena', 'Remolino'),
	('Magdalena', 'Sabanas de San Ángel'),
	('Magdalena', 'Salamina'),
	('Magdalena', 'San Sebastián de Buenavista'),
	('Magdalena', 'San Zenón'),
	('Magdalena', 'Santa Ana'),
	('Magdalena', 'Santa Bárbara de Pinto'),
	('Magdalena', 'Sitionuevo'),
	('Magdalena', 'Tenerife'),
	('Magdalena', 'Zapayán'),
	('Magdalena', 'Zona Bananera'),
	('Meta', 'Villavicencio'),
	('Meta', 'Acacías'),
	('Meta', 'Barranca de Upía'),
	('Meta', 'Cabuyaro'),
	('Meta', 'Castilla La Nueva'),
	('Meta', 'Cubarral'),
	('Meta', 'Cumaral'),
	('Meta', 'El Calvario'),
	('Meta', 'El Castillo'),
	('Meta', 'El Dorado'),
	('Meta', 'Fuente de Oro'),
	('Meta', 'Granada'),
	('Meta', 'Guamal'),
	('Meta', 'La Macarena'),
	('Meta', 'La Uribe'),
	('Meta', 'Lejanías'),
	('Meta', 'Mapiripán'),
	('Meta', 'Mesetas'),
	('Meta', 'Puerto Concordia'),
	('Meta', 'Puerto Gaitán'),
	('Meta', 'Puerto Lleras'),
	('Meta', 'Puerto López'),
	('Meta', 'Puerto Rico'),
	('Meta', 'Restrepo'),
	('Meta', 'San Carlos de Guaroa'),
	('Meta', 'San Juan de Arama'),
	('Meta', 'San Juanito'),
	('Meta', 'San Martín'),
	('Meta', 'Vista Hermosa'),
	('Nariño', 'Pasto'),
	('Nariño', 'Albán'),
	('Nariño', 'Aldana'),
	('Nariño', 'Ancuya'),
	('Nariño', 'Arboleda'),
	('Nariño', 'Barbacoas'),
	('Nariño', 'Belén'),
	('Nariño', 'Buesaco'),
	('Nariño', 'Chachagüí'),
	('Nariño', 'Colón'),
	('Nariño', 'Consacá'),
	('Nariño', 'Contadero'),
	('Nariño', 'Córdoba'),
	('Nariño', 'Cuaspud'),
	('Nariño', 'Cumbal'),
	('Nariño', 'Cumbitara'),
	('Nariño', 'El Charco'),
	('Nariño', 'El Peñol'),
	('Nariño', 'El Rosario'),
	('Nariño', 'El Tablón de Gómez'),
	('Nariño', 'El Tambo'),
	('Nariño', 'Francisco Pizarro'),
	('Nariño', 'Funes'),
	('Nariño', 'Guachucal'),
	('Nariño', 'Guaitarilla'),
	('Nariño', 'Gualmatán'),
	('Nariño', 'Iles'),
	('Nariño', 'Imués'),
	('Nariño', 'Ipiales'),
	('Nariño', 'La Cruz'),
	('Nariño', 'La Florida'),
	('Nariño', 'La Llanada'),
	('Nariño', 'La Tola'),
	('Nariño', 'La Unión'),
	('Nariño', 'Leiva'),
	('Nariño', 'Linares'),
	('Nariño', 'Los Andes'),
	('Nariño', 'Magüí Payán'),
	('Nariño', 'Mallama'),
	('Nariño', 'Mosquera'),
	('Nariño', 'Nariño'),
	('Nariño', 'Olaya Herrera'),
	('Nariño', 'Ospina'),
	('Nariño', 'Policarpa'),
	('Nariño', 'Potosí'),
	('Nariño', 'Providencia'),
	('Nariño', 'Puerres'),
	('Nariño', 'Pupiales'),
	('Nariño', 'Ricaurte'),
	('Nariño', 'Roberto Payán'),
	('Nariño', 'Samaniego'),
	('Nariño', 'San Bernardo'),
	('Nariño', 'San Lorenzo'),
	('Nariño', 'San Pablo'),
	('Nariño', 'San Pedro de Cartago'),
	('Nariño', 'Sandoná'),
	('Nariño', 'Santa Bárbara'),
	('Nariño', 'Santacruz'),
	('Nariño', 'Sapuyes'),
	('Nariño', 'Taminango'),
	('Nariño', 'Tangua'),
	('Nariño', 'Tumaco'),
	('Nariño', 'Túquerres'),
	('Nariño', 'Yacuanquer'),
	('Norte de Santander', 'Cúcuta'),
	('Norte de Santander', 'Ábrego'),
	('Norte de Santander', 'Arboledas'),
	('Norte de Santander', 'Bochalema'),
	('Norte de Santander', 'Bucarasica'),
	('Norte de Santander', 'Cáchira'),
	('Norte de Santander', 'Cácota'),
	('Norte de Santander', 'Chinácota'),
	('Norte de Santander', 'Chitagá'),
	('Norte de Santander', 'Convención'),
	('Norte de Santander', 'Cucutilla'),
	('Norte de Santander', 'Durania'),
	('Norte de Santander', 'El Carmen'),
	('Norte de Santander', 'El Tarra'),
	('Norte de Santander', 'El Zulia'),
	('Norte de Santander', 'Gramalote'),
	('Norte de Santander', 'Hacarí'),
	('Norte de Santander', 'Herrán'),
	('Norte de Santander', 'La Esperanza'),
	('Norte de Santander', 'La Playa de Belén'),
	('Norte de Santander', 'Labateca'),
	('Norte de Santander', 'Los Patios'),
	('Norte de Santander', 'Lourdes'),
	('Norte de Santander', 'Mutiscua'),
	('Norte de Santander', 'Ocaña'),
	('Norte de Santander', 'Pamplona'),
	('Norte de Santander', 'Pamplonita'),
	('Norte de Santander', 'Puerto Santander'),
	('Norte de Santander', 'Ragonvalia'),
	('Norte de Santander', 'Salazar de Las Palmas'),
	('Norte de Santander', 'San Calixto'),
	('Norte de Santander', 'San Cayetano'),
	('Norte de Santander', 'Santiago'),
	('Norte de Santander', 'Santo Domingo de Silos'),
	('Norte de Santander', 'Sardinata'),
	('Norte de Santander', 'Teorama'),
	('Norte de Santander', 'Tibú'),
	('Norte de Santander', 'Toledo'),
	('Norte de Santander', 'Villa Caro'),
	('Norte de Santander', 'Villa del Rosario'),
	('Putumayo', 'Mocoa'),
	('Putumayo', 'Colón'),
	('Putumayo', 'Orito'),
	('Putumayo', 'Puerto Asís'),
	('Putumayo', 'Puerto Caicedo'),
	('Putumayo', 'Puerto Guzmán'),
	('Putumayo', 'Puerto Leguízamo'),
	('Putumayo', 'San Francisco'),
	('Putumayo', 'San Miguel'),
	('Putumayo', 'Santiago'),
	('Putumayo', 'Sibundoy'),
	('Putumayo', 'Valle del Guamuez'),
	('Putumayo', 'Villagarzón'),
	('Quindío', 'Armenia'),
	('Quindío', 'Buenavista'),
	('Quindío', 'Calarcá'),
	('Quindío', 'Circasia'),
	('Quindío', 'Córdoba'),
	('Quindío', 'Filandia'),
	('Quindío', 'Génova'),
	('Quindío', 'La Tebaida'),
	('Quindío', 'Montenegro'),
	('Quindío', 'Pijao'),
	('Quindío', 'Quimbaya'),
	('Quindío', 'Salento'),
	('Risaralda', 'Pereira'),
	('Risaralda', 'Apía'),
	('Risaralda', 'Balboa'),
	('Risaralda', 'Belén de Umbría'),
	('Risaralda', 'Dosquebradas'),
	('Risaralda', 'Guática'),
	('Risaralda', 'La Celia'),
	('Risaralda', 'La Virginia'),
	('Risaralda', 'Marsella'),
	('Risaralda', 'Mistrató'),
	('Risaralda', 'Pueblo Rico'),
	('Risaralda', 'Quinchía'),
	('Risaralda', 'Santa Rosa de Cabal'),
	('Risaralda', 'Santuario'),
	('San Andrés y Providencia', 'San Andres Isla'),
	('San Andrés y Providencia', 'Providencia'),
	('San Andrés y Providencia', 'Santa Catalina'),
	('Santander', 'Bucaramanga'),
	('Santander', 'Aguada'),
	('Santander', 'Albania'),
	('Santander', 'Aratoca'),
	('Santander', 'Barbosa'),
	('Santander', 'Barichara'),
	('Santander', 'Barrancabermeja'),
	('Santander', 'Betulia'),
	('Santander', 'Bolívar'),
	('Santander', 'Cabrera'),
	('Santander', 'California'),
	('Santander', 'Capitanejo'),
	('Santander', 'Carcasí'),
	('Santander', 'Cepitá'),
	('Santander', 'Cerrito'),
	('Santander', 'Charalá'),
	('Santander', 'Charta'),
	('Santander', 'Chima'),
	('Santander', 'Chipatá'),
	('Santander', 'Cimitarra'),
	('Santander', 'Concepción'),
	('Santander', 'Confines'),
	('Santander', 'Contratación'),
	('Santander', 'Coromoro'),
	('Santander', 'Curití'),
	('Santander', 'El Carmen de Chucurí'),
	('Santander', 'El Guacamayo'),
	('Santander', 'El Peñón'),
	('Santander', 'El Playón'),
	('Santander', 'Encino'),
	('Santander', 'Enciso'),
	('Santander', 'Florián'),
	('Santander', 'Floridablanca'),
	('Santander', 'Galán'),
	('Santander', 'Gámbita'),
	('Santander', 'Girón'),
	('Santander', 'Guaca'),
	('Santander', 'Guadalupe'),
	('Santander', 'Guapotá'),
	('Santander', 'Guavatá'),
	('Santander', 'Güepsa'),
	('Santander', 'Hato'),
	('Santander', 'Jesús María'),
	('Santander', 'Jordán'),
	('Santander', 'La Belleza'),
	('Santander', 'La Paz'),
	('Santander', 'Landázuri'),
	('Santander', 'Lebrija'),
	('Santander', 'Los Santos'),
	('Santander', 'Macaravita'),
	('Santander', 'Málaga'),
	('Santander', 'Matanza'),
	('Santander', 'Mogotes'),
	('Santander', 'Molagavita'),
	('Santander', 'Ocamonte'),
	('Santander', 'Oiba'),
	('Santander', 'Onzaga'),
	('Santander', 'Palmar'),
	('Santander', 'Palmas del Socorro'),
	('Santander', 'Páramo'),
	('Santander', 'Piedecuesta'),
	('Santander', 'Pinchote'),
	('Santander', 'Puente Nacional'),
	('Santander', 'Puerto Parra'),
	('Santander', 'Puerto Wilches'),
	('Santander', 'Rionegro'),
	('Santander', 'Sabana de Torres'),
	('Santander', 'San Andrés'),
	('Santander', 'San Benito'),
	('Santander', 'San Gil'),
	('Santander', 'San Joaquín'),
	( 'Santander', 'San José de Miranda'),
	( 'Santander', 'San Miguel'),
	( 'Santander', 'San Vicente de Chucurí'),
	( 'Santander', 'Santa Bárbara'),
	( 'Santander', 'Santa Helena del Opón'),
	( 'Santander', 'Simacota'),
	( 'Santander', 'Socorro'),
	( 'Santander', 'Suaita'),
	( 'Santander', 'Sucre'),
	( 'Santander', 'Suratá'),
	( 'Santander', 'Tona'),
	( 'Santander', 'Valle de San José'),
	( 'Santander', 'Vélez'),
	( 'Santander', 'Vetas'),
	( 'Santander', 'Villanueva'),
	( 'Santander', 'Zapatoca'),
	( 'Sucre', 'Sincelejo'),
	( 'Sucre', 'Buenavista'),
	( 'Sucre', 'Caimito'),
	( 'Sucre', 'Chalán'),
	( 'Sucre', 'Colosó'),
	( 'Sucre', 'Corozal'),
	( 'Sucre', 'Coveñas'),
	( 'Sucre', 'El Roble'),
	( 'Sucre', 'Galeras'),
	( 'Sucre', 'Guaranda'),
	( 'Sucre', 'La Unión'),
	( 'Sucre', 'Los Palmitos'),
	( 'Sucre', 'Majagual'),
	( 'Sucre', 'Morroa'),
	( 'Sucre', 'Ovejas'),
	( 'Sucre', 'Palmito'),
	( 'Sucre', 'Sampués'),
	( 'Sucre', 'San Benito Abad'),
	( 'Sucre', 'San Juan de Betulia'),
	( 'Sucre', 'San Marcos'),
	( 'Sucre', 'San Onofre'),
	( 'Sucre', 'San Pedro'),
	( 'Sucre', 'Santiago de Tolú'),
	( 'Sucre', 'Sincé'),
	( 'Sucre', 'Sucre'),
	( 'Sucre', 'Toluviejo'),
	( 'Tolima', 'Ibagué'),
	( 'Tolima', 'Alpujarra'),
	( 'Tolima', 'Alvarado'),
	( 'Tolima', 'Ambalema'),
	( 'Tolima', 'Anzoátegui'),
	( 'Tolima', 'Armero'),
	( 'Tolima', 'Ataco'),
	( 'Tolima', 'Cajamarca'),
	( 'Tolima', 'Carmen de Apicalá'),
	( 'Tolima', 'Casabianca'),
	( 'Tolima', 'Chaparral'),
	( 'Tolima', 'Coello'),
	( 'Tolima', 'Coyaima'),
	( 'Tolima', 'Cunday'),
	( 'Tolima', 'Dolores'),
	( 'Tolima', 'Espinal'),
	( 'Tolima', 'Falan'),
	( 'Tolima', 'Flandes'),
	( 'Tolima', 'Fresno'),
	( 'Tolima', 'Guamo'),
	( 'Tolima', 'Herveo'),
	( 'Tolima', 'Honda'),
	( 'Tolima', 'Icononzo'),
	( 'Tolima', 'Lérida'),
	( 'Tolima', 'Líbano'),
	( 'Tolima', 'Melgar'),
	( 'Tolima', 'Murillo'),
	( 'Tolima', 'Natagaima'),
	( 'Tolima', 'Ortega'),
	( 'Tolima', 'Palocabildo'),
	( 'Tolima', 'Piedras'),
	( 'Tolima', 'Planadas'),
	( 'Tolima', 'Prado'),
	( 'Tolima', 'Purificación'),
	( 'Tolima', 'Rioblanco'),
	( 'Tolima', 'Roncesvalles'),
	( 'Tolima', 'Rovira'),
	( 'Tolima', 'Saldaña'),
	( 'Tolima', 'San Antonio'),
	( 'Tolima', 'San Luis'),
	( 'Tolima', 'San Sebastián de Mariquita'),
	( 'Tolima', 'Santa Isabel'),
	( 'Tolima', 'Suárez'),
	( 'Tolima', 'Valle de San Juan'),
	( 'Tolima', 'Venadillo'),
	( 'Tolima', 'Villahermosa'),
	( 'Tolima', 'Villarrica'),
	( 'Valle del Cauca', 'Cali'),
	( 'Valle del Cauca', 'Alcalá'),
	( 'Valle del Cauca', 'Andalucía'),
	( 'Valle del Cauca', 'Ansermanuevo'),
	( 'Valle del Cauca', 'Argelia'),
	( 'Valle del Cauca', 'Bolívar'),
	( 'Valle del Cauca', 'Buenaventura'),
	( 'Valle del Cauca', 'Buga'),
	( 'Valle del Cauca', 'Bugalagrande'),
	( 'Valle del Cauca', 'Caicedonia'),
	( 'Valle del Cauca', 'Calima - El Darién'),
	( 'Valle del Cauca', 'Candelaria'),
	( 'Valle del Cauca', 'Cartago'),
	( 'Valle del Cauca', 'Dagua'),
	( 'Valle del Cauca', 'El Águila'),
	( 'Valle del Cauca', 'El Cairo'),
	( 'Valle del Cauca', 'El Cerrito'),
	( 'Valle del Cauca', 'El Dovio'),
	( 'Valle del Cauca', 'Florida'),
	( 'Valle del Cauca', 'Ginebra'),
	( 'Valle del Cauca', 'Guacarí'),
	( 'Valle del Cauca', 'Jamundí'),
	( 'Valle del Cauca', 'La Cumbre'),
	( 'Valle del Cauca', 'La Unión'),
	( 'Valle del Cauca', 'La Victoria'),
	( 'Valle del Cauca', 'Obando'),
	( 'Valle del Cauca', 'Palmira'),
	( 'Valle del Cauca', 'Pradera'),
	( 'Valle del Cauca', 'Restrepo'),
	( 'Valle del Cauca', 'Riofrío'),
	( 'Valle del Cauca', 'Roldanillo'),
	( 'Valle del Cauca', 'San Pedro'),
	( 'Valle del Cauca', 'Sevilla'),
	( 'Valle del Cauca', 'Toro'),
	( 'Valle del Cauca', 'Trujillo'),
	( 'Valle del Cauca', 'Tuluá'),
	( 'Valle del Cauca', 'Ulloa'),
	( 'Valle del Cauca', 'Versalles'),
	( 'Valle del Cauca', 'Vijes'),
	( 'Valle del Cauca', 'Yotoco'),
	( 'Valle del Cauca', 'Yumbo'),
	( 'Valle del Cauca', 'Zarzal'),
	( 'Vaupés', 'Mitú'),
	( 'Vaupés', 'Carurú'),
	( 'Vaupés', 'Pacoa'),
	( 'Vaupés', 'Papunaua'),
	( 'Vaupés', 'Taraira'),
	( 'Vaupés', 'Yavaraté'),
	( 'Vichada', 'Puerto Carreño'),
	( 'Vichada', 'Cumaribo'),
	( 'Vichada', 'La Primavera'),
	( 'Vichada', 'Santa Rosalía');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.contratacions
CREATE TABLE IF NOT EXISTS `contratacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_publico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_bancaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_medico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ant_procuraduria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ant_ponal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copia_cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadcedula` int(10) unsigned NOT NULL,
  `libreta_militar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_bachiller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_otros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadcert` int(10) unsigned DEFAULT NULL,
  `ref_laborales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadlab` int(10) unsigned NOT NULL,
  `ref_personales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidadper` int(10) unsigned NOT NULL,
  `cert_eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_pensiones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_cesantias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nucleo_familiar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.contratacions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contratacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratacions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.coordinadores
CREATE TABLE IF NOT EXISTS `coordinadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.departamentos: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` (`Id_departamento`, `Nombre`) VALUES
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
  `dependencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.dependencia: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dependencia` DISABLE KEYS */;
INSERT INTO `dependencia` (`id`, `dependencia`) VALUES
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

-- Volcando estructura para tabla recursos.entfinalizacion
CREATE TABLE IF NOT EXISTS `entfinalizacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoGer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoJefe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCont` date NOT NULL,
  `obsFinales` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsGerencia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entfinalizacion: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entfinalizacion` DISABLE KEYS */;
INSERT INTO `entfinalizacion` (`id`, `id_filtro`, `cedula`, `nombre`, `resultado`, `resultadoGer`, `resultadoJefe`, `fechaCont`, `obsFinales`, `obsGerencia`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 'enviado a capacitacion', 'no aplica o pendiente', 'no aplica o pendiente', '2021-03-01', 'ok rrhh', '', '2021-02-03 19:16:15', '2021-02-03 19:16:15'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 'enviado a contratación', 'no aplica o pendiente', 'no aplica o pendiente', '2021-02-03', 'ok rrhh', '', '2021-02-03 19:16:37', '2021-02-03 19:16:37');
/*!40000 ALTER TABLE `entfinalizacion` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.entgerencia
CREATE TABLE IF NOT EXISTS `entgerencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `resultadoGer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fnacimiento` date NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `TipoVia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefijo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefijo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adicional3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barrio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tFijo` bigint(20) DEFAULT NULL,
  `tCelular` bigint(20) unsigned NOT NULL,
  `tCelular2` bigint(20) unsigned DEFAULT NULL,
  `tVivienda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(10) unsigned DEFAULT NULL,
  `arrendador` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correoArr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sMilitar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donde` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eCivil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuanto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista1s: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista1s` DISABLE KEYS */;
INSERT INTO `entrevista1s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `cargo`, `referencia`, `fnacimiento`, `departamento`, `id_ciudad`, `edad`, `TipoVia`, `dr1`, `prefijo1`, `dr2`, `prefijo2`, `dr3`, `orientacion`, `adicional`, `ad1`, `adicional2`, `ad2`, `adicional3`, `ad3`, `barrio`, `residencia`, `id_localidad`, `tFijo`, `tCelular`, `tCelular2`, `tVivienda`, `valor`, `arrendador`, `correoArr`, `sMilitar`, `donde`, `eCivil`, `cuanto`, `quien`, `conoce`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 3187200092, 'maria@martinez.com', 'Asesor comercial', 'publicación en CompuTrabajo', '1990-01-20', 'Antioquia', 'Medellín', 31, 'Carrera', '105', 'B', '65', 'A', '41', 'SUR', 'Conjunto', 'kasay de los venados 2', 'Casa', '483', NULL, NULL, 'el recreo', 'Bogotá', 'Bosa', NULL, 3187200092, NULL, 'arrendada', 480000, 'sandra torres', 'sandra@torres.com', 'no', NULL, 'soltero(a)', NULL, 'familia', 'buena empresa', '2021-02-03 19:02:57', '2021-02-03 19:02:57'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 3202136479, 'carlos@urquijo.com', 'Analista de calidad', 'Rector de la universidad', '1970-05-28', 'Bogotá D.C.', 'Bogotá D.C.', 50, 'Calle', '2', NULL, '3', NULL, '4', 'OESTE', NULL, NULL, NULL, NULL, NULL, NULL, 'el codo', 'Aledaños', 'Soacha', NULL, 3235134679, NULL, 'propia', NULL, NULL, NULL, 'si', 'distrito 1', 'casado(a)', '10 AÑOS', 'esposa e hijos', 'ninguna', '2021-02-03 19:11:18', '2021-02-03 19:11:18');
/*!40000 ALTER TABLE `entrevista1s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.entrevista2s
CREATE TABLE IF NOT EXISTS `entrevista2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinfamilia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familiarp7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacionp7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonop7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista2s: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista2s` DISABLE KEYS */;
INSERT INTO `entrevista2s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `sinfamilia`, `familiarp1`, `parentescop1`, `edadp1`, `ocupacionp1`, `telefonop1`, `familiarp2`, `parentescop2`, `edadp2`, `ocupacionp2`, `telefonop2`, `familiarp3`, `parentescop3`, `edadp3`, `ocupacionp3`, `telefonop3`, `familiarp4`, `parentescop4`, `edadp4`, `ocupacionp4`, `telefonop4`, `familiarp5`, `parentescop5`, `edadp5`, `ocupacionp5`, `telefonop5`, `familiarp6`, `parentescop6`, `edadp6`, `ocupacionp6`, `telefonop6`, `familiarp7`, `parentescop7`, `edadp7`, `ocupacionp7`, `telefonop7`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 3187200092, 'maria@martinez.com', 'No registran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:03:31', '2021-02-03 19:03:31'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 3202136479, 'carlos@urquijo.com', NULL, 'jose ricaurte', 'padre', '59', 'carpintero', '52321212', NULL, 'hermano', '12', 'estudiante', '5654543', 'dario ricaurte', 'hermano', '6', 'estudiante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:11:58', '2021-02-03 19:11:58');
/*!40000 ALTER TABLE `entrevista2s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.entrevista3s
CREATE TABLE IF NOT EXISTS `entrevista3s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grado1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha1` date DEFAULT NULL,
  `titulo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha2` date DEFAULT NULL,
  `titulo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha3` date DEFAULT NULL,
  `titulo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha4` date DEFAULT NULL,
  `titulo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha5` date DEFAULT NULL,
  `titulo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha6` date DEFAULT NULL,
  `titulo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha7` date DEFAULT NULL,
  `titulo7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `años8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha8` date DEFAULT NULL,
  `titulo8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista3s: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista3s` DISABLE KEYS */;
INSERT INTO `entrevista3s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `Grado1`, `institucion1`, `años1`, `fecha1`, `titulo1`, `estado1`, `Grado2`, `institucion2`, `años2`, `fecha2`, `titulo2`, `estado2`, `Grado3`, `institucion3`, `años3`, `fecha3`, `titulo3`, `estado3`, `Grado4`, `institucion4`, `años4`, `fecha4`, `titulo4`, `estado4`, `Grado5`, `institucion5`, `años5`, `fecha5`, `titulo5`, `estado5`, `Grado6`, `institucion6`, `años6`, `fecha6`, `titulo6`, `estado6`, `Grado7`, `institucion7`, `años7`, `fecha7`, `titulo7`, `estado7`, `Grado8`, `institucion8`, `años8`, `fecha8`, `titulo8`, `estado8`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 3187200092, 'maria@martinez.com', 'Primaria', 'nuestra señora del carmen', '5 años', '2021-02-03', 'edu basica primaria', 'Veriicado', 'Secundaria', 'inem santiago perez', '6 años', '2021-02-03', 'bachiller academico', 'Veriicado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:03:54', '2021-02-03 19:03:54'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 3202136479, 'carlos@urquijo.com', 'Primaria', 'maria auxiliadora', '5 años', '2021-02-03', 'edu basica primaria', 'Veriicado', 'Secundaria', 'maximiliano mejia', '6 años', '2021-02-03', 'bachiller academico', 'Veriicado', 'Técnico', NULL, NULL, NULL, NULL, '0', 'Tecnólogo', NULL, NULL, NULL, NULL, '0', 'Universitario', NULL, NULL, NULL, NULL, '0', 'Especializacion', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:12:33', '2021-02-03 19:12:33');
/*!40000 ALTER TABLE `entrevista3s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.entrevista4s
CREATE TABLE IF NOT EXISTS `entrevista4s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinExp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain1` date DEFAULT NULL,
  `fechart1` date DEFAULT NULL,
  `tiempo1` int(11) DEFAULT NULL,
  `hlcargo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf1` bigint(20) DEFAULT NULL,
  `salarioh1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain2` date DEFAULT NULL,
  `fechart2` date DEFAULT NULL,
  `tiempo2` int(11) DEFAULT NULL,
  `hlcargo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf2` bigint(20) DEFAULT NULL,
  `salarioh2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain3` date DEFAULT NULL,
  `fechart3` date DEFAULT NULL,
  `tiempo3` int(11) DEFAULT NULL,
  `hlcargo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf3` bigint(20) DEFAULT NULL,
  `salarioh3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain4` date DEFAULT NULL,
  `fechart4` date DEFAULT NULL,
  `tiempo4` int(11) DEFAULT NULL,
  `hlcargo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf4` bigint(20) DEFAULT NULL,
  `salarioh4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechain5` date DEFAULT NULL,
  `fechart5` date DEFAULT NULL,
  `tiempo5` int(11) DEFAULT NULL,
  `hlcargo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jefeinm5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleinf5` bigint(20) DEFAULT NULL,
  `salarioh5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivor5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista4s: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista4s` DISABLE KEYS */;
INSERT INTO `entrevista4s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `sinExp`, `empresa1`, `fechain1`, `fechart1`, `tiempo1`, `hlcargo1`, `jefeinm1`, `teleinf1`, `salarioh1`, `motivor1`, `empresa2`, `fechain2`, `fechart2`, `tiempo2`, `hlcargo2`, `jefeinm2`, `teleinf2`, `salarioh2`, `motivor2`, `empresa3`, `fechain3`, `fechart3`, `tiempo3`, `hlcargo3`, `jefeinm3`, `teleinf3`, `salarioh3`, `motivor3`, `empresa4`, `fechain4`, `fechart4`, `tiempo4`, `hlcargo4`, `jefeinm4`, `teleinf4`, `salarioh4`, `motivor4`, `empresa5`, `fechain5`, `fechart5`, `tiempo5`, `hlcargo5`, `jefeinm5`, `teleinf5`, `salarioh5`, `motivor5`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 3187200092, 'maria@martinez.com', 'Sin Experiencia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:07:25', '2021-02-03 19:07:25'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 3202136479, 'carlos@urquijo.com', NULL, 'carvajal', '1999-02-03', '2002-02-03', NULL, 'analista', 'pedro maria rodriguez', 56412346, '900000', 'voluntario', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 19:13:21', '2021-02-03 19:13:21');
/*!40000 ALTER TABLE `entrevista4s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.entrevista5s
CREATE TABLE IF NOT EXISTS `entrevista5s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) unsigned NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspiracion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personasC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acCambio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempoDes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queHizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otroProceso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CualOtra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fortalezas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debilidades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valores` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satisfaccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traumaticos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancelado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivoC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problemas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivoJ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frecuencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deudas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debeA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantoDebe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plazo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grupoSoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cualGr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantoTiempo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempoLibre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoSalud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accidentes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cualAc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procesosAnt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familiaresMent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.entrevista5s: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `entrevista5s` DISABLE KEYS */;
INSERT INTO `entrevista5s` (`id`, `id_filtro`, `cedula`, `nombres`, `telefono`, `correo`, `aspiracion`, `personasC`, `acCambio`, `tiempoDes`, `queHizo`, `otroProceso`, `CualOtra`, `fortalezas`, `debilidades`, `valores`, `satisfaccion`, `traumaticos`, `cancelado`, `motivoC`, `problemas`, `motivoJ`, `fuma`, `frecuencia`, `deudas`, `debeA`, `cuantoDebe`, `plazo`, `grupoSoc`, `cualGr`, `cuantoTiempo`, `tiempoLibre`, `estadoSalud`, `tratamiento`, `accidentes`, `cualAc`, `procesosAnt`, `familiaresMent`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 3187200092, 'maria@martinez.com', '2500000', 'no', 'hobbies', '1 mes', 'oficios varios', 'no', 'ninguna', 'pensamiento logico', 'trabajo bajo presion', 'honestidad', 'terminar mis estudios', 'perdias de famliares', 'no', NULL, 'no', NULL, 'si', 'uno al dia', 'no', NULL, NULL, NULL, 'no', NULL, NULL, 'leer escuchar musica', 'muy bueno', 'ninguno', 'no', 'diabetes', 'no', 'no', '2021-02-03 19:05:10', '2021-02-03 19:05:10'),
	(2, 2, 79889998, 'Carlos Mario Urquijo Pereira', 3202136479, 'carlos@urquijo.com', '2500000', 'si', 'hobbies', '1 mes', 'oficios varios', 'si', 'ninguna', 'todas', 'ninguna', 'honestidad', 'terminar mis estudios', 'perdias de famliares', 'si', 'fuerza mayor', 'si', 'ninguno', 'si', 'nunca', 'si', 'nadie', '0', 'ninguno', 'no', 'ninguno', NULL, 'no mucho en realidad', 'bueno', 'ninguno', 'si', 'diabetes', 'si', 'si', '2021-02-03 19:14:11', '2021-02-03 19:14:11');
/*!40000 ALTER TABLE `entrevista5s` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.ent_jefe
CREATE TABLE IF NOT EXISTS `ent_jefe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultadoJefe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsjefe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.ent_jefe: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_jefe` DISABLE KEYS */;
INSERT INTO `ent_jefe` (`id`, `id_filtro`, `cedula`, `nombre`, `resultadoJefe`, `obsjefe`, `created_at`, `updated_at`) VALUES
	(1, 1, 10122335544, 'Maria Fernanda Martinez Gomez', 'Aprobado', 'ok jefe inmediato', '2021-02-03 19:17:46', '2021-02-03 19:17:46');
/*!40000 ALTER TABLE `ent_jefe` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.eps
CREATE TABLE IF NOT EXISTS `eps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.eps: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `eps` DISABLE KEYS */;
INSERT INTO `eps` ( `entidad`) VALUES
	('Aliansalud Eps (Antes Colmedica)'),
	('Atme salud '),
	('Cafesalud'),
	('Cajacopi Atlantico'),
	('Capital Salud'),
	('Comfachoco'),
	('Comfacundi'),
	('Comparta'),
	('Compensar'),
	( 'Convida'),
	( 'Coomeva'),
	( 'Coosalud'),
	( 'Cruz Blanca'),
	( 'Eps Ecoopsos S.A.S'),
	( 'EPS Sanitas'),
	( 'Eps Sura (Antes Susalud)'),
	( 'Famisanar'),
	( 'Medimas'),
	( 'Mutual Ser'),
	( 'Nueva E.P.S.'),
	( 'S.O.S. Servicio Occidental De Salud S.A.'),
	( 'Salud Total'),
	( 'Salud Vida '),
	( 'Sanidad Militar');
/*!40000 ALTER TABLE `eps` ENABLE KEYS */;

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
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citadoE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAplica` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noInteresado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadoCapa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadoExm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PruebasE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yaTrabaja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroEqu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAsiste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoResponde2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `YaNoInt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estudiante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noAsisteEnt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrevistaJefeInm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrevistaGerencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviadocontratacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.filtros: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `filtros` DISABLE KEYS */;
INSERT INTO `filtros` (`id`, `fregistro`, `nombre`, `cedula`, `telefono`, `correo`, `perfil`, `campaña`, `fuente`, `citadoE`, `noAplica`, `noInteresado`, `enviadoCapa`, `enviadoExm`, `PruebasE`, `yaTrabaja`, `numeroEqu`, `observacion`, `noAsiste`, `NoResponde2`, `YaNoInt`, `Estudiante`, `noAsisteEnt`, `entrevistaJefeInm`, `entrevistaGerencia`, `enviadocontratacion`, `observacion2`, `usuario`, `created_at`, `updated_at`) VALUES
	( '2021-02-03', 'Maria Fernanda Martinez Gomez', 10122335544, 3187200092, 'maria@martinez.com', 'Ventas telefonía', 'ETB (E)', 'Vincuventas', 'Citado Entrevista', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'prueba de inserción de datos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1,admin', '2021-02-03 18:53:50', '2021-02-03 18:53:50'),
	( '2021-02-02', 'Carlos Mario Urquijo Pereira', 79889998, 3202136479, 'carlos@urquijo.com', 'Cobranza', 'Movistar (MO)', 'Computrabajo', 'Citado Entrevista', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registro de prueba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1,admin', '2021-02-03 18:55:08', '2021-02-03 18:55:08'),
	( '2021-02-01', 'Miguel Andrés Mena Turan', 46565214, 3201648791, 'miguel@mena.com', 'Bienestar', 'Staff (STA)', 'rc', NULL, NULL, NULL, 'enviado capa', 'enviado a exam', 'Pruebas Eviadas', NULL, NULL, 'registro  nuevo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ok 2', '1,admin', '2021-02-03 18:56:35', '2021-02-03 18:59:03');
/*!40000 ALTER TABLE `filtros` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.focos
CREATE TABLE IF NOT EXISTS `focos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.focos: ~46 rows (aproximadamente)
/*!40000 ALTER TABLE `focos` DISABLE KEYS */;
INSERT INTO `focos` ( `foco`) VALUES
	('Azteca'),
	('B2B'),
	('Banda Ancha'),
	('Banda Ancha Pymes'),
	('Banda Ancha Soho'),
	('CDS'),
	('CDS Móvil'),
	('Coorserpark'),
	('ETB'),
	( 'Inbound'),
	( 'Inbound Chat'),
	( 'Mentius'),
	( 'Movistar Libre'),
	( 'Nexo Créditos'),
	( 'Phoenix'),
	( 'Portabilidad'),
	( 'Portabilidad Digital'),
	( 'Portabilidad Lab'),
	( 'Portabilidad Pymes'),
	( 'Portabilidad Soho'),
	( 'Premium'),
	( 'Prepost'),
	( 'QNT'),
	( 'Reno Repo'),
	( 'Staff'),
	( 'Staff Administrativo'),
	( 'Staff Calidad'),
	( 'Staff Comercial'),
	( 'Staff Datos Métricas Y Workforce'),
	( 'Staff Desarrollo'),
	( 'Staff Financiero'),
	( 'Staff Formación'),
	( 'Staff Gerencial'),
	( 'Staff IT'),
	( 'Staff RRHH'),
	( 'Staff Validación'),
	( 'Totalización'),
	( 'Up Grade'),
	( 'Up Grade fija'),
	( 'Up Grade Lab'),
	( 'Up Grade Pymes'),
	( 'Vanti'),
	( 'Vanti Retención'),
	( 'Vanti S A C RPO'),
	( 'Vanti S A C SAP'),
	( 'Vanti Ventas');
/*!40000 ALTER TABLE `focos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.localidad
CREATE TABLE IF NOT EXISTS `localidad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.localidad: ~38 rows (aproximadamente)
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
INSERT INTO `localidad` (`id`, `id_residencia`, `localidad`) VALUES
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.migrations: ~56 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2021_01_28_174922_create_nuevo_empleados_table', 1),
	(2, '2014_10_12_000000_create_users_table', 2),
	(3, '2014_10_12_100000_create_password_resets_table', 2),
	(4, '2019_08_19_000000_create_failed_jobs_table', 2),
	(5, '2020_03_31_113105_create_roles_table', 2),
	(6, '2020_03_31_113548_create_role_user_table', 2),
	(7, '2020_04_06_125005_create_permissions_table', 2),
	(8, '2020_04_06_125249_create_permission_role_table', 2),
	(9, '2020_11_12_110949_create_requisicions_table', 2),
	(10, '2020_11_12_114806_create_cargo', 2),
	(11, '2020_11_12_140358_create_sede', 2),
	(12, '2020_11_13_112230_create_dependencia', 2),
	(13, '2020_11_19_185140_create_reclutamiento', 2),
	(14, '2020_11_23_185359_create_filtros_table', 2),
	(15, '2020_11_23_201901_create_TipoVia_table', 2),
	(16, '2020_11_23_201901_create_perfil_table', 2),
	(17, '2020_12_10_120608_create_departamentos_table', 2),
	(18, '2020_12_10_155148_create_ciudad_table', 2),
	(19, '2020_12_10_174851_create_prefijo_table', 2),
	(20, '2020_12_10_190056_create_orientacion_table', 2),
	(21, '2020_12_10_195950_create_adicional2_table', 2),
	(22, '2020_12_10_195950_create_adicional_table', 2),
	(23, '2020_12_10_211652_create_localidad_table', 2),
	(24, '2020_12_10_212259_create_residencia_table', 2),
	(25, '2020_12_17_131430_create_entrevista1s_table', 2),
	(26, '2020_12_21_171846_create_entrevista2s_table', 2),
	(27, '2020_12_22_130059_create_entrevista3s_table', 2),
	(28, '2020_12_22_165145_create_entrevista4s_table', 2),
	(29, '2020_12_23_094211_create_entrevista5s_table', 2),
	(30, '2020_12_23_132536_create_entfinalizacion_table', 2),
	(31, '2021_01_04_174756_create_cargo_ent_table', 2),
	(32, '2021_01_05_164959_create_entgerencia_table', 2),
	(33, '2021_01_06_182452_create_ent_jefe_table', 2),
	(34, '2021_01_06_194538_create_resumens_table', 2),
	(35, '2021_01_08_170442_create_capacitacions_table', 2),
	(36, '2021_01_08_194058_create_contratacions_table', 2),
	(37, '2021_01_13_003314_create_bancos_table', 2),
	(38, '2021_01_16_184104_create_documentos_table', 2),
	(39, '2021_01_21_140903_create_cargo_nuevos_table', 2),
	(40, '2021_01_21_163625_create_area_table', 2),
	(41, '2021_01_27_111010_create_novedades_table', 2),
	(42, '2021_01_27_121931_create_asignacions_table', 2),
	(43, '2021_01_28_165718_create_coordinadores_table', 2),
	(44, '2021_01_29_160257_create_focos_table', 2),
	(45, '2021_01_29_162135_create_campana_table', 2),
	(46, '2021_02_01_131626_create_nivel_edus_table', 2),
	(47, '2021_02_02_142528_create_parentescos_table', 2),
	(48, '2021_02_02_164124_create_tipo_docs_table', 2),
	(49, '2021_02_02_193739_create_tipo_contratos_table', 2),
	(50, '2021_02_02_195412_create_supervisors_table', 2),
	(51, '2021_02_02_204649_create_modalidads_table', 2),
	(52, '2021_02_02_205045_create_tipo_modalidads_table', 2),
	(53, '2021_02_02_212219_create_cesantias_table', 2),
	(54, '2021_02_02_214255_create_pensiones_table', 2),
	(55, '2021_02_02_215342_create_eps_table', 2),
	(56, '2021_02_03_103422_create_caja_compensacions_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.modalidads
CREATE TABLE IF NOT EXISTS `modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.modalidads: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `modalidads` DISABLE KEYS */;
INSERT INTO `modalidads` ( `modalidad`) VALUES
	( 'Sede'),
	( 'Home Office');
/*!40000 ALTER TABLE `modalidads` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.nivel_edus
CREATE TABLE IF NOT EXISTS `nivel_edus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivelEdu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.nivel_edus: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `nivel_edus` DISABLE KEYS */;
INSERT INTO `nivel_edus` ( `nivelEdu`) VALUES
	('Bachiller'),
	('Bachiller - Técnico'),
	('Técnico'),
	('Técnico Profesional'),
	('Técnico Laboral'),
	('Tecnólogo'),
	('Universitario'),
	('Pregrado'),
	('Profesional'),
	( 'Postgrado'),
	( 'Especialización'),
	( 'Licenciado');
/*!40000 ALTER TABLE `nivel_edus` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.novedades
CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinmediato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.novedades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `novedades` DISABLE KEYS */;
/*!40000 ALTER TABLE `novedades` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.nuevo_empleados
CREATE TABLE IF NOT EXISTS `nuevo_empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_filtro` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `fexpe` date NOT NULL,
  `depNac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tCelular` bigint(20) unsigned NOT NULL,
  `tFijo` bigint(20) unsigned DEFAULT NULL,
  `eCivil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugarNac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(10) unsigned NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivelEdu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corporativo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaContacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentesco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaDireccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactoCelular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numHijos` int(10) unsigned DEFAULT NULL,
  `hijosMAs` int(10) unsigned DEFAULT NULL,
  `hijosFem` int(10) unsigned DEFAULT NULL,
  `Preexistencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alergias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicamentos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_docs1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docfam1` bigint(20) unsigned DEFAULT NULL,
  `familiarp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp1` int(10) unsigned DEFAULT NULL,
  `epsFam1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_docs2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docfam2` bigint(20) unsigned DEFAULT NULL,
  `familiarp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp2` int(10) unsigned DEFAULT NULL,
  `epsFam2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_docs3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docfam3` bigint(20) unsigned DEFAULT NULL,
  `familiarp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp3` int(10) unsigned DEFAULT NULL,
  `epsFam3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_docs4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docfam4` bigint(20) unsigned DEFAULT NULL,
  `familiarp4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentescop4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadp4` int(10) unsigned DEFAULT NULL,
  `epsFam4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salario` bigint(20) unsigned DEFAULT NULL,
  `ingreso` date NOT NULL,
  `tipo_contratos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoModalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cesantias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pensiones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cajaComp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tcuenta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nCuenta` bigint(20) unsigned NOT NULL,
  `bancos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.nuevo_empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `nuevo_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `nuevo_empleados` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.orientacion
CREATE TABLE IF NOT EXISTS `orientacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `orientacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.orientacion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `orientacion` DISABLE KEYS */;
INSERT INTO `orientacion` ( `orientacion`) VALUES
	( 'ESTE'),
	( 'NORTE'),
	( 'OCCIDENTE'),
	( 'OESTE'),
	( 'SUR');
/*!40000 ALTER TABLE `orientacion` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.parentescos
CREATE TABLE IF NOT EXISTS `parentescos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.parentescos: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
INSERT INTO `parentescos` ( `parentesco`) VALUES
	('Abuelo(a)'),
	('Amigo(a)'),
	('Compañero(a)'),
	('Conyugue'),
	('Cuñado(a)'),
	('Esposo(a)'),
	('Expareja'),
	('Hermano(a)'),
	('Hijo(a)'),
	( 'Madre'),
	( 'Novio(a)'),
	( 'Padre'),
	( 'Pareja'),
	( 'Primo(a)'),
	( 'Suegro(a)'),
	( 'Tio(a)'),
	( 'Ninguno');
/*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.pensiones
CREATE TABLE IF NOT EXISTS `pensiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fondo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.pensiones: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `pensiones` DISABLE KEYS */;
INSERT INTO `pensiones` (`fondo`) VALUES
	('Colfondos'),
	('Colpensiones'),
	('Compensar'),
	('Oldmutual'),
	('Porvenir'),
	('Protección');
/*!40000 ALTER TABLE `pensiones` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.perfils
CREATE TABLE IF NOT EXISTS `perfils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.perfils: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `perfils` DISABLE KEYS */;
INSERT INTO `perfils` (`perfil`) VALUES
	('Atención al cliente'),
	('Ventas telefonía'),
	('Ventas seguros'),
	('Cobranza'),
	('Supervisor'),
	('Administrativo'),
	('Archivo'),
	('Servicios generales​'),
	('Atención presencial​'),
	( 'Venta presencial'),
	( 'Ya estuvo en Mentius'),
	( 'Nacionalidad'),
	( 'No experiencia'),
	( 'Contable'),
	( 'SST'),
	( 'Backoffice'),
	( 'Calidad'),
	( 'Bienestar'),
	( 'Contratación'),
	( 'Reclutamiento');
/*!40000 ALTER TABLE `perfils` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.permissions: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Index role', 'role.index', 'Un usuario puede listar un Rol', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(2, 'Show role', 'role.show', 'Un usuario puede Ver un Rol', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(3, 'Create role', 'role.create', 'Un usuario puede Crear un Rol', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(4, 'Edit role', 'role.edit', 'Un usuario puede Editar un Rol', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(5, 'Destroy role', 'role.destroy', 'Un usuario puede Destruir un Rol', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(6, 'List user', 'user.index', 'Un usuario puede Listar un Usuario', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(7, 'Show user', 'user.show', 'Un usuario puede Ver un Usuario', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(8, 'Edit user', 'user.edit', 'Un usuario puede Editar un Usuario', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(9, 'Destroy user', 'user.destroy', 'Un usuario puede Destriur un Usuario', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(10, 'Show own user', 'userown.show', 'Un usuario puede Ver a si mismo', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(11, 'Edit own user', 'userown.edit', 'Un usuario puede Editar a si mismo', '2021-02-03 16:28:00', '2021-02-03 16:28:00');
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
  `prefijo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.prefijo: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `prefijo` DISABLE KEYS */;
INSERT INTO `prefijo` (`id`, `prefijo`) VALUES
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
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vincuventas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computrabajo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sne` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compensar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `univ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fundaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publica` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.reclutamientos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `reclutamientos` DISABLE KEYS */;
INSERT INTO `reclutamientos` (`id`, `titulo`, `foco`, `informacion`, `foto`, `tiempo`, `finicio`, `vincuventas`, `computrabajo`, `sne`, `compensar`, `rt`, `rj`, `rc`, `univ`, `redes`, `Hv`, `fundaciones`, `publica`, `created_at`, `updated_at`) VALUES
	(1, 'prueba de registro nuevo', 'Staff IT', '\'menú\' => [\r\n        [\r\n            \'text\' => \'buscar\' ,\r\n            \'búsqueda\' => verdadero ,\r\n            \'topnav\' => verdadero ,\r\n        ],\r\n        [\r\n            \'text\' => \'blog\' ,\r\n            \'url\'   => \'admin / blog\' ,\r\n            \'can\'   => \'administrar-blog\' ,\r\n        ],\r\n        [\r\n            \'text\'         => \'páginas\' ,\r\n            \'url\'          => \'admin / páginas\' ,\r\n            \'icon\'         => \'far fa-fw fa-file\' ,\r\n            \'etiqueta\'        => 4 ,\r\n            \'label_color\' => \'éxito\' ,\r\n        ],\r\n        [ \'header\' => \'account_settings\' ],\r\n        [\r\n            \'text\' => \'perfil\' ,\r\n            \'url\'   => \'admin / configuración\' ,\r\n            \'icon\' => \'fas fa-fw fa-user\' ,\r\n        ],', 'C:\\Users\\Ryzen\\AppData\\Local\\Temp\\phpA31D.tmp', 'indefinido', '2021-03-01', 'vincuventas', 'computrabajo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hv', NULL, '1,admin', '2021-02-03 18:31:58', '2021-02-03 18:31:58'),
	(2, 'SE REQUIERE PERSONAL', 'Staff Datos y Metricas', 'Importante empresa se encuentra en la búsqueda de PROMOTOR VENTAS:\r\n• Bachiller, técnico, tecnólogo o estudiante de 3 semestre universitario,\r\n• Experiencia reciente de 6 meses en venta de productos tangibles o intangibles, abordando cliente en frio. *Horario: lunes a Domingo turnos rotativos 8 horas\r\n• Salario: SMLV + Comisiones por cumplimiento sin techo 100%+ auxilio de transporte + prestaciones de ley, y garantías de crecimiento en la empresa.\r\n• Tipo de contrato: Obra o labor', 'C:\\Users\\Ryzen\\AppData\\Local\\Temp\\php1BD4.tmp', 'indefinido', '2021-03-01', 'vincuventas', 'computrabajo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1,admin', '2021-02-03 18:33:35', '2021-02-03 18:33:35');
/*!40000 ALTER TABLE `reclutamientos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.requisicions
CREATE TABLE IF NOT EXISTS `requisicions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependencias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reemplaza` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jornada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finicio` date NOT NULL,
  `solicita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raza` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `culto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imposibilita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disfisica` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dismental` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.requisicions: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `requisicions` DISABLE KEYS */;
INSERT INTO `requisicions` (`id`, `cargo`, `cantidad`, `sede`, `dependencias`, `area`, `motivos`, `reemplaza`, `cual`, `tiempo`, `dias`, `jornada`, `finicio`, `solicita`, `revisado`, `observaciones`, `edad`, `profesion`, `orientacion`, `raza`, `culto`, `imposibilita`, `sexo`, `disfisica`, `dismental`, `nacionalidad`, `created_at`, `updated_at`) VALUES
	(1, 'Asesor Comercial', 10, 'Suba', 'Gerencia Comercial y Operativa', 'Direccion de operaciones', 'retiro', NULL, NULL, 'indefinido', 'lunes a sabado', 'completo', '2021-03-15', '1,admin', 'Aprobado', 'ok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 17:07:20', '2021-02-03 18:22:10'),
	(2, 'Asesor de Servicio al Cliente', 3, '100', 'Gerencia Comercial y Operativa', 'Direccion de operaciones', 'retiro', NULL, NULL, 'indefinido', 'lunes a sabado', 'completo', '2021-04-01', '1,admin', 'Aprobado', 'ok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 17:09:12', '2021-02-03 18:22:40'),
	(3, 'Auxiliar IT', 1, 'Suba', 'Operaciones', 'Dirección IT', 'nuevoCargo', NULL, NULL, 'indefinido', 'lunes a viernes', 'completo', '2021-03-31', '1,admin', 'Rechazado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 18:21:13', '2021-02-03 18:22:52');
/*!40000 ALTER TABLE `requisicions` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.residencia
CREATE TABLE IF NOT EXISTS `residencia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.residencia: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `residencia` DISABLE KEYS */;
INSERT INTO `residencia` ( `residencia`) VALUES
	( 'Bogotá'),
	( 'Aledaños');
/*!40000 ALTER TABLE `residencia` ENABLE KEYS */;

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

-- Volcando estructura para tabla recursos.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `full-access`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'Administrador', 'yes', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(2, 'Registered User', 'registereduser', 'Usuario Registrado', 'no', '2021-02-03 16:28:00', '2021-02-03 16:28:00'),
	(3, 'Analista User', 'analistauser', 'perfil analista', 'no', '2021-02-03 16:28:00', '2021-02-03 16:28:00');
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
INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2021-02-03 16:28:00', '2021-02-03 16:28:00');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.sede: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` (`id`, `sede`) VALUES
	(1, 'Suba'),
	(2, '100');
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.supervisors
CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.supervisors: ~36 rows (aproximadamente)
/*!40000 ALTER TABLE `supervisors` DISABLE KEYS */;
INSERT INTO `supervisors` ( `supervisor`) VALUES
	('Adriana Marcela Caro Montenegro'),
	('Andres Eduardo Salcedo Guillen'),
	('Brayan Alejandro Aristizabal Bolivar'),
	('Edwin Jair Roman Buitrago'),
	('Fausto Leandro Bustos Tinoco'),
	('Fernando Alexander Carrillo Leon'),
	('German Antonio Yepes Castaño'),
	('Ginna Paola Alarcon Peña'),
	('Holman Alberto Plazas Sanchez'),
	('Jackson Javier Castellanos Bohorquez'),
	('Jenny Geraldine Suarez Gonzalez'),
	('Jenny Patricia Barbosa Alvarado'),
	('Jenny Rocio Murillo Meneses'),
	('Jesus Antonio Archila Soracipa'),
	('Jhemaina Diaan Gómez Méndez'),
	('Johanna Paola Castrillon Londoño'),
	('Johanny Alexander Rodríguez Veloza'),
	('Jose Alexander Espitia Chinchilla'),
	('Jose Luis Aponte Blanco'),
	('Juan Camilo Parra Restrepo'),
	('Leidy Yiseth Monroy Barragan'),
	('Lina Maria Devia Escobar'),
	('Luis Carlos Cuellar Morales'),
	('Luis Fernando Suarez Cano'),
	('Magda Andrea Medina Barrios'),
	('Martin Ricardo Garcia Solano'),
	('Mentius'),
	('Miguel Leonardo Tocara Campos'),
	('Oscar Raúl Sánchez Salgado'),
	('Rafael Augusto Archila Soracipa'),
	('Rosa Elvira Leguizamon Carrillo'),
	('Rosa Helena Martínez Acero'),
	('Tatiana Sofia Caceres Pinzon'),
	('Williams Henry Muñoz Ospina'),
	('Yesica Cristina Aguilar Galeano'),
	('Zully Paola Vargas Vargas');
/*!40000 ALTER TABLE `supervisors` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipovia
CREATE TABLE IF NOT EXISTS `tipovia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TipoVia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipovia: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `tipovia` DISABLE KEYS */;
INSERT INTO `tipovia` (`TipoVia`) VALUES
	('Autopista'),
	('Avenida'),
	('Avenida calle'),
	('Avenida carrera'),
	('Calle'),
	('Callejon'),
	('Camino'),
	('Campo'),
	('Carrera'),
	('Carretera'),
	('Centro'),
	('Centro administrativo'),
	('Centro comercial'),
	('Centro urbano'),
	('Comuna'),
	('Corregimiento'),
	('Cruce'),
	('Crucero'),
	('Cubis'),
	('Diagonal'),
	('Distrito militar'),
	('Entrada'),
	('Esquina'),
	('Finca'),
	('KDX'),
	('Kilometro'),
	('LLorente'),
	('Mercado'),
	('Parcela'),
	('Parque'),
	('Pasaje'),
	('Paseo'),
	('Playa'),
	('Plaza'),
	('Polideportivo'),
	('Pozo'),
	('Pozon'),
	('Puente'),
	('Resguardo'),
	('Retiro'),
	('Salida'),
	('Subida'),
	('Tabiles'),
	('Terminal'),
	('Timba'),
	('Transversal'),
	('Troncal'),
	('Via'),
	('Zona');
/*!40000 ALTER TABLE `tipovia` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_contratos
CREATE TABLE IF NOT EXISTS `tipo_contratos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoCon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_contratos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_contratos` DISABLE KEYS */;
INSERT INTO `tipo_contratos` ( `tipoCon`) VALUES
	('Indefidido'),
	('Temporal'),
	('Aprendizaje'),
	('Practicas'),
	('Obra labor'),
	('Prestacion de servicios');
/*!40000 ALTER TABLE `tipo_contratos` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_docs
CREATE TABLE IF NOT EXISTS `tipo_docs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_docs: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_docs` DISABLE KEYS */;
INSERT INTO `tipo_docs` ( `tipo_doc`) VALUES
	('CC'),
	('CE'),
	('PEP');
/*!40000 ALTER TABLE `tipo_docs` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.tipo_modalidads
CREATE TABLE IF NOT EXISTS `tipo_modalidads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoModalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.tipo_modalidads: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_modalidads` DISABLE KEYS */;
INSERT INTO `tipo_modalidads` (`tipoModalidad`) VALUES
	( 'Presencial'),
	( 'Suplementario'),
	( 'Autonomo');
/*!40000 ALTER TABLE `tipo_modalidads` ENABLE KEYS */;

-- Volcando estructura para tabla recursos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla recursos.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `cedula`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 123456789, 'admin@admin.com', NULL, '$2y$10$vKs8dQdQDeA9.DT1zCqaXuK//HAb1QUXU/VcxGteruUptzoZIaUz.', NULL, '2021-02-03 16:28:00', '2021-02-03 16:28:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
