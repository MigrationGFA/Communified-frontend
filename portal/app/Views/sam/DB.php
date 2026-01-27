<?php

session_start();

$host = "localhost"; /* Host name */
$user = "noniking_db"; /* User */
$password = "4321assP$1"; /* Password */
$dbname = "noniking_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    define('DB_SERVER', 'localhost');

    define('DB_USERNAME', 'noniking_db');

    define('DB_PASSWORD', '4321assP$1');

    define('DB_NAME', 'noniking_db');

     

    /* Attempt to connect to MySQL database */

    try{

        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        // Set the PDO error mode to exception

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){

        die("ERROR: Could not connect. " . $e->getMessage());

    }

$conn = new PDO( 'mysql:host=localhost;dbname='.$DBName, $DBUser,$DBPassword );
    if(!$conn){
        die("Fatal Error: Connection Failed!");
    }
    ?>

