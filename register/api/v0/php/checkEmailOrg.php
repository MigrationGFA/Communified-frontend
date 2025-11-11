<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());

$email = $_POST['email'];
        
        $queryCheckREg = "SELECT `Contact_Email` FROM `Organisation` WHERE `Contact_Email`='".$email."' ";
        $retval = $conn->query($queryCheckREg);
//         $row = $retval->fetch_row();
// 		//if($retval->num_rows ==1)
// 		if($row[0] ==$email)
// 		{
// 		  echo 1;
            
         
// 		}else{
		
// 		echo 2;
	
// 		}


?>