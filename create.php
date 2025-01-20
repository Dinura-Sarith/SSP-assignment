<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new item</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Add New Item</h1>
            <div>
                <a href="">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element">
                <input type="text" class="form-control" name="item" placeholder="Item name">
            </div>
            <div class="form-element">
                <input type="text" class="form-control" name="model" placeholder="Model name">
            </div>
            <div class="form-element">
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
            <div class="form-element">
                <select name="type">
                    <option value="">Select item type</option>
                    <option value="Mobile phone">Mobile phone</option>
                    <option value="Personal computer">Personal computer</option>
                    <option value="Tablet">Tablet</option>

                </select>
            </div>
            <div class="form-element">
                <input type="submit" class="btn" name="create" value="Add item">
            </div>

        </form>
    </div>
</body>
</html>