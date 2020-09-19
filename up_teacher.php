<?php 
  include "conn.php";

  $query= "select * from teacher WHERE id=".$_GET['id'];
  $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($res);
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
      <div class="container">
    <h3 class="text-center">Teacher Portal</h3>

    <form action="uD_teacher.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text"  value="<?php echo $row['name'];  ?>"class="form-control" id="Name" name="name">
         
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="<?php echo $row['email_id']; ?>" class="form-control" id="email_id" name="email_id" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        <div class="form-group">
          <label>Contact NO</label>
          <input type="number" value="<?php echo $row['contact_id']; ?>" class="form-control" id="contact_no" name="contact_no">
        </div>
        <div class="form-group">
          <label>Qualifiaction & Experience</label>
          <input type="text" value="<?php echo $row['qualifications']; ?>" class="form-control" id="qualifications" name="qualifications">
        </div>
        
        <h6>Gender</h6>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="<?php echo $row['gender']; ?>" name="gender" id="gender" value="male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="<?php echo $row['gender']; ?>"  name="gender" id="gender" value="female">
            <label class="form-check-label" for="inlineRadio2">female</label>
          </div>
          
          <br>
          <br>
          
           <center> <button type="submit" class="btn btn-primary">UPDATE</button></center>
      </form>

    </div>

  