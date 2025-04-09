<?php require('01_head.php'); ?>
<?php
require('connect.php');
$sql = "SELECT * 
            FROM tb_product
            WHERE prod_status = 1";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col text-center">
            <h1><i class="bi bi-list-ol"></i> Product table</h1>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <form action="action/action_insert_product.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <input class="form-control" type="text" maxlength="13" minlength="13" name="prod_code" placeholder="Code" required autocomplete="off">
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="text" name="prod_name" placeholder="Name" required autocomplete="off">
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="text" name="prod_description" placeholder="Description" required autocomplete="off">
                        </div>
                        <div class="col-1">
                            <input class="form-control" type="number" step="0.01" name="prod_costs" placeholder="Costs" required autocomplete="off">
                        </div>
                        <div class="col-1">
                            <input class="form-control" type="number" step="0.01" name="prod_price" placeholder="Price" required autocomplete="off">
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="text" name="prod_unit" placeholder="Unit" required autocomplete="off">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-xl-8">
                <div class="card shadow">
                    <div class="card-body">
                        <table id="product_table" class="table table-sm table-hover text-center">
                            <thead>
                                <tr class="table-primary text-center">
                                    <th>ID</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Costs</th>
                                    <th>Price</th>
                                    <th>Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>" . $row['prod_ID'] . "</td>" .
                                        "<td>" . $row['prod_code'] . "</td>" .
                                        "<td>" . $row['prod_name'] . "</td>" .
                                        "<td>" . $row['prod_description'] . "</td>" .
                                        "<td>" . $row['prod_costs'] . "</td>" .
                                        "<td>" . $row['prod_price'] . "</td>" .
                                        "<td>" . $row['prod_unit'] . "</td>";
                                ?>
                                    <td class="text-center">
                                        <a class="editbtn" href="#" data-bs-toggle="modal" data-bs-target="#edit_product" style="text-decoration:none">
                                            <i class="bi bi-pencil-square" style="color:rgb(255, 204, 0)"></i>
                                        </a>

                                        <a class="deletebtn" href="#" data-bs-toggle="modal" data-bs-target="#delete_product" style="text-decoration:none">
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

    <div class="modal fade" id="edit_product" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="action/action_edit_product.php" method="post">
                        <input type="text" name="prod_ID" id="prod_ID_EDIT" hidden>
                        <div class="row justify-content-center mb-2">
                            <div class="col-6">
                                <input class="form-control" type="text" maxlength="13" minlength="13" name="prod_code" id="prod_code_EDIT" placeholder="Code" required autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="prod_name" id="prod_name_EDIT" placeholder="Name" required autocomplete="off">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <input class="form-control" type="text" name="prod_description" id="prod_description_EDIT" placeholder="Description" required autocomplete="off">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <input class="form-control" type="number" step="0.01" name="prod_costs" id="prod_costs_EDIT" placeholder="Costs" required autocomplete="off">
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="number" step="0.01" name="prod_price" id="prod_price_EDIT" placeholder="Price" required autocomplete="off">
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="prod_unit" id="prod_unit_EDIT" placeholder="Unit" required autocomplete="off">
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

    <div class="modal fade" id="delete_product" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="action/action_delete_product.php" method="post">
                        <input type="text" name="prod_ID" id="prod_ID_DELETE" hidden>
                        <div class="row justify-content-center mb-2">
                            <div class="col-6">
                                <input class="form-control" type="text" maxlength="13" minlength="13" name="prod_code" id="prod_code_DELETE" placeholder="Code" required autocomplete="off" disabled>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="prod_name" id="prod_name_DELETE" placeholder="Name" required autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <input class="form-control" type="text" name="prod_description" id="prod_description_DELETE" placeholder="Description" required autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <input class="form-control" type="number" step="0.01" name="prod_costs" id="prod_costs_DELETE" placeholder="Costs" required autocomplete="off" disabled>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="number" step="0.01" name="prod_price" id="prod_price_DELETE" placeholder="Price" required autocomplete="off" disabled>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="prod_unit" id="prod_unit_DELETE" placeholder="Unit" required autocomplete="off" disabled>
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

            var table = $('#product_table');

            // Start Edit Record
            table.on('click', '.editbtn', function() {

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#prod_ID_EDIT').val(data[0]);
                $('#prod_code_EDIT').val(data[1]);
                $('#prod_name_EDIT').val(data[2]);
                $('#prod_description_EDIT').val(data[3]);
                $('#prod_costs_EDIT').val(data[4]);
                $('#prod_price_EDIT').val(data[5]);
                $('#prod_unit_EDIT').val(data[6]);
            });

            // Start Delete Record
            table.on('click', '.deletebtn', function() {

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#prod_ID_DELETE').val(data[0]);
                $('#prod_code_DELETE').val(data[1]);
                $('#prod_name_DELETE').val(data[2]);
                $('#prod_description_DELETE').val(data[3]);
                $('#prod_costs_DELETE').val(data[4]);
                $('#prod_price_DELETE').val(data[5]);
                $('#prod_unit_DELETE').val(data[6]);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#product_table').DataTable();
        });
    </script>

    <?php require('02_foot.php'); ?>