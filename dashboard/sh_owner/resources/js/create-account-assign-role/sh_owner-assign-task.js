$(document).ready(function() {
    $('#sh-owner-assign-task-form').validate({
        rules: {
            password_confirmation_assign_role: {
                equalTo: '#password_assign_role'
            }
        }
    });
    $('#sh-owner-create-acc-button').click(function(e) {
        if (document.querySelector('#sh-owner-assign-task-form').checkValidity()) {
            e.preventDefault();
            $('#sh-owner-create-acc-button').attr('disabled', true);
            $.ajax({
                url: './modules/create-account-assign-role/sh_owner-assign-task.php',
                method: 'post',
                data: $('#sh-owner-assign-task-form').serialize() + '&action=sh_owner_assign_role',
                success: function(res) {
                    if (res === "Successfully created an account.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='mdi mdi-check-bold'></i>");
                        $('#res-message').html("Successfully created an account.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            // window.location = 'profile.php';
                        }, 4000);
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='mdi mdi-exclamation-thick'></i>");
                        $('#res-message').html("The email is already exist.");
                        $('.alert').show(80);
                        console.log(res);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 4000);
                    }
                    $('#sh-owner-create-acc-button').attr('disabled', false);
                }
            });
            return true;
        }
    });
});