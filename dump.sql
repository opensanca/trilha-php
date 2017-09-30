DROP TABLE IF EXISTS `animais`;

CREATE TABLE `animais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `raca` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table doacoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `doacoes`;

CREATE TABLE `doacoes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) unsigned NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `animal_id_fk` (`animal_id`),
  CONSTRAINT `animal_id_fk` FOREIGN KEY (`animal_id`) REFERENCES `animais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table empresas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `cnpj` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `ajuda` varchar(180) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;

/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table veterinarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `veterinarios`;

CREATE TABLE `veterinarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `crv` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
