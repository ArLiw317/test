<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
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
                            <table id="customer_table" class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th>ID</th>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>" . $row['cus_ID'] . "</td>" .
                                            "<td>" . $row['cus_number'] . "</td>" .
                                            "<td>" . $row['cus_name'] . "</td>";
                                    ?>
                                        <td>
                                            <a class="editbtn" href="#" data-bs-toggle="modal" data-bs-target="#edit_customer">
                                                Edit
                                            </a>
                                        </td>
                                    <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->

        <div class="modal fade" id="edit_customer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="action/action_edit_customer.php" method="post">
                            <input type="text" name="cus_ID" id="cus_ID_EDIT" hidden>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input class="form-control" text="text" name="cus_number" id="cus_number_EDIT" placeholder="Number" disabled>
                                </div>
                                <div class="col-6">
                                    <input class="form-control" text="text" name="cus_name" id="cus_name_EDIT" placeholder="Name" autocomplete="off">
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-end">
                                    <input type="submit" class="btn btn-warning" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {

                var table = $('#customer_table');
                table.on('click', '.editbtn', function() {

                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    $('#cus_ID_EDIT').val(data[0]);
                    $('#cus_number_EDIT').val(data[1]);
                    $('#cus_name_EDIT').val(data[2]);
                });
            });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>