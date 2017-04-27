//JQuery Email

$("#contact_form").submit(function(e) {

    var url = "php/email.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: "http://localhost"
           data: $("#contact_form").serialize(), // serializes the form's elements.
           success: function(data)
           {
             alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
