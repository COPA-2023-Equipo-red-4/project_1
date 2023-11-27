<?php
function getLoginUser($conn, $user, $pass)
{

    try {
        $stm = "SELECT users.id,
        		     nombres,
                     apellido,
                     email,
                     telefono,
                    fecha_nacimiento,
                    domicilio,
                    ciudad,
                    pais,
                    foto
                FROM `users`                 
                WHERE `email` =:user  AND `pass` = :pass;";
        //        $stm = "SELECT `id`,`nombres`,`apellido`,`email` FROM `users` WHERE `email` =:user  AND `pass` = :pass";
        $statment = $conn->prepare($stm);
        $statment->bindParam(':user', $user);
        $statment->bindParam(':pass', $pass);
        $statment->execute();

        return $statment->fetch((PDO::FETCH_ASSOC));
    } catch (PDOException $e) {

        return json_encode(['response' => false, 'error' => 'Error al cerrar sesión']);
    }
}
function insertUser($conn, $sqlkey, $sqlDataPosicion, $post)
{
    $email = $post['email'];

    /**
     * @param $conn
     * @param $sqlkey
     * @param $sqlDataPosicion
     * @param $post
     * @return PDOStatement
     * atributos requeridos: ['nombres', 'apellido', 'email', 'telefono', 'fecha_nacimiento','sexo','genero', 'pass', 'domicilio', 'ciudad', 'pais'];
     */
    try {
        $i = 0;
        $stm = "INSERT INTO `users` ($sqlkey) VALUES ($sqlDataPosicion);";
        $statment = $conn->prepare($stm);
        foreach ($post as $value) {
            $i++;
            $statment->bindValue($i, $value);
        }
        $statment->execute();



        $stm = "SELECT users.id,
        		     nombres,
                     apellido,
                     email,
                     telefono,
                    fecha_nacimiento,
                    domicilio,
                    ciudad,
                    pais,
                    foto
                FROM `users`                 
                WHERE `email` =:user;";
        $statment = $conn->prepare($stm);
        $statment->bindParam(':user', $email);
        $statment->execute();
        return $statment->fetch((PDO::FETCH_ASSOC));
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit(header("HTTP/1.1 422"));

        return json_encode($stm);
    }
}
