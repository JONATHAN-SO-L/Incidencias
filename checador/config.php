<?php
$user="veco";
$pwd="Vec83Dv19iSa@";
$host="localhost";
$db="veco_do";

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);      
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    echo "ERROR 100: Fail Connection - " . $e->getMessage();
}
?>