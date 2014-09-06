CREATE Table IF NOT EXISTS adresy (
	id int auto_increment primary key,
	kraj varchar(5) DEFAULT 'pl',
	miasto varchar(100) DEFAULT 'Gdańsk',
	ulica varchar(128) NOT NULL,
	nr_domu int NOT NULL,
	klatka varchar(10),
	nr_mieszkania int NOT NULL,
	kod_pocztowy varchar(10) NOT NULL
) ENGINE = InnoDB;
