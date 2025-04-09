<?php
require('../connect.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prod_ID'])) {
    $prod_ID = $_POST['prod_ID'];
    $prod_status = 0;

    $updateQuery = "UPDATE tb_product SET    
    prod_status = ?
    WHERE prod_ID = ?";

    $stmt = mysqli_prepare($conn, $updateQuery);

    mysqli_stmt_bind_param($stmt, 'ii', $prod_status, $prod_ID);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header("Location: ../product.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
