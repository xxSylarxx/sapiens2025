-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: custsql-spro-ipg02.ipagemysql.com
-- Tiempo de generación: 25-03-2025 a las 10:51:58
-- Versión del servidor: 5.6.51-91.0-log
-- Versión de PHP: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_sapiens`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `idban` int(11) NOT NULL COMMENT 'TRIAL',
  `tipo` varchar(10) NOT NULL COMMENT 'TRIAL',
  `cuerpo` longtext COMMENT 'TRIAL',
  `trial329` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`idban`, `tipo`, `cuerpo`, `trial329`) VALUES
(1, 'slider', '[{\"imagen\":\"/assets/img/banner/banner00001.jpg\"},{\"imagen\":\"/assets/img/banner/banner00002.jpg\"}]', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcat` char(1) NOT NULL COMMENT 'TRIAL',
  `nombre` varchar(50) NOT NULL COMMENT 'TRIAL',
  `filtro` varchar(50) NOT NULL COMMENT 'TRIAL',
  `catpad` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `trial329` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcat`, `nombre`, `filtro`, `catpad`, `trial329`) VALUES
('1', 'Health', 'health', NULL, 'T'),
('2', 'Government', 'government', NULL, 'T'),
('3', 'Manufacturing', 'manufacturing', NULL, 'T'),
('4', 'Banking', 'banking', NULL, 'T'),
('5', 'Others', 'other', NULL, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaes`
--

CREATE TABLE `categoriaes` (
  `idcat` char(1) NOT NULL COMMENT 'TRIAL',
  `nombre` varchar(50) NOT NULL COMMENT 'TRIAL',
  `filtro` varchar(50) NOT NULL COMMENT 'TRIAL',
  `catpad` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `trial332` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `categoriaes`
--

INSERT INTO `categoriaes` (`idcat`, `nombre`, `filtro`, `catpad`, `trial332`) VALUES
('1', 'Salud', 'salud', NULL, 'T'),
('2', 'Gobierno', 'gobierno', NULL, 'T'),
('4', 'Bancaria', 'Bancaria', NULL, 'T'),
('3', 'Fabricación', 'fabricacion', NULL, 'T'),
('5', 'Otros', 'otros', NULL, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idemp` int(11) NOT NULL COMMENT 'TRIAL',
  `nombre` varchar(100) NOT NULL COMMENT 'TRIAL',
  `telefono` varchar(60) DEFAULT NULL COMMENT 'TRIAL',
  `celular` varchar(60) DEFAULT NULL COMMENT 'TRIAL',
  `direction` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `correo` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `metades` varchar(400) DEFAULT NULL COMMENT 'TRIAL',
  `facebook` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `instagram` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `whatsapp` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `youtube` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `twitter` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `intranet` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `liblink` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `libmail` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `libnumb` int(11) DEFAULT NULL COMMENT 'TRIAL',
  `libanio` varchar(5) DEFAULT NULL COMMENT 'TRIAL',
  `trial332` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idemp`, `nombre`, `telefono`, `celular`, `direction`, `correo`, `metades`, `facebook`, `instagram`, `whatsapp`, `youtube`, `twitter`, `intranet`, `liblink`, `libmail`, `libnumb`, `libanio`, `trial332`) VALUES
(1, 'SAPIENS CONSULTING', '.', '.', '.', 'sales@sapiensconsultingperu.com', '', '', '', '', '', '', '', '', '', NULL, NULL, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgal` int(11) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(150) NOT NULL COMMENT 'TRIAL',
  `detalle` varchar(270) DEFAULT NULL COMMENT 'TRIAL',
  `portada` varchar(300) DEFAULT NULL COMMENT 'TRIAL',
  `ncolum` int(11) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` longtext COMMENT 'TRIAL',
  `fecpub` date DEFAULT NULL COMMENT 'TRIAL',
  `estado` char(1) DEFAULT 'N' COMMENT 'TRIAL',
  `modo` char(1) DEFAULT 'A' COMMENT 'TRIAL',
  `trial332` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modal`
--

CREATE TABLE `modal` (
  `idmod` int(11) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` longtext COMMENT 'TRIAL',
  `visible` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `trial332` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `modal`
--

INSERT INTO `modal` (`idmod`, `titulo`, `cuerpo`, `visible`, `trial332`) VALUES
(1, '', '', 'N', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnot` int(11) NOT NULL COMMENT 'TRIAL',
  `idcat` char(1) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(280) NOT NULL COMMENT 'TRIAL',
  `tagname` varchar(300) NOT NULL COMMENT 'TRIAL',
  `portada` varchar(340) DEFAULT NULL COMMENT 'TRIAL',
  `detalle` varchar(270) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` longtext COMMENT 'TRIAL',
  `fecpub` date NOT NULL COMMENT 'TRIAL',
  `visible` char(1) DEFAULT 'N' COMMENT 'TRIAL',
  `trial332` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnot`, `idcat`, `titulo`, `tagname`, `portada`, `detalle`, `cuerpo`, `fecpub`, `visible`, `trial332`) VALUES
(6, '1', 'COMPLEX SECURITY', 'complex-security', 'https://sapiensconsultingperu.com//assets/img/galeria/security.jpg', 'The client’s technology platform is very complex with a core system and multiple systems interconnected.', '<div>&nbsp;</div>\r\n<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../assets/img/galeria/security.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<p style=\"text-align: justify;\"><strong>Problem / Challenge</strong><span style=\"font-weight: 400;\">: The client&rsquo;s technology platform is very complex with a core system and multiple systems interconnected. The security management and control access policies for around 800 end-users required compliance with HIPAA requirements and other local and federal regulations. The integrity, availability, and confidentiality of key software systems, databases, and data networks were major concerns throughout all functional areas.<br />The corruption, unauthorized disclosure, or theft of corporate resources could disrupt an organization&rsquo;s operations and have immediate, serious financial, legal, human safety, personal privacy and public confidence impact. Access to each system is addressed in a role-based criteria and taking into account compliance. The principle of least privilege requires that a user be given no more privilege than necessary to perform a job. Due to problems during granting access privileges, removing or changing access to end-users must be quick and in compliance with regulations, the client requested software development services in order to develop an integrated security system to manage multiple applications from a single point. This new system should authenticate end-users against the Windows Active Directory.</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Our Role</strong><span style=\"font-weight: 400;\">: We worked on this project in close coordination with a Business Partner. One of our offshore teams was assigned to develop the application using Agile software development methodology. Compliance to regulations and integration with all applications of the client&rsquo;s production environment were key factors to ensure a successful implementation. The developed system lets manage the access control and security for all applications from a single point of control. The administrative task consists of granting and revoking membership to the set of specified named roles within the system. When a new person enters the organization, the administrator simply grants membership to an existing role. When a person&rsquo;s function changes within the organization, the user membership to his existing roles can be easily deleted and new ones granted. Finally, when a person leaves the organization, all memberships to all Roles are deleted. For an organization that experiences a large turnover of personnel, a role-based security policy is the only logical choice. Some of the direct tasks performed by our team included:</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Developing and maintaining software code (.NET, Java, Web Services, Database procedures)</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementing new functionalities considering local and federal regulations</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Research and development of new technologies and implementation techniques for integration into the security system and technology platform</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Key Outcomes</strong><span style=\"font-weight: 400;\">:&nbsp;</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Compliance with federal and local regulations</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Process optimization and workload reduction</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementation of check and balance procedures</span></li>\r\n</ul>\r\n<p><br /><strong>Technologies used</strong><span style=\"font-weight: 400;\">: .NET, ASP, MVC, Web Services, Java, J2EE.</span></p>', '2022-02-16', 'S', 'T'),
(10, '3', 'EXAMINATION AND DOCUMENT EXCHANGE PLATFORM', 'examination-and-document-exchange-platfo', 'https://sapiensconsultingperu.com//assets/img/galeria/examination.jpg', 'The Client required to develop a platform', '<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/galeria/examination.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<p style=\"text-align: justify;\"><strong>Problem / Challenge</strong><span style=\"font-weight: 400;\">: The Client required to develop a platform to review and exchange documents that be integrated to their current core system and be interconned with multiple systems throughout their multiple locations. The integrity, availability, and confidentiality of key software systems, databases, and data networks were major concerns. The corruption, unauthorized disclosure, or theft of documents could disrupt an organization&rsquo;s operations and have immediate, serious financial, legal, human safety, personal privacy and public confidence impact.&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Our Role</strong><span style=\"font-weight: 400;\">: We worked on this project in close coordination with a Business Partner. One of our offshore teams was assigned to develop the platform using Agile software development methodology. Compliance to regulations and integration with all applications of the client&rsquo;s production environment were key factors to ensure a successful implementation.&nbsp;</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Developing and maintaining software code (.NET, Java, Web Services, Database procedures)</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementing new functionalities considering local and federal regulations</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Research and development of new technologies and implementation techniques for integration into the security system and technology platform</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Key Outcomes</strong><span style=\"font-weight: 400;\">:&nbsp;</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Compliance with federal and local regulations</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Process optimization and workload reduction</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementation of check and balance procedures</span></li>\r\n</ul>\r\n<p><br /><strong>Technologies used</strong><span style=\"font-weight: 400;\">: .NET, ASP, MVC, Web Services, Java, J2EE.</span></p>', '2022-02-16', 'S', 'T'),
(7, '1', 'FACILITIES INSPECTION SYSTEM', 'facilities-inspection-system', 'https://sapiensconsultingperu.com/assets/img/galeria/inspection.jpg', 'The client’s main goal was to assess and certify more than 4,500 health care providers or entities. The assessment of the health care', '<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/galeria/inspection.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<p><strong>Problem / Challenge</strong><span style=\"font-weight: 400;\">:&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The client&rsquo;s main goal was to assess and certify more than 4,500 health care providers or entities. The assessment of the health care providers or entities&rsquo; physical facilities was a critical part of the certification process. The certification process is a Federal and state requirement for all the health care providers or entities, depending on the type of entity or provider. The number of facilities, the complexity of the inspections and the limited time to perform the certification process were the major challenges for our client. The inspection process of the facilities of health care providers or entities involves the planification of the inspections, the assignment of inspectors, the implementation of the inspections, the identification of the foundings, the identification of a corrective action plan, the follow up of the corrective actions, and finally the close of the inspection and the collection of penalties, if applicable.</span></p>\r\n<p><strong>Our Role</strong><span style=\"font-weight: 400;\">:</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Design and Architecture of the solution with two components:</span>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"2\"><span style=\"font-weight: 400;\">Mobile App used by inspectors during the facility inspections enabled to operate off-line and sync once is online.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"2\"><span style=\"font-weight: 400;\">Central &amp; Administrative App used for planning, assigning inspections, and managing the cases and reports.&nbsp;</span></li>\r\n</ul>\r\n</li>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Develop the solution with a mobile app, using Microsoft technology (MS Xamarin) and implemented for android devices, and a Web-based App using Microsoft&nbsp; technology (.NET con AngularJS, Web Services, and Database procedures.)&nbsp;</span></li>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementation of interfaces between mobile App and Web-based App.&nbsp;</span></li>\r\n</ul>\r\n<p><strong>Key Outcomes</strong><span style=\"font-weight: 400;\">:&nbsp;</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Reduce In-situ inspection time.&nbsp;</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Improve planning of inspections allowing to assign of inspectors in real time when inspectors are in the road.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Speed up the capture of information and avoid duplication of the data and minimize input data errors.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Off-line use of mobile App.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Index responses with evidence or pictures of the proper facility.&nbsp;</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Avoid inspectors need to re-visit the facilities already inspected.&nbsp;</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Productivity report and quality control of inspections to ensure that inspections meet Federal and State requirements.</span></li>\r\n</ul>\r\n<p><strong>Technologies used:</strong><span style=\"font-weight: 400;\"> MS Xamarin, Bootstrap, .NET with AngulaJS, Web Services, Java, and J2EE.</span></p>', '2022-02-16', 'S', 'T'),
(8, '2', 'BIOMETRIC SYSTEM', 'biometric-system', 'https://sapiensconsultingperu.com/assets/img/galeria/biometric.jpg', 'The U.S. government and private organizations had been involved in developing security technology for computer', '<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../assets/img/galeria/biometric.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<p style=\"text-align: justify;\"><strong>Problem / Challenge:</strong><span style=\"font-weight: 400; text-align: justify;\"> The U.S. government and private organizations had been involved in developing security technology for computer and communications systems for some time. Although advances were great, it was generally perceived that the state of security technology failed, to some extent, to address the needs of all.</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The client requested a biometric component with high quality optical fingerprint scanner technology in order to enhance a security system and attendance system. In both cases, modularity and compliance with the US Federal Information Processing Standard 201 (FIPS 201) were key success factors.</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Our Role:</strong><span style=\"font-weight: 400;\"> A business analyst and an offshore team were assigned to this project&nbsp; to develop this biometric component. Our team used an Agile software development methodology, and a certified fingerprint scanner.</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The system lets manage the enrollment of individuals, biometric validation, and access/authorization to perform any functionality or process according to privileges granted by the system that it was integrated with. Some of the direct tasks performed by our team included:</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Integration with the fingerprint scanner (Futronic FS88H)</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Development&nbsp; and maintaining software code (.NET, Java, Web Services, Database procedures)</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implemented interfaces with new systems based on modularity</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Key Outcomes:</strong></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Improvement of accuracy and security during automated identification. Unlike keys and tokens, biometrics are never lost or stolen</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Identity can be verified without resort to documents that may be stolen, lost or altered. Unlike passwords and PINs, biometrics cannot be forgotten</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Reduction of time support in the help desk due to password resets</span></li>\r\n</ul>\r\n<p><strong>Technologies used:</strong><span style=\"font-weight: 400;\"> Fingerprint scanner, .NET, ASP, MVC, Web Services, Java, J2EE</span></p>', '2022-02-16', 'S', 'T'),
(9, '4', 'RECOGNITION SYSTEM', 'recognition-system', 'https://sapiensconsultingperu.com/assets/img/galeria/recognition.jpg', 'The client, a multinational public company in the medical device manufacturing industry', '<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../assets/img/galeria/recognition.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<p style=\"text-align: justify;\"><strong>Problem / Challenge</strong><span style=\"font-weight: 400;\">: The client, a multinational public company in the medical device manufacturing industry, required a technology solution to support its Recognition Program. The client&rsquo;s HR Department implemented a program to foster employees&rsquo; initiatives on their daily work activities.<br />The goal was to empower their employees to nominate their coworkers to recognize them on how they &ldquo;live&rdquo; the client&rsquo;s core values. However, the success of the Recognition Program was at risk due to the complexity of the process to submit, assess, and select the nominations. The Client requested a platform capable to support the whole process allowing a decentralized nomination for employees in multiple locations and a centralized assessment and selection of nominations, granting recognition based on specific rules aligned to the Client&rsquo;s values, as well as controlling the premiation and corporation points redemption process.&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Our Role</strong><span style=\"font-weight: 400;\">:</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Design and architecture of a user-friendly platform focused on the user experience capable of being accessible from multi locations keeping the client&rsquo;s corporation standards.</span></li>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Development of a web-based centralized platform differentiating the client&rsquo;s locations (multiple countries)</span></li>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Integration with the Active Directory to manage the security and required access of the platform.&nbsp;</span></li>\r\n<li style=\"font-weight: 400; text-align: justify;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Implementation of the client&rsquo;s proprietorship infrastructure and deployment in 3 countries.&nbsp;</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Key Outcomes</strong><span style=\"font-weight: 400;\">:&nbsp;</span></p>\r\n<ul>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Standardization of the recognition process flow.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Reduction of the cycle times of the Recognition Program</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Automation of the client&rsquo;s rules to assess and select the nominations based on the requirements for each location or country.</span></li>\r\n<li style=\"font-weight: 400;\" aria-level=\"1\"><span style=\"font-weight: 400;\">Improvement of the visibility of the status of the nomination through the recognition process.</span></li>\r\n</ul>\r\n<p><br /><strong>Technologies used:</strong><span style=\"font-weight: 400;\">&nbsp; .NET, ASP, MVC, Web Services, Java, and J2EE.</span></p>', '2022-02-16', 'S', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiases`
--

CREATE TABLE `noticiases` (
  `idnot` int(11) NOT NULL COMMENT 'TRIAL',
  `idcat` char(1) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(280) NOT NULL COMMENT 'TRIAL',
  `tagname` varchar(300) NOT NULL COMMENT 'TRIAL',
  `portada` varchar(340) DEFAULT NULL COMMENT 'TRIAL',
  `detalle` varchar(270) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` longtext COMMENT 'TRIAL',
  `fecpub` date NOT NULL COMMENT 'TRIAL',
  `visible` char(1) DEFAULT 'N' COMMENT 'TRIAL',
  `trial335` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `noticiases`
--

INSERT INTO `noticiases` (`idnot`, `idcat`, `titulo`, `tagname`, `portada`, `detalle`, `cuerpo`, `fecpub`, `visible`, `trial335`) VALUES
(21, '1', 'SISTEMA DE INSPECCIÓN DE INSTALACIONES', 'sistema-de-inspeccion-de-instalaciones', 'https://sapiensconsultingperu.com/assets/img/galeria/inspection.jpg', 'El objetivo principal del cliente era evaluar y certificar a más de 4500 proveedores o entidades de atención médica.', '<div><img src=\"../assets/img/galeria/inspection.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Problema / Desaf&iacute;o:</strong></div>\r\n<div>El objetivo principal del cliente era evaluar y certificar a m&aacute;s de 4500 proveedores o entidades de atenci&oacute;n m&eacute;dica. La evaluaci&oacute;n de las instalaciones f&iacute;sicas de los proveedores o entidades de salud fue una parte cr&iacute;tica del proceso de certificaci&oacute;n. El proceso de certificaci&oacute;n es un requisito federal y estatal para todos los proveedores o entidades de atenci&oacute;n m&eacute;dica, seg&uacute;n el tipo de entidad o proveedor. La cantidad de instalaciones, la complejidad de las inspecciones y el tiempo limitado para realizar el proceso de certificaci&oacute;n fueron los principales desaf&iacute;os para nuestro cliente. El proceso de inspecci&oacute;n de las instalaciones de los prestadores o entidades de salud involucra la planificaci&oacute;n de las inspecciones, la asignaci&oacute;n de inspectores, la implementaci&oacute;n de las inspecciones, la identificaci&oacute;n de las fallas, la identificaci&oacute;n de un plan de acci&oacute;n correctivo, el seguimiento de las acciones correctivas, y finalmente el cierre de la inspecci&oacute;n y el cobro de sanciones, en su caso.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Nuestro rol:</strong></div>\r\n<ul>\r\n<li>Dise&ntilde;o y arquitectura de la soluci&oacute;n con dos componentes:</li>\r\n<li>La aplicaci&oacute;n m&oacute;vil utilizada por los inspectores durante las inspecciones de las instalaciones est&aacute; habilitada para operar fuera de l&iacute;nea y sincronizarse una vez que est&aacute; en l&iacute;nea.</li>\r\n<li>Aplicaci&oacute;n central y administrativa utilizada para planificar, asignar inspecciones y gestionar casos e informes.</li>\r\n<li>Desarrollo de la soluci&oacute;n con una aplicaci&oacute;n m&oacute;vil, usando tecnolog&iacute;a Microsoft (MS Xamarin) e implementada para dispositivos Android, y una aplicaci&oacute;n basada en Web usando tecnolog&iacute;a Microsoft (procedimientos .NET con AngularJS, Web Services y Base de datos).</li>\r\n<li>Implementaci&oacute;n de interfaces entre la aplicaci&oacute;n m&oacute;vil y la aplicaci&oacute;n web.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Resultados Claves:</strong></div>\r\n<ul>\r\n<li>Reducir el tiempo de inspecci&oacute;n in situ.</li>\r\n<li>Mejora en la planificaci&oacute;n de las inspecciones permitiendo la asignaci&oacute;n de inspectores en tiempo real cuando los inspectores est&aacute;n en la carretera.</li>\r\n<li>Acelerar la captura de informaci&oacute;n y evitar la duplicidad de datos y minimizar los errores en la entrada de datos.</li>\r\n<li>Uso fuera de l&iacute;nea de la aplicaci&oacute;n m&oacute;vil.</li>\r\n<li>Indexar las respuestas con evidencia o im&aacute;genes de la instalaci&oacute;n adecuada.</li>\r\n<li>Evitar que los inspectores tengan que volver a visitar las instalaciones ya inspeccionadas.</li>\r\n<li>Generar informes de productividad y control de calidad de las inspecciones para garantizar que las inspecciones cumplan con los requisitos federales y estatales.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div><strong>Tecnolog&iacute;as Utilizadas:</strong> MS Xamarin, Bootstrap, .NET con AngulaJS, Web Services, Java y J2EE.</div>\r\n</div>\r\n</div>\r\n</div>', '2022-02-22', 'S', 'T'),
(18, '1', 'SISTEMA DE SEGURIDAD', 'sistema-de-seguridad', 'https://sapiensconsultingperu.com/assets/img/galeria/security.jpg', 'La plataforma tecnológica del cliente es muy compleja con un sistema central y múltiples sistemas interconectados.', '<div><img src=\"../assets/img/galeria/security.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Problema/Reto:</strong> La plataforma tecnol&oacute;gica del cliente es muy compleja con un sistema central y m&uacute;ltiples sistemas interconectados. Las pol&iacute;ticas de gesti&oacute;n de seguridad y control de acceso para alrededor de 800 usuarios finales requer&iacute;an el cumplimiento de los requisitos de HIPAA y otras regulaciones locales y federales. La integridad, disponibilidad y confidencialidad de los sistemas de software vitales, las bases de datos, y las redes de datos eran las preocupaciones m&aacute;s importantes en todas las &aacute;reas funcionales.</div>\r\n<div>La corrupci&oacute;n, la divulgaci&oacute;n no autorizada, o el robo de recursos corporativos podr&iacute;an interrumpir las operaciones de la organizaci&oacute;n y tener un impacto inmediato y grave a nivel financiero, legal, de seguridad personal, de privacidad personal, y de confianza p&uacute;blica. El acceso a cada sistema est&aacute; basado en roles y en el grado de cumplimiento. El principio de privilegio m&iacute;nimo requiere que un usuario no tenga m&aacute;s privilegios que los necesarios para realizar un trabajo. Debido a problemas al otorgar privilegios de acceso, eliminar o cambiar el acceso a los usuarios finales debe ser r&aacute;pido y cumplir con las regulaciones, el cliente solicit&oacute; servicios para desarrollar un sistema de seguridad integrado para administrar m&uacute;ltiples aplicaciones desde un solo punto. Este nuevo sistema deber&aacute; autenticar a los usuarios finales en el Directorio Activo de Windows.</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Nuestro Rol:</strong> Trabajamos en este proyecto en estrecha coordinaci&oacute;n con un socio comercial. Se asign&oacute; a uno de nuestros equipos en el extranjero para desarrollar la aplicaci&oacute;n utilizando la metodolog&iacute;a de desarrollo de software Agile. El cumplimiento de las normativas y la integraci&oacute;n con todas las aplicaciones del entorno de producci&oacute;n del cliente fueron factores claves para garantizar una implementaci&oacute;n exitosa. El sistema desarrollado permite gestionar el control de acceso y la seguridad de todas las aplicaciones desde un &uacute;nico punto de control. La tarea administrativa consiste en otorgar y revocar la pertenencia al conjunto de roles especificados dentro del sistema. Cuando una nueva persona ingresa a la organizaci&oacute;n, el administrador simplemente otorga membres&iacute;a a un rol existente. Cuando la funci&oacute;n de una persona cambia dentro de la organizaci&oacute;n, la membres&iacute;a del usuario de acuerdo a sus nuevos roles se modifica f&aacute;cilmente. Finalmente, cuando una persona deja la organizaci&oacute;n, se eliminan todas las membres&iacute;as a todos los roles. Para una organizaci&oacute;n que experimenta una gran rotaci&oacute;n de personal, una pol&iacute;tica de seguridad basada en roles es la &uacute;nica opci&oacute;n l&oacute;gica. Algunas de las tareas directas realizadas por nuestro equipo incluyeron:</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>? &nbsp; &nbsp; Desarrollo y mantenimiento de c&oacute;digo de software (.NET, Java, servicios web, procedimientos de base de datos).</div>\r\n<div>? &nbsp; &nbsp; Implementaci&oacute;n de nuevas funcionalidades considerando las regulaciones locales y federales.</div>\r\n<div>? &nbsp; &nbsp; Investigaci&oacute;n y desarrollo de nuevas tecnolog&iacute;as y t&eacute;cnicas de implementaci&oacute;n para su integraci&oacute;n en el sistema de seguridad y plataforma tecnol&oacute;gica.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Resultados Claves:</strong></div>\r\n<div>&nbsp;</div>\r\n<div>? &nbsp; &nbsp; Cumplimiento de las reglamentaciones federales y locales.</div>\r\n<div>? &nbsp; &nbsp; Optimizaci&oacute;n de procesos y reducci&oacute;n de la carga de trabajo.</div>\r\n<div>? &nbsp; &nbsp; Implementaci&oacute;n de procedimientos de control y equilibrio.</div>\r\n<div>&nbsp;</div>\r\n<div>Tecnolog&iacute;as Utilizadas: .NET, ASP, MVC, Web Services, Java, J2EE.</div>\r\n</div>\r\n</div>\r\n</div>', '2022-02-22', 'S', 'T'),
(22, '2', 'SISTEMA BIOMETRICO', 'sistema-biometrico', 'https://sapiensconsultingperu.com/assets/img/galeria/biometric.jpg', 'El gobierno de EE. UU. y organizaciones privadas habían estado involucrados en el desarrollo de', '<div><img src=\"../assets/img/galeria/biometric.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Problema/desaf&iacute;o:&nbsp;</strong></div>\r\n<div>El gobierno de EE. UU. y organizaciones privadas hab&iacute;an estado involucrados en el desarrollo de tecnolog&iacute;a de seguridad para sistemas inform&aacute;ticos y de comunicaciones durante alg&uacute;n tiempo. Aunque los avances fueron grandes, en general se percibi&oacute; que el estado de la tecnolog&iacute;a de seguridad no lograba, hasta cierto punto, abordar las necesidades de todos.</div>\r\n<div>&nbsp;</div>\r\n<div>El cliente solicit&oacute; un componente biom&eacute;trico con tecnolog&iacute;a de esc&aacute;ner &oacute;ptico de huellas dactilares de alta calidad para mejorar un sistema de seguridad y un sistema de asistencia. En ambos casos, la modularidad y el cumplimiento del est&aacute;ndar federal de procesamiento de informaci&oacute;n 201 (FIPS 201) de EE. UU. fueron factores claves de &eacute;xito.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Nuestro Rol:&nbsp;</strong></div>\r\n<div>Se asign&oacute; a este proyecto a un analista &nbsp;y un equipo en el extranjero para desarrollar este componente biom&eacute;trico. Nuestro equipo utiliz&oacute; una metodolog&iacute;a de desarrollo de software Agile y un esc&aacute;ner de huellas dactilares certificado.</div>\r\n<div>&nbsp;</div>\r\n<div>El sistema permite gestionar el registro de personas, la validaci&oacute;n biom&eacute;trica y el acceso/autorizaci&oacute;n para realizar cualquier funcionalidad o proceso de acuerdo a los privilegios otorgados por el sistema con el que se integr&oacute;. Algunas de las tareas directas realizadas por nuestro equipo incluyeron:</div>\r\n<div>&nbsp;</div>\r\n<ul>\r\n<li>Integraci&oacute;n con el esc&aacute;ner de huellas dactilares (Futronic FS88H).</li>\r\n<li>Desarrollo y mantenimiento de c&oacute;digo de software (.NET, Java, servicios web, procedimientos de base de datos).</li>\r\n<li>Interfaces implementadas con nuevos sistemas basados en modularidad.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Resultados Claves:</strong></div>\r\n<div>&nbsp;</div>\r\n<ul>\r\n<li>Mejora de la precisi&oacute;n y seguridad durante la identificaci&oacute;n automatizada. A diferencia de las fichas y llaves de seguridad, los datos biom&eacute;tricos nunca se pierden ni se roban.</li>\r\n<li>La identidad se puede verificar sin recurrir a documentos que pueden ser robados, perdidos o alterados. A diferencia de las contrase&ntilde;as y los PIN de seguridad, la biometr&iacute;a no se puede olvidar.</li>\r\n<li>Reducci&oacute;n del tiempo de soporte en el Centro de Atenci&oacute;n al Usuario debido a los restablecimientos de contrase&ntilde;a.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div><strong>Tecnolog&iacute;as Utilizadas:</strong> Esc&aacute;ner de huellas dactilares, .NET, ASP, MVC, servicios web, Java, J2EE</div>\r\n</div>\r\n</div>\r\n</div>', '2022-02-22', 'S', 'T'),
(23, '4', 'SISTEMA DE RECONOCIMIENTO', 'sistema-de-reconocimiento', 'https://sapiensconsultingperu.com/assets/img/galeria/recognition.jpg', 'El cliente, una empresa pública multinacional en la industria de fabricación de dispositivos médicos', '<div><img src=\"../assets/img/galeria/recognition.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Problema / Desaf&iacute;o:&nbsp;</strong></div>\r\n<div>El cliente, una empresa p&uacute;blica multinacional en la industria de fabricaci&oacute;n de dispositivos m&eacute;dicos, requer&iacute;a una soluci&oacute;n tecnol&oacute;gica para respaldar su Programa de Reconocimiento. El Departamento de Recursos Humanos del cliente implement&oacute; un programa para fomentar las iniciativas de los empleados en sus actividades laborales diarias.</div>\r\n<div>El objetivo era empoderar a sus empleados para que nominaran a sus compa&ntilde;eros de trabajo para reconocerlos por c&oacute;mo \"viven\" los valores fundamentales del cliente. Sin embargo, el &eacute;xito del Programa de Reconocimiento estuvo en riesgo debido a la complejidad del proceso de presentaci&oacute;n, evaluaci&oacute;n y selecci&oacute;n de las candidaturas. El Cliente solicit&oacute; una plataforma capaz de soportar todo el proceso que permitiera una nominaci&oacute;n descentralizada para empleados en m&uacute;ltiples ubicaciones y una evaluaci&oacute;n y selecci&oacute;n centralizada de nominaciones, otorgando reconocimiento basado en reglas espec&iacute;ficas alineadas con los valores del Cliente, as&iacute; como controlando la prima y los puntos corporativos. proceso de redenci&oacute;n.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Nuestro rol:</strong></div>\r\n<ul>\r\n<li>Dise&ntilde;o y arquitectura de una plataforma amigable enfocada en la experiencia del usuario capaz de ser accesible desde m&uacute;ltiples ubicaciones manteniendo los est&aacute;ndares de la corporaci&oacute;n del cliente.</li>\r\n<li>Desarrollo de una plataforma centralizada web que diferencia las ubicaciones del cliente (m&uacute;ltiples pa&iacute;ses)</li>\r\n<li>Integraci&oacute;n con el Directorio Activo para gestionar la seguridad y acceso requerido de la plataforma.</li>\r\n<li>Implantaci&oacute;n de infraestructura propia del cliente e implementaci&oacute;n en 3 pa&iacute;ses.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Resultados claves:</strong></div>\r\n<div>&nbsp;</div>\r\n<ul>\r\n<li>Estandarizaci&oacute;n del flujo del proceso de reconocimiento.</li>\r\n<li>Reducci&oacute;n de los tiempos de ciclo del Programa de Reconocimiento</li>\r\n<li>Automatizaci&oacute;n de las reglas del cliente para evaluar y seleccionar las candidaturas en funci&oacute;n de los requisitos de cada ubicaci&oacute;n o pa&iacute;s.</li>\r\n<li>Mejora de la visibilidad de las nominaciones a trav&eacute;s del proceso de reconocimiento.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div><strong>Tecnolog&iacute;as Utilizadas:</strong> .NET, ASP, MVC, Web Services, Java y J2EE.</div>\r\n</div>\r\n</div>\r\n</div>', '2022-02-22', 'S', 'T'),
(24, '1', 'PLATAFORMA DE INTERCAMBIO', 'plataforma-de-intercambio', 'https://sapiensconsultingperu.com/assets/img/galeria/examination.jpg', 'El cliente necesitaba desarrollar una plataforma...', '<div><img src=\"../assets/img/galeria/examination.jpg\" width=\"85%\" /></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Problema/Desaf&iacute;o:&nbsp;</strong></div>\r\n<div>El cliente necesitaba desarrollar una plataforma para revisar e intercambiar documentos que se integrar&aacute;n a su sistema central y se interconectara con m&uacute;ltiples sistemas en sus m&uacute;ltiples ubicaciones. La integridad, disponibilidad y confidencialidad de los principales sistemas de software, bases de datos y redes de datos eran preocupaciones importantes para el cliente.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Nuestro Rol:&nbsp;</strong></div>\r\n<div>Trabajamos en este proyecto en estrecha coordinaci&oacute;n con un socio comercial. Se asign&oacute; a uno de nuestros equipos en el extranjero para desarrollar la plataforma utilizando la metodolog&iacute;a de desarrollo de software Agile. El cumplimiento de las normativas y la integraci&oacute;n con todas las aplicaciones del entorno de producci&oacute;n del cliente fueron factores clave para garantizar una implementaci&oacute;n exitosa.</div>\r\n<div>&nbsp;</div>\r\n<ul>\r\n<li>Desarrollo y mantenimiento de c&oacute;digo de software (.NET, Java, servicios web, procedimientos de base de datos).</li>\r\n<li>&nbsp;Implementaci&oacute;n de nuevas funcionalidades considerando las regulaciones locales y federales.</li>\r\n<li>Investigaci&oacute;n y desarrollo de nuevas tecnolog&iacute;as y t&eacute;cnicas de implementaci&oacute;n para su integraci&oacute;n en el sistema de seguridad y plataforma tecnol&oacute;gica.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div><strong>Resultados Claves:</strong></div>\r\n<div>&nbsp;</div>\r\n<ul>\r\n<li>Cumplimiento de las reglamentaciones federales y locales</li>\r\n<li>Optimizaci&oacute;n de procesos y reducci&oacute;n de la carga de trabajo</li>\r\n<li>Implementaci&oacute;n de procedimientos de control y equilibrio.</li>\r\n</ul>\r\n</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n<div><strong>Tecnolog&iacute;as Utilizadas:</strong> .NET, ASP, MVC, Web Services, Java, J2EE.</div>', '2022-02-22', 'S', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `iduser` int(11) NOT NULL COMMENT 'TRIAL',
  `nomb` varchar(30) NOT NULL COMMENT 'TRIAL',
  `pass` varchar(250) NOT NULL COMMENT 'TRIAL',
  `trial338` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`iduser`, `nomb`, `pass`, `trial338`) VALUES
(1, 'webSapiens', '$2y$10$ot/Bh7CatHKtM/NDYZS2zumWQFYgjRQyKFvqNmdDlXzmd.NT8A05O', 'T');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idban`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcat`),
  ADD UNIQUE KEY `categoria_nombre_key` (`nombre`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idemp`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgal`);

--
-- Indices de la tabla `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`idmod`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnot`),
  ADD UNIQUE KEY `noticias_titulo_key` (`titulo`(255));

--
-- Indices de la tabla `noticiases`
--
ALTER TABLE `noticiases`
  ADD PRIMARY KEY (`idnot`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `usuario_nomb_key` (`nomb`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgal` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL';

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnot` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `noticiases`
--
ALTER TABLE `noticiases`
  MODIFY `idnot` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
