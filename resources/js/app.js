require('./bootstrap');

$(document).ready(function() {
    $('input[name="name"]').on('keyup', function() {
        var username = $(this).val();
        if (username.length >= 3) {
            $.get('/check-username/' + username, {
                'name': username
            }, function(data) {
                if (data.is_available) {
                    $('input[name="name"]').removeClass('is-invalid');
                    $('input[name="name"]').addClass('is-valid');
                    $('p[name="name-checker"]').removeClass('is-invalid');
                    $('p[name="name-checker"]').addClass('is-valid');
                } else {
                    $('input[name="name"]').removeClass('is-valid');
                    $('input[name="name"]').addClass('is-invalid');
                    $('p[name="name-checker"]').removeClass('is-valid');
                    $('p[name="name-checker"]').addClass('is-invalid');
                }
            });
        }
    });
});