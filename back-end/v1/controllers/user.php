<?php
include './v1/models/user.php';

function perfilUser()
{
    if (isset($_SESSION['user'])) {
        return json_encode($_SESSION['user']);
    }
    return json_encode(['response' => false, 'error' => 'Error al recuperar perfil']);
}
function loginUser($conn, $post)
{
    /**
     * @param $conn
     * @param $post
     * @return array
     */
    try {
        /**
         * login controller autoriza o rechaza usuario
         */
        if (array_key_exists('user', $post) && array_key_exists('pass', $post)) {
            $user = $post['user'];
            $pass = $post['pass'];
            $user_auth = getLoginUser($conn, $user, $pass);
            if ($user_auth) {
                // session usuario auth 
                $_SESSION['user'] = json_encode($user_auth);
                // session jwt user
                $jwt = createJWT($user_auth['id'], $user_auth['nombres'], 'copa-4');
                $_SESSION['jwt'] = json_encode(['token' => $jwt]);
                // Configurar las opciones de la cookie
                $cookieOptions = [
                    'expires' => 0,  // Expira al finalizar la sesión
                    'path' => '/',   // Ruta disponible para toda la aplicación
                    'domain' => '',  // El dominio de la cookie (dejar en blanco para el dominio actual)
                    'secure' => true,  // Solo enviar la cookie en conexiones seguras (HTTPS)    
                    'samesite' => 'Strict',
                ];
                // // 'httponly' => true,  // La cookie solo es accesible a través de HTTP (no JavaScript)
                // 'samesite' => 'None',  // SameSite=None para permitir solicitudes desde cualquier sitio

                // Establecer la cookie
                setcookie('jwt', $_SESSION['jwt'], $cookieOptions);
                //                setcookie('token', $_SESSION['jwt'], ['samesite' => 'none', 'secure' => true]);

                return json_encode($user_auth);
            }
        }
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
function logOutUser()
{
    $_SESSION['user'] = null;
    $_SESSION['jwt'] = null;
    if (session_destroy()) {

        setcookie('token', '', ['samesite' => 'none', 'secure' => true]);


        return json_encode(['response' => true]);
    } else {

        return json_encode(['response' => false, 'error' => 'Error al cerrar sesión']);
    }
}
function createJWT($userId, $username, $secret_key, $expirationTime = 3600)
{
    /**
     * @param $userId
     * @param $username
     * @param $secret_key
     * @param $expirationTime
     * @return token jwt
     */
    $header = base64_encode(json_encode([
        'typ' => 'JWT',
        'alg' => 'HS256'
    ]));
    $payload = base64_encode(json_encode([
        'sub' => $userId,
        'username' => $username,
        'exp' => time() + $expirationTime
    ]));
    $signature = hashJWT($header, $payload, $secret_key);
    $encodedSignature = base64_encode($signature);
    $jwt = "$header.$payload.$encodedSignature";
    return $jwt;
}
function verifyJWT($jwt, $secret_key)
{
    /**
     * @param $jwt
     * @param $secret_key
     * @return bool
     */
    // agrego dia al secret key
    $token_parts = explode('.', $jwt);
    // Decodificar las partes Base64
    $header = base64_decode($token_parts[0]);
    $payload = base64_decode($token_parts[1]);
    $signature = base64_decode($token_parts[2]);
    return (hashJWT($header, $payload, $secret_key) === $signature);
}
function hashJWT($header, $payload, $secret_key)
{
    /**
     * @param $header
     * @param $payload
     * @param $secret_key
     * @return string
     */
    $secret_key = $secret_key . date('d');
    return  hash_hmac('sha256', "$header.$payload", $secret_key, true);
}
function createUser($conn, $post, $file)
{

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $archivo = $_FILES['foto'];
        $nombre_temporal = $archivo['tmp_name'];
        $nombre_archivo = basename($archivo['name']);

        // Obtener información sobre la imagen
        $info_imagen = getimagesize($nombre_temporal);
        $tipo_imagen = $info_imagen['mime'];

        // Ruta de destino con nombre único (usando la marca de tiempo)
        $ruta_destino = 'img/img_users/' . time() . '.' . pathinfo($nombre_archivo, PATHINFO_EXTENSION);
        // Mover el archivo a la ubicación deseada
        if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
            $response['success'] = true;
            $response['message'] = 'Archivo subido correctamente.';
            $response['nombre_archivo'] = $nombre_archivo;
            $response['tipo_imagen'] = $tipo_imagen;
            $response['ruta_destino'] = $ruta_destino;
            $post['foto'] = '/'.$ruta_destino;
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al mover el archivo a la carpeta de destino.';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Error en la subida del archivo.';
    }
    //  return json_encode($post);

    // data obligatoria en el form
    $data = ['nombres', 'apellido', 'email', 'telefono', 'fecha_nacimiento', 'pass','sexo','genero', 'domicilio', 'ciudad', 'pais', 'foto'];
    $validData = true;
    //  print_r(__FILE__ . '-' . __LINE__ . '-' .  $data);

    foreach ($post as $key => $value) {
        if (!in_array($key, $data)) {
            $validData = false;
            break;
        }
    }
   

    if ($validData) {
        // Construir consulta 
        $sqlKeys = implode(', ', array_keys($post));
        $sqlDataPosicion = implode(', ', array_fill(0, count($post), '?'));
        $user_auth=insertUser($conn, $sqlKeys, $sqlDataPosicion, $post, $response);
		exit(json_encode($user_auth));
		$_SESSION['user'] = json_encode($user_auth);
                // session jwt user
                $jwt = createJWT($user_auth['id'], $user_auth['nombres'], 'copa-4');
                $_SESSION['jwt'] = json_encode(['token' => $jwt]);
                // Configurar las opciones de la cookie
                $cookieOptions = [
                    'expires' => 0,  // Expira al finalizar la sesión
                    'path' => '/',   // Ruta disponible para toda la aplicación
                    'domain' => '',  // El dominio de la cookie (dejar en blanco para el dominio actual)
                    'secure' => true,  // Solo enviar la cookie en conexiones seguras (HTTPS)    
                    'samesite' => 'Strict',
                ];
                // // 'httponly' => true,  // La cookie solo es accesible a través de HTTP (no JavaScript)
                // 'samesite' => 'None',  // SameSite=None para permitir solicitudes desde cualquier sitio
                // Establecer la cookie
                setcookie('jwt', $_SESSION['jwt'], $cookieOptions);
				  return json_encode($user_auth);
				
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al crear usuario.';
        return json_encode($response);
    }
}

/*
nombres	
apellido	
email	
telefono	
fecha_nacimiento	
pass	
domicilio	
ciudad	
pais	
genero	(null)
foto (null)
*/
