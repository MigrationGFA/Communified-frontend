<?php
//include_once 'DB.php';
$sam = 200;



$conn = mysqli_connect("localhost","noniking_db","4321assP$1","noniking_db");
if (!$conn) {
  die('Could not connect: ' . mysqli_error());
}



$result = $conn->query("SELECT COUNT(*) FROM purchase_order");
$row = $result->fetch_row();
$totalorder = $row[0];

$result1 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='Awaiting Invoice'");
$row = $result1->fetch_row();
$pendingorder = $row[0];


$result2 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='ON-GOING'");
$row = $result2->fetch_row();
$ongoingorder = $row[0];

$result3 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='ARRIVIED'");
$row = $result3->fetch_row();
$completedorder = $row[0];


$result4 = $conn->query("SELECT COUNT(*) FROM purchase_order where status='CANCELED'");
$row = $result4->fetch_row();
$canceledorder = $row[0];

$result5 = $conn->query("SELECT COUNT(*) FROM users ");
$row = $result5->fetch_row();
$totalusers = $row[0];




?>