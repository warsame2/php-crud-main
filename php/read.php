<?php  

include "db_conn.php";

$sql = "SELECT * FROM donors ORDER BY id DESC";
$result = mysqli_query($conn, $sql);