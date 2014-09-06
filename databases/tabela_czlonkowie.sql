CREATE Table IF NOT EXISTS czlonkowie (
	id int auto_increment primary key,
	id_wspolnoty int NOT NULL,
	id_parafianina int NOT NULL,
	unique(id_wspolnoty, id_parafianina),
	foreign key(id_wspolnoty) REFERENCES wspolnoty(id) ON DELETE CASCADE,
	foreign key(id_parafianina) REFERENCES parafianie(id) ON DELETE CASCADE
)Engine = InnoDB;
