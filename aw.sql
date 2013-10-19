
CREATE DATABASE antique;
USE antique;

CREATE TABLE shows (

	id             INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	title          VARCHAR(255),
	start_date     DATE,
	end_date       DATE,

	status         VARCHAR(64), /* active, inactive */

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE show_sites (
	
	id        INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	title     VARCHAR(255),
	lat       DECIMAL(10, 8) NOT NULL, 
	lng       DECIMAL(11, 8) NOT NULL,

	status    VARCHAR(64), /* active, inactive: to show or not to show... */

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


CREATE TABLE dealers (

	id              INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	site_id         INT(10) UNSIGNED NOT NULL,
	show_id         INT(10) UNSIGNED NOT NULL,
	start_date      DATE,
	end_date        DATE,
	name            VARCHAR(255),
	contact_name    VARCHAR(255),
	phone           VARCHAR(12),
	email           VARCHAR(255),
	description     TEXT,
	image           VARCHAR(255),
	website         TEXT,

	status          VARCHAR(64), /* pending, approved */

	PRIMARY KEY (`id`)

) ENGINE=INNODB;


/* Alternate method

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