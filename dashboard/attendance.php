<?php
include("../connection.php");

date_default_timezone_set("Asia/Jakarta");

$date = date('Y-m-d');
$clock_in = date('H:i:s');
$employee_id = $_SESSION['employee_id'];

if (isset($_POST['absen'])) {
  $sql = "INSERT INTO `attendances` (id, employee_id, date,clock_in, clock_out) VALUES (NULL, $employee_id, '$date', '$clock_in', NULL)";
  
  $result = $db->query($sql);
  
  if ($result === TRUE) {
    echo "berhasil absen";
  } else {
    echo "gagal absen";
  }
}

?>