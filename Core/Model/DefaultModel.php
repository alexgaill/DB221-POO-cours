<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    protected $table;
    private $class;

    public function __construct()
    {
        $this->class = ucfirst($this->table);
    }
     /**
     * Récupère toutes les lignes d'une table
     *
     * @return array|bool
     */
    public function findAll()
    {
        $query = $this->pdo->query("SELECT * FROM $this->table");
        // $query->setFetchMode(\PDO::FETCH_BOTH); // Valeur par défaut
        // $query->setFetchMode(\PDO::FETCH_ASSOC); // Retourne les valeurs en tableau associatif
        // $query->setFetchMode(\PDO::FETCH_OBJ); // retourne les valeurs en objet
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\".$this->class); // retourne les valeurs liés à la class
        return $query->fetchAll();
    }

    /**
     * Récupère une ligne d'une table en fonction de son id
     *
     * @param integer $id
     * @return Object|bool
     */
    public function find(int $id)
    {
        $query = $this->pdo->query("SELECT * FROM $this->table WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\".$this->class); // retourne les valeurs liés à la class
        return $query->fetch();
    }

    /**
     * Ajoute une ligne en BDD
     *
     * @param string $statement
     * @param array $data
     * @return bool
     */
    protected function save(string $statement, array $data)
    {
        $prepare = $this->pdo->prepare($statement);
        return $prepare->execute($data);
    }
}