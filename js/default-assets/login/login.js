$(document).ready(function() {
    $('#login-form').validate();
    $('#login').click(function(e) {
        if (document.querySelector('#login-form').checkValidity()) {
            e.preventDefault();
            $('#login').attr('disabled', true);
            $.ajax({
                url: './modules/login-logout/login_action.php',
                method: 'post',
                data: $('#login-form').serialize() + '&action=login',
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
                    $('#login').attr('disabled', false);
                }
            });
            return true;
        }
    });
});