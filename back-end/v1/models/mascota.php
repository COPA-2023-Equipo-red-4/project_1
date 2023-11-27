<?php
function getMascotaAll($conn)
{
    $stm = "SELECT 
                    `m`.`id`,
                    `m`.`id_user`,
                    `m`.`nombre`,
                    `m`.`id_especie`,
                    `m`.`id_raza`,
                    `m`.`id_color`,
                    `m`.`fecha_nacimiento`,
                    `m`.`descripcion`,
                    `m`.`observaciones`,
                    `m`.`status`,
                    `m`.`sexo`,
                    `m`.`id_tamanio`,
                    `m`.`castrado`,
                    `m`.`id_sociabilidad`,
                    CASE WHEN m.foto1 IS NULL THEN '' ELSE CONCAT('https://rafalopez.ar', m.foto1)  END as foto1,
                    CASE WHEN m.foto2 IS NULL THEN '' ELSE CONCAT('https://rafalopez.ar', m.foto2)  END as foto2,
                    CASE WHEN m.foto3 IS NULL THEN '' ELSE CONCAT('https://rafalopez.ar', m.foto3)  END as foto3,
                    CASE WHEN m.foto4 IS NULL THEN '' ELSE CONCAT('https://rafalopez.ar', m.foto4)  END as foto4,
                    e.especie as especie,
                    r.raza as raza, s.sociabilidad,
                    u.id as user_id,
                    u.nombres as nombres,
                    u.apellido as apellido
                FROM `mascotas` AS m 
                JOIN `especies` AS e ON e.id = m.id_especie
                JOIN `razas` AS r ON r.id_raza = m.id_raza 
                JOIN `sociabilidad` AS s ON s.id_sociabilidad = m.id_sociabilidad
                JOIN `users` AS u ON u.id = m.id_user
                WHERE m.`status`= 1
                AND (m.foto1 IS NOT NULL OR m.foto2 IS NOT NULL OR m.foto3 IS NOT NULL OR m.foto4 IS NOT NULL);";
    $statment = $conn->prepare($stm);
    $statment->execute();
    $result = $statment->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getMascotaEspecieRaza($conn, $especie, $raza)
{
    try {
        $stm = "SELECT 
                    m.id as id,
                    m.nombre as nombre,
                    m.fecha_nacimiento as fecha_nacimiento,                   
                    m.descripcion as descripcion,
                    m.observaciones as observaciones,
                    m.castrado as castrado,
                    m.sexo as sexo,
                    e.especie as especie,
                    r.raza as raza, s.sociabilidad,
                    u.id as user_id,
                    u.nombres as nombres,
                    u.apellido as apellido
                FROM `mascotas` AS m 
                JOIN `especies` AS e ON e.id = m.id_especie
                JOIN `razas` AS r ON r.id_raza = m.id_raza 
                JOIN `sociabilidad` AS s ON s.id_sociabilidad = m.id_sociabilidad
                JOIN `users` AS u ON u.id = m.id_user
                WHERE m.`id_especie`= :especie";
        if ($raza) {
            $stm .= "AND `raza`= :raza and";
        }
        $stm .= " AND `status`= 1;";
        $statment = $conn->prepare($stm);
        $statment->bindParam(':especie', $especie);
        if ($raza) {
            $statment->bindParam(':raza', $raza);
        }
        $statment->execute();
        $result = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}
function insertMascota($conn, $sqlkey, $sqlDataPosicion, $post, $files)
{
    //  var_dump($sqlkey);
    print_r($sqlkey);
    echo PHP_EOL;
    print_r($sqlDataPosicion);
    echo PHP_EOL;
    // exit();
    try {
        $i = 0;
        $conn->beginTransaction();
        // Preparar consulta

        $stm = "INSERT INTO `mascotas` ($sqlkey) VALUES ($sqlDataPosicion);";
        $statment = $conn->prepare($stm);
        foreach ($post as $value) {
            $i++;
            $statment->bindValue($i, $value);
        }
        // Ejec consulta
        if ($statment->execute()) {
            // Obtener  último ID mascota
            $id_mascota = $conn->lastInsertId();
            //inser fotos
            //  echo "Mascota insertada con éxito. ID de la mascota: $id_mascota";
        } else {
            return "Error al insertar la mascota.";
        }
        // Confirmar la transacción
        $conn->commit();
    } catch (PDOException $e) {
        // Revertir la transacción en caso de error
        $conn->rollBack();
        return $e->getMessage();
    }

    return $id_mascota;
}
function selectMascota($conn, $id)
{
    $stm = "    
        SELECT 
        m.id as id,
        m.nombre as nombre,
        m.fecha_nacimiento as fecha_nacimiento,                   
        m.descripcion as descripcion,
        m.observaciones as observaciones,
        m.castrado as castrado,
        m.sexo as sexo,
        m.foto1 as foto1,
        m.foto2 as foto2,
        m.foto3 as foto3,
        m.foto4 as foto4,
        e.especie as especie,
        r.raza as raza, s.sociabilidad,
        u.id as user_id,
        u.nombres as nombres,
        u.apellido as apellido
        FROM `mascotas` AS m 
        JOIN `especies` AS e ON e.id = m.id_especie
        JOIN `razas` AS r ON r.id_raza = m.id_raza 
        JOIN `sociabilidad` AS s ON s.id_sociabilidad = m.id_sociabilidad
        JOIN `users` AS u ON u.id = m.id_user
        where m.id =:id;
        ";
    //    $stm = "SELECT * from `mascotas` where id=:id";
    $statment = $conn->prepare($stm);
    $statment->bindParam(':id', $id);
    $statment->execute();
    $result = $statment->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($result);
}
