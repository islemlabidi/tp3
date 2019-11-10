<?php
include 'dbconnexion.php';
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$update = $bd->prepare("UPDATE students SET firstname ='".$firstname."', lastname = '".$lastname."' , email = '".$email."' , phone = ".$phone." WHERE id =".$id);
$update->execute();
header('Location: index.php');  //redirection


        ?>
