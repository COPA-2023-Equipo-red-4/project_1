<?php
function getEspeciesRazas($conn)
{
    try {
        $stm = "SELECT e.especie AS especie,
                 JSON_ARRAYAGG( 
                        JSON_OBJECT(r.id_raza, r.raza) ) AS razas 
                    FROM especies e 
                    LEFT JOIN (
                         SELECT DISTINCT id_especie, id_raza, raza 
                         FROM razas 
                         WHERE (id_raza 
                         IN (SELECT DISTINCT id_raza  FROM mascotas WHERE status = 1) OR id_raza IS NULL)
                     ) r 
                     ON e.id = r.id_especie 
                     WHERE r.raza 
                     IS NOT NULL 
                     GROUP BY e.especie;
                     ";
        //        $stm = "SELECT especies.* FROM especies JOIN mascotas ON especies.id = mascotas.nombre;";
        //       $stm = "SELECT e.especie AS especie, GROUP_CONCAT(r.raza ORDER BY r.raza) AS razas FROM especies e LEFT JOIN razas r ON e.id = r.id_especie GROUP BY e.especie;";
        /*
                $stm = " SELECT
        e.especie AS especie,
        JSON_ARRAYAGG(
            JSON_OBJECT('raza', r.raza)
       ) AS razas
    FROM
        especies e
    LEFT JOIN razas r ON e.id = r.id_especie
    GROUP BY  e.especie;
    ";
    */
        //     $stm = " SELECT
        //     e.especie AS especie,
        //     JSON_ARRAYAGG(
        //          r.raza
        //    ) AS razas
        // FROM
        //     especies e
        // LEFT JOIN razas r ON e.id = r.id_especie

        // GROUP BY  e.especie;
        // ";
        /*       $stm = "SELECT
        e.especie AS especie,
        JSON_ARRAYAGG(
            JSON_OBJECT(r.id, r.raza)
        ) AS razas
    FROM
        especies e
    LEFT JOIN (
        SELECT DISTINCT id_especie, id, raza
        FROM razas
        WHERE id IN (SELECT DISTINCT id_raza FROM mascotas WHERE status = 1)
    ) r ON e.id = r.id_especie
    GROUP BY
        e.especie;";
*/
        /*        $stm = " SELECT
        e.especie AS especie,   
        JSON_ARRAYAGG(
            JSON_OBJECT(r.id , r.raza)
        ) AS razas
    FROM
        especies e
    LEFT JOIN razas r ON e.id = r.id_especie
    LEFT JOIN mascotas m ON r.id = m.id_raza
    WHERE
        m.status = 1
    GROUP BY
        e.especie;";
 */
        //     $stm = " SELECT
        //     e.especie AS especie,   
        //     JSON_ARRAYAGG(
        //         r.raza
        //     ) AS razas,
        //     JSON_ARRAYAGG(
        //         JSON_OBJECT('id', m.id, 'status', m.status)
        //     ) AS mascotas
        // FROM
        //     especies e
        // LEFT JOIN razas r ON e.id = r.id_especie
        // LEFT JOIN mascotas m ON r.id = m.id_raza
        // WHERE
        //     m.status = 1
        // GROUP BY
        //     e.especie;";
        $statment = $conn->prepare($stm);
        $statment->execute();
        $result = $statment->fetchAll((PDO::FETCH_ASSOC));

        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
