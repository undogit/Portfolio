<?php
session_start();

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

if(isset($_SESSION['errors'])){
	foreach ($_SESSION['errors'] as $error){
		$status.='<p class="alert alert-danger" role="alert">'.$error.'</p>';
	}
	$_SESSION['status']=$status;	
}
else{
	$filter=array('&lt;','&gt;');
	$mailTo='ipcared2015@gmail.com';
	$mailsubject=str_replace($filter,"",htmlspecialchars($_SESSION['sujet']));
	$mailBody=str_replace($filter,"",htmlspecialchars($_SESSION['message']));
	$headers= 'From:'.$_SESSION['nom'].' <'.$_SESSION[email].'>';
	
	if(mail($mailTo,$mailsubject,$mailBody,$headers)){
	
	$_SESSION['status']='<p class="alert alert-success" role="alert">Votre message a bien été transmis. Merci !</div>';
	}
}

header('location:form.php');

?>