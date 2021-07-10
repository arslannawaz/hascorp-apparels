<?php

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

function getProducts(){
    include('includes/database.php');
    $data=[];
    $sql = "SELECT * from product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[]=$row;
        }
    } 
    shuffle($data);
    return $data;
}

function getProductsBySubCategory($id){
    include('includes/database.php');
    $data=[];
    $sql = "SELECT * from product where sub_category_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[]=$row;
        }
    } 
    shuffle($data);
    return $data;
}

function getProductById($id){
    include('includes/database.php');
    $sql = "SELECT * from product where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getSubCategoryById($id){
    include('includes/database.php');
    $sql = "SELECT * from sub_categories where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getCategoryById($id){
    include('includes/database.php');
    $sql = "SELECT * from categories where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

?>
