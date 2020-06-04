DROP DATABASE IF EXISTS imkersleiden;
CREATE DATABASE imkersleiden;
USE imkersleiden;

CREATE TABLE accounts (
  id int(11) NOT NULL,
  individualid int(11) NOT NULL,
  username  varchar(20) DEFAULT NULL,
  password varchar(20) DEFAULT NULL
);

CREATE TABLE userRoles (
  id int(11) NOT NULL,
  accountid  int(11) DEFAULT NULL,
  permissions int(1) DEFAULT NULL
);

CREATE TABLE individual (
  id int(11) NOT NULL,
  firstname  varchar(40) DEFAULT NULL,
  lastname varchar(40) DEFAULT NULL,
  dateofbirth DATE DEFAULT NULL
);

CREATE TABLE individual_cursussen (
  individualid int(11) DEFAULT NULL,
  cursusid int(11) DEFAULT NULL
);

CREATE TABLE cursus (
  id int(11) NOT NULL,
  naam  varchar(20) DEFAULT NULL,
  descript text DEFAULT NULL,
  startdate DATE DEFAULT NULL,
  enddate DATE DEFAULT NULL
);

ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD FOREIGN KEY (`individualid`) REFERENCES `individual`(	`id`);

ALTER TABLE `userRoles`
  ADD PRIMARY KEY (`id`),
  ADD FOREIGN KEY (`accountid`) REFERENCES `account`(`id`);
  
ALTER TABLE `individual`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `individual_cursussen`
  ADD FOREIGN KEY (`individualid`) REFERENCES `individual`(	`id`),
  ADD FOREIGN KEY (`cursusid`) REFERENCES `cursus`(	`id`);
  
ALTER TABLE `cursus`
  ADD PRIMARY KEY (`id`);
  
INSERT INTO `individual` (`id`, `firstname`, `lastname`, `dateofbirth`) VALUES
(1627948226, 'Mohamed', 'Boukiour', '1969-07-05');

INSERT INTO `accounts` (`id`, `individualid`, `username`, `password`) VALUES
(2141233221, 1627948226, 'admin', 'admin');
