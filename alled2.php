<?php

//error_reporting(0);

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



    <div class="container mt-5">
    <?php

// if(isset($_GET['std'])) {
//   $stdno=$_GET['std'];
//   echo $stdno;


//     }?>
        <form action="" method="POST">


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
                if(isset($_GET['id'])) {
                  $stdno=$_GET['id'];
                  //echo $stdno;
                
                
                   
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'classDB');

                $query = "SELECT *  FROM allocation  WHERE standards='$stdno'";
                $mysqli_run=mysqli_query($connection, $query);
              //  if($mysqli_run){
              //     echo "runing";
              //   }
              //   else{
              //     echo "blocked";
              //   }
                while($row = mysqli_fetch_array($mysqli_run))
                {

                
                  
         echo'     <tbody>
                    <tr>

                        
                        <td class="text-center">'.  $row['teacher_name'].'</td>
                        <td class="text-center">'.  $row['subjects'].'</td>
                        <td class="text-center">'.  $row['standards'].'</td>
                        <td class="text-center">'.  $row['gender'].'</td>
                       
                    </tr>';
             

                    
             }    }?>
                


           
              </tbody>
            </table>
            </div>


        </form>
    
    
       
   

            
    
    
    
    
    
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>