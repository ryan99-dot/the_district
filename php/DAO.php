<?php
require_once("db_connect.php");

class DAO
{
    private $pdo;

    public function __construct()
    {
        global $db; // Utilisation de la variable $db depuis db_connect.php
        $this->pdo = $db;
    }

    /*Recupérer toutes les catégories*/
    public function getCategories()
    {
        $query = "SELECT * FROM categorie ORDER BY libelle";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchall(PDO::FETCH_OBJ);
    }

    // Récupérer 6 plats aléatoires (ex. plats du jour)
    public function getRandomPlats($limit = 6)
    {
        $query = "SELECT * FROM plat ORDER BY RAND() LIMIT :limit";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Recherche de plats et catégories
    public function searchPlats($searchTerm)
    {
        // Validation de l'entrée de recherche
        if (strlen($searchTerm) > 255) {
            throw new Exception("Le terme de recherche est trop long");
        }
        $query = "SELECT p.id AS id_plat, p.libelle, p.image, p.description, p.id_categorie, p.prix, c.libelle AS categorie FROM plat p JOIN categorie c ON p.id_categorie = c.id WHERE p.libelle LIKE :search OR c.libelle LIKE :search OR p.description LIKE :search";
        $stmt = $this->pdo->prepare($query);
        $searchTerm = '%' . $searchTerm . '%';
        $stmt->bindParam(':search', $searchTerm, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* Recupérer un plat */
    public function getPlat($id)
    {
        $query = "SELECT * FROM plat WHERE id=?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array($id));
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /*Recupérer plats par catégorie*/
    public function getPLatByCat($idCat)
    {
        $query = "SELECT p.id AS id_plat, p.libelle, p.description, p.prix, p.image, p.id_categorie, c.id, c.libelle AS nom_cat FROM plat AS p JOIN categorie AS c ON p.id_categorie = c.id WHERE p.id_categorie = :idCat ORDER BY p.libelle";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':idCat', $idCat, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /*Recupérer 4 plats*/
    public function getPlatPage($page = 1, $limit = 4)
    {
        $debut = ($page - 1) * $limit;
        $query = "SELECT p.id AS id_plat, p.libelle, p.description, p.prix, p.image, p.id_categorie, c.id, c.libelle AS nom_cat FROM plat AS p JOIN categorie AS c ON p.id_categorie = c.id ORDER BY c.libelle, p.libelle LIMIT :limit OFFSET :debut";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':debut', $debut, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /*Recupération de l'id max d la table commande*/
    public function autoIncrement($tableName)
    {
        // Vérifier que la table est valide (liste blanche)
        $validTables = ['commande', 'plat', 'categorie']; // Exemples de tables valides
        if (!in_array($tableName, $validTables)) {
            throw new Exception("Table invalide");
        }
        $query = "SELECT MAX(id) AS max_id FROM $tableName";
        $stmt = $this->pdo->query($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxId = $row['max_id'];
        $this->pdo->exec("ALTER TABLE $tableName AUTO_INCREMENT = " . ($maxId + 1));
        return $maxId;
    }

    /*Création d'une commande dans la base de données*/
    public function creationCommande($commande)
    {
        $query = "INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) VALUES (:id_plat, :quantite, :total, :date_commande, :etat, :nom_client, :telephone_client, :email_client, :adresse_client)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            ':id_plat' => $commande['id_plat'],
            ':quantite' => $commande['quantite'],
            ':total' => $commande['total'],
            ':date_commande' => $commande['date_commande'],
            ':etat' => $commande['etat'],
            ':nom_client' => $commande['nom_client'],
            ':telephone_client' => $commande['telephone_client'],
            ':email_client' => $commande['email_client'],
            ':adresse_client' => $commande['adresse_client']
        ]);
    }
}
