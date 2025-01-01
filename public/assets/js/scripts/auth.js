$(document).ready(function () {

    $('#btnRegister').click(function () {

        let data = {
            name: $('#name').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirmation: $('#password_confirmation').val(),
        };

        $.ajax({
            url: '/register',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            success: function (response) {
                successNotification(response.message);
                window.location.href = '/loginView';
            },
            error: function (xhr) {
                errorNotification(xhr.responseJSON?.message || 'Registration failed!');
            }
        });
    });

    $('#btnLogin').click(function () {

        let data = {
            email: $('#email').val(),
            password: $('#password').val(),
        };

        $.ajax({
            url: '/login',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            success: function (response) {
                successNotification('Login successful!');
                window.location.href = '/dashboard';
            },
            error: function (xhr) {
                errorNotification(xhr.responseJSON?.message || 'Login failed!');
            }
        });
    });
});
