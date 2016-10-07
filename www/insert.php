<?php
$mysqli = new mysqli("localhost","heat","123456","my_db");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
 
echo 'Success... ' . $mysqli->host_info . "\n";

$sql="INSERT INTO user (userName, password)
VALUES
('$_POST[username]','$_POST[userpsd]')";

if (!$mysqli->query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

$mysqli->close();
?>