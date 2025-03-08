<?php
require('../connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cus_ID'])) {
    $cus_ID = $_POST['cus_ID'];
    $cus_status = 0;

    $updateQuery = "UPDATE tb_customer SET    
    cus_status = ?
    WHERE cus_ID = ?";

    $stmt = mysqli_prepare($conn, $updateQuery);

    mysqli_stmt_bind_param($stmt, 'ii', $cus_status, $cus_ID);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
