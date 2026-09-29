<?php
// Include database configuration file
include 'database.php';

try {
    // Check if the item ID parameter is set in the URL string
    $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    // Write the structural DELETE query string targeting the specific item ID
    $query = "DELETE FROM products WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $id);

    if($stmt->execute()){
        // Successfully dropped row -> Redirect back to index.php with a success notification flag
        header('Location: index.php?action=deleted');
        exit();
    } else {
        // SQL operational failure -> Redirect back to index.php with a failure notification flag
        header('Location: index.php?action=failed');
        exit();
    }
} catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>
