<?php
namespace App\Core;
use PDO;
use Dotenv\Dotenv;
class Database
{
    private PDO $connection;
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
        $dotenv->load();
        $host = $_ENV["DB_HOST"];
        $database = $_ENV["DB_NAME"];
        $username = $_ENV["DB_USER"];
        $password = $_ENV["DB_PASSWORD"];

        $dns = "mysql:host={$host};dbname={$database};charset=utf8mb4";

        $this->connection = new PDO($dns , $username , $password ,
            [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
    }
    public function getConnection():PDO
    {
        return $this->connection;
    }
}