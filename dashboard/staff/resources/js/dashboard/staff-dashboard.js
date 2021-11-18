/* DASHBOARD PAGE PORT LOCATION ------------------------------------START */
$(document).ready(function() {
    $('#port_location_form').validate();
    $('#port_location_submit_btn').click(function(e) {
        if (document.querySelector('#port_location_form').checkValidity()) {
            e.preventDefault();
            $('#port_location_submit_btn').attr('disabled', true);
            $.ajax({
                url: './modules/add-port-location/add_port_location.php',
                method: 'post',
                data: $('#port_location_form').serialize() + '&action=port_location_form',
                success: function(res) {
                    if (res === "Added Successfully.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                        $('#res-message').html("Added Successfully.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            // window.location = 'profile.php';
                        }, 1000);
                        UpdatedLocationList();
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                        $('#res-message').html("Try again.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 1000);
                    }
                    $('#port_location_submit_btn').attr('disabled', false);
                }
            });
            // return true;
        }

        function UpdatedLocationList() {
            // $.ajax({
            //     url: './modules/add-port-location/port_location_list.php',
            //     method: 'get',
            //     success: function(res) {
            //         $('#port-location-data-content').html(res);
            //     }
            // });
            window.location.reload();
        }
    });

    // $('#reload-location-list').click(function(e) {
    //     $.ajax({
    //         url: './modules/add-port-location/port_location_list.php',
    //         method: 'get',
    //         success: function(res) {
    //             $('#port-location-data-content').html(res);
    //         }
    //     });
    // });
});


$(document).ready(function() {
    $('#location-edit-frm').validate();
    $('#location-edit-btn').click(function(e) {
        e.preventDefault();
        $('#location-edit-btn').attr('disabled', true);
        $.ajax({
            url: './modules/add-port-location/location-edit-delete.php',
            method: 'post',
            data: $('#location-edit-frm').serialize() + '&action=location-edit-frm',
            success: function(res) {
                if (res === "Save successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Save successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#location-edit-btn').attr('disabled', false);
            }
        });
    });

    $('#location-delete-btn').click(function(e) {
        e.preventDefault();
        $('#location-delete-btn').attr('disabled', true);
        $.ajax({
            url: './modules/add-port-location/location-edit-delete.php',
            method: 'post',
            data: $('#location-delete-frm').serialize() + '&action=location-delete-frm',
            success: function(res) {
                if (res === "Deleted successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Deleted successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#location-delete-btn').attr('disabled', false);
            }
        });
    });

    function UpdatedLocationList() {
        window.location.reload();
        // $.ajax({
        //     url: './modules/add-port-location/port_location_list.php',
        //     method: 'get',
        //     success: function(res) {
        //         $('#location-data').html(res);
        //     }
        // });
    }
});
/* DASHBOARD PAGE PORT LOCATION ------------------------------------END */

/* DASHBOARD PAGE ACCOMODATION TYPE ------------------------------------START */
$(document).ready(function() {
    $('#accomodation-type-frm').validate();
    $('#accomodation-type-btn').click(function(e) {
        if (document.querySelector('#accomodation-type-frm').checkValidity()) {
            e.preventDefault();
            $('#accomodation-type-btn').attr('disabled', true);
            $.ajax({
                url: './modules/accomodation-type/add-accomodation-type.php',
                method: 'post',
                data: $('#accomodation-type-frm').serialize() + '&action=accomodation-type-frm',
                success: function(res) {
                    if (res === "Added Successfully.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                        $('#res-message').html("Added Successfully.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            // window.location = 'profile.php';
                        }, 1000);
                        UpdatedLocationList();
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                        $('#res-message').html("Try again.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 1000);
                    }
                    $('#accomodation-type-btn').attr('disabled', false);
                }
            });
            // return true;
        }

        function UpdatedLocationList() {
            // $.ajax({
            //     url: './modules/add-port-location/port_location_list.php',
            //     method: 'get',
            //     success: function(res) {
            //         $('#port-location-data-content').html(res);
            //     }
            // });
            window.location.reload();
        }
    });

    // $('#reload-location-list').click(function(e) {
    //     $.ajax({
    //         url: './modules/add-port-location/port_location_list.php',
    //         method: 'get',
    //         success: function(res) {
    //             $('#port-location-data-content').html(res);
    //         }
    //     });
    // });
});

$(document).ready(function() {
    $('#accomodation-type-edit-frm').validate();
    $('#accomodation-edit-btn').click(function(e) {
        e.preventDefault();
        $('#accomodation-edit-btn').attr('disabled', true);
        $.ajax({
            url: './modules/accomodation-type/edit-delete-accomodation-type.php',
            method: 'post',
            data: $('#accomodation-type-edit-frm').serialize() + '&action=accomodation-type-edit-frm',
            success: function(res) {
                if (res === "Save successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Save successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#accomodation-edit-btn').attr('disabled', false);
            }
        });
    });

    $('#accomodation-type-delete-btn').click(function(e) {
        e.preventDefault();
        $('#accomodation-type-delete-btn').attr('disabled', true);
        $.ajax({
            url: './modules/accomodation-type/edit-delete-accomodation-type.php',
            method: 'post',
            data: $('#accomodation-type-delete-frm').serialize() + '&action=accomodation-type-delete-frm',
            success: function(res) {
                if (res === "Deleted successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Deleted successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#accomodation-type-delete-btn').attr('disabled', false);
            }
        });
    });

    function UpdatedLocationList() {
        window.location.reload();
        // $.ajax({
        //     url: './modules/add-port-location/port_location_list.php',
        //     method: 'get',
        //     success: function(res) {
        //         $('#location-data').html(res);
        //     }
        // });
    }
});
/* DASHBOARD PAGE ACCOMODATION TYPE ------------------------------------END */

/* DASHBOARD PAGE SCHEDULE ------------------------------------START */
$(document).ready(function() {
    $('#add-schedule-frm').validate();
    $('#add-schedule-btn').click(function(e) {
        if (document.querySelector('#add-schedule-frm').checkValidity()) {
            e.preventDefault();
            $('#add-schedule-btn').attr('disabled', true);
            $.ajax({
                url: './modules/schedule/add-schedule.php',
                method: 'post',
                data: $('#add-schedule-frm').serialize() + '&action=add-schedule-frm',
                success: function(res) {
                    if (res === "Added Successfully.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                        $('#res-message').html("Added Successfully.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            // window.location = 'profile.php';
                        }, 1000);
                        UpdatedLocationList();
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                        $('#res-message').html("Try again.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 1000);
                    }
                    $('#add-schedule-btn').attr('disabled', false);
                }
            });
            // return true;
        }

        function UpdatedLocationList() {
            // $.ajax({
            //     url: './modules/add-port-location/port_location_list.php',
            //     method: 'get',
            //     success: function(res) {
            //         $('#port-location-data-content').html(res);
            //     }
            // });
            window.location.reload();
        }
    });

    // $('#reload-location-list').click(function(e) {
    //     $.ajax({
    //         url: './modules/add-port-location/port_location_list.php',
    //         method: 'get',
    //         success: function(res) {
    //             $('#port-location-data-content').html(res);
    //         }
    //     });
    // });
});


$(document).ready(function() {
    $('#sched-edit-frm').validate();
    $('#sched-edit-btn').click(function(e) {
        e.preventDefault();
        $('#sched-edit-btn').attr('disabled', true);
        $.ajax({
            url: './modules/schedule/sched-edit-delete.php',
            method: 'post',
            data: $('#sched-edit-frm').serialize() + '&action=sched-edit-frm',
            success: function(res) {
                if (res === "Save successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Save successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#sched-edit-btn').attr('disabled', false);
            }
        });
    });

    $('#sched-delete-btn').click(function(e) {
        e.preventDefault();
        $('#sched-delete-btn').attr('disabled', true);
        $.ajax({
            url: './modules/schedule/sched-edit-delete.php',
            method: 'post',
            data: $('#sched-delete-frm').serialize() + '&action=sched-delete-frm',
            success: function(res) {
                if (res === "Deleted successfully.") {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-danger');
                    $('.alert').addClass('alert-success');
                    $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                    $('#res-message').html("Deleted successfully.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                        // window.location = 'profile.php';
                    }, 1000);
                    UpdatedLocationList();
                } else {
                    $('#res-icon').val("");
                    $('#res-message').html("");
                    $('.alert').removeClass('alert-success');
                    $('.alert').addClass('alert-danger');
                    $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                    $('#res-message').html("Try again.");
                    $('.alert').show(80);
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 1000);
                }
                $('#sched-delete-btn').attr('disabled', false);
            }
        });
    });

    function UpdatedLocationList() {
        window.location.reload();
        // $.ajax({
        //     url: './modules/add-port-location/port_location_list.php',
        //     method: 'get',
        //     success: function(res) {
        //         $('#location-data').html(res);
        //     }
        // });
    }
});
/* DASHBOARD PAGE SCHEDULE ------------------------------------END */