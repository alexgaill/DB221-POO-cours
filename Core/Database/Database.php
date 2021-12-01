<?php
namespace Core\Database;
use PDO;

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
        include ROOT."/Config/configDb.php";
        // Exemple: 
        // $configDb = [
        //     "host" => "localhost:8889",
        //     "dbname" => "blog",
        //     "user" => "root",
        //     "pwd" => "root",
        // ];
        $this->pdo = new \PDO(
            "mysql:host=".$configDb['host'].";dbname=".$configDb['dbname'], 
            $configDb['user'], 
            $configDb['pwd'],
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );

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