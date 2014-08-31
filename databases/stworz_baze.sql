CREATE Database IF NOT EXISTS parafia DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_polish_ci;
USE parafia
source /var/www/databases/tabela_adresy.sql
source /var/www/databases/tabela_dane_logowania.sql
source /var/www/databases/tabela_galerie.sql
source /var/www/databases/tabela_msze.sql
source /var/www/databases/tabela_nabozenstwa.sql
source /var/www/databases/tabela_ogloszenia.sql
source /var/www/databases/tabela_zdjecia.sql
source /var/www/databases/tabela_parafianie.sql
source /var/www/databases/tabela_wspolnoty.sql
source /var/www/databases/tabela_czlonkowie.sql
