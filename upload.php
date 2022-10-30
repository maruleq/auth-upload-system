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
	    	<div class="row pt-5">
	    		<div class="col-xs-4 m-auto">
			        <h2>Wyślij plik na serwer</h2>
					<form action="upload-manager.php" method="post" enctype="multipart/form-data">
						<div class="custom-file mb-3" style="margin-top: 50px">
							<input type="file" class="custom-file-input" id="fileSelect" name="zip_file">
							<label class="custom-file-label" for="fileSelect">Wybierz plik</label>
							<p><strong>Uwaga:</strong><br> Akceptowane są tylko pliki z rozszerzeniem .zip<br>wielkość pliku max 100 MB.</p>
							<button type="submit" class="btn btn-primary" name="submit" value="Upload" style="margin-top: 20px">Wyślij plik</button>
						</div>
				    </form>
				    <script>
						// Wyświetlanie nazwy wybranego pliku
						$(".custom-file-input").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
						});
					</script>
	    		</div>
	    	</div>
	    </div>  
    </body>
</html>