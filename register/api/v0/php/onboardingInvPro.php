<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());



#===================================INVESTOR FORM==========================================
$amount_invArray = explode("-",mysqli_real_escape_string($conn,$_POST['amount-inv']));
// $password = $_POST['password'];
$Investor_Type = mysqli_real_escape_string($conn,$_POST['how-to-inv']);
$Investor_Name = mysqli_real_escape_string($conn,$_POST['firm-name']);
$Contact_Name= mysqli_real_escape_string($conn,$_POST['lname'])." ".mysqli_real_escape_string($conn,$_POST['fname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['email']);
$Phone= mysqli_real_escape_string($conn,$_POST['mobile']);
if($_POST['industry'] == 'Others'){
    $Industry_Focus = mysqli_real_escape_string($conn,$_POST['custom_industry']);
} else {
    $Industry_Focus = mysqli_real_escape_string($conn,$_POST['industry']);
}

$Min_Cheque = $amount_invArray[0];
$Max_Cheque = $amount_invArray[1];
$Angel_Network= mysqli_real_escape_string($conn,$_POST['angel-network']);
$No_Startup = mysqli_real_escape_string($conn,$_POST['no-startup']);
$Networth = mysqli_real_escape_string($conn,$_POST['networth']);
$WhatsApp_Id = mysqli_real_escape_string($conn,$_POST['whatsapp']);
$Country= mysqli_real_escape_string($conn,$_POST['country']);
$City= mysqli_real_escape_string($conn,$_POST['city']);
$Hear_Us= mysqli_real_escape_string($conn,$_POST['hearus']);
$LinkedIn= mysqli_real_escape_string($conn,$_POST['linkedin']);
$organisation_type = 'investor';

        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
        if($retval_login->num_rows ==1){
             $Password = $rowLogin[3];
          //  $queryUpdateLogin  = "UPDATE `login` SET `account_type`='startup',`password`='".$Password."' WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateLogin);
        }else{
            
            $randPass = sha1(time());
            $Password = "gfa".substr($randPass,0,5);
            $insterLogin  = "INSERT INTO login(`email`,`password`,`account_type`)VALUE('$Contact_Email','$Password','$organisation_type')";
            $conn->query($insterLogin);
        }
        $queryCheckREg = "SELECT `Contact_Email` FROM `investor` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  //$queryUpdateReg  = "UPDATE `onboard_individual` SET `	interest_fund_raise`='".$interest."' WHERE `email`='".$Contact_Email."'";
    //         $conn->query($queryUpdateReg);
            echo "";
         
		}else{

    	$fund_raising  = "INSERT INTO investor(`Investor_Type`,`Investor_Name`,`Contact_Name`,`Contact_Email`,`Phone`,`Industry_Focus`,`Min_Cheque`,`Max_Cheque`,`LinkedIn`,`Angel_Network`,`No_Startup`,`Networth`,`WhatsApp_Id`,`Country`,`City`,`Hear_Us`,`Time_submit`)
		VALUE('$Investor_Type','$Investor_Name','$Contact_Name','$Contact_Email','$Phone','$Industry_Focus','$Min_Cheque','$Max_Cheque','$LinkedIn','$Angel_Network','$No_Startup','$Networth','$WhatsApp_Id','$Country','$City','$Hear_Us','$time')"; 
        $conn->query($fund_raising);
 		}
 		
 //Insert to PMs referral table 
$ref =  $_SESSION['urlRef'];
$pmsRef  = "INSERT INTO `pms_ref_link` (`email`,`ref`,`reg_type`,`time_submit`)
		VALUE('$Contact_Email','$ref','$organisation_type','$time')";
        //$conn->query($pmsRef);
       
$message ="<a href='https://nora.cipme.ci/portal/'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>";
$message .= "<p>Chers {$Contact_Name},</p>
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
   // echo '1';
    return '1';
} else {
   return '2';
}
	
	}
	
 
sendMail($Contact_Email, $message,$subject);


?>