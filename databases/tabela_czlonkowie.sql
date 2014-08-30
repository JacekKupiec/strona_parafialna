CREATE Table IF NOT EXISTS czlonkowie (
	id int auto_increment primary key,
	id_wspolnoty int,
	id_parafianina int,
	unique(id_wspolnoty, id_parafianina),
	foreign key(id_wspolnoty) REFERENCES wspolnoty(id),
	foreign key(id_parafianina) REFERENCES parafianie(id)
);
