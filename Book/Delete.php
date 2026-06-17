<?php

include "../db.php";

header("Content-Type: application/json");


$id = $_GET["id"];

$sql = "Delete FROM books WHERE id = $id";


if($result = mysqli_query($conn,$sql)){
    echo json_encode([
        "message" => "Book deleted successfully"
    ]);
}
else{
    echo json_encode(["error" =>"Book Not Found"]);
}