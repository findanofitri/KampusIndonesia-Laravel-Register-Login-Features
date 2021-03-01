$('#show-password').click(function() {
    if ($(this).hasClass('fa-eye-slash')) {
        $('#password').attr('type', 'text');
        $(this).removeClass('fa-eye-slash');
        $(this).addClass('fa-eye');
    } else {
        $('#password').attr('type', 'password');
        $(this).removeClass('fa-eye');
        $(this).addClass('fa-eye-slash');
    }
})

$('#show-password-user').click(function() {
    if ($(this).hasClass('fa-eye-slash')) {
        $('#pswd1').attr('type', 'text');
        $(this).removeClass('fa-eye-slash');
        $(this).addClass('fa-eye');
    } else {
        $('#pswd1').attr('type', 'password');
        $(this).removeClass('fa-eye');
        $(this).addClass('fa-eye-slash');
    }
})

$('#show-password-user-ulang').click(function() {
    if ($(this).hasClass('fa-eye-slash')) {
        $('#pswd2').attr('type', 'text');
        $(this).removeClass('fa-eye-slash');
        $(this).addClass('fa-eye');
    } else {
        $('#pswd2').attr('type', 'password');
        $(this).removeClass('fa-eye');
        $(this).addClass('fa-eye-slash');
    }
})