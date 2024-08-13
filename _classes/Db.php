<?php
class Db {
    private $pdo;

   
    public function __construct($host, $dbname, $user, $password) {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function prepare($query) {
        return $this->pdo->prepare($query);
    }

    public function execute($query, $params = []) {
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($params);
    }


    public function fetch($query, $params = [], $fetchAll = true) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
    
            if ($fetchAll) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {

            die('Erreur SQL : ' . $e->getMessage());
        }
    }

    public function beginTransaction() {
        return $this->pdo->beginTransaction();
    }

    public function commit() {
        return $this->pdo->commit();
    }

    public function rollBack() {
        return $this->pdo->rollBack();
    }

    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}
?>
