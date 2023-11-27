<?php
function loginUser($conn, $post)
{
    $stm = "SELECT `id`,`nombres`,`apellido`,`email` FROM `users` WHERE `email` =:user  AND `pass` = :pass";
    $statment = $conn->prepare($stm);
    $user = $post['user'];
    $pass = $post['pass'];
    $statment->bindParam(':user', $user);
    $statment->bindParam(':pass', $pass);
    $statment->execute();
    $result = $statment->fetch((PDO::FETCH_ASSOC));
	
    if ($result) {
		//session_start();
		$_SESSION['user'] = json_encode($result);
		$jwt =crearJWT($result['id'],$result['nombres'],'copa-4');
		$_SESSION['jwt'] = json_encode(['token' => $jwt]);
		header("Content-Type: text/plain; charset=utf-8");
		setcookie('token',$_SESSION['jwt'], ['samesite' => 'none', 'secure' => true]);
		exit($_SESSION['jwt']);	
    }
    return  exit(header("HTTP/1.1 403 Prohibido"));
}
function logoutUser()
{
    $_SESSION = null;
    session_destroy();
    session_start();
    return true;
}

function crearJWT($userId, $username, $secretKey, $expirationTime = 3600) {
	$secretKeyFull= $secretKey.date('d');
    $header = base64_encode(json_encode([
        'typ' => 'JWT',
        'alg' => 'HS256'
    ]));
    $payload = base64_encode(json_encode([
        'sub' => $userId,
        'username' => $username,
        'exp' => time() + $expirationTime
    ]));
    $signature = hash_hmac('sha256', "$header.$payload", $secretKey, true);
    $encodedSignature = base64_encode($signature);
    $jwt = "$header.$payload.$encodedSignature";
    return $jwt;
}
