<?php
    session_start();

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    require 'koneksi.php';

    if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $query = "select * from siswa where username='$username' and password='$password'";
    $result = mysqli_query($conn, $query);
        
    if (mysqli_num_rows($result) > 0 ) {
        //set session
        $_SESSION["login"] = true;
        header('Location: index.php');
    } else {
        echo 'Login gagal! Username atau Password SALAH!';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Login Page</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>	
		body {
		    font-family: Georgia, times new roman, Times, Merriweather, Cambria, Times, serif;
		    font-weight: 300;
		    font-size: 16px;
		    line-height: 2;
		    background: url() no-repeat center;
		    /* color: #777; */
		    color: #4d4b4b;
		}
		.centerDiv {
			height: 100vh;
			width: 100%;
		}
	</style>	
</head>
<body>
	<div class="container-fluid">	
		<div class="row centerDiv">
			<div class="col-sm-12 my-auto">
				<div class="card border-0">
				  <div class="row">
				    <div class="col-md-8">
				      <div class="card-body">
				      	<img src="assets/images/logos/sinow.png" class="img-fluid rounded-start shadow" alt="...">
				      </div>
				    </div>
				    <div class="col-md-4">
				      <div class="card-body">
				      	<div class="mb-5 text-center">
				      		<img src="assets/images/logos/sinow.png" class="img-fluid" width="70" alt="logo ahmad syarifudin" title="ahmad, syarifudin">
				      		<h2 class="h5 mt-5">Login</h2>
				      	</div>
			      		<form action="" method="post">
			      		  <div class="mb-3">
			      		    <input type="text" class="form-control" id="username" name="username">
			      		    <div id="emailHelp" class="form-text">MASUKAN USERNAME ANDA</div>
			      		  </div>
			      		  <div class="mb-3">
			      		    <input type="password" class="form-control" id="password" name="password">
			      		     <div id="emailHelp" class="form-text">MASUKAN PASSWORD ANDA</div>
			      		  </div>
			      		  <div class="mb-3 form-check">
			      		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			      		    <label class="form-check-label" for="exampleCheck1">Remember me</label>
			      		  </div>
						  <div>
							<button type="submit" class="btn btn-primary w-100">
								<a href="./index.html" style="color: white; text-decoration: none;">LOGIN</a>
							</button>
						</div>
			      		</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>	

	<!-- JavaScript Bundle with Popper -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>