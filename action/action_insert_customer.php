<?php
require('../connect.php');
// print_r($_POST);
$cus_number = $_POST['cus_number'];
$cus_name = $_POST['cus_name'];

$sql = "INSERT INTO tb_customer (cus_number, cus_name)
        VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ss", $cus_number, $cus_name);

if(mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);    
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>