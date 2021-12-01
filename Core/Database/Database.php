<?php
namespace Core\Database;

use App\Controller\ErrorController;
use PDO;
use PDOException;

class Database {

    // https://github.com/alexgaill/blogsql


    /**
     * Connexion BDD
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Génère la connexion à la BDD
     */
    public function __construct()
    {
        try {
            include ROOT."/Config/configDb.php";
            // Exemple: 
            $configDb = [
                "host" => "localhost:8889",
                "dbname" => "blog",
                "user" => "root",
                "pwd" => "root",
            ];
            $this->pdo = new \PDO(
                "mysql:host=".$configDb['host'].";dbname=".$configDb['dbname'], 
                $configDb['user'], 
                $configDb['pwd'],
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
            if (is_null($this->pdo)) {
                throw new PDOException("La connexion ne s'est pas faite, Vérifiez vos identifiants", 500);
            }
            
        } catch (\PDOException $e) {
            (new ErrorController)->PdoError($e->getMessage());
            die();
        }
    }

    /**
     * Retourne la connexion PDO
     *
     * @return PDO
     */
    public function getPDO():PDO
    {
        return $this->pdo;
    }
}