<?php
/**
 * CREAR USER 
 * UPDATE USER
 * READ USER
 * DELETE USER
 * LOGIN?
 * 
 * 
 */

class User
{
    public static function recibirDatos()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $fechaNacimiento = $_POST["fecha_nacimiento"];
            $pais = $_POST["pais"];
        }
    }

    // public static function getUser($id)
    // {
    //     return $id;
    // }
}

    
