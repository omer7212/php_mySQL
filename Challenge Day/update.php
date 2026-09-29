<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body>

<div class="container mt-4">
    <div class="page-header mb-4">
        <h1>Update Product Info</h1>
    </div>

    <a href="index.php" class="btn btn-secondary mb-3">Back to Products</a>

    <?php
    // Read and securely evaluate specific URL row tracking parameters
    $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record parameter ID missing.');

    // Include database structure configuration files
    include 'database.php';

    // Retrieve database values matching tracking parameters
    try {
        $query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";
        $stmt = $con->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Extract database contents into variable arrays for fields processing
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
    } catch(PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }

    // Process update changes matching manual confirmation submissions
    if($_POST){
        try{
            $query = "UPDATE products 
                      SET name=:name, description=:description, price=:price 
                      WHERE id = :id";

            $stmt = $con->prepare($query);

            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $price = htmlspecialchars(strip_tags($_POST['price']));

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':id', $id);

            if($stmt->execute()){
                echo "<div class='alert alert-success'>Product database record updated successfully.</div>";
            } else {
                echo "<div class='alert alert-danger'>Unable to successfully save modification modifications.</div>";
            }
            
        } catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }
    ?>

    <!-- Pre-populated Product Update Form Layout Structure -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}"); ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required><?php echo htmlspecialchars($description, ENT_QUOTES); ?></textarea>
        </div>
        <div class="form-group">
            <label>Price ($)</label>
            <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($price, ENT_QUOTES); ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
