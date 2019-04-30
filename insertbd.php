<?php 

require 'admin/database.php';

if(isset($_POST)){

    $nom = verifyInput($_POST['name']); 
    $categories = verifyInput($_POST['categories']);
    $quantite = verifyInput($_POST['quantite']); 
    $client = verifyInput($_POST['client']);
    $contact = verifyInput($_POST['contact']);
} 

$db = Database::connect();

$db = Database::connect();
$insert = $db -> prepare("INSERT INTO `commande`(`name`, `categories`, `quantite`, `client`, `contact`) VALUES (?,?,?,?,?)");
$insert -> execute(array($nom,$categories,$quantite,$client,$contact));

Database::disconnect();
header("location:success.php");


function verifyInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>