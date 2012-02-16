DROP TABLE IF EXISTS `#__comexample`;

CREATE TABLE `#__comexample` (
  `id` int(11) NOT NULL auto_increment,
  `examplefield` varchar(25) NOT NULL,
  `catid` int(11) NOT NULL DEFAULT '0',
  `params` TEXT NOT NULL DEFAULT '',
   PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__comexample` (`examplefield`) VALUES
	('Alpha'),
	('Bravo'),
	('Charlie'),
	('Delta'),
	('Echo'),
	('Foxtrot'),
	('Golf'),
	('Hotel'),
	('Juliet'),
	('Kilo'),
	('Lima'),
	('Mike'),
	('November'),
	('Oscar'),
	('Quebec'),
	('Romeo'),
	('Sierra'),
	('Tango'),
	('Uniform'),
	('Victor'),
	('Whiskey'),
	('Xray'),
	('Yankee'),
	('Zulu')
;