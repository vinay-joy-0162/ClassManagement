


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

        <?php
        
        if(isset($_GET['id'])){
          $idno=$_GET['id'];
          }
        
        ?>

    <div class="container mt-5">

    
        <form action="" method="POST">
          <div class="table-responsiv">

            <table class="table table-dark table-responsive text-center ">
                <thead>
                    <tr>

                        <th class="text-center" scope="col">name</th>
                        <th class="text-center" scope="col">email_id</th>
                        <th class="text-center" scope="col">contact_no</th>
                        <th class="text-center" scope="col">roll_no</th>
                        <th class="text-center" scope="col">standards</th>
                        <th class="text-center" scope="col">gender</th>
                        <th class="text-center" scope="col">Actions</th>
                        

                       
                        
                        
                        
                    </tr>
                </thead>

                <?php

                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'classDB');

                $query = " SELECT *  FROM `student` WHERE standards=$idno";
                $query_run = mysqli_query($connection,$query);
                $count = 0;
                while($row = mysqli_fetch_array($query_run))
                {
                   $count++;
                    
                    ?>
                  <tbody>
                    <tr>

                        
                        <td class="text-center"> <?php echo $row['name'];  ?></td>
                        <td class="text-center"> <?php echo $row['email_id']; ?></td>
                        <td class="text-center"> <?php echo $row['contact_no']; ?></td>
                        <td class="text-center"> <?php echo $row['roll_no']; ?></td>
                        <td class="text-center"> <?php echo $row['standards']; ?></td>
                        <td class="text-center"> <?php echo $row['gender']; ?></td>
                        <td> <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id']; ?> "> Delete </a> </button> </td>
                        <td> <button type="button" class="btn btn-danger"><a href="update.php?id=<?php echo $row['id']; ?> "> update </a> </button> </td>
                        
                    </tr>
             
                  
                     
                    <?php
                }
                echo "total number of students in this standard  is: ";  echo $count;
                
                ?>

                    

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