CREATE Table IF NOT EXISTS msze (
	id int auto_incremet primary key,
	godzina time NOT NULL,
	dzien_tygodnia Varchar(15) NOT NULL,
	aktywna tinyint(1) DEFAULT 1
);
