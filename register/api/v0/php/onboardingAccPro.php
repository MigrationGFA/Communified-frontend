<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());



#===================================ACCELERATOR FORM==========================================
$amount_invArray = explode("-",$_POST['no-acc']);
//$password = $_POST['password'];
$Accelerator_Type = mysqli_real_escape_string($conn,$_POST['type-acc']);
$Accelerator_Name = mysqli_real_escape_string($conn,$_POST['name-incubator']);
$Contact_Name= mysqli_real_escape_string($conn,$_POST['lname'])." ".mysqli_real_escape_string($conn,$_POST['fname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['email']);
$resources = $_POST['resources'] ?? [];
$Resources  = implode(",",$resources);
$Phone= mysqli_real_escape_string($conn,$_POST['mobile']);
$Industry_Focus = mysqli_real_escape_string($conn,$_POST['industry']);
$Min = mysqli_real_escape_string($conn,$amount_invArray[0]);
$Max = mysqli_real_escape_string($conn,$amount_invArray[1]);
$Stand_Out = mysqli_real_escape_string($conn,$_POST['stand-out']);
$WhatsApp_Id = mysqli_real_escape_string($conn,$_POST['whatsapp']);
$Country= mysqli_real_escape_string($conn,$_POST['country']);
$City= mysqli_real_escape_string($conn,$_POST['city']);
$Hear_Us= mysqli_real_escape_string($conn,$_POST['hearus']);
$LinkedIn= mysqli_real_escape_string($conn,$_POST['linkedin']);
$organisation_type = 'accelerator';

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
        $queryCheckREg = "SELECT `Contact_Email` FROM `Accelerator` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		
		{

            echo "";
         
		}else{

    	$fund_raising  = "INSERT INTO `accelerator` (`Accelerator_Type`,`Accelerator_Name`,`Contact_Name`,`Resources`,`Contact_Email`,`Phone`,`Industry_Focus`,`Min`,`Max`,`LinkedIn`,`WhatsApp_Id`,`Country`,`City`,`Hear_Us`,`Stand_Out`)
		VALUE('$Accelerator_Type','$Accelerator_Name','$Contact_Name','$Resources','$Contact_Email','$Phone','$Industry_Focus','$Min','$Max','$LinkedIn','$WhatsApp_Id','$Country','$City','$Hear_Us','$Stand_Out')";
        $conn->query($fund_raising);
 		}


		

			
       
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
	
	if(isset($Contact_Name)){
	    
	    $regName= ucwords($Contact_Name);
	}else{
	
	if(isset($fname) || isset($lname)){
	    $regName = ucwords($fname)." ".ucwords($lname);
	}
	}
	
   
        $message = "<a href='https://nora.cipme.ci/portal'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a> 
    
           
<p>Chers {$regName},</p>
<p>Nous vous rappelons l'importance de fournir des informations exactes et véridiques lors de votre inscription et dans l'ensemble de vos interactions sur la plateforme NORA. Toute fausse déclaration ou fourniture d'informations erronées peut compromettre la confiance et l'intégrité de notre réseau.</p>

<p>En conséquence, nous tenons à vous avertir que :</p>
<ul>
    <li>Toute tentative de tromperie par la soumission de données incorrectes ou inexactes entraînera l'exclusion immédiate de la plateforme.</li>
    <li>Des vérifications régulières seront effectuées afin de s’assurer de la conformité des informations fournies par les utilisateurs.</li>
</ul>

<p>Nous comptons sur votre collaboration pour maintenir un environnement sûr, transparent et bénéfique pour tous.</p>

<p>Merci de votre compréhension et de votre engagement envers l'intégrité de la plateforme.</p>

<p>Cordialement,<br>L’équipe de gestion de NORA</p>";
$subject = "Votre demande de création de compte-Plateforme digitale de mise en relation des acteurs de l’écosystème entrepreneurial";



sendMail($Contact_Email, $message,$subject);	

//Insert to PMs referral table 
$ref =  $_SESSION['urlRef'];
$pmsRef  = "INSERT INTO `pms_ref_link` (`email`,`ref`,`reg_type`,`time_submit`)
		VALUE('$Contact_Email','$ref','$organisation_type','$time')";
        $conn->query($pmsRef);

?>