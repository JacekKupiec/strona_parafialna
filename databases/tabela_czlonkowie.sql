CREATE Table IF NOT EXISTS czlonkowie (
	id int auto_increment primary key,
	id_wspolnoty int NOT NULL,
	id_parafianina int NOT NULL,
	unique(id_wspolnoty, id_parafianina)
)Engine = InnoDB;

CREATE INDEX index_czlonkowie_id_parafianina ON czlonkowie(id_parafianina);
