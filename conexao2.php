<?php


$host = 'localhost';
$dbname = 'sistema';
$username = 'root';
$passaword = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbnamae"; $username, $passaword);
    $pdo->setAttribute(PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die ("Erro na conexao: " . $e-.getMessage());
}
?>