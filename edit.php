<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Edit Item</h1>
            <div>
                <a href="index.php">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM item_table WHERE id=$id";
                $result = mysqli_query($conn2, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-element">
                        <input type="text" name="name" placeholder="Item Name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-element">
                        <input type="text" name="model" placeholder="Model Name" value="<?php echo $row['model']; ?>">
                    </div>
                    <div class="form-element">
                        <input type="text" name="price" placeholder="Price" value="<?php echo $row['price']; ?>">
                    </div>
                    <div class="form-element">
                        <select name="type">
                            <option value="">Select Item Type</option>
                            <option value="Mobile phone" <?php if ($row['type'] == "Mobile phone") echo "selected"; ?>>Mobile phone</option>
                            <option value="Personal computer" <?php if ($row['type'] == "Personal computer") echo "selected"; ?>>Personal computer</option>
                            <option value="Tablet" <?php if ($row['type'] == "Tablet") echo "selected"; ?>>Tablet</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-element">
                        <input type="submit" name="edit" value="Edit Item" class="btn">
                    </div>
                    <?php
                } else {
                    echo "<h3>Item does not exist</h3>";
                }
            } else {
                echo "<h3>Invalid Request</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>
