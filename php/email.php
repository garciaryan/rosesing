<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "garciaryan007@yahoo.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];

  //send email
  mail($admin_email, "$name", $message, "From:" . $email);

  //Email response
  echo "Thank you for contacting us!";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>

<form id="contact_form" action="php/email.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <label for="name">Name:</label><br>
    <input id="name" class="input" name="name" type="text" value="" size="30"><br><br>
  </div>
  <div class="row">
    <label for="email">Email:</label><br>
    <input id="email" class="input" name="email" type="text" value="" size="30"><br><br>
  </div>
  <div class="row">
    <label for="message">Message:</label><br>
    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br><br>
  </div>
  <input class="btn btn-default" type="submit" value="Submit">
</form>

<?php
  }
  header("Location: http://localhost/rosesing"); /* Redirect browser */
  exit();
?>
