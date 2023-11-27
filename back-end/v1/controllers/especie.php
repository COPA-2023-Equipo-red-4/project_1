<?php
include './v1/models/especie.php';
function listarEspeciesRazas($conn)
{
    try {
        return getEspeciesRazas($conn);
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
