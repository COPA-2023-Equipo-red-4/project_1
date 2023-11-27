
<?php
class Connection
{
    private static $usuario = '';
    private static $contrasena = '';
    private static $driver = '';
    public static $conn = null;


    public static function connect()
    {
        try {
            self::$conn = new PDO(self::$driver, self::$usuario, self::$contrasena);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return self::$conn;
    }
}
