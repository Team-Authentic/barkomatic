<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Add Port Location
                </p>
            </header>
            <div class="card-content">
                <form id="port_location_form">
                    <div class="field">
                        <label class="label">Port Location 1</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="port_location_1" id="port_location_1" value="" class="input" required>
                                </div>
                                <p class="help">Required. Port location 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Port Location 2</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="port_location_2" id="port_location_2" value="" class="input" required>
                                </div>
                                <p class="help">Required. Port location 2</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" name="port_location_submit_btn" id="port_location_submit_btn" class="button green">Submit </button>
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
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Ship Port Location
                </p>
                <a href="#port-location-data-content" id="reload-location-list" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Port Location 1</th>
                            <th>Port Location 2</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="port-location-data-content">
                        <?php 
                            require "resources/config.php";
                            $stmt = $con->prepare("SELECT id,port_location_from,port_location_to FROM tbl_ship_port");
                            if(mysqli_stmt_execute($stmt)) {
                                $result = mysqli_stmt_get_result($stmt);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="image-cell"></td>
                                            <td id="port-id-data"><?php echo $row['id']; ?></td>
                                            <td id="port-location1-data" id><?php echo $row['port_location_from']; ?></td>
                                            <td id="port-location2-data"><?php echo $row['port_location_to']; ?></td>
                                            <td class="actions-cell">
                                                <div class="buttons right nowrap">
                                                    <button type="button" class="button small green" data-toggle="modal" data-target="#exampleModal">
                                                        <span class="icon"><i class="mdi mdi-lead-pencil"></i></span>
                                                    </button>
                                                    <form id="location-edit-frm">
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
                                                                                <input type="text" name="edit_id" id="port-edit-id" value="<?php echo $row['id']; ?>" class="d-none">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="port-edit-location1" class="col-sm-4">Port Location 1</label>
                                                                            <div class="col-sm-8">
                                                                                <input id="port-edit-location1" name="port-edit-location-1" type="text" class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="port-edit-location2" class="col-sm-4">Port Location 2</label>
                                                                            <div class="col-sm-8">
                                                                                <input id="port-edit-location2" name="port-edit-location-2" type="text" class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" id="location-edit-btn" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form id="location-delete-frm">
                                                        <input type="text" name="delete_id" value="<?php echo $row['id']; ?>" class="d-none">
                                                        <button type="submit" name="location-delete-btn" id="location-delete-btn" class="button small red">
                                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                <?php  }
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


