<?php
include('connect.php'); // Ensure $conn2 is used for the second database connection

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn2, $_POST["item"]); // Change variable name to match column
    $model = mysqli_real_escape_string($conn2, $_POST["model"]);
    $price = mysqli_real_escape_string($conn2, $_POST["price"]);
    $type = mysqli_real_escape_string($conn2, $_POST["type"]);

    // Updated SQL query with correct column names
    $sqlInsert = "INSERT INTO item_table (name, model, price, type) VALUES ('$name', '$model', '$price', '$type')";

    if (mysqli_query($conn2, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Item Added Successfully!";
        header("Location: index.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn2));
    }
}


if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($conn2, $_POST["item"]); 
    $model = mysqli_real_escape_string($conn2, $_POST["model"]);
    $price = mysqli_real_escape_string($conn2, $_POST["price"]);
    $type = mysqli_real_escape_string($conn2, $_POST["type"]);
    $id = mysqli_real_escape_string($conn2, $_POST["id"]);

    
    $sqlUpdate = "UPDATE item_table SET name = '$name', model = '$model', price = '$price', type = '$type' WHERE id='$id'";

    if (mysqli_query($conn2, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "Item Updated Successfully!";
        header("Location: index.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn2));
    }
}
?>

