<?php

include_once('css.php');

// Check if ID is set and is a valid integer
if (isset($_POST['delete_id']) && is_numeric($_POST['delete_id'])) {
    $ID = $_POST['delete_id'];

    // Create database connection
    include('dbconnection.php');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use prepared statement to delete data
    $sql = "DELETE FROM `international service` WHERE ID = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "i", $ID);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        // Check if deletion was successful
        if ($result) {
            header("Location: all-service.php?msg=Data deleted successfully");
        } else {
            echo "Failed: " . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement";
    }

    // Close the connection
    mysqli_close($con);
} else {
    echo "Invalid ID provided";
}
?>

