<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login_page.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
            </li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
            
            <?php              
                if (isset($_SESSION['username'])) {             // Check if the user is already logged in
                    echo '
            <li class="nav-item">
            <a class="nav-link" href="air_quality.php">Air Quality</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Weather Forecasting</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Risk Asessment</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Health Advice</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Symptoms</a>
            </li> ';}
         ?>

    </div>
    </nav>