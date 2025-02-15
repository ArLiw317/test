<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require('connect.php');
    $sql = "SELECT * FROM tb_customer";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h1>Customer table</h1>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <form action="action/action_insert_customer.php" method="post">
                        <div class="row justify-content-center">                            
                            <div class="col-2">
                                <input class="form-control" text="text" name="cus_number" placeholder="Number">
                            </div>
                            <div class="col-2">
                                <input class="form-control" text="text" name="cus_name" placeholder="Name">
                            </div>
                            <div class="col-1">
                                <input type="submit" class="btn btn-primary" value="Add Customer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr class="table-primary">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>