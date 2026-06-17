<?php

$conn = mysqli_connect("localhost","root","","bookstore");

if(!$conn){
    die(json_encode(["error" => "Database connection failed" ]));
}