<?php 
date_default_timezone_set('UTC'); 
session_start();	 
		
require_once 'config.php';

$conn = mysqli_connect("localhost", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time 	=  date("Y-m-d h:i:s A",time());




        $Contact_Email = 'toluadekunte@gmail.com';
        
        $queryLogin = "SELECT * FROM `login` WHERE `email`='".$Contact_Email."'";
        $retval_login = $conn->query($queryLogin);
        $rowLogin = $retval_login->fetch_row();
        print_r($retval_login);
        print_r($rowLogin);
        



?>