CREATE Table IF NOT EXISTS czlonkowie (
	id int auto_increment primary key,
	id_wspolnoty int,
	id_parafianina int,
	unique(id_wspolnoty, id_parafianina)
)Engine = InnoDB;
