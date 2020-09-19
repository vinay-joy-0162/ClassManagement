<?php
include "conn.php";

?>

<?php

$query = "select * from `teacher` ";
$result = mysqli_query($conn,$query);

if($_SERVER['REQUEST_METHOD']=='POST'){
 
  $teacher_name = $_POST['teacher_name'];
  $standards=$_POST['standards'];
  $subjects=$_POST['subjects'];
 

  $gender=$_POST['gender'];
 

  $sql="insert into`allocation`(`teacher_name`, `standards`, `subjects`, `gender`) values ('$teacher_name','$standards','$subjects','$gender')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo '<div class="alert alert-success" role="alert">
    Teacher has been successfully allocated!!!
  </div>';
  }
  else{
    echo "error";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
  <title>classDocs</title>
</head>
<body>

<?php

include "nav.php";
?>


<form action="" method="POST">
  <div class="form-group">
     

    <div class="container mt-4">
    <h3 class="text-center">Teacher's Allocation</h3>

    <label>Teacher's Name</label>
    <select class="form-control" id="teacher_name" name="teacher_name">
      <?php while($row = mysqli_fetch_array($result)):;?>
      
      <option><?php echo $row['name'];?></option>
      <?php endwhile;?>
    
    </select>

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
          <div class="form-group">
            <label for="exampleFormControlSelect1">select subjects</label>
            <select class="form-control" id="subjects" name="subjects">
              <option value=English>English</option>
              <option value=Hindi>Hindi</option>
              <option value=Marathi>Marathi </option>      
              <option value=Math>Math</option>
              <option value=Science>Science</option>
              <option value=Socailscience>Socialsicence</option>
             
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
          
          <br>
          <br>
          
            <center> <button type="submit" class="btn btn-primary">Add</button></center>
      </form>

    </div>

  
   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
