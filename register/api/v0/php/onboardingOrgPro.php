<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);


$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());




$Organisation_Name = mysqli_real_escape_string($conn,$_POST['name-of-org']);
$Contact_Name= mysqli_real_escape_string($conn,$_POST['name']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['email']);
$Engagement  = mysqli_real_escape_string($conn,$_POST['engagement']);
$Organisation_Interest  = mysqli_real_escape_string($conn,$_POST['org-interest']);
$Description  = mysqli_real_escape_string($conn,$_POST['description']);
$Co_Organise  = mysqli_real_escape_string($conn,$_POST['co-organise']);
$Feature  = mysqli_real_escape_string($conn,$_POST['feature']);
$Phone= mysqli_real_escape_string($conn,$_POST['mobile']);
$Industry_Focus = implode(",",$_POST['industry']);
$WhatsApp_Id = mysqli_real_escape_string($conn,$_POST['whatsapp']);
$Country= mysqli_real_escape_string($conn,$_POST['country']);
$City= mysqli_real_escape_string($conn,$_POST['city']);
$Hear_Us= mysqli_real_escape_string($conn,$_POST['hearus']);
$LinkedIn= mysqli_real_escape_string($conn,$_POST['linkedin']);
$organisation_type = "corperate";
$Primary_Contact_Name = $Contact_Name;
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['core-solution']);
$code = explode(" ",$Organisation_Name);
$company_code = strtolower(substr($code[0], 0, 5)."-".substr(time(),-2,2));




        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
		if($retval_login->num_rows ==1){
		   
		    $Password = $rowLogin[3];
		
		}else{
		    $randPass = sha1(time());
		    $Password = "gfa".substr($randPass,0,5);
		    $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
		    $conn->query($insterLogin);
		}
        $queryCheckREg = "SELECT `Need_contact_email` FROM `cooperate_info` WHERE `Need_contact_email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
				{
		  
            echo '';
         
		}else{

    	$fund_raising  = "INSERT INTO `cooperate_info`(`Corporate_Name`,`Hq_country`,`Key_contact_name`,`Partner_startup_stage`,`Business_need_support`,`Need_service`,`Need_services_descr`,`Need_contact_email`,`Phone`,`LinkedIn`,`WhatsApp_Id`,`City`,`Hear_Us`,`Event`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`ref`)
		VALUE('$Organisation_Name','$Country','$Contact_Name','$Organisation_Interest','$Industry_Focus','$Engagement','$Description','$Contact_Email','$Phone','$LinkedIn','$WhatsApp_Id','$City','$Hear_Us','$company_code','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$company_code')";
        $conn->query($fund_raising);
 		}
 		

$message ="<a href='https://nora.cipme.ci/portal/'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>";
$message .= "<p>Cher {$Contact_Name},</p>
<p>Votre compte d’utilisateur à la plateforme de mise en relation « NORA » a été créé avec succès !</p>

    <p>Votre compte sera approuvé sous peu, et vos identifiants de connexion vous seront envoyés. Veuillez vérifier votre boîte de réception ou votre dossier spam pour cet e-mail.</p>

    <p>Pour toutes vos préoccupations et suggestions veuillez nous contacter par courriel: : <a href='mailto:nora@cipme.ci'>nora@cipme.ci</a> </p>
<p>Cordialement,<br>Cote D'Ivoire Pme</p>";
$subject = "Votre demande de création de compte -Plateforme digitale de mise en relation des acteurs de l’écosystème entrepreneuria";

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
       

$mail->addAddress($recipient_email);

// Set character encoding and HTML format
$mail->CharSet = 'UTF-8';
$mail->isHTML(true); 

$bodyContent = $message;


$mail->Subject =$subject;
$mail->Body    = $message;

if(!$mail->send()) {
   
    return '1';
} else {
   return '2';
}
	
	}
	
sendMail($Contact_Email, $message,$subject);

?>