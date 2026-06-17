<?php



header("Content-Type: application/json");

include "../db.php";


// JSON data receive

$data = json_decode(file_get_contents("php://input"), true)??[];

$title = $data['title'];
$author = $data['author'];
$price = $data['price'];
$isbn = $data['isbn'];
$publishedDate = $data['publishedDate'];


// insert Query

$sql = "INSERT INTO books(title,author,price,isbn,publishedDate)
VALUES ('$title','$author','$price','$isbn','$publishedDate')";

if (mysqli_query($conn, $sql)) {
    echo json_encode([
        "message" => "Book added successfully"
    ]);
} else {
    echo json_encode([
        "error" => "Failed to add book"
    ]);
}