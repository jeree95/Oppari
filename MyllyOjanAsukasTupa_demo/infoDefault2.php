<?php
/*
	file:	infoDefault2.php
	desc:	Returns the list of companies as JSON
*/
header("Access-Control-Allow-Origin: * "); //all the UIs can access
include('db.php');
$sql="SELECT * FROM info2 ORDER BY InfoTime2";
$result = $conn->query($sql);
$output=array();
while($row=$result->fetch_assoc()){
	$output[]=$row;
}
echo json_encode($output);
?>
