<?php

include "conn.php";

if (isset($_POST['submit'])) {


  
  $name = $_POST['name'];
  $email = $_POST['email_id'];
  $contact_number = $_POST['contact_number'];
  $roll_no = $_POST['roll_no'];
  //$standards = $_POST['standards'];
 //echo "standard";
 //echo $standards;
  //$gender = $_POST['gender'];
 //if(isset($_POST['standards'])){
  $standards=$_POST['standards'];
 //}

// if(isset($_POST['gender'])){
  $gender=$_POST['gender'];
 //}

  $sql = "update `student` set `name`='$name',`email_id`='$email',`contact_no`='$contact_number',`roll_no`='$roll_no',`standards`='$standards',`gender`='$gender' WHERE id=".$_GET['id'];
  $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
  if($result){
    echo '<div class="alert alert-success" role="alert">
    The data has been successfully updated!!
  </div>';
  }
  else{
    echo "error!";
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
include "nav.php";
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>