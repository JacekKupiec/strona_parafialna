CREATE Table IF NOT EXISTS posty ( 
/*Ze względu na to ,że ogłoszenia będę przechowywane w 
takiej samej formie jak aktualności na stronie głównej to
jest do tego 1 tabela, ale z dodatkowym polem typ,
jak na razie będą to ogloszenia, i aktualnosci, potem może się coś doda ;),
jak choćby posty do forum*/
	id int auto_increment primary key,
	data_publikacji date NOT NULL,
	typ varchar(255) NOT NULL,
	tresc text NOT NULL
) ENGINE = InnoDB;

CREATE INDEX index_ogloszenia_typ ON posty(typ);
