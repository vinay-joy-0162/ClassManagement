<?php 
  include "conn.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email_id=$_POST['email_id'];
  $contact_no=$_POST['contact_no'];
  $gender=$_POST['gender'];
  $qualifications=$_POST['qualifications'];

  $sql = "insert into `teacher` (`id`, `name`, `email_id`, `contact_id`, `gender`, `qualifications`) values (NULL, '$name', '$email_id', '$contact_no', '$gender', '$qualifications')";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo     '<div class="alert alert-success" role="alert">
            Teacher has been successfully added!!
            </div>';
  }
  else{
    echo "error!!";
  }





}

error_reporting(0);
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>classDocs</title>
  </head>
  <body>

  <?php
  
  include "nav.php";
  ?>
      <div class="container mt-5">
    <h3 class="text-center">Teacher Portal</h3>
    <br>

    <form action="Addteacher.php" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="Name" name="name">
         
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email_id" name="email_id"  aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        <div class="form-group">
          <label>Contact NO</label>
          <input type="number" class="form-control" id="contact_no" name="contact_no">
        </div>
        <div class="form-group">
          <label>Qualifiaction & Experience</label>
          <input type="text" class="form-control" id="qualifications" name="qualifications">
        </div>
        
        <h6>Gender</h6>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
            <label class="form-check-label" for="inlineRadio2">female</label>
          </div>
          
          <br>
          <br>
          
            <center><button type="submit" class="btn btn-primary">Add</button></center>
      </form>

    </div>

    <?php


    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>