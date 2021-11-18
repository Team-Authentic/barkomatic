<?php 
require "../../resources/config.php";

$stmt = $con->prepare("SELECT id,port_location_from,port_location_to FROM tbl_ship_port");
if(mysqli_stmt_execute($stmt)) {
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td class="image-cell"></td>
                <td data-label="port-id"><?php echo $row['id']; ?></td>
                <td data-label="port-location1"><?php echo $row['port_location_from']; ?></td>
                <td data-label="port-location2"><?php echo $row['port_location_to']; ?></td>
                <td class="actions-cell">
                    <div class="buttons right nowrap">
                        <button type="button" class="button small green" data-toggle="modal" data-target="#exampleModal">
                            <span class="icon"><i class="mdi mdi-lead-pencil"></i></span>
                        </button>
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
                <form action="" id="location-edit-frm">
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
            </tr>
    <?php  }
    }
} ?>
