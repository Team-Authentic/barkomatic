<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Add
                </p>
            </header>
            <div class="card-content">
                <form id="accomodation-type-frm">
                    <div class="field">
                        <label class="label">Accomodation Name</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="accomodation_name" id="accomodation_name" value="" class="input" required>
                                </div>
                                <p class="help">Required. Accomodation name</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Seat Type</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="accomodation-type-seat-type" id="accomodation-type-seat-type" value="" class="input" required>
                                </div>
                                <p class="help">Required. Seat Type</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Aircon</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <select name="accomodation-type-aircon" id="accomodation-type-aircon" class="form-control">
                                        <option selected value="">--</option>
                                        <option value="yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                                <p class="help">Required. Aircon</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Price</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="accomodation-type-price" id="accomodation-type-price" value="" class="input" required>
                                </div>
                                <p class="help">Required. Price</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" name="accomodation-type-btn" id="accomodation-type-btn" class="button green">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Details
                </p>
            </header>
            <div class="card-content">
            <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Accomodation Name</th>
                            <th>Seat Type</th>
                            <th>Aircon</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require "resources/config.php";
                            $stmt = $con->prepare("SELECT id,accomodation_name,seat_type,aircon,price FROM tbl_ship_accomodation_type");
                            if(mysqli_stmt_execute($stmt)) {
                                $result = mysqli_stmt_get_result($stmt);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="image-cell">
                                                <div class="image"></div>
                                            </td>
                                            <td data-label="accom-name"><?php echo $row['id']; ?></td>
                                            <td data-label="seat-type"><?php echo $row['accomodation_name']; ?></td>
                                            <td data-label="aircon"><?php echo $row['seat_type']; ?></td>
                                            <td data-label="price"><?php echo $row['aircon']; ?></td>
                                            <td data-label="price"><?php echo $row['price']; ?></td>
                                            <td class="actions-cell">
                                                <div class="buttons right nowrap">
                                                    <button type="button" class="button small green" data-toggle="modal" data-target="#exampleModal">
                                                        <span class="icon"><i class="mdi mdi-lead-pencil"></i></span>
                                                    </button>
                                                    <form id="accomodation-type-delete-frm">
                                                        <input type="text" name="accomodation-type-delete_id" value="<?php echo $row['id']; ?>" class="d-none">
                                                        <button type="submit" name="accomodation-type-delete-btn" id="accomodation-type-delete-btn" class="button small red">
                                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <form id="accomodation-type-edit-frm">
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row d-none">
                                                                    <label for="port-edit-id" class="col-sm-4">Port id</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="accomodation_edit_id" id="accomodation_edit_id" value="<?php echo $row['id']; ?>" class="d-none">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="port-edit-location1" class="col-sm-4">Accomodation Name</label>
                                                                    <div class="col-sm-8">
                                                                        <input id="accomodation_name" name="accomodation_name" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="port-edit-location2" class="col-sm-4">Seat Type</label>
                                                                    <div class="col-sm-8">
                                                                        <input id="port-edit-location2" name="seat_type" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="port-edit-location2" class="col-sm-4">Seat Type</label>
                                                                    <div class="col-sm-8">
                                                                        <select name="aircon" id="" class="form-control">
                                                                            <option selected value="">--</option>
                                                                            <option value="yes">YES</option>
                                                                            <option value="no">NO</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="port-edit-location2" class="col-sm-4">Price</label>
                                                                    <div class="col-sm-8">
                                                                        <input id="port-edit-location2" name="price" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" id="accomodation-edit-btn" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </tr>
                               <?php }
                                }
                            } ?>
                    </tbody>
                </table>
                <!-- <div class="table-pagination">
                    <div class="flex items-center justify-between">
                        <div class="buttons">
                            <button type="button" class="button active">1</button>
                            <button type="button" class="button">2</button>
                            <button type="button" class="button">3</button>
                        </div>
                        <small>Page 1 of 3</small>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>