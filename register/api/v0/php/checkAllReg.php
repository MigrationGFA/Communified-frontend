<?php 
date_default_timezone_set('UTC'); 
session_start();

require_once 'config.php';
		
$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());

if($_POST['id'] == 2){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  //echo '';
           echo ""; 
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 3){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 4){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 5){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 6){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 7){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 8){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `Contact_Email` FROM `Startups_Inv` WHERE `Contact_Email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 9){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 10){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 11){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 12){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 13){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 14){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}
if($_POST['id'] == 15){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}
if($_POST['id'] == 16){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}
if($_POST['id'] == 17){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}
if($_POST['id'] == 18){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 19){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `Email` FROM `mentor_info` WHERE `Email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 20){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 21){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 22){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 23){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 24){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 25){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 26){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 27){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}

if($_POST['id'] == 28){
$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
		if($retval->num_rows ==1)
		//if($row[0] ==$email)
		{
		  echo '';
            
         
		}else{
		
		echo "";
	
		}
}






?>