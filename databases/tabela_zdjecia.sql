CREATE Table IF NOT EXISTS zdjecia (
	id int auto_increment primary key,
	tytul varchar(64),
	url Varchar(255) NOT NULL,
	data_wstawienia datetime NOT NULL,
	id_galerii int,
	autor Varchar(255)
) ENGINE = InnoDB;
