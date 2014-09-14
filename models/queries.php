<?php
define('fetch_login_data', 'SELECT dane_logowania.login, dane_logowania.zaszyfrowane_haslo, parafianie.admin 
FROM dane_logowania LEFT JOIN parafianie 
ON parafianie.dane_logowania = dane_logowania.id 
WHERE login = ? AND zaszyfrowane_haslo = ?');

define('check_if_users_exists', 'SELECT id FROM dane_logowania 
WHERE login = ? AND email = ? LIMIT 1');

define('insert_parishioner', 'INSERT INTO parafianie 
(imie, nazwisko, dane_logowania, id_adresu, nr_telefonu, id_zdjecia, admin, ksiadz) 
VALUES (?,?,?,?,?,?,?,?))');


?>