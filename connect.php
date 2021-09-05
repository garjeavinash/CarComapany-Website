<?php
$carname=$_POST['carname'];
$modelname=$_POST['modelname'];
$type=$_POST['type'];
$variant=$_POST['variant'];
//Database connection

$conn = new mysqli('localhost','root','','car');
if($conn->connect_error){
die('Connection Failed  : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(carname,modelname,type,variant) values(?,?,?,?)");
    $stmt->bind_param("ssss",$carname,$modelname,$type,$variant);
    $stmt->execute();
    echo "Our Representatives Will Call You Soon...";
    $stmt->close();
    $conn->close();
}

?>