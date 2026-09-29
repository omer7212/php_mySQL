<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body>

<div class="container mt-4">
    <div class="page-header mb-4">
        <h1>Create New Product</h1>
    </div>

    <!-- Navigation link back to main view index page -->
    <a href="index.php" class="btn btn-secondary mb-3">Back to Products</a>

    <?php
    if($_POST){
        // Include database configuration connection string
        include 'database.php';

        try{
            // Set up sql insertion query query structure 
            $query = "INSERT INTO products SET name=:name, description=:description, price=:price";
            $stmt = $con->prepare($query);

            // Sanitize input text arrays against vulnerabilities
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $price = htmlspecialchars(strip_tags($_POST['price']));

            // Bind values explicitly into named execution tokens 
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);

            // Attempt execution block
            if($stmt->execute()){
                echo "<div class='alert alert-success'>Product registry successfully saved.</div>";
            } else {
                echo "<div class='alert alert-danger'>Unable to successfully save product registry entry.</div>";
            }

        } catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }
    ?>

    <!-- Create Product Form Layout Structure -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label>Price ($)</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
</div>

</body>

</html>