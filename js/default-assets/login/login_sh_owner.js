$(document).ready(function() {
    $('#login-showner-form').validate();
    $('#login-showner-btn').click(function(e) {
        if (document.querySelector('#login-showner-form').checkValidity()) {
            e.preventDefault();
            $('#login-showner-btn').attr('disabled', true);
            $.ajax({
                url: './modules/login-logout/login_sh_owner_action.php',
                method: 'post',
                data: $('#login-showner-form').serialize() + '&action=login-showner-btn',
                success: function(res) {
                    $('#res-message').html(res);
                    if (res === "Login Successfully!") {
                        $('#res-icon-showner').val("");
                        $('#res-message-showner').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon-showner').html("<i class='fa fa-check-circle'></i>");
                        $('#res-message-showner').html("Login Successfully!");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            window.location = 'profile.php';
                        }, 2000);
                    } else {
                        $('#res-icon-showner').val("");
                        $('#res-message-showner').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon-showner').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message-showner').html("Login failed! Please check your email and password.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    }
                    $('#login-showner-btn').attr('disabled', false);
                }
            });
            return true;
        }
    });
});