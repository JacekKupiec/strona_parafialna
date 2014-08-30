CREATE Table IF NOT EXISTS zdjecia (
	id int auto_increment primary key,
	tytul varchar(64),
	url Varchar(255) NOT NULL,
	data_wstawienia datetime NOT NULL,
	id_galerii int,
	id_autora int,
	autor Varchar(255), /*Jeżeli autor nie ma konta w parafii ,a chce być wyszczególniony jako autor zdjęć*/
	foreign key(id_galerii) REFERENCES galerie(id),
	foreign key(id_autora) REFERENCESS parafianie(id)
);
