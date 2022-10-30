<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name='robots' content='noindex,nofollow' />
        <title>Serwer | notebook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style/custom.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-light navbar-expand-md bg-light">
            <div class="container">
                <a href="index.php" class="navbar-brand">Serwer testowy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navContent">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active">Strona główna</a>
                        <a href="upload-list.php" class="nav-item nav-link ">Lista plików</a>
                        <a href="upload.php" class="nav-item nav-link">Upload</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid bg-success text-white text-center pt-5 pb-5">
            <div class="container">
                <h1 class="display-3">Portal</h1>
            </div>
        </div>
        <div class="container pt-2 pb-5 text-center">
            <h1>Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Witamy na serwerze.</h1>
            <br>
            <p>
                <a href="reset-password.php" class="btn btn-warning">Reset hasła</a>
                <a href="logout.php" class="btn btn-danger">Wyloguj się</a>
            </p>
        </div>
    </body>
</html>