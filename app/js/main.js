$(document).ready(function (){
    $('#login').submit(function (event) {
        event.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();

        const formData = {
            name: name,
            email: email,
            password: password
        }

        $.ajax({
            type: 'POST',
            url: 'validations/process_login.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (response) {
            if (response.error) {
                alert('Enter the correct credentials');
                $('#name').addClass('error');
                $('#email').addClass('error');
                $('#password').addClass('error');
                return;
            }
            location.reload();
        });
    });
});