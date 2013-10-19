
CREATE DATABASE antique;
USE antique;

CREATE TABLE region (

	id             SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	title          VARCHAR(255),

	display        TINYINT(1), 

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE show_site (
	
	id               SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	region_id        SMALLINT UNSIGNED NOT NULL,

	title            VARCHAR(255),
	contact_name     VARCHAR(255),
	phone_1          VARCHAR(12),
	phone_2          VARCHAR(12),

	start_date       DATE,
	end_date         DATE,

	admission_cost   DECIMAL(5,2),
	parking_cost     DECIMAL(5,2),

	lat              DECIMAL(10, 8), 
	lng              DECIMAL(11, 8),

	description      TEXT,

	image            VARCHAR(255),

	display          TINYINT(1), /* 0=do not display, 1=display */

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE dealer (

	id              INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	site_id         SMALLINT UNSIGNED NOT NULL,
	start_date      DATE,
	end_date        DATE,
	name            VARCHAR(255),
	contact_name    VARCHAR(255),
	phone           VARCHAR(12),
	email           VARCHAR(255),
	description     TEXT,
	image           VARCHAR(255),
	website         TEXT,

	display         TINYINT(1), /* 0=do not display, 1=display */

	PRIMARY KEY (`id`)

) ENGINE=INNODB;



INSERT INTO `antique`.`region` (`title`, `display`) VALUES 
	('Round Top', 1), 
	('Warrenton & Oldenburg', 1),
	('Carmine & La Bahia', 1), 
	('Fayetteville', 1), 
	('Shelby', 1);

INSERT INTO `antique`.`show_site` (
	`region_id`, `title`, `contact_name`, `phone_1`, `phone_2`, `start_date`, `end_date`, `admission_cost`, `parking_cost`, `lat`, `lng`, `image`, `display`, `description`) 
	VALUES
	('1', 'Abbieland Antiques', 'Danny Tytenicz', '405.301.1874', '405.390.1333', '2014-03-20', '2014-04-04', '0', '0', NULL, NULL, NULL, '1', 'SH-237 just south of Round Top. Free admission. Free on-site parking. Covered, tent and outdoor space.'),
	('1', 'Arbor International Antiques', 'Curtis Ann Davis', '281.388.1075', '979.249.5387', '2014-03-24', '2014-04-04', '0', '0', NULL, NULL, NULL, '1', '1503 N SH-237, north of Round Top. Free admission. Free on-site parking. Indoor tent and outdoor space. Food vendors.'),
	('1', 'Big Red Barn', 'Susan & Bo Franks', '512.237.4747', NULL, '2014-04-01', '2014-04-04', '10.00', '0', NULL, NULL, NULL, '1', 'Original Round Top Antiques Fair. SH-237 north of Round Top. Admisison fee. Air conditioned indoor, tent and outdoor space. Food vendors. On-site parking. ');



 

/* Alternate method



CREATE TABLE shows (

	id             INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	title          VARCHAR(255),
	year           SMALLINT UNSIGNED,
	season         VARCHAR(16),

	display        TINYINT(1), 

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE dealers (

	id              INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	name            VARCHAR(255),
	contact_name    VARCHAR(255),
	phone           VARCHAR(12),
	email           VARCHAR(255),
	description     TEXT,
	image           VARCHAR(255),
	website         TEXT,
	password        VARCHAR(40),

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE show_site_dealer (

	dealer_id    INT(10) UNSIGNED NOT NULL,
	site_id      INT(10) UNSIGNED NOT NULL,
	show_id      INT(10) UNSIGNED NOT NULL,
	start_date   DATE,
	end_date     DATE

) ENGINE=INNODB;

*/