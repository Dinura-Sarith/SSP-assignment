<?php
if (isset($_GET['id'])) {
    include("connect.php");
    $id = $_GET['id'];

    $sql = "DELETE FROM item_table WHERE id = ?";
    $stmt = mysqli_prepare($conn2, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        session_start();
        $_SESSION["delete"] = "Item Deleted Successfully!";
        header("Location: index.php");
    } else {
        die("Something went wrong while deleting the item.");
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Item does not exist";
}
?>
