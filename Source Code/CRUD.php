<?php

function conn()
{	
	$hostname = 'localhost';
$username = 'root';
$password = '';
try {
   
	return $dbh = new PDO("mysql:host=$hostname;dbname=autoauthority", $username, $password);
    	
    }

catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}
//INSERT
function insert($table, $columnsArray) {

try{
	$dbh=conn();
$a = array();
$c = "";
$v = "";
foreach ($columnsArray as $key => $value) {
$c .= $key. ", ";
$v .= ":".$key. ", ";
$a[":".$key] = $value;
}
$c = rtrim($c,', ');
$v = rtrim($v,', ');
			
$stmt = $dbh->prepare("INSERT INTO $table($c) VALUES($v)");

$stmt->execute($a);
$affected_rows = $stmt->rowCount();
$response["status"] = "success";
$response["message"] = $affected_rows." row inserted into database";
}catch(PDOException $e){
$response["status"] = "error";
$response["message"] = 'Insert Failed: ' .$e->getMessage();
}
return $response;
}

//UPDATE
function update($table, $columnsArray, $where){
try{
	$dbh=conn();
$a = array();
$w = "";
$c = "";
foreach ($where as $key => $value) {
$w .= " and " .$key. " = :".$key;
$a[":".$key] = $value;
}
foreach ($columnsArray as $key => $value) {
$c .= $key. " = :".$key.", ";
$a[":".$key] = $value;
}
$c = rtrim($c,", "); 									
$stmt = $dbh->prepare("UPDATE $table SET $c WHERE 1=1 ".$w);
$stmt->execute($a);
$affected_rows = $stmt->rowCount();
if($affected_rows<=0){
$response["status"] = "warning";
$response["message"] = "No row updated";
}else{
$response["status"] = "success";
$response["message"] = $affected_rows." row(s) updated in database";
}
}catch(PDOException $e){
$response["status"] = "error";
$response["message"] = "Update Failed: " .$e->getMessage();
}
return $response;
}


//SELECT

//On new page:
//$response=select("foods",array()); OR
//$response=select("foods",array('food'=>'orange'));
//print_r($response['data']);
//echo $response[data][2]['id'];
//foreach($response['data'] as $value){ echo $value['food']}
function select($table,$where){
try{
$dbh=conn();
$a = array();
$w = "";	
$c = "";
foreach ($where as $key => $value) {
$w .= " and " .$key. " like :".$key;
$a[":".$key] = $value;
}

 									
$stmt = $dbh->prepare("SELECT * from $table WHERE 1=1 ".$w);
$stmt->execute($a);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($rows<=0){
$response["status"] = "warning";
$response["message"] = "No data found";
}else{
$response["status"] = "success";
$response["message"] = " Data selected from database";
}
$response["data"]=$rows;
}catch(PDOException $e){
$response["status"] = "error";
$response["message"] = "Selection Failed: " .$e->getMessage();
$response["data"]=null;
}
return $response;
}





//DELETE

function delete($table, $where){
if(count($where)<=0){
$response["status"] = "warning";
$response["message"] = "Delete Failed: At least one condition is required";
}else{
try{
$a = array();
$w = "";
foreach ($where as $key => $value) {
$w .= " and " .$key. " = :".$key;
$a[":".$key] = $value;
}
$stmt = $dbh->prepare("DELETE FROM $table WHERE 1=1 ".$w);
$stmt->execute($a);
$affected_rows = $stmt->rowCount();
if($affected_rows<=0){
$response["status"] = "warning";
$response["message"] = "No row deleted";
}else{
$response["status"] = "success";
$response["message"] = $affected_rows." row(s) deleted from database";
}
}catch(PDOException $e){
$response["status"] = "error";
$response["message"] = 'Delete Failed: ' .$e->getMessage();
}
}
return $response;
$dbh=null;
}
?>
 