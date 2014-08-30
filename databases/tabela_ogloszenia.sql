CREATE Table IF NOT EXISTS ogloszenia (
	id int auto_increment primary key,
	data_publikacji date NOT NULL,
	tresc text NOT NULL
) ENGINE = InnoDB;
