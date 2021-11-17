
<div class="row">
    <div class="col-5">
        <div class="card p-0">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span> Year Calendar
                </p>
            </header>
        </div>
        <div style="border-top:none;border-radius:0;" id="calendar" class="card"></div>
    </div>
    <div class="col-7">
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
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Port Location From</th>
                                    <th>Port Location To</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="date">01/06/2021</td>
                                    <td data-label="time">03:46 pm</td>
                                    <td data-label="port-from">Port of Cebu Passenger Terminal</td>
                                    <td data-label="port-to">Port of Tagbilaran</td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap ">
                                            <button class="button small green --jb-modal " data-target="sample-modal-2 " type="button ">
                                        <span class="icon "><i class="mdi mdi-lead-pencil"></i></span>
                                    </button>
                                            <button class="button small red --jb-modal " data-target="sample-modal " type="button ">
                                        <span class="icon "><i class="mdi mdi-trash-can "></i></span>
                                    </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-pagination ">
                            <div class="flex items-center justify-between ">
                                <div class="buttons ">
                                    <button type="button " class="button active ">1</button>
                                    <button type="button " class="button ">2</button>
                                    <button type="button " class="button ">3</button>
                                </div>
                                <small>Page 1 of 3</small>
                            </div>
                        </div>
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
            <form class="form-horizontal">
                <div class="form-group row">
                    <label for="event-name" class="col-sm-4 control-label">Time</label>
                    <div class="col-sm-8">
                    <input id="event-name" name="event-name" type="time" class="form-control">
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
                    <label for="port-from" class="col-sm-4 control-label">Port Location From</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="port-from">
                            <option>Port of Cebu Passenger Terminal</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="port-to" class="col-sm-4 control-label">Port Location To</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="port-to">
                            <option>Port of Tagbilaran</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="save-event">
            Save
            </button>
        </div>
        </div>
    </div>
</div>
<div id="context-menu">
</div>

<script>
    
</script>