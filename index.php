<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item list</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Item List</h1>
            <div>
                <a href="create.php" class="button primary">Add New Item</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
        <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>

        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Type</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM item_table";
        $result = mysqli_query($conn2, $sqlSelect);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['model']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo $data['type']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="button info">Read More</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="button warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="button danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>
