/* SEARCH TRIP PAGE ------------------------------------START */
$(document).ready(function() {
    $('#preferred-shipping-lines').click(function() {
        if ($("#preferred-shipping-lines").is(':checked')) {
            $("#preferred-shipping-content").show();
        } else {
            $("#preferred-shipping-content").hide();
        }
    });
});
/* SEARCH TRIP PAGE ------------------------------------END */