<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
      $connection = mysqli_connect('localhost','root');

      mysqli_select_db($connection,"form3");

      $user = $_POST['user'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $query = "INSERT INTO 'ptable'('user','email','subject','message') VALUES ('$user','$email','$subject','$message') ";

      mysqli_query($connection,$query);

      echo "<h1>Message sent successfully</h1>";
    ?>
      
    

</body>
</html>
    