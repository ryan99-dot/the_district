/*Ecrivez une requête permettant de supprimer les plats non actif de la base de données*/

DELETE FROM plat WHERE active = "No";

/*Ecrivez une requête permettant de supprimer les commandes avec le statut livré*/

DELETE FROM commande WHERE etat = "Livrée";

/*Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.*/

INSERT INTO categorie (libelle, image, active) VALUES ('Dessert', 'dessert.jpg', 'Yes');
INSERT INTO plat (libelle, description, prix, image, id_categorie, active) VALUES ('Glace Peanut', "Boules de glaces vanille avec brisures de M&M's peanut et sauce peanut butter", 4.00, 'glace_peanut.jpg', 15, 'Yes');

/*Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'*/

UPDATE plat SET prix = prix * 1.10 WHERE id_categorie = 4;