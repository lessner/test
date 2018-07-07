<?php
// Tratamiento del password //
//$contrasena = 'JorgeH2018';
//$contrasena = 'Comodinrh2018';
//$contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);
//echo $contrasenaHash;
/*mcrypt Criptografia segura */

$contrasena = 'Comodinrh2018';

for ($i = -1; $i <= strlen($contrasena); $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex   = bin2hex($bytes);
}
$contrasenaHash = password_hash($hex.$contrasena, PASSWORD_DEFAULT);
echo $hex . '<br>';
echo $contrasenaHash;