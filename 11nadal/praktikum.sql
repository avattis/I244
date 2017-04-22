CREATE TABLE A4_pildid (
  id INTEGER  PRIMARY KEY auto_increment,
  thumb VARCHAR (300) NOT NULL,
  pilt VARCHAR (100) NOT NULL,
  pealkiri VARCHAR (100) NOT NULL,
  autor VARCHAR (100) NOT NULL ,
  punktid INTEGER DEFAULT 1

);

INSERT INTO A4_pildid (pilt, pealkiri, autor ,punktid) VALUES
  ("karu", "Masha ja karu", "Annely", 30 ),
  ("tiiger", "Tiiger ja tüdruk", "Tundmatu", 75 ),
  ("loodus", "Päike ja kuu", "Triin", 150 ),
  ("koer", "Kolm koera", "Annely", 100 ),
  ("kass", "Kassid katusel", "Triin", 45 );

#Kirjuta SQL päring, mis leiab tabelist pildid, mis on saanud vähem kui 50 punkti ja sorteerib tulemused punktide arvu järgi kahanevas järjekorras
SELECT * FROM A4_pildid WHERE punktid<50 ORDER BY punktid DESC ;

#Kirjuta SQL päring, mis leiab tabelist ühe autori kõik pildid (autor vali ise)
SELECT * FROM A4_pildid WHERE autor = "Annely";

#Kirjuta SQL päring, mis lisab kõikidele piltidele 3 punkti. Lahendus teha UPDATE päringuga
UPDATE A4_pildid SET punktid=punktid+3;

#Kirjuta SQL päring, mis leiab, mitu pilti on erinevatel autoritel (COUNT(*) ja GROUP BY autor)
SELECT autor, count(*) as piltide_arv FROM A4_pildid GROUP BY autor;

#Kirjuta päring, mis liidab kokku kui palju on süsteemis piltidele punkte antud ( SUM(...) )
SELECT sum(punktid) FROM A4_pildid;