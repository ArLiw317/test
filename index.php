<?php require('01_head.php'); ?>
    <?php
    require('connect.php');
    $sql = "SELECT * 
            FROM tb_customer
            WHERE cus_status = 1";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col text-center">
                <h1><i class="bi bi-person-lines-fill"></i> Customer table</h1>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <form action="action/action_insert_customer.php" method="post">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <input class="form-control" text="text" name="cus_number" placeholder="Number" required>
                            </div>
                            <div class="col-2">
                                <input class="form-control" text="text" name="cus_name" placeholder="Name" required>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Add Customer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <table id="customer_table" class="table table-sm table-hover text-center">
                                <thead>
                                    <tr class="table-primary text-center">
                                        <th>ID</th>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>" . $row['cus_ID'] . "</td>" .
                                            "<td>" . $row['cus_number'] . "</td>" .
                                            "<td>" . $row['cus_name'] . "</td>";
                                    ?>
                                        <td class="text-center">
                                            <a class="editbtn" href="#" data-bs-toggle="modal" data-bs-target="#edit_customer" style="text-decoration:none">
                                                <i class="bi bi-pencil-square" style="color:rgb(255, 204, 0)"></i>
                                            </a>

                                            <a class="deletebtn" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer" style="text-decoration:none">
                                                <i class="bi bi-trash3" style="color:rgb(255, 22, 131)"></i>
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

        <!-- EDIT modal -->

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
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- DELETE modal -->

        <div class="modal fade" id="delete_customer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="action/action_delete_customer.php" method="post">
                            <input type="text" name="cus_ID" id="cus_ID_DELETE" hidden>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input class="form-control" text="text" name="cus_number" id="cus_number_DELETE" placeholder="Number" disabled>
                                </div>
                                <div class="col-6">
                                    <input class="form-control" text="text" name="cus_name" id="cus_name_DELETE" placeholder="Name" autocomplete="off" disabled>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-end">
                                    <input type="submit" class="btn btn-danger" value="Save">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
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

                // Start Edit Record
                table.on('click', '.editbtn', function() {

                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    $('#cus_ID_EDIT').val(data[0]);
                    $('#cus_number_EDIT').val(data[1]);
                    $('#cus_name_EDIT').val(data[2]);
                });

                // Start Delete Record
                table.on('click', '.deletebtn', function() {

                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    $('#cus_ID_DELETE').val(data[0]);
                    $('#cus_number_DELETE').val(data[1]);
                    $('#cus_name_DELETE').val(data[2]);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#customer_table').DataTable();
            });
        </script>

<?php require('02_foot.php'); ?>