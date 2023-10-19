<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <!-- Title -->
</head>
<body class="bg-body-secondary" >
    <div class="d-flex flex-column align-items-center pt-5">
        <h3 class="bg-primary rounded p-2">
           <?php
           echo $movie_1->getDetails();
           ?> 
        </h3>
        <h3 class="bg-danger rounded p-2">
           <?php
           echo $movie_2->getDetails();
           ?> 
        </h3>
        <h3 class="bg-success rounded p-2">
           <?php
           echo $movie_3->getDetails();
           ?> 
        </h3>
    </div>
</body>
</html>

