<?php
include './v1/models/mascota.php';
function listMascotaAll($conn)
{
  $result = getMascotaAll($conn);
  return json_encode($result);
}
function listMascotaEspecie($conn, $url_parsed)
{

  $raza = false;
  if (array_key_exists(3, $url_parsed)) {
    $especie = $url_parsed[3];
  } else {
    return  exit(header("HTTP/1.1 403 Prohibido"));
  }
  if (array_key_exists(4, $url_parsed)) {
    $raza = $url_parsed[4];
  }

  $result = getMascotaEspecieRaza($conn, $especie, $raza);

  return  json_encode($result);
}
function createMascota($conn, $url_parsed, $post, $files)
{
  if (!empty($files['fotos']['name'])) {
    $directorio_destino = '/';
    $link_fotos = [];
    $archivo_temporal = [];
    foreach ($files['fotos']['name'] as $key => $nombre_archivo) {
      $archivo_temporal = $files['fotos']['tmp_name'][$key];
      $info_archivo = pathinfo($nombre_archivo);
      $nombre_unico = uniqid() . "." . $info_archivo['extension'];
      $ruta_destino = $directorio_destino . $nombre_unico;
      $files['ruta'][$key] =  $ruta_destino;
      $link_fotos[] = $ruta_destino;
    }
  } else {
    echo "No se han subido archivos.";
  }
  $data = ["nombre", "id_especie", "id_raza", "id_color", "fecha_nacimiento", "descripcion", "observaciones", "sexo", "id_tamanio", "castrado", "id_sociabilidad", "id_user"];
  $validData = true;
  foreach ($post as $key => $value) {
    if (!in_array($key, $data)) {
      $validData = false;
      break;
    }
  }
  if ($validData) {

    $sqlKeys = implode(', ', array_keys($post));
    $sqlKeys .= ',id_user';
    $post['id_user'] = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '3';
    $sqlDataPosicion = implode(', ', array_fill(0, count($post), '?'));

    foreach ($link_fotos as $key => $value) {
      $sqlKeys .= ',foto' . $key + 1;
      $sqlDataPosicion .= ',?';
      $post['foto' . $key] = $value;
    }
    // inserto mascota y me debe devolver el id mascota creada
    $mascota_id = insertMascota($conn, $sqlKeys, $sqlDataPosicion, $post, $files);
    if ($mascota_id) {
      procesarFotos($files);
    }
  } else {
    $response['success'] = false;
    $response['message'] = 'Error al crear MASCOTA problema con datos suministrados.';
    return json_encode($response);
  }
  return json_encode(['success' => true, 'idMascota' => $mascota_id]);
}
function getMascota($conn, $url_parsed)
{
  if ($url_parsed[3]) {
    return selectMascota($conn, $url_parsed[3]);
  } else {
    return  exit(header("HTTP/1.1 403 Prohibido"));
  }
}
function procesarFotos($files)
{
  if (!empty($files['fotos']['name'])) {
    $link_fotos = [];

    foreach ($files['fotos']['name'] as $key => $nombre_archivo) {
      $ruta_destino = 'img/img_mascotas/' . $files['ruta'][$key];

      // Verifica si la ruta de destino ya existe
      if (!file_exists($ruta_destino)) {
        // Intenta mover el archivo al directorio de destino
        if (rename($files['fotos']['tmp_name'][$key], $ruta_destino)) {
          // Archivo movido con éxito, almacena información en el array $link_fotos
          $link_fotos[] = [
            'nombre_archivo' => $nombre_archivo,
            'ruta' => $ruta_destino
          ];
        } else {
          echo "Error al mover el archivo $nombre_archivo al directorio de destino.";
        }
      } else {
        echo "La ruta de destino $ruta_destino ya existe.";
      }
    }
  } else {
    echo "No se han subido archivos.";
  }
}
function procesarFotos_old($files)
{
  if (!empty($files['name'])) {
    $directorio_destino = '/img/img_mascotas/';
    // recorrer cada archivo
    foreach ($files['name'] as $indice => $nombre_archivo) {
      $info_archivo = pathinfo($nombre_archivo);
      $ruta_temporal = $files['tmp_name'][$indice];
      $ruta_destino = $directorio_destino . uniqid() . '_' . $nombre_archivo;
      if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        echo "El archivo $nombre_archivo se ha subido correctamente a $ruta_destino.<br>";
      } else {
        echo "Error al subir el archivo $nombre_archivo.<br>";
      }
    }
  } else {
    echo "No se han subido archivos.";
  }
}
