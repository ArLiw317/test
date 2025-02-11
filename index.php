<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('connect.php');
    $sql = "SELECT * FROM tb_customer";
    $result = mysqli_query($conn, $sql);
    ?>

    <form action="action/action_insert_customer.php" method="post">
        <input text="text" name="cus_number" placeholder="Number">
        <input text="text" name="cus_name" placeholder="Name">
        <input type="submit">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Name</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['cus_ID'] . "</td>" .
                "<td>" . $row['cus_number'] . "</td>" .
                "<td>" . $row['cus_name'] . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>