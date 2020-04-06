<?php

$name = $_POST["name"];
$description = $_POST["description"];
$file = $_FILES["image"];
$directory = "assets/logo/";
$targetFile = $directory . $file["name"]; // "assets/flowers/flower8.jpg"
move_uploaded_file($file["tmp_name"], $targetFile);

$db = mysqli_connect(
    
)
