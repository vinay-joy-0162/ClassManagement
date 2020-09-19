<?php

  include "conn.php";
  error_reporting(0);
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
          <div class="container mt-5">
          <h2 class="text-center">Subjetcs</h2>
          <br>
    <form action ="subject.php" method ="POST">
    <div class="form-group">
            <label for="exampleFormControlSelect1">select subjects</label>
            <select class="form-control" id="subjects" name="subjects">
              <option>SELECT</option>
              <option value=English>English</option>
              <option value=Hindi>Hindi</option>
              <option value=Marathi>Marathi </option>      
              <option value=Math>Math</option>
              <option value=Science>Science</option>
              <option value=Socailscience>Socialsicence</option>
             
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Show</button>
          </form>


        <div class="table-responsive">
          <table class="table table-dark table-responsive text-center ">
                <thead>
                    <tr>

                        <th class="text-center" scope="col">Teacher's name</th>
                        <th class="text-center" scope="col">subjects</th>
                        <th class="text-center" scope="col">standards</th>
                         <th class="text-center" scope="col">gender</th>
       
                    </tr>
                </thead>

                <?php
             if(isset($_POST['subjects'])){
              $subject = $_POST['subjects'];
               $sql = "SELECT * FROM `allocation` WHERE subjects='$subject'";
              $result = mysqli_query($conn, $sql);
              $count = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                $count++;
                echo ' <tr>
                                  <td class="text-center">'.  $row['teacher_name'].'</td>
                                 <td class="text-center">'.  $row['subjects'].'</td>
                                 <td class="text-center">'.  $row['standards'].'</td>
                                 <td class="text-center">'.  $row['gender'].'</td>
                               
                  
                </tr>';

            }  
              }
              
              ?>
              <?php
               echo "total number of teacher in this subject   is: ";  echo $count;
              ?> 
                


           
              </tbody>
            </table>
            </div>



    
    
    

  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>