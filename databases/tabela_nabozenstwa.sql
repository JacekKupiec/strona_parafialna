CREATE Table IF NOT EXISTS nabozenstwa (
	id int auto_increment primary key,
	nazwa Varchar(255) NOT NULL,
	data_poczatek datetime,
	okres int, /*liczba dni co ile powtarza się nabożeństwo*/
	data_koniec datetime,
);
