<?php

class DatabaseConnection {
    private static ?DatabaseConnnection $instance = null;

    private function __construct() {
        echo "Connecting to the database...\n ";
    }

    public static function getInstance(): DatabaseConnection {
        if(self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function query($sql):void
    {
        echo "Executing $sql...\n";
    }

}
$databaseConnection = DatabaseConnection::getInstance();
$databaseConnection->query("SELECT * FROM users");