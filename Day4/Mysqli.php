<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Connection Failed');
$sql = "SELECT * FROM users";
$result = mysqli_query($sql);
$row = mysqli_fetch_array($result);
var_dump($result);
$sqlInsert = "INSERT INTO users VALUES ('Quynh', 'Ha Noi', 1)";
$result = mysqli_query($sqlInsert);
var_dump($result);
mysqli_close($conn);