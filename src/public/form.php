<?php session_start();
if (isset($_SESSION['name'])&&!empty($_SESSION['name'])){
	$nameValue='value="'.$_SESSION['name'].'"';	
}
else {
	$nameValue='value=""';
}
if (isset($_SESSION['email'])&&!empty($_SESSION['email'])){
	$emailValue='value="'.$_SESSION['email'].'"';
}
else {
	$emailValue='value=""';
}
if (isset($_SESSION['subject'])&&!empty($_SESSION['subject'])){
	$subjectValue='value="'.$_SESSION['subject'].'"';
}
else {
	$subjectValue='value=""';
}
if (isset($_SESSION['message'])&&!empty($_SESSION['message'])){
	$messageValue=$_SESSION['message'];
}
else {
	$messageValue='';
}
var_dump($_SESSION);

session_destroy() ;

?>



<form class="form-horizontal" role="form" method="post" action="validForm.php">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom / Société" <?=$nameValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" <?=$emailValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" <?=$subjectValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="4" name="message" placeholder="Votre message..."><?=$messageValue?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <!--  Will be used to display an alert to the user-->
                </div>
            </div>
        </form>
        
        