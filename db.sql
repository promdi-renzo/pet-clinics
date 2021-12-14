DROP TABLE consult;

CREATE TABLE `consult` (
  `idhistory` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `dateCreated` varchar(45) DEFAULT NULL,
  `idpet` int(11) NOT NULL,
  `cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`idhistory`),
  KEY `fk_history_pet1_idx` (`idpet`),
  CONSTRAINT `fk_history_pet1` FOREIGN KEY (`idpet`) REFERENCES `pet` (`idpet`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO consult VALUES("1","ubo","asd","12/14/2021 01:57:04 pm","1","0");



DROP TABLE customer;

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `num` varchar(45) DEFAULT NULL,
  `picpath` varchar(45) DEFAULT NULL,
  `loc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcustomer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO customer VALUES("1","asd","asd","asd","./uploads/","sd");



DROP TABLE employee;

CREATE TABLE `employee` (
  `idemployee` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `picpath` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idemployee`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO employee VALUES("1","asd","asd","./uploads/","asd","$2y$10$n2qSXSzlxBjFjkDL4OcM9uUGgGLJ8EhDqfSpYFw.wNwO6S3yOYJ96");



DROP TABLE pet;

CREATE TABLE `pet` (
  `idpet` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `breed` varchar(45) DEFAULT NULL,
  `idcustomer` int(11) NOT NULL,
  `picpath` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpet`,`idcustomer`),
  KEY `fk_pet_customer_idx` (`idcustomer`),
  CONSTRAINT `fk_pet_customer` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`idcustomer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO pet VALUES("1","asd","asd","asd","1","./uploads/");



DROP TABLE service;

CREATE TABLE `service` (
  `idservice` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `cost` varchar(45) NOT NULL,
  `picpath` varchar(45) NOT NULL,
  PRIMARY KEY (`idservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE transaction;

CREATE TABLE `transaction` (
  `idtransaction` int(11) NOT NULL AUTO_INCREMENT,
  `dateCreated` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtransaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE transactionline;

CREATE TABLE `transactionline` (
  `idtransaction` int(11) NOT NULL,
  `idservice` int(11) NOT NULL,
  `pet_idpet` int(11) NOT NULL,
  KEY `fk_transaction-line_transaction1_idx` (`idtransaction`),
  KEY `fk_transaction-line_service1_idx` (`idservice`),
  KEY `fk_transactionline_pet1_idx` (`pet_idpet`),
  CONSTRAINT `fk_transaction-line_service1` FOREIGN KEY (`idservice`) REFERENCES `service` (`idservice`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_transaction-line_transaction1` FOREIGN KEY (`idtransaction`) REFERENCES `transaction` (`idtransaction`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_transactionline_pet1` FOREIGN KEY (`pet_idpet`) REFERENCES `pet` (`idpet`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




