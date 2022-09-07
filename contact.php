<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "snehatiwari10600@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo' 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Message acknowledgement</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container">
      <p style="text-align: center; font-size: 50px; margin-top: 100px"><strong>Thank you for getting in touch!</strong></p>
      <p style="text-align: center;font-size: 15px;padding-top: 10px;">Get back to <a href="index.html">Home</a>.</p> 
    </div>
</body>

</html>
';


?>
