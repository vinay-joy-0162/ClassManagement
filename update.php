<?php
  include "conn.php";
  $query= "select * from student WHERE id=".$_GET['id'];
  $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($res);
 // ($row = mysqli_fetch_array($query)

  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>


  <?php
  include "nav.php";
  ?>
  <div class="container">
    <h3 class="text-center">Student Portal</h3>

    <form action="uD.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" value="<?php echo $row['name']; ?>" class="form-control" id="Name" name="name">
         
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" value="<?php echo $row['email_id']; ?>" id="email" name="email_id" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
         
        <div class="form-group">
          <label>Contact NO</label>
          <input type="number" class="form-control"value="<?php echo $row['contact_no']; ?>" id="phonenumber" name="contact_number">
        </div>
        <div class="form-group">
            <label>Roll No</label>
            <input type="number" class="form-control"value="<?php echo $row['roll_no']; ?>" id="rollno" name="roll_no">
            
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlSelect1">select standard</label>
            <select class="form-control" value="<?php echo $row['standards']; ?>" id="standards" name="standards">
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
            <input class="form-check-input" type="radio"value="<?php echo $row['gender']; ?>" name="gender" id="gender">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"value="<?php echo $row['gender']; ?>"  name="gender" id="gender">
            <label class="form-check-label" for="inlineRadio2">female</label>
          </div>
          <br>
          <br>
          
            <center><button type="submit" name="submit" class="btn btn-primary">UPDATE</button></center>
      </form>
      
      

    </div>




  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>