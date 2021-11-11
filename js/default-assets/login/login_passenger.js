$(document).ready(function() {
    $('#login-form-passenger').validate();
    $('#login-passenger').click(function(e) {
        if (document.querySelector('#login-form-passenger').checkValidity()) {
            e.preventDefault();
            $('#login-passenger').attr('disabled', true);
            $.ajax({
                url: './modules/login-logout/login_passenger_action.php',
                method: 'post',
                data: $('#login-form-passenger').serialize() + '&action=login_passenger',
                success: function(res) {
                    if (res === "Login Successfully!") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='fa fa-check-circle'></i>");
                        $('#res-message').html("Login Successfully!");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            window.location = 'profile.php';
                        }, 2000);
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("Login failed! Please check your email and password!");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    }
                    $('#login-passenger').attr('disabled', false);
                }
            });
            return true;
        }
    });
});