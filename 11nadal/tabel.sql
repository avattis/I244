#tabeli loomine
CREATE TABLE A4_loomaaed (
  id INTEGER  PRIMARY KEY auto_increment,
  name VARCHAR (100) NOT NULL,
  age INTEGER DEFAULT 1,
  liik VARCHAR (200) NOT NULL ,
  puur INTEGER DEFAULT 1

);
#järjest sisestamine
INSERT INTO A4_loomaaed VALUES (NULL , "Tom", 1 , "Tiiger", 4);
#oma järjestusga sisetamine
INSERT INTO A4_loomaaed (liik, name, age,puur) VALUES ("lõvi", "Simba", 5, 10 );
# mitu rida korraga
INSERT INTO A4_loomaaed (liik, name, age,puur) VALUES
  ("karu", "Masha", 8, 4 ),
  ("koer", "Kutsu", 3, 3 ),
  ("kass", "Kiisu", 3, 3 );

#vanuse muutmine
UPDATE A4_loomaaed SET age=age+1;

#Hankida kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number
SELECT name, puur FROM A4_loomaaed WHERE puur=3;

#Hankida vanima ja noorima looma vanused
SELECT max(age) as vanim , min(age) as noorim FROM A4_loomaaed;

#hankida puuri number koos selles elavate loomade arvuga (vihjeks: group by ja count )
SELECT puur, count(*) as loomade_arv FROM A4_loomaaed GROUP BY puur;