<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());


#===================================STARTUP IDEA NEWSLETTER SUBSCRIPTION==========================================
if(isset($_POST['gfa1ai3-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai3-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai3-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai3-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai3-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai3-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai3-current-stage']);


        
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{
		
		$newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`,`current_stage`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time','$current_stage')";
        $conn->query($newsletter);
	
		}
		
	
}

if(isset($_POST['gfa1ai4-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai4-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai4-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai4-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai4-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai4-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai4-current-stage']);


        
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{
		
		$newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`,`current_stage`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time','$current_stage')";
        $conn->query($newsletter);
	
		}
		
	
}

if(isset($_POST['gfa1ai5-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai5-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai5-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai5-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai5-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai5-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai5-current-stage']);


        
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{
		
		$newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`,`current_stage`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time','$current_stage')";
        $conn->query($newsletter);
	
		}
		
	
}

if(isset($_POST['gfa1ai6-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai6-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai6-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai6-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai6-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai6-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai6-current-stage']);


        
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{
		
		$newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`,`current_stage`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time','$current_stage')";
        $conn->query($newsletter);
	
		}
		
	
}

if(isset($_POST['gfa1ai7-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai7-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai7-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai7-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai7-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai7-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai7-current-stage']);


        
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{
		
		$newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`,`current_stage`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time','$current_stage')";
        $conn->query($newsletter);
	
		}
		
	
}

//Insert to PMs referral table 
$ref =  $_SESSION['urlRef'];
$pmsRef  = "INSERT INTO `pms_ref_link` (`email`,`ref`,`reg_type`,`time_submit`)
		VALUE('$Contact_Email','$ref','$organisation_type','$time')";
        $conn->query($pmsRef);
$message ="<a href='https://nora.cipme.ci/portal/'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>";
$message .= "<p>Bonjour {$fname},</p>

    <p>Votre compte d’utilisateur à la plateforme de mise en relation « NORA » a été créé avec succès !</p>

    <p>Votre compte sera approuvé sous peu, et vos identifiants de connexion vous seront envoyés. Veuillez vérifier votre boîte de réception ou votre dossier spam pour cet e-mail.</p>

    <p>Pour toutes vos préoccupations et suggestions veuillez nous contacter par courriel: : <a href='mailto:nora@cipme.ci'>nora@cipme.ci</a> </p>

    <p>Cordialement,</p>";
$subject = "Bienvenue dans le Programme d'Assistance à Distance";

require 'PHPMailer/PHPMailerAutoload.php';

 function sendMail($recipient_email, $message,$subject)
	{	
	

$mail = new PHPMailer;

$mail->isSMTP();                           
        $mail->Host = "mail.smtp2go.com";
        $mail->SMTPAuth = true;                    
        $mail->Username = "cipme.ci";
        $mail->Password ="R4Qz93FHdRIL2FvN"; 
        $mail->SMTPSecure = 'ssl';                 
        $mail->Port =465;                          
        $mail->From ="info@cipme.ci";
        $mail->FromName ="CIPME";
//$mail->addReplyTo('info@trixpmedia.com');
$mail->addAddress($recipient_email);
//$mail->addBCC('bcc@example.com');
// Welcome thankyou for subscribing 

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = $message;


$mail->Subject =$subject;
$mail->Body    = $message;

if(!$mail->send()) {
   // echo '1';
    return '1';
} else {
   return '2';
}
	
	}
	
sendMail($Contact_Email, $message,$subject);


?>