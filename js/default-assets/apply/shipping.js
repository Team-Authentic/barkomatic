$(document).ready(function() {
    $('#signup-form').validate({
        rules: {
            cpass: {
                equalTo: '#pass-shipping'
            }
        }
    });
    $('#signup').click(function(e) {
        if (document.querySelector('#signup-form').checkValidity()) {
            e.preventDefault();
            $('#signup').attr('disabled', true);
            $.ajax({
                url: './modules/create-account/shipping_action.php',
                method: 'post',
                data: $('#signup-form').serialize() + '&action=signup',
                success: function(res) {
                    if (res === "The shipping name is already exist! Please try another.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("The shipping name is already exist! Please try another.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    } else if (res === "The email is already exist! Please try another.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("The email is already exist! Please try another.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    } else if (res === "The mobile number is already exist! Please try another.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("The mobile number is already exist! Please try another.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='fa fa-check-circle'></i>");
                        $('#res-message').html("Signup Successfully.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            $('#scn').val('');
                            $('#email-shipping').val('');
                            $('#tel-shipping').val('');
                            $('#uname-shipping').val('');
                            $('#pass-shipping').val('');
                            $('#cpass-shipping').val('');
                            $('select option:contains("Please select your Sequrity Question")').prop('selected', true);
                            $('#answer-shipping').val('');
                        }, 2000);
                    }
                    $('#signup').attr('disabled', false);
                }
            });
            return true;
        }
    });
});