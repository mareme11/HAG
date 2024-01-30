<?php

include("header.php");
include("navbar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">         <!-- Bootstrap CSS -->
</head>
 <div class="container mt-5">
 <div class="row justify-content-center">
            <div class="col-md-6">
                <?php              
                if (isset($_SESSION['username'])) {             // Check if the user is already logged in
                    echo '<div class="alert alert-success" role="alert">Welcome back, ' . $_SESSION['username'] . '! <a href="?logout=1">Logout</a></div>';
                } else {                                         // If not logged in, check if the form is submitted
                    if (isset($not_valid)) {
                            echo '<div class="alert alert-danger" role="alert">Invalid login credentials.</div>';
                            include ("loginform.php");
                    } else {
                        include ("loginform.php");// Display the login form
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, but needed for some Bootstrap features) -->
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</html>
<?php
//include("navbar.php");
include("footer.php");
?>