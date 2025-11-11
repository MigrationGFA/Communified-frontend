<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());



#===================================Organisation FORM==========================================

//$password = $_POST['password'];
//$Organisation_Type = $_POST['type-acc'];
// gfa1aigov6-organisation-type
// gfa1aigov6-interest
$Job= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-job']);
$Employeer= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-employeer']);
$Exp= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-exp']);
$Hours_Req= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-hours']);
$Capital= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-capital']);
$Inv_range= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-inv-range']);
$Age_range= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-age-range']);
$Qualification= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-qualification']);
$Mentor_handle= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-handle']);
$Skill = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-skill']);
$Company = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-company']);
$Mentor_name= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1aigov6-lname']);
$Gender =  mysqli_real_escape_string($conn,$_POST['gfa1aigov6-gender']); 
$Role = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-goals']); 
$Industry =  mysqli_real_escape_string($conn,$_POST['gfa1aigov6-cat']);


$LinkedIn = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-linkedin']); 

$Mentors_history =  mysqli_real_escape_string($conn,$_POST['gfa1aigov6-tech']);  
$Bio_data = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-bio']);  
$Email = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-email']);
$Investment_stage  = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-current-stage']);

$Phone = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-mobile']);
$Mentors_focus = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-industry']);
$WhatsApp_Id = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-whatsapp']);
$Nationality= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1aigov6-city']);
$African_Mentor= mysqli_real_escape_string($conn,$_POST['african_mentor']);
// $Hear_Us= $_POST['gfa1aigov6-fname']; 
$organisation_type = mysqli_real_escape_string($conn,$_POST['gfa1aigov6-organisation-type']);
$Primary_Contact_Name =$Mentor_name;


        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		  //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup'WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        $queryCheckREg = "SELECT `Email` FROM `mentor_info` WHERE `Email`='".$Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  //
		  echo '';
            
         
		}else{
		   

    	$fund_raising  = "INSERT INTO `mentor_info`(`Mentor_name`,`Gender`,`Nationality`,`Company`,`Role`,`Industry`,`Mentors_focus`,`Investment_stage`,`Bio_data`,`Mentors_history`,`Email`,`LinkedIn`,`Phone`,`WhatsApp_Id`,`City`,
    	`Date`,`Job`,`Employeer`,`Exp`,`Hours_Req`,`Capital`,`Inv_range`,`Age_range`,`Qualification`,`Mentor_handle`,`Skill`,`Mentor_African_Startup`)
		VALUE('$Mentor_name','$Gender','$Nationality','$Company','$Role','$Industry','$Mentors_focus','$Investment_stage','$Bio_data','$Mentors_history','$Email','$LinkedIn','$Phone','$WhatsApp_Id','$City','$time'
		,'$Job','$Employeer','$Exp','$Hours_Req','$Capital','$Inv_range','$Age_range','$Qualification','$Mentor_handle','$Skill','$African_Mentor')";
        $conn->query($fund_raising);
		}
       
//Insert to PMs referral table 
$ref =  $_SESSION['urlRef'];
$pmsRef  = "INSERT INTO `pms_ref_link` (`email`,`ref`,`reg_type`,`time_submit`)
		VALUE('$Email','$ref','$organisation_type','$time')";
        $conn->query($pmsRef);
        



 
$message ="<a href='https://nora.cipme.ci/portal/'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>";
$message .= "<p>Cher {$Mentor_name},</p>
<p>Votre compte d’utilisateur à la plateforme de mise en relation « NORA » a été créé avec succès !</p>

    <p>Votre compte sera approuvé sous peu, et vos identifiants de connexion vous seront envoyés. Veuillez vérifier votre boîte de réception ou votre dossier spam pour cet e-mail.</p>

    <p>Pour toutes vos préoccupations et suggestions veuillez nous contacter par courriel: : <a href='mailto:nora@cipme.ci'>nora@cipme.ci</a> </p>
<p>Cordialement,<br>Cote D'Ivoire Pme</p>";
$subject = "Votre demande de création de compte-Plateforme digitale de mise en relation des acteurs de l’écosystème entrepreneurial";

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

// Set character encoding and HTML format
$mail->CharSet = 'UTF-8';
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
	
sendMail($Email, $message,$subject);
//sendMail($Contact_Email, $message_ak,$subject_ak);

			


?>