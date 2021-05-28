#database:

#tabla visitantes_personas: 

CREATE TABLE `visitantes_personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(12) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `placa_vehiculo` varchar(11) NOT NULL,
  `fecha_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


#tabla visitantes_visitas:

CREATE TABLE `visitantes_visitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_persona` int(11) NOT NULL,
  `fecha_entrada` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `destino` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `fecha_limite` date NOT NULL,
  `fecha_salida` date,
  PRIMARY KEY (id)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#tabla usuarios:

CREATE TABLE `usuarios` (
  `user_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_level` VARCHAR(3) NOT NULL,
  `activo` varchar(11) NOT NULL  DEFAULT 'Si'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 
	`usuarios` (`user_id`, `user_name`, `user_pass`, `user_level`)
VALUES
	(NULL, 'vadmin', MD5('123456'),'1'),
  (NULL, 'operario', MD5('123456'),'2');