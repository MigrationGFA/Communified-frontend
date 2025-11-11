<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());


#===================================STARTUP BUSINESS GROWTH IDEAS ==========================================
if(isset($_POST['gfa1ci3-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ci3-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ci3-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci3-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci3-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ci3-interest']);
$mobile= mysqli_real_escape_string($conn,$_POST['gfa1ci3-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1ci3-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1ci3-city']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ci3-current-stage']);
        
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
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_business_growth`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{

		$fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`mobile`,`country`,`city`,`time_submit`,`interest_business_growth`,`current_stage`)
		VALUE('$ref_id','$fname','$lname','$Contact_Email','$organisation_type','$mobile','$country','$city','$time','$interest','$current_stage')";
        $conn->query($fund_raising);
        
		}
	
}

#===================================STARTUP BUSINESS GROWTH DEVELOPMENT ==========================================

if(isset($_POST['gfa1ci4-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci4-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci4-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci4-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci4-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci4-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci4-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci4-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci4-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ci4-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci4-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci4-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci4-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci4-file'];

    foreach ($files['name'] as $key => $name) {
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $files['tmp_name'][$key];
            $newName = uniqid() . '_' . basename($name);
            $destination = realpath(__DIR__ . '/../../../../portal/uploads/files') . '/' . $newName;
            

            // Move the file to the desired directory
            if (move_uploaded_file($tmpName, $destination)) {
                $dataInfo[] = $newName;
            }
        }
    }

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
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `Startups_Inv` SET `Interest_Fund_Raise`='".$Interest_Fund_Raise."' WHERE `Contact_Email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{

    	$fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
		VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
		VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
 		}
} 

#===================================STARTUP BUSINESS GROWTH PRE LAUNCH ==========================================

if(isset($_POST['gfa1ci5-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci5-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci5-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci5-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci5-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci5-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci5-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci5-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci5-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ci5-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci5-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci5-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci5-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci5-file'];

    foreach ($files['name'] as $key => $name) {
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $files['tmp_name'][$key];
            $newName = uniqid() . '_' . basename($name);
            $destination = realpath(__DIR__ . '/../../../../portal/uploads/files') . '/' . $newName;
            

            // Move the file to the desired directory
            if (move_uploaded_file($tmpName, $destination)) {
                $dataInfo[] = $newName;
            }
        }
    }
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
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `Startups_Inv` SET `Interest_Fund_Raise`='".$Interest_Fund_Raise."' WHERE `Contact_Email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{

    	$fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
		VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
		VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
 		}
}

#===================================STARTUP BUSINESS GROWTH POST LAUNCH ==========================================

if(isset($_POST['gfa1ci6-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci6-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci6-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci6-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci6-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci6-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci6-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci6-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci6-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ci6-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci6-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci6-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci6-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci6-file'];

    foreach ($files['name'] as $key => $name) {
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $files['tmp_name'][$key];
            $newName = uniqid() . '_' . basename($name);
            $destination = realpath(__DIR__ . '/../../../../portal/uploads/files') . '/' . $newName;
            

            // Move the file to the desired directory
            if (move_uploaded_file($tmpName, $destination)) {
                $dataInfo[] = $newName;
            }
        }
    }
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
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `Startups_Inv` SET `Interest_Fund_Raise`='".$Interest_Fund_Raise."' WHERE `Contact_Email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{

    	$fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
		VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
		VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
 		}
} 


#===================================STARTUP BUSINESS GROWTH POST LAUNCH ==========================================

if(isset($_POST['gfa1ci7-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci7-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci7-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci7-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci7-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci7-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci7-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci7-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci7-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ci7-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci7-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci7-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci7-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci7-file'];

    foreach ($files['name'] as $key => $name) {
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            $tmpName = $files['tmp_name'][$key];
            $newName = uniqid() . '_' . basename($name);
            $destination = realpath(__DIR__ . '/../../../../portal/uploads/files') . '/' . $newName;
            

            // Move the file to the desired directory
            if (move_uploaded_file($tmpName, $destination)) {
                $dataInfo[] = $newName;
            }
        }
    }

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
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  $queryUpdateReg  = "UPDATE `Startups_Inv` SET `Interest_Fund_Raise`='".$Interest_Fund_Raise."' WHERE `Contact_Email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
		}else{

    	$fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
		VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
		VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
 		}
} 

// if($Contact_Email !=''){
    
//     $Contact_Email = $Contact_Email;
// }else{
    
//   $Contact_Email = $email;   
// }




//Insert to PMs referral table
if($_SESSION['urlRef'] !=''){
$ref =  $_SESSION['urlRef'];
$pmsRef  = "INSERT INTO `pms_ref_link` (`email`,`ref`,`reg_type`,`time_submit`)
		VALUE('$Contact_Email','$ref','$organisation_type','$time')";
        $conn->query($pmsRef);
}else{
    
    echo '';
}        

$message ="<a href='https://nora.cipme.ci/portal/'><img src='https://nora.cipme.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>";
$message .= "<p>Bonjour {$Primary_Contact_Name},</p>

    <p>Votre compte d’utilisateur à la plateforme de mise en relation « NORA » a été créé avec succès !</p>

    <p>Votre compte sera approuvé sous peu, et vos identifiants de connexion vous seront envoyés. Veuillez vérifier votre boîte de réception ou votre dossier spam pour cet e-mail.</p>

    <p>Pour toutes vos préoccupations et suggestions veuillez nous contacter par courriel: : <a href='mailto:nora@cipme.ci'>nora@cipme.ci</a> </p>

    <p>Cordialement,</p>";
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
	
sendMail($Contact_Email, $message,$subject);

?>