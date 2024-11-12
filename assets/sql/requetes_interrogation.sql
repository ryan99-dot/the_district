/*Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )*/

SELECT c.date_commande, CONCAT('Nom : ',c.nom_client, ', telephone : ',c.telephone_client , ', email : ',c.email_client, ', adresse : ',c.adresse_client) AS info_client, p.libelle AS nom_plat, p.prix
FROM commande AS c JOIN plat AS p ON c.id_plat = p.id;

/*Afficher la liste des plats en spécifiant la catégorie*/

SELECT p.libelle AS nom_plat, ca.libelle AS categorie
FROM plat AS p JOIN categorie AS ca ON p.id_categorie = ca.id;

/*Afficher les catégories et le nombre de plats actifs dans chaque catégorie*/

SELECT ca.libelle AS categorie, COUNT(p.id)
FROM categorie AS ca JOIN plat AS p ON ca.id = p.id_categorie
WHERE p.active = 'Yes'
GROUP BY ca.libelle;

/*Liste des plats les plus vendus par ordre décroissant*/

SELECT p.libelle AS nom_plat, c.quantite
FROM plat AS p JOIN commande AS c ON p.id = c.id_plat
ORDER BY c.quantite DESC;

/*Le plat le plus rémunérateur*/

SELECT p.libelle AS nom_plat, c.quantite * p.prix AS gain
FROM plat as p JOIN commande as c ON p.id = c.id_plat
WHERE c.quantite * p.prix = (SELECT MAX(c.quantite * p.prix) FROM plat as p JOIN commande as c ON p.id = c.id_plat);

/*Liste des clients et le chiffre d'affaires généré par client (par ordre décroissant)*/

SELECT nom_client, total
FROM commande
ORDER BY total DESC;