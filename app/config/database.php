<?php


class Database
{
    private static $host = "localhost";
    private static $db_name = "crud";
    private static $username = "root";
    private static $password = "123123321321@instance";
    private static $conn;

    public static function connect()
    {
        if (!self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database Connection Error: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
