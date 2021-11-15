
<div id="calendar" class="card p-0"></div>
<div class="modal fade" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="event-index">
            <form class="form-horizontal">
            <div class="form-group row">
                <label for="event-name" class="col-sm-4 control-label">Name</label>
                <div class="col-sm-8">
                <input id="event-name" name="event-name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="event-location" class="col-sm-4 control-label">Location</label>
                <div class="col-sm-8">
                <input id="event-location" name="event-location" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="min-date" class="col-sm-4 control-label">Dates</label>
                <div class="col-sm-8">
                <div class="input-group input-daterange" data-provide="datepicker">
                    <input id="min-date" name="event-start-date" type="text" class="form-control">
                    <div class="input-group-prepend input-group-append">
                        <div class="input-group-text">to</div>
                    </div>
                    <input name="event-end-date" type="text" class="form-control">
                </div>
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