<?php
 include "conn.php";


 

 if($_SERVER['REQUEST_METHOD']=='POST'){
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

   $sql = "insert into student(name,email_id,contact_no,roll_no,standards,gender) values ('$name', '$email', '$contact_number', '$roll_no', '$standards', '$gender')";
   $result = mysqli_query($conn,$sql);
   if($result){
     echo '<div class="alert alert-success" role="alert">
     student data has been successfully insrted!
   </div>';
   }
   else{
     echo "something went wrong!";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>classDocs</title>
  </head>
  <body>

    <?php
    
    include "nav.php";
    
    ?>
      <div class="container mt-5">
    <h3 class="text-center">Student Portal</h3>

    <form action="Addstudent.php" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="Name" name="name">
         
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email_id" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
         
        <div class="form-group">
          <label>Contact NO</label>
          <input type="number" class="form-control" id="phonenumber" name="contact_number">
        </div>
        <div class="form-group">
            <label>Roll No</label>
            <input type="number" class="form-control" id="rollno" name="roll_no">
            
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlSelect1">select standard</label>
            <select class="form-control" id="standards" name="standards">
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3 </option>      
              <option value=4>4</option>
              <option value=5>5</option>
              <option value=6>6</option>
              <option value=7>7</option>
              <option value=8>8</option>
              <option value=9>9</option>
              <option value=10>10</option>
              <option value=11>11</option>
              <option value=12>12</option>   
            
            </select>
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
          
        
            <center>
            <button type="submit" class="btn btn-primary">Add</button>
</center>
      </form>

    </div>

   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
