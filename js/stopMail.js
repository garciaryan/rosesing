$(document).ready(function (){
    validate();
    $('#name, #email, #message').change(validate);
});

function validate(){
    if ($('#name').val().length   >   0   &&
        $('#email').val().length  >   0   &&
        $('#message').val().length    >   0) {
        $("input[type=submit]").prop("disabled", false);
    }
    else {
        $("input[type=submit]").prop("disabled", true);
    }
}
