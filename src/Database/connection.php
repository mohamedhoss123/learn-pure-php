<?php

class DatabaseConnection {
    private $dsn;
    private $username;
    private $password;
    private $pdo;

    public function __construct() {
        $this->dsn = 'mysql:host=db;dbname=your_database_name;charset=utf8mb4';
        $this->username = 'your_database_user';
        $this->password = 'your_database_password';
        $this->connect();
    }

    private function connect() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit(0);
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}

?>

