<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Products</title>
    <!-- Bootstrap CSS for styling the table and buttons -->
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body>

<div class="container mt-4">
    <div class="page-header mb-4">
        <h1>Read Products</h1>
    </div>
     
    <!-- Create Product Button -->
    <a href="create.php" class="btn btn-primary mb-3">Create New Product</a>

    <?php
    // Include database configuration
    include 'database.php';

    // Query to pull all product entries ordered by the latest ID
    $query = "SELECT id, name, description, price FROM products ORDER BY id DESC";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $num = $stmt->rowCount();

    if($num > 0) {
        echo "<table class='table table-hover table-responsive table-bordered'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Description</th>";
                echo "<th>Price</th>";
                echo "<th>Action</th>";
            echo "</tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                
                echo "<tr>";
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>\${$price}</td>";
                    echo "<td>";
                        // Action buttons mapped directly to specific item IDs
                        echo "<a href='read_one.php?id={$id}' class='btn btn-info btn-sm mr-1'>Read</a>";
                        echo "<a href='update.php?id={$id}' class='btn btn-primary btn-sm mr-1'>Edit</a>";
                        echo "<a href='delete.php?id={$id}' class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
    } else {
        echo "<div class='alert alert-danger'>No products found.</div>";
    }
    ?>
</div>

</body>
</html>
