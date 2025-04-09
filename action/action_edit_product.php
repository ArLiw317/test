<?php
require('../connect.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prod_ID'])) {
    $prod_ID = $_POST['prod_ID'];
    $prod_code = $_POST['prod_code'];
    $prod_name = $_POST['prod_name'];
    $prod_description = $_POST['prod_description'];
    $prod_costs = $_POST['prod_costs'];
    $prod_price = $_POST['prod_price'];
    $prod_unit = $_POST['prod_unit'];

    $updateQuery = "UPDATE tb_product SET prod_code = ?,
                                        prod_name = ?,
                                        prod_description = ?,
                                        prod_costs = ?,
                                        prod_price = ?,
                                        prod_unit = ?
                                        WHERE prod_ID = ?";

    $stmt = mysqli_prepare($conn, $updateQuery);

    mysqli_stmt_bind_param($stmt, 'sssddsi', $prod_code, $prod_name, $prod_description, $prod_costs, $prod_price, $prod_unit, $prod_ID);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header("Location: ../product.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
