drop database if exists restaurant;
CREATE DATABASE restaurant;

use restaurant;

CREATE TABLE client(
id_client INT PRIMARY KEY,
nom VARCHAR (50),
prenom VARCHAR (50),
email VARCHAR (100)
);

CREATE TABLE commande(
id_commande INT PRIMARY KEY,
id_client INT,
date_commande DATE,
total DECIMAL(10,2),
FOREIGN KEY (id_client) REFERENCES client(id_client)
);

-- DROP TABLE IF EXISTS Categorie;
CREATE TABLE categorie(
id_categorie INT PRIMARY KEY,
nom_categorie VARCHAR(50)
);

CREATE TABLE plat(
id_plat INT PRIMARY KEY,
nom_plat VARCHAR(50),
id_categorie INT,
prix DECIMAL(10,2),
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
);



INSERT INTO client(id_client, nom,prenom,email) VALUES
(1,'Martin','Lucie','Lucie.martin@example.com'),
(2,'Bernard','Julien','julien.bernard@example.com'),
(3,'Thomas','Emilie','emilie.thomas@example.com'),
(4,'Petit','Sophie','sophie.petit@example.com'),
(5,'Robert','Christophe','christophe.robert@example');

INSERT INTO categorie(id_categorie, nom_categorie) VALUES
(1, 'Entrée'),
(2, 'Plat principal'),
(3, 'Dessert'),
(4, 'Boisson');

INSERT INTO plat(id_plat, nom_plat, id_categorie, prix) VALUES
(1,'Salade Niçoise',1,12.50),
(2, 'Steak Frites', 2, 18.90),
(3,'Mousse au chocolat',3,6.50),
(4, 'Poulet Basquaise',2,16.50),
(5,'Tarte Tatin',3,8.00),
(6, 'Limonade Maison',4,3.75);

INSERT INTO commande(id_commande, id_client, date_commande, total)VALUES
(1,1, '2023-09-01',45.90),
(2,2,'2023-09-02',24.25),
(3,3,'2023-09-03',19.75),
(4,4,'2023-09-04',34.75),
(5,5, '2023-09-05',22.50);



