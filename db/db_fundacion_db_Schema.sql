--
-- Database: `fundacion_db`
--

CREATE DATABASE IF NOT EXISTS `fundacion_db`;
USE `fundacion_db`;


-- ENTITIES

--
-- Struttura della tabella `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
	`img` varchar(130) ,
	`texto` varchar(130)  NOT NULL,
	`titulo` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
	`contacto` varchar(130)  NOT NULL,
	`tipo` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
	`Nit` varchar(130) ,
	`nombre` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `objetivos`
--

CREATE TABLE IF NOT EXISTS `objetivos` (
	`img` varchar(130) ,
	`texto` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `quienes`
--

CREATE TABLE IF NOT EXISTS `quienes` (
	`mision` varchar(130) ,
	`somos` varchar(130) ,
	`vision` varchar(130) ,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
	`img` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
	`mail` varchar(130) ,
	`password` varchar(130)  NOT NULL,
	`role` varchar(130)  NOT NULL,
	`username` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


-- Security

ALTER TABLE `user` MODIFY COLUMN `password` varchar(128)  NOT NULL;

INSERT INTO `fundacion_db`.`user` (`username`, `password`, `_id`) VALUES ('admin', '62f264d7ad826f02a8af714c0a54b197935b717656b80461686d450f7b3abde4c553541515de2052b9af70f710f0cd8a1a2d3f4d60aa72608d71a63a9a93c0f5', 1);

CREATE TABLE IF NOT EXISTS `roles` (
	`role` varchar(30) ,
	
	-- RELAZIONI

	`_user` int(11)  NOT NULL REFERENCES user(_id),
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);
INSERT INTO `fundacion_db`.`roles` (`role`, `_user`, `_id`) VALUES ('ADMIN', '1', 1);






