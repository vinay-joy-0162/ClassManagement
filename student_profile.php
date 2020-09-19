<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<table class="table table-dark">
                <thead>
                    <tr>

                        <th class="text-center" scope="col">Teacher's name</th>
                        <th class="text-center" scope="col">subjects</th>
                       
       
                    </tr>
                </thead>

<?php




        
        if(isset($_GET['std'])){
          $idno=$_GET['std'];
         // echo $idno;
          }
        



          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,'classDB');

          $query = " SELECT *  FROM allocation WHERE standards=$idno";
          $query_run = mysqli_query($connection,$query);
          $count = 0;
          while($row = mysqli_fetch_array($query_run)){

            echo'     <tbody>
            <tr>

                
                <td class="text-center">'.  $row['teacher_name'].'</td>
                <td class="text-center">'.  $row['subjects'].'</td>
             
               
            </tr>';
     
          }


        ?>

        </table>
        
    </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>