CREATE Table IF NOT EXISTS parafianie (
	id int auto_increment primary key,
	imie varchar(32) NOT NULL,
	nazwisko varchar(64) NOT NULL,
	dane_logowania int UNIQUE,
	id_adresu int,
	nr_telefonu int(9),
	id_zdjecia int UNIQUE, /* Nie może byc przecież tak ,że 2 osoby mają to samo zdjęcie, jedna z nich kłamie*/
	admin tinyint(1) DEFAULT 0,
	ksiadz tinyint(1) DEFAULT 0,
	foreign key(dane_logowania) REFERENCES dane_logowania(id),
	foreign key(id_zdjecia) REFERENCES zdjecia(id),
	foreign key(id_adresu) REFERENCES adresy(id)
) ENGINE = InnoDB;
