<?php

include "../db.php";

header("Content-Type: application/json");

$id = $_GET["id"];



$data = json_decode(file_get_contents("php://input"),true);


$title = $data['title'];
$author = $data['author'];
$price = $data['price'];
$isbn = $data['isbn'];
$publishedDate = $data['publishedDate'];

$sql = "UPDATE books SET
title='$title',
author='$author',
price='$price',
isbn='$isbn',
publishedDate='$publishedDate'
WHERE id=$id";

if (mysqli_query($conn, $sql)){

      echo json_encode([
        "message" => "Book Updated successfully"]);
}
else{
    echo json_encode([
         "error" => mysqli_error($conn)]);

}