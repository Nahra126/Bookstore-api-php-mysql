<?php

include "../db.php";

header("Content-Type: application/json");


$id = $_GET["id"];

$sql = "SELECT * FROM books WHERE id =$id";

$result = mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
else{
    echo json_encode(["error" =>"Book not Found"]);
}
