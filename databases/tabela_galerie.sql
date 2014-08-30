CREATE Table IF NOT EXISTS galerie (
	id int auto_increment primary key,
	tytul varchar(255) NOT NULL,
	data_powstania datetime NOT NULL,
	foreign key(id) REFERENCES zdjecia(id_galerii) ON DELETE CASCADE
) ENGINE = InnoDB;
