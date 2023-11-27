<?php
require_once 'config.php';
/**
 * version de la API autorizada
 */
$version_auth = ['v1'];
$result;
/**
 * clases autorizadas
 //TODO atento a  clases y rutas nuevas 
 */
$class_auth = [
	'users',
	'user',
	'mascotas',
	'mascota',
	'especies'
];

$version_base = null;

/**
 * parseo de la url
 */
$url = ($_SERVER['REQUEST_URI']);
$url_parsed = parse_url($url);
$url_parsed = explode('/', $url_parsed['path']);
/**
 * elimina primer elemento si vacio
 */
if ($url_parsed[0] === '') {
	array_shift($url_parsed);
}
/**
 * verifica version de la api
 */
if (in_array(strtolower($url_parsed[0]), $version_auth)) {
	$version_base = './' . strtolower($url_parsed[0]);
} else {
	exit('ERROR version');
}
/**
 * verifica clase de la api
 */
if (in_array(strtolower($url_parsed[1]), $class_auth)) {
	$class_base = strtolower($url_parsed[1]);
} else {
	exit('ERROR');
}

switch ($class_base) {

	case 'user':
		/**
		 * url format
		 * /login
		 * /logout
		 * /perfil
		 * /create
		 * @param $conn	
		 * @param $_POST
		 * @return array
		//TODO user controller
		 */

		include $version_base . '/controllers/user.php';
		switch ($url_parsed[2]) {
			case 'login':
				/**
				 * @param $conn
				 * @param $_POST
				 * @return array user
				 */

				$result = loginUser($conn, $_POST);

				break;
			case 'logout':
				/**
				 * @return boolean
				 */
				$result = logOutUser();
				break;
			case 'perfil':
				/**
				 * @return boolean
				 */
				$result = perfilUser();
				break;
			case 'create':
				$result = createUser($conn, $_POST, $_FILES);
				break;
			default:
				exit(header("HTTP/1.1 401 Prohibido"));
		}
		break;
	case 'mascota':
		include $version_base . '/controllers/mascota.php';
		/**
		 * url format
		 * /list/especie/raza(opcional)
		 * @param $conn
		 * @param $url_parsed
		 * @return array
		 */
		if (!isset($url_parsed[2])) {
			exit(header("HTTP/1.1 403 Prohibido"));
		}
		switch ($url_parsed[2]) {

			case 'register':

				//$result = json_encode(['test' => 'mierda']);
				$result = createMascota($conn, $url_parsed, $_POST, $_FILES);
				break;
			case 'get':
				$result = getMascota($conn, $url_parsed);
				break;
			case 'update':
				//	$result = updateMascota($conn, $url_parsed);
				break;
			case 'delete':
				//	$result = deleteMascota($conn, $url_parsed);
				break;

			case 'list':
				$result = listMascotaAll($conn);
				break;
				//PROGRESS 
				/**
				 * @param $url_parsed 
				 * @return array url format /especie 
				 * */

			case 'especie':
				$result = listMascotaEspecie($conn, $url_parsed);
				break;
		}
		break;
	case 'especies':
		/**
		 * url format
		 * /list
		 * @param $conn
		 * @return json array {especies y razas disponibles} 
		 */
		include $version_base . '/controllers/especie.php';
		$result = json_encode(listarEspeciesRazas($conn));
		break;
	default:
		exit('ERROR api');
}
exit($result);
