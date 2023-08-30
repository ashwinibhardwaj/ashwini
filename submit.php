<?php

if(isset($_POST['submit']))
      {
          $email = $_POST['email'];
          $password = $_POST['password'];
        

          $host = "localhost";
          $username = "forms";
          $password = "password";
          $db = "html_form";
          $conn = mysqli_connect($host, $username, $password, $db);
if (!$con)
          {
die("Connection failed!" . mysqli_connect_error());
          }
          $query = "INSERT INTO simple_form (id, username, email, comment VALUES $username, $email, $comment";
          $run = mysqli_query($conn, $query);
if (run)
          {
echo"Success";
          }
mysqli_close($conn);
      }


?>