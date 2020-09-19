<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./style.css">
    <title>classDocs</title>
</head>
<body>
    <?php 
    include "nav.php";
    ?>
    <div class="container mt-5">
        <h2 class="text-center">Teacher's Details</h2>
        <br>
    <form action="" method="POST">


            <div class="table-responsive">
            <table class="table table-dark table-responsive text-center ">
                <thead>
                    <tr>
                         <th class="text-center" scope="col">name</th>
                        <th class="text-center" scope="col">email_id</th>
                        <th class="text-center" scope="col">contact_id</th>
                        <th class="text-center" scope="col">gender</th>
                        <th class="text-center" scope="col">qualifications</th>
                        <th class="text-center" scope="col">Actions</th>
                        
                    </tr>
                </thead>

                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'classDB');

                $query = " SELECT *  FROM `teacher` ";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                <tbody>
                    <tr>

                         <td class="text-center"> <?php echo $row['name'];  ?></td>
                        <td class="text-center"> <?php echo $row['email_id']; ?></td>
                        <td class="text-center"> <?php echo $row['contact_id']; ?></td>
                        <td class="text-center"> <?php echo $row['gender']; ?></td>
                        <td class="text-center"> <?php echo $row['qualifications']; ?></td>
                        <td> <button type="button" class="btn btn-danger"><a href="delete_teacher.php?id=<?php echo $row['id']; ?> "> Delete </a> </button> </td>
                        <td> <button type="button" class="btn btn-danger"><a href="up_teacher.php?id=<?php echo $row['id']; ?> "> update </a> </button> </td>
                        
                    </tr>

                    <?php
                }
                ?>


            </table>



        </form>
    </div>

        <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    </body>

</html>
