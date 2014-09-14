CREATE Table IF NOT EXISTS dane_logowania (
	id int auto_increment primary key, 
	login varchar(32) NOT NULL,
	zaszyfrowane_haslo varchar(50) NOT NULL,
	email varchar(255),
	unique(login),
	unique(email)
) ENGINE = InnoDB;
