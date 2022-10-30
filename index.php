<?php

require_once "login.php";

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
					</div>
				</div>
			</div>
		</nav>

		<div class="jumbotron jumbotron-fluid bg-primary text-white text-center pt-5 pb-5">
			<div class="container">
				<h1 class="display-3">Portal</h1>
			</div>
		</div>


	    <div class="container pt-2 pb-5 text-center">
	    	<div class="row pt-5">
	    		<div class="col-xs-4 m-auto">
			        <h2>Logowanie</h2>
			        <p>Proszę podać dane dostępowe</p>
			        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
			                <label><i class="fas fa-user"></i> Username</label>
			                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
			                <span class="help-block"><?php echo $username_err; ?></span>
			            </div>    
			            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
			                <label><i class="fas fa-lock"></i> Password</label>
			                <input type="password" name="password" class="form-control">
			                <span class="help-block"><?php echo $password_err; ?></span>
			            </div>
			            <div class="form-group">
			                <input type="submit" class="btn btn-primary" value="Login">
			            </div>
			            <p>Nie masz jeszcze konta? <a href="register.php">Zarejestruj się!</a>.</p>
			        </form>
	    		</div>
	    	</div>
	    </div>    
	</body>
</html>