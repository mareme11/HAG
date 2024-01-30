<?php

session_start();                    // Start the session
if (isset($_GET['logout'])) {       // Destroy the session
    session_destroy();
    header('Location: .');           // Redirect to the login page
    exit;
}
include("db_config.php");           // Configure Database
//include("index.php");
//include("loginform.php");
?>
<?php              
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Validate the login credentials (you may replace this with a database check)    
                        $escaped_username = $conn->real_escape_string($_POST['username']);
                        $escaped_password = $conn->real_escape_string($_POST['password']);// Query to check login credentials
                        $sql = "SELECT * FROM users WHERE username='$escaped_username' AND password='$escaped_password'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {              // Set the session variable    
                            $_SESSION['username'] = $escaped_username;
                        } else {
                            $not_valid = TRUE;
                        }
                    }
                ?>