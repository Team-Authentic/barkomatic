
<div class="row">
    <div class="col-4">
        <div class="card p-0">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span> Year Calendar
                </p>
            </header>
        </div>
        <div style="border-top:none;border-radius:0;" id="calendar" class="card"></div>
    </div>
    <div class="col-8">
        <div class="card p-0">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account"></i></span> Ship Departure Details
                </p>
            </header>
            <div class="card-content p-0">
                <div class="card has-table border-0">
                    <div class="card-content ">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Port Location 1</th>
                                    <th>Port Location 2</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require "resources/config.php";
                                    $stmt = $con->prepare("SELECT id,date,time,port_location_1,port_location_2 FROM tbl_ship_schedule");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <tr>
                                                    <td></td>
                                                    <td data-label="date"><?php echo $row['id']; ?></td>
                                                    <td data-label="time"><?php echo $row['date']; ?></td>
                                                    <td data-label="port-from"><?php echo $row['time']; ?></td>
                                                    <td data-label="port-to"><?php echo $row['port_location_1']; ?></td>
                                                    <td data-label="port-to"><?php echo $row['port_location_2']; ?></td>
                                                    <td class="actions-cell">
                                                        <div class="buttons right nowrap ">
                                                            <button type="button" class="button small green" data-toggle="shedule-modal" data-target="#shedule-modal">
                                                                <span class="icon"><i class="mdi mdi-lead-pencil"></i></span>
                                                            </button>
                                                            <form id="sched-delete-frm">
                                                                <input type="text" name="sched_delete_id" value="<?php echo $row['id']; ?>" class="d-none">
                                                                <button type="submit" name="sched-delete-btn" id="sched-delete-btn" class="button small red">
                                                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php }
                                        }
                                    } ?>
                            </tbody>
                        </table>
                        <!-- <div class="table-pagination ">
                            <div class="flex items-center justify-between ">
                                <div class="buttons ">
                                    <button type="button " class="button active ">1</button>
                                    <button type="button " class="button ">2</button>
                                    <button type="button " class="button ">3</button>
                                </div>
                                <small>Page 1 of 3</small>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title">Departure Details</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <form class="form-horizontal" id="add-schedule-frm">
                    <div class="form-group row">
                        <label for="event-name" class="col-sm-4 control-label">Time</label>
                        <div class="col-sm-8">
                            <input id="depart-time" name="depart-time" type="time" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="min-date" class="col-sm-4 control-label">Date</label>
                        <div class="col-sm-8">
                        <div class="input-group input-daterange" data-provide="datepicker">
                            <input id="min-date" name="event-start-date" type="text" class="form-control">
                            <div class="input-group-prepend input-group-append">
                                <div class="input-group-text"><i class="mdi mdi-calendar-month"></i></div>
                            </div>
                            <!-- <input name="event-end-date" type="text" class="form-control"> -->
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="port-from" class="col-sm-4 control-label">Port Location 1</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-from" name="sched-port-loc-1">
                                <?php
                                    require "resources/config.php";
                                    $stmt = $con->prepare("SELECT port_location_from FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['port_location_from']; ?>"><?php echo $row['port_location_from']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="port-to" class="col-sm-4 control-label">Port Location 2</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-to" name="sched-port-loc-2">
                                <?php
                                    require "resources/config.php";
                                    $stmt = $con->prepare("SELECT port_location_to FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['port_location_to']; ?>"><?php echo $row['port_location_to']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="add-schedule-btn">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="context-menu">
</div>

<script>
    
</script>