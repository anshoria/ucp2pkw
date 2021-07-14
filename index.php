<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card row mt-5 col-5">
			<div class="card-header">
				<h3>Admin Login</h3>
			</div>
			<div class="login100-form validate-form" action="" method="POST" >
				<form method="post" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login" class="btn float-right btn-primary">
					</div>
				</form>
        <?php
					if( isset($_POST['login']) ){
						include 'config.php';
						$username = $_POST['username'];
						$pass 	  = $_POST['password'];

						$cek_user = mysqli_query( $koneksi,"SELECT * FROM user WHERE username='$username'");
						$row	  = mysqli_num_rows($cek_user);

						if( $row === 1 ){
							//jalankan prosedur seleksi password
							$fetch_pass = mysqli_fetch_assoc($cek_user);
							$cek_pass 	= $fetch_pass['password'];
							if( $cek_pass <> $pass){
								echo"<script>alert('Password Salah');</script>";
							}else{
								$_SESSION['log'] = true;
								echo"<script>alert('Login Berhasil');document.location='home.php'</script>";
							}
						}else{
							echo"<script>alert('Username salah atau belum terdaftar');</script>";
						}
					}
				?>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>