CREATE DATABASE Promensuisse;
USE Promensuisse;

CREATE TABLE Promenades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    auteur VARCHAR(200),
    date VARCHAR(10),
    pays VARCHAR(200),
    ville VARCHAR(200),
    case_postale VARCHAR(50),
    titre VARCHAR(100),
    image VARCHAR(200),
    depart VARCHAR(200),
    arrivée VARCHAR(200),
    description VARCHAR(255)
);

CREATE USER "adminSitePromenade"@"%" IDENTIFIED BY "Promen@de";
GRANT ALL PRIVILEGES ON Promensuisse.* TO "adminSitePromenade"@"%";

INSERT INTO Promenades ( 
    auteur,
    date,
    pays,
    ville,
    case_postale, 
    titre,
    image,
    depart,
    arrivée,
    description
)
   VALUES("Toto","2019-07-10","SUISSE","Lausanne","1000","Les Hauts de Lausanne","assets/pêche.jpg","Gare de Renens","Gare de Renens","un parcours excellent"); 
/*


CREATE USER "adminToutou"@"%" IDENTIFIED BY "Annu@ireT0ut0u";
GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO "adminToutou"@"%";

--Insérer un maitre
INSERT INTO Maitres (nom, telephone)
VALUES ('Bob', '0798767654');

--Insérer un  chien
INSERT INTO Chiens (nom, age, race, id_maitre)
VALUES ("Donatello", "5", "Huskey", 2);

--Selectionner tout les chiens
SELECT id, nom, race FROM Chiens;

--Selectionner un chien avec les informations de son maitre
SELECT c.id, c.nom, c.age, c.race, m.nom as nomMaitre, m.telephone
FROM Chiens c
INNER JOIN Maitres m
ON c.id_maitre = m.id
WHERE c.id = 14

--Suprimer un chien de la base des données
DELETE FROM Chiens WHERE id = 23

--Mettre à jour les informations d'un chien
UPDATE chiens Set nom = "edmon" , age = 4, race = "chiwawa"
WHERE id = 25
*/