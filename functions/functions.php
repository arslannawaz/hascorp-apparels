<?php

function viewDetail(){
    include('includes/database.php');
    $data=[];
    $sql = "SELECT * from entry";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[]=$row;
        }
    } 
    return $data;
}

function searchDetail($start_date,$end_date){
    include('includes/database.php');
    $sql = "SELECT * from entry where date between '$start_date' and '$end_date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[]=$row;
        }
    } 
    return $data;
}

function getDetailById($id){
    include('includes/database.php');
    $sql = "SELECT * from entry where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getSubCategories(){
    include('includes/database.php');
    $data=[];
    $sql = "SELECT * from sub_categories";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[]=$row;
        }
    } 
    return $data;
}

?>
