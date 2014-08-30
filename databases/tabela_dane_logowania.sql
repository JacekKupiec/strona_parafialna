CREATE Table IF NOT EXISTS dane_logowania (
	login varchar(32) NOT NULL,
	zaszyforwane_haslo varchar(50) NOT NULL,
	email varchar(255),
	id_parafianina int NOT NULL UNIQUE,
	foreign key(id_parafianina) REFERENCES parafianie(id),
	unique(login, zaszyfrowane_haslo)
);
