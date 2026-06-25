<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {

    private static ?PDO $connection = null;

    public static function startConnectMySQL(): PDO
    {
        if (self::$connection === null) {

            try {
            
                self::$connection = new PDO(
                    sprintf(
                        "mysql:host=%s;dbname=%s;charset=utf8mb4",
                        $_ENV['DB_HOST'],
                        $_ENV['DB_NAME']
                    ),
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS']
                );

                self::$connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

                self::$connection->setAttribute(
                    PDO::ATTR_DEFAULT_FETCH_MODE,
                    PDO::FETCH_ASSOC
                );

            } catch (PDOException $e) {
                die('Erro ao conectar ao banco: ' . $e->getMessage());
            }
        }

        return self::$connection;
    }

}