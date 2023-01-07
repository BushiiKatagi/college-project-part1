<?php

include 'config.php';

$sql = "SELECT * FROM users";
$data = [];
	$result = mysqli_query($conn, $sql);
	$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
  $data[] = $row;
}
  print_r(json_encode($data));



?>