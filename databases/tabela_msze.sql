CREATE Table IF NOT EXISTS msze (
	id int auto_increment primary key,
	godzina time NOT NULL,
	dzien_tygodnia Varchar(15) NOT NULL,
	aktywna tinyint(1) DEFAULT 1,
	unique (godzina, dzien_tygodnia) /*Bo mamy 1 kosciol więc nie może być 2 mszy w tym samym czasie*/
) ENGINE = InnoDB;
