

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL auto_increment,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;




CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL auto_increment,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'FERRU21', 'Cazzuola punta Tonda Ausonia cm 16 manico Bi-Materiale ', 'Design ergonomico per una presa perfetta e sicura, grazie anche al manico in bi-materiale realizzato in polipropilene e gomma termoplastica antiscivolo, resiste a qualsiasi urto', 'cazzuola.jpg', 26, 5000.00),
  (2, 'MONTANA56', 'TRAPANO AVVITATORE CON PERCUSSIONE HITACHI DV18DBL 18V 5Ah', ' HITACHI DV18DBL trapano avvitatore a percussione, reversibile da 18V ultra-potente dotato di due batterie al Litio super-performanti da 5.0Ah con un autonomia di lavoro sempre maggiore.', 'trapano.jpg', 7, 200.00),
(3, 'BUNONE13', 'Saldatrice a filo PSI 270 PROFESSIONAL ', 'Saldatrice a Filo PSI 270 PROFESSIONAL (15-4) 400 V PATON™ progettato per la saldatura ad arco semiautomatica MIG/MAG, saldatura ad arco con gas schermato con metodo TIG e saldatura ad arco manuale con elettrodo schermato MMA, corrente continua (DC)', 'saldatriceafilo.jpg', 34, 1000.00);



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL default 'user',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;



INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve', 'user'),
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin');
