<?php

include "conn.php";
error_reporting(0);

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
    <title>classDocs</title>
  </head>
  <body>

 
 <?php
 include "nav.php";
 ?>



    <div class="container mt-5">

    <?php if(isset($_GET['id'])){
       $idno=$_GET['id'];
       //echo $idno;


    }
    ?>
        <form action="sorting_trial.php" method="POST">
            <!-- <label for="sortBy">Sort</label> -->
            <input type="hidden" name="id" value="<?php echo $idno ?>">
            <select class="select" id="inputState" class="form-control" name="sort_by_submit">
            <option>select</option>
                <option value="name">Names</option>
               
            </select>
                   
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
           
            <div class="table-responsive">
            <table class="table table-dark table-resonsive text-center">
                <thead>
                    <tr>

                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Email-id</th>
                        <th class="text-center" scope="col">Contact-No</th>
                        <th class="text-center" scope="col">Roll-No</th>
                        <th class="text-center" scope="col">Standards</th>
                        <th class="text-center" scope="col">Gender</th>
                        
               
                    </tr>
                </thead>

    <?php
                
            if(isset($_POST['submit']) && isset($_POST['sort_by_submit'])){
                $id = $_POST['id'];
                $sort = $_POST['sort_by_submit'];
                $sql_query = "select * from `student`order by $sort";
                $res = mysqli_query($conn,$sql_query);

                while($row = mysqli_fetch_array($res)){
                  $name = $row['name'];
                  $email_id = $row['email_id'];
                  $contact_no = $row['contact_no'];
                  $roll_no = $row['roll_no'];
                  $standards = $row['standards'];
                  $gender = $row['gender'];
                   echo ' 
                  
                  
                    <tr>
                                
                        
                    <td class="text-center"> <a href="./student_profile.php?std='.$standards.' ">'.$name.'</a></td>
                    <td class="text-center"> '.$email_id.'</td>
                    <td class="text-center"> '.$contact_no.'</td>
                    <td class="text-center"> '.$roll_no.'</td>
                    <td class="text-center"> '.$standards.'</td>
                    <td class="text-center"> '.$gender.'</td>
                   
                    </tr>

                    ';

                }





            } 
            
            else{
                $id = $_GET['id'];
              
                $query = " SELECT *  FROM `student` WHERE standards = $id";
                $query_run = mysqli_query($conn,$query);
                
                while($row = mysqli_fetch_array($query_run)){
                  $name = $row['name'];
                  $email_id = $row['email_id'];
                  $contact_no = $row['contact_no'];
                  $roll_no = $row['roll_no'];
                  $standards = $row['standards'];
                  $gender = $row['gender'];
                   echo "  
                  
                  
                    <tr>
                                
                        
                    <td class='text-center'> $name</td>
                    <td class='text-center'> $email_id</td>
                    <td class='text-center'> $contact_no</td>
                    <td class='text-center'> $roll_no</td>
                    <td class='text-center'> $standards</td>
                    <td class='text-center'> $gender</td>
                   
                    </tr>

                    ";

                }
            }
                ?>


           

            </table>

            </tbody>
          </div>



        
    
    
       


          
               
   

    
    
    
    
    
    
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>