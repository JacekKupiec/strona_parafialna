CREATE Table IF NOT EXISTS wspolnoty(
	id int primary key,
	nazwa varchar(255) NOT NULL UNIQUE, /*Nie ma dwóch wspólnot ,które nazywają się tak samo*/
	opiekun int, /*id na parafianina, ale jak nie to będzie trzeba tak jak z tym autorem*/
	logo int,
	opis text NOT NULL,
	email varchar(255),
	nr_telefonu int(9),
	foreign key(logo) REFERENCES zdjecia(id) ON DELETE CASCADE,
	foreign key(opiekun) REFERENCES parafianie(id)
) ENGINE = InnoDB;
