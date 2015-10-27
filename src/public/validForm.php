<?php
session_start();

$errors=array();
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

if(!isset($name)||empty($name)){
	$errors[]='Le champ "nom" n\'est pas valide.';	
}
else {
$_SESSION['name']=$name;		
}

if (!isset($email)||filter_var($email, FILTER_VALIDATE_EMAIL)==False || empty($email)){
	$errors[]='Le champ "email" n\'est pas valide.';
}
else{
	$_SESSION['email']=$email;
}

if(!isset($subject)||empty($subject)){
	$errors[]='Le champ "sujet" n\'est pas valide.';
}
else {
	$_SESSION['subject']=$subject;
}

if(!isset($message)||empty($message)){
	$errors[]='Le champ "message" n\'est pas valide.';
}
else {
	$_SESSION['message']=$message;
}

header('location:form.php');

	
	
	





?>