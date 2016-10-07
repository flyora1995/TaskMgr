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

$sql="SELECT userID,userName FROM user where userId = $_POST[username] ";
echo $sql;
$result = $mysqli->query($sql);
 /*        
while($obj=$result->fetch_object()){
	printf("%d\n ",$obj->userID);
	printf("%s\n ",$obj->userName);
}
*/
//$result->close();

$mysqli->close();
?>