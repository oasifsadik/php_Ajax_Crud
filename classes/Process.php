<?php

$connection = new mysqli("localhost","root","","ajax_crud");
$action = $_POST['action'];
$action();

function insert(){
    global $connection;
    $empName = $_POST['emp_name'];
    $empEmail = $_POST['emp_email'];
    $empPhone = $_POST['emp_phone'];
    $empStatus = $_POST['emp_status'];

    $sql = "INSERT INTO `employees`(`emp_name`, `emp_email`, `emp_phone`, `emp_status`) VALUES ('$empName','$empEmail','$empPhone','$empStatus')";
    $result = $connection->query($sql);

    if($result)
    {
        echo "Data Insert Successfully";
        // header("location: index.php");
    }
}
?>