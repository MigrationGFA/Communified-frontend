<?php 
date_default_timezone_set('UTC'); 
session_start();     
        
require_once 'config.php'; 

$conn = mysqli_connect("noradb.mysql.database.azure.com", Config::$databaseUsername, Config::$databasePassword, Config::$databaseName);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

$ref_id = time();
$time   =  date("Y-m-d h:i:s A",time());

//$sanitized_userid = 
    //mysqli_real_escape_string($db, $userid);
      
//$sanitized_password = 
   // mysqli_real_escape_string($db, $password);
        
//         $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email`='".$email."' ";
//         $retval = $conn->query($queryCheckREg);
//         $row = $retval->fetch_row();
//      //if($retval->num_rows ==1)
//      if($row[0] ==$email)
//      {
//        $queryUpdateReg  = "UPDATE `onboard_individual` SET `status`='approved' WHERE `email`='".$email."'";
//          $conn->query($queryUpdateReg);
            
         
//      }else{
        
    
//      }

#===================================STARTUP NEWSLETTER SUBSCRIPTION==========================================
if(isset($_POST['gfa1ai2-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai2-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai2-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai2-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai2-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ai2-current-stage']);


        
        
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
#===================================INDIVIDUAL NEWSLETTER SUBSCRIPTION==========================================
if(isset($_POST['gfa1ai-interest'])){
    
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ai-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ai-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ai-interest']);

        
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
        $queryCheckREg = "SELECT `email` FROM `onboard_update` WHERE `email`='".$Contact_Email."' AND `organisation_type`='".$organisation_type."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
        if($retval->num_rows ==1)
        //if($row[0] ==$email)
        {
          $queryUpdateReg  = "UPDATE `onboard_update` SET `interest_update`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{
        
        $newsletter  = "INSERT INTO onboard_update(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`interest_update`,`time_submit`)VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$interest','$time')";
        $conn->query($newsletter);
    
        }
        
    
}

#===================================STARTUP GFMAX ==========================================
if(isset($_POST['gfa1fi7-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi7-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1fi7-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1fi7-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi7-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1fi7-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1fi7-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1fi7-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1fi7-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1fi7-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}
if(isset($_POST['gfa1fi6-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi6-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1fi6-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1fi6-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi6-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1fi6-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1fi6-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1fi6-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1fi6-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1fi6-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}
if(isset($_POST['gfa1fi5-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi5-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1fi5-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1fi5-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi5-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1fi5-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1fi5-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1fi5-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1fi5-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1fi5-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}
if(isset($_POST['gfa1fi4-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi4-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1fi4-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1fi4-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi4-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1fi4-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1fi4-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1fi4-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1fi4-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1fi4-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
} 
if(isset($_POST['gfa1fi3-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1fi3-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1fi3-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi3-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi3-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1fi3-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1fi3-current-stage']);
$password = mysqli_real_escape_string($conn,$_POST['gfa1fi3-pass']);
$mobile= mysqli_real_escape_string($conn,$_POST['gfa1fi3-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1fi3-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1fi3-city']);
        
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
          $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_gfamax`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{
        $fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`password`,`mobile`,`country`,`city`,`time_submit`,`interest_insight_report`,`current_stage`)
        VALUE($ref_id,'$fname','$lname','$Contact_Email','$organisation_type','$password','$mobile','$country','$city','$time','$interest','$current_stage')";
        $conn->query($fund_raising);
        
        }
    
}   
if(isset($_POST['gfa1fi2-interest'])){



$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi2-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1fi2-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1fi2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi2-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1fi2-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1fi2-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1fi2-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1fi2-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1fi2-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}        

#===================================INDIVIDUAL GFMAX ==========================================
if(isset($_POST['gfa1fi-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1fi-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1fi-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1fi-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1fi-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1fi-interest']);
//$password = $_POST['gfa1fi-pass'];
$mobile= mysqli_real_escape_string($conn,$_POST['gfa1fi-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1fi-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1fi-city']);
        
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
        $queryCheckREg = "SELECT `email` FROM `onboard_individual` WHERE `email` = '".$Contact_Email."' ";
        $retval = $conn->query($queryCheckREg);
        $row = $retval->fetch_row();
        if($retval->num_rows ==1)
        //if($row[0] ==$email)
        {
          $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_gfamax`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{
        $fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`mobile`,`country`,`city`,`time_submit`,`interest_gfamax`)
        VALUE('$ref_id','$fname','$lname','$Contact_Email','$organisation_type','$mobile','$country','$city','$time','$interest')";
        $conn->query($fund_raising);
        
        }
    
}    
#===================================STARTUP LEARNING ==========================================
if(isset($_POST['gfa1ei7-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei7-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ei7-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ei7-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei7-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ei7-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ei7-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ei7-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ei7-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ei7-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
} 
if(isset($_POST['gfa1ei6-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei6-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ei6-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ei6-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei6-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ei6-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ei6-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ei6-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ei6-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ei6-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}
if(isset($_POST['gfa1ei5-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei5-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ei5-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ei5-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei5-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ei5-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ei5-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ei5-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ei5-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ei5-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}   
if(isset($_POST['gfa1ei4-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei4-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ei4-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ei4-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei4-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ei4-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ei4-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ei4-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ei4-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ei4-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}    
if(isset($_POST['gfa1ei3-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ei3-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ei3-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei3-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei3-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ei3-interest']);
$current_stage = mysqli_real_escape_string($conn,$_POST['gfa1ei3-current-stage']);
//$password = $_POST['gfa1ei2-pass'];
$mobile= mysqli_real_escape_string($conn,$_POST['gfa1ei3-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1ei3-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1ei3-city']);
        
        
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
          $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_learning`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{

        $fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`mobile`,`country`,`city`,`time_submit`,`interest_insight_report`,`current_stage`)
        VALUE('$ref_id','$fname','$lname','$Contact_Email','$organisation_type','$mobile','$country','$city','$time','$interest','$current_stage')";
        $conn->query($fund_raising);
        
        }
    
}        

if(isset($_POST['gfa1ei2-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei2-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ei2-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ei2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei2-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ei2-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ei2-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ei2-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ei2-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ei2-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}         

#===================================INDIVIDUAL LEARNING ==========================================
if(isset($_POST['gfa1ei-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1ei-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1ei-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ei-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ei-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1ei-interest']);
//$password = $_POST['gfa1ei-pass'];
$mobile= mysqli_real_escape_string($conn,$_POST['gfa1ei-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1ei-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1ei-city']);
        
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
          $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_learning`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{

        $fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`mobile`,`country`,`city`,`time_submit`,`interest_learning`)
        VALUE('$ref_id','$fname','$lname','$Contact_Email','$organisation_type','$mobile','$country','$city','$time','$interest')";
        $conn->query($fund_raising);
        
        }
    
}        


#===================================Startup Insight Report ==========================================
if(isset($_POST['gfa1di2-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1di2-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1di2-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1di2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1di2-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1di2-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1di2-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1di2-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1di2-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1di2-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1di2-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1di2-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1di2-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1di2-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1di2-own']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$NoOfEmployees','$Startup_Implementation_Stage','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
} 



#===================================INDIVIDUAL Insight Report ==========================================
if(isset($_POST['gfa1di-interest'])){
$fname = mysqli_real_escape_string($conn,$_POST['gfa1di-fname']);
$lname= mysqli_real_escape_string($conn,$_POST['gfa1di-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1di-email']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1di-organisation-type']);
$interest = mysqli_real_escape_string($conn,$_POST['gfa1di-interest']);

$mobile= mysqli_real_escape_string($conn,$_POST['gfa1di-mobile']);
$country = mysqli_real_escape_string($conn,$_POST['gfa1di-country']);
$city = mysqli_real_escape_string($conn,$_POST['gfa1di-city']);


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
          $queryUpdateReg  = "UPDATE `onboard_individual` SET `interest_insight_report`='".$interest."' WHERE `email`='".$Contact_Email."'";
            $conn->query($queryUpdateReg);
            
         
        }else{

        $fund_raising  = "INSERT INTO onboard_individual(`ref_id`,`fname`,`lname`,`email`,`organisation_type`,`mobile`,`country`,`city`,`time_submit`,`interest_insight_report`)
        VALUE('$ref_id','$fname','$lname','$Contact_Email','$organisation_type','$mobile','$country','$city','$time','$interest')";
        $conn->query($fund_raising);
        
        }
    
}  


#===================================STARTUP BUSINESS GROWTH ==========================================
if(isset($_POST['gfa1ci2-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci2-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci2-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ci2-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci2-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci2-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci2-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci2-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ci2-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci2-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci2-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci2-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci2-file'];

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


#===================================INDIVIDUAL BUSINESS GROWTH ==========================================
if(isset($_POST['gfa1ci-interest'])){
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ci-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ci-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ci-lname']);
$Contact_Email = mysqli_real_escape_string($conn,strtolower($_POST['gfa1ci-email']));
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ci-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ci-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1ci-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ci-interest']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ci-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ci-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ci-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ci-file'];

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

        $fund_raising  = "INSERT INTO `Startups_Inv` (`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        }
    
}

#===================================STARTUP FUND RASING GROWTH ==========================================
if(isset($_POST['gfa1ai7-interest'])){
$Startup_Company_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai7-sname']);
$PrimaryBusinessIndustry= mysqli_real_escape_string($conn,$_POST['gfa1ai7-industry']);  
//$Contact_Email = $_POST['gfa1ai5-year-founded'];
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai7-organisation-type']);
$Revenue = mysqli_real_escape_string($conn,$_POST['gfa1ai7-revenue']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-current-stage']);
$Website = mysqli_real_escape_string($conn,$_POST['gfa1ai7-website']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai7-fname']." ".$_POST['gfa1ai7-lname']);
$Next_Funding_Round_Target_Sought= mysqli_real_escape_string($conn,$_POST['gfa1ai7-fundraise']) ;
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai7-email']);

$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ai7-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ai7-country']);
$city= mysqli_real_escape_string($conn,$_POST['gfa1ai7-city']);
$Investment_History= mysqli_real_escape_string($conn,$_POST['gfa1ai7-about']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ai7-interest']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ai7-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ai7-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ai7-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ai7-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ai7-file'];

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Startup_Company_Name`,`Primary_Contact_Name`,`Contact_Email`,`Phones`,`Website`,`CountryHQ`,`PrimaryBusinessIndustry`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Next_Funding_Round_Target_Sought`,`Investment_History`,`Organisation_Type`,`Interest_Fund_Raise`,`Revenue`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Startup_Company_Name','$Primary_Contact_Name','$Contact_Email','$Phones','$Website','$CountryHQ','$PrimaryBusinessIndustry','$NoOfEmployees','$Startup_Implementation_Stage','$Next_Funding_Round_Target_Sought','$Investment_History','$organisation_type','$Interest_Fund_Raise','$Revenue','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}        




#===================================STARTUP FUND RASING POST-LAUNCH ==========================================
if(isset($_POST['gfa1ai6-interest'])){
$Startup_Company_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai6-sname']);
$PrimaryBusinessIndustry= mysqli_real_escape_string($conn,$_POST['gfa1ai6-industry']);  
//$Contact_Email = $_POST['gfa1ai5-year-founded'];
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai6-organisation-type']);
$Revenue = mysqli_real_escape_string($conn,$_POST['gfa1ai6-revenue']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-current-stage']);
$Website = mysqli_real_escape_string($conn,$_POST['gfa1ai6-website']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai6-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1ai6-lname']);
$Next_Funding_Round_Target_Sought= mysqli_real_escape_string($conn,$_POST['gfa1ai6-fundraise']) ;
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai6-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ai6-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ai6-country']);
$city= mysqli_real_escape_string($conn,$_POST['gfa1ai6-city']);
$Investment_History= mysqli_real_escape_string($conn,$_POST['gfa1ai6-about']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ai6-interest']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ai6-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ai6-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ai6-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ai6-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ai6-file'];

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Startup_Company_Name`,`Primary_Contact_Name`,`Contact_Email`,`Phones`,`Website`,`CountryHQ`,`PrimaryBusinessIndustry`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Next_Funding_Round_Target_Sought`,`Investment_History`,`Organisation_Type`,`Interest_Fund_Raise`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Startup_Company_Name','$Primary_Contact_Name','$Contact_Email','$Phones','$Website','$CountryHQ','$PrimaryBusinessIndustry','$NoOfEmployees','$Startup_Implementation_Stage','$Next_Funding_Round_Target_Sought','$Investment_History','$organisation_type','$Interest_Fund_Raise','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
}        


#===================================STARTUP FUND RASING PRE-LAUNCH ==========================================
if(isset($_POST['gfa1ai5-interest'])){
$Startup_Company_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai5-sname']);
$PrimaryBusinessIndustry= mysqli_real_escape_string($conn,$_POST['gfa1ai5-industry']);  
//$Contact_Email = $_POST['gfa1ai5-year-founded'];
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1ai5-organisation-type']);
$Revenue = mysqli_real_escape_string($conn,$_POST['gfa1ai5-revenue']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-current-stage']);
$Website = mysqli_real_escape_string($conn,$_POST['gfa1ai5-website']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1ai5-fname']." ".$_POST['gfa1ai5-lname']);
$Next_Funding_Round_Target_Sought= mysqli_real_escape_string($conn,$_POST['gfa1ai5-fundraise']) ;
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1ai5-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1ai5-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1ai5-country']);
$city= mysqli_real_escape_string($conn,$_POST['gfa1ai5-city']);
$Investment_History= mysqli_real_escape_string($conn,$_POST['gfa1ai5-about']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1ai5-interest']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1ai5-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1ai5-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1ai5-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1ai5-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1ai5-file'];

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Startup_Company_Name`,`Primary_Contact_Name`,`Contact_Email`,`Phones`,`Website`,`CountryHQ`,`PrimaryBusinessIndustry`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Next_Funding_Round_Target_Sought`,`Investment_History`,`Organisation_Type`,`Interest_Fund_Raise`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Startup_Company_Name','$Primary_Contact_Name','$Contact_Email','$Phones','$Website','$CountryHQ','$PrimaryBusinessIndustry','$NoOfEmployees','$Startup_Implementation_Stage','$Next_Funding_Round_Target_Sought','$Investment_History','$organisation_type','$Interest_Fund_Raise','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
} 
#===================================STARTUP FUND RASING DEVELOPMENT ==========================================
if(isset($_POST['gfa1bi4-interest'])){
$Startup_Company_Name = mysqli_real_escape_string($conn,$_POST['gfa1bi4-sname']);
$PrimaryBusinessIndustry= mysqli_real_escape_string($conn,$_POST['gfa1bi4-industry']);  
$Date_Founded = mysqli_real_escape_string($conn,$_POST['gfa1bi4-year-founded']);
$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1bi4-organisation-type']);
$Revenue = mysqli_real_escape_string($conn,$_POST['gfa1bi4-revenue']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-current-stage']);
$Website = mysqli_real_escape_string($conn,$_POST['gfa1bi4-website']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1bi4-fname']." ".$_POST['gfa1bi4-lname']);
$Next_Funding_Round_Target_Sought= mysqli_real_escape_string($conn,$_POST['gfa1bi4-fundraise']) ;
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1bi4-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1bi4-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1bi4-country']);
$city= mysqli_real_escape_string($conn,$_POST['gfa1bi4-city']);
$Investment_History= mysqli_real_escape_string($conn,$_POST['gfa1bi4-about']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1bi4-interest']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1bi4-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1bi4-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1bi4-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1bi4-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1bi4-file'];

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Startup_Company_Name`,`Primary_Contact_Name`,`Contact_Email`,`Phones`,`Website`,`CountryHQ`,`PrimaryBusinessIndustry`,`NoOfEmployees`,`Startup_Implementation_Stage`,`Next_Funding_Round_Target_Sought`,`Investment_History`,`Organisation_Type`,`Interest_Fund_Raise`,`Date_Founded`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Startup_Company_Name','$Primary_Contact_Name','$Contact_Email','$Phones','$Website','$CountryHQ','$PrimaryBusinessIndustry','$NoOfEmployees','$Startup_Implementation_Stage','$Next_Funding_Round_Target_Sought','$Investment_History','$organisation_type','$Interest_Fund_Raise','$Date_Founded','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        $fund_raising_ext  = "INSERT INTO Startups_Inv_Ext(`Email`,`Startup_Model`,`Solution_Corperate`,`Core_Interest_Corporate`,`Solution_Ownership`)
        VALUE('$Contact_Email','$Startup_Model','$Solution_Corperate','$Core_Interest_Corporate','$Solution_Ownership')";
        $conn->query($fund_raising_ext);
        }
} 
#===================================STARTUP FUND RASING IDEAS ==========================================
if(isset($_POST['gfa1bi3-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1bi3-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1bi3-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1bi3-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1bi3-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1bi3-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1bi3-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1bi3-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1bi3-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1bi3-current-stage']);
$Investment_History= mysqli_real_escape_string($conn,$_POST['gfa1bi3-about']);

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

        $fund_raising  = "INSERT INTO Startups_Inv(`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`Startup_Implementation_Stage`,`Investment_History`,`Organisation_Type`,`Interest_Fund_Raise`,`State`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$Startup_Implementation_Stage','$Investment_History','$organisation_type','$Interest_Fund_Raise','$City')";
        $conn->query($fund_raising);
        }
}

#===================================STARTUP FUND RASING DISCOVERY ==========================================
if(isset($_POST['gfa1bi2-interest'])){


$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1bi2-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1bi2-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1bi2-lname']);
$Contact_Email = mysqli_real_escape_string($conn,$_POST['gfa1bi2-email']);
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1bi2-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1bi2-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1bi2-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1bi2-interest']);
$Startup_Implementation_Stage =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-current-stage']);
$NoOfEmployees =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-worker']);
$Startup_Model =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-model']);
$Solution_Corperate =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-solution']);
$Core_Interest_Corporate =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-core-solution']);
$Solution_Ownership =  mysqli_real_escape_string($conn,$_POST['gfa1bi2-own']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1bi2-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1bi2-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1bi2-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1bi2-file'];

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
            
#===================================INDIVIDUAL FUND RASING ==========================================
if(isset($_POST['gfa1bi-interest'])){

$organisation_type= mysqli_real_escape_string($conn,$_POST['gfa1bi-organisation-type']);
$Primary_Contact_Name = mysqli_real_escape_string($conn,$_POST['gfa1bi-fname'])." ".mysqli_real_escape_string($conn,$_POST['gfa1bi-lname']);
$Contact_Email = mysqli_real_escape_string($conn,strtolower($_POST['gfa1bi-email']));
$Phones = mysqli_real_escape_string($conn,$_POST['gfa1bi-mobile']);
$CountryHQ= mysqli_real_escape_string($conn,$_POST['gfa1bi-country']);
$City= mysqli_real_escape_string($conn,$_POST['gfa1bi-city']);
$Interest_Fund_Raise = mysqli_real_escape_string($conn,$_POST['gfa1bi-interest']);
$Trade_No = mysqli_real_escape_string($conn,$_POST['gfa1bi-trade']);
$Tax_No = mysqli_real_escape_string($conn,$_POST['gfa1bi-tax']);
$CNPS_No = mysqli_real_escape_string($conn,$_POST['gfa1bi-cnps']);
$dataInfo = array();
$files = $_FILES['gfa1bi-file'];

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

        $fund_raising  = "INSERT INTO `Startups_Inv` (`Primary_Contact_Name`,`Contact_Email`,`Phones`,`CountryHQ`,`Organisation_Type`,`Interest_Fund_Raise`,`State`,`Trade_No`,`Trade_File`,`Tax_No`,`Tax_File`,`CNPS_No`,`CNPS_File`)
        VALUE('$Primary_Contact_Name','$Contact_Email','$Phones','$CountryHQ','$organisation_type','$Interest_Fund_Raise','$City','$Trade_No','$dataInfo[0]','$Tax_No','$dataInfo[1]','$CNPS_No','$dataInfo[2]')";
        $conn->query($fund_raising);
        }
}        

//}

if($Contact_Email !=''){
    
    $Contact_Email = $Contact_Email;
}else{
    
  $Contact_Email = $email;   
}




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

    <p>Cordialement,</p>
    ";
$subject = "Votre demande de création de compte-Plateforme digitale de mise en relation des acteurs de l’écosystème entrepreneurial";

 
//sendMail($Contact_Email, $message_ak,$subject_ak);
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