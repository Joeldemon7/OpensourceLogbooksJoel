<?php
header("Content-type: image/jpeg");

$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01");

$id = $_GET['id'];
$sql = "SELECT image FROM monster WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$jpg = $row["image"];

echo $jpg;
?>