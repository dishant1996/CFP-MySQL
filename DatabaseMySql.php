<?php

$user = 'root';
$pass = 'Dishant@1996';
$address = 'localhost';
$db = "brl";

$conn = new mysqli($address,$user,$pass,'brl');

if ($conn->connect_error){
    echo $conn->connect_error;
}
 
$sql = "select * from office1" ;

$result = $conn->query($sql);

print_r($result->fetch_all());

function insertData ($conn){
    $sqlInsert = "INSERT INTO `office1`(`id`, `name`, `designation`, `startdate`, `mobile`) 
    VALUES (6,'Saurabh','QA','2022-8-1','75856545')";
    $result = $conn->query($sqlInsert);
    if($result){
        echo "Data inserted succesfully" . "\n";
    }
    else{
        echo "Error while inserting values";
    }

}

function UpdateData ($conn){
    $sqlUpdate = "UPDATE `office1` SET `designation`='Executive' WHERE `id`=2";
    $result = $conn->query($sqlUpdate);
    if($result){
        echo "Data updated succesfully" . "\n";
    }
    else{
        echo "Error while updating values";
    }
}
function DelData ($conn){
    $sqlDel = "DELETE FROM `office1` WHERE id = 5";
    $result = $conn->query($sqlDel);
    if($result){
        echo "Data deleted succesfully" . "\n";
    }
    else{
        echo "Error while deleting data";
    }
}
insertData ($conn);
UpdateData ($conn);
DelData ($conn);

?>