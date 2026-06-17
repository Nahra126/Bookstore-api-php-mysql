<?php


include "../db.php";

header("Content-Type: application/json");

$sql  = "SELECT * FROM books"; 


$result = mysqli_query($conn,$sql);

$books = [];

while($row = mysqli_fetch_assoc($result)){
    $books[] = $row;
}

echo json_encode($books);