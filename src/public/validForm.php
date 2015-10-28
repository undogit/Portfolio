<?php
session_start();


$errors=array();
$_SESSION['post']=$_POST;


function validText($key,$value){
	if(!isset($value)||empty($value)){
		$_SESSION['errors'][]='Le champ "'.$key.'" n\'est pas valide.';		
	}
	else if($key=='email' && filter_var($value, FILTER_VALIDATE_EMAIL)==False ){
			$_SESSION['errors'][]='Le champ "'.$key.'" n\'est pas valide.';			
		}
	else{
		$_SESSION[''.$key.'']=$value;						
	}
	return $_SESSION;
}

foreach ($_POST as $key=>$value){
	validText($key, $value);
}

header('location:form.php');

?>