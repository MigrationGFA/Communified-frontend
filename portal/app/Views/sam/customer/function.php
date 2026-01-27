<?php
$host = "localhost";
$user ="noniking_db";
$password = "4321assP$1";
$dbname = "noniking_db";
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$conn = mysqli_connect($host,$user,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$paystackkey = "pk_test_cc115cdbc8ea255f63b746eacde87f4649eb6483";





$result = $conn->query("SELECT COUNT(*) FROM purchase_order where customer_name = '$sam'");
$row = $result->fetch_row();
$totalorder = $row[0];

$result1 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='Awaiting Invoice' && customer_name = '$sam' ");
$row = $result1->fetch_row();
$pendingorder = $row[0];


$result2 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='ON-GOING' && customer_name = '$sam'");
$row = $result2->fetch_row();
$ongoingorder = $row[0];

$result3 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='Awaiting Invoice' && customer_name = '$sam'");
$row = $result3->fetch_row();
$invoiced = $row[0];


$result4 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='CANCELED'");
$row = $result4->fetch_row();
$canceledorder = $row[0];

$result5 = $conn->query("SELECT COUNT(*) FROM users ");
$row = $result5->fetch_row();
$totalusers = $row[0];


$result6 = $conn->query("SELECT amount FROM quotation_upload where ref_id = '$myref' ");
$row = $result5->fetch_row();
$amountquote = $row[3];



$result7 = $conn->query("SELECT UserBal FROM users where  username = '$sam'");
$row = $result7->fetch_row();
$ok = $row[0];

$result8 = $conn->query("SELECT amount FROM wallettransact where  refid = '$myref'");
$row = $result8->fetch_row();
$availablebal = $row[0];

// $result9 = $conn->query("SELECT email FROM users where  ref_id = '$myref'");
// $row = $result9->fetch_row();
// $customeremail = $row[0];

$customeremail = "customer@gmail.com";

$result9 = $conn->query("SELECT * FROM users where username = '$sam' ");
$row = $result9->fetch_row();
$user = $row[0];


?>