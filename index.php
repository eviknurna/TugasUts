<?php include 'config/class.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mari belajar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/global.css">
	<script src="assets/sweetalert2/dist/sweetalert2.js"></script>
	<link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script>
		function myfunction() {
			swal({
				title: "Login Sucess",
				text: "Great! , Click Continue",
				icon: "success",
				showConfirmButton: false,
				timer: 2000
			}).then((result) => {
				if (result.dismiss === swal.DismissReason.timer){
				}})}

			function myfunction2() {
				swal({
					title: "Login Failed",
					text: "Type a correct username and password ",
					icon: "error",
					button: "Retry",
				})}
					</script>

				</head>
				<body>

					<div class="container">
						<center><div class="card" style="margin-top: 70px; width: 500px; border-color: grey; background-color: #ADD8E6">
								<div class="card-header" style="background-color: grey";>
									<div style="margin-left: 19px; margin-top: 10px" class="login-form col-md-4 offset-md-4" ><h1 class="title">login</h1>
									</div>
								</div>
							<div class="card-body">
								<form method="post" id="loginbox" role="login">
									<div class="form-group">
									<div style="text-align: left"><h4>Username</h4></div>
                                	<input type="text" name="usr" id="usr" class="form-control" value placeholder="Username">
									</div>
									<div class="form-group">
										<div >
											<div style="text-align: left"><h4>Password</h4></div>
											<input type="password" name="pass" id="pass" class="form-control" value placeholder="Password">
										</div>
									</div>
									<div class="form-check" style="margin-top: 30px">
										<label class="form-check-label" style="float: left">
											<input type="checkbox" name="cexbox" class="form-check-input"> Remember Me
										</label>
									</div>
									<br>
									<div class="row" style="margin-top: 50px;" >
										<div class="col-md-5">
											<button name="login" class="btn btn-success btn-block" style="margin-bottom: 10px; background-color: green; border-color: #2C3E50; margin-left: 280px">Sign in</button>
										</div>
										<?php 
										if(isset($_POST['login'])){
											$hasil=$admin->login_admin($_POST['usr'],$_POST['pass']);
											if ($hasil=="sukses") {
												echo '<script type="text/javascript">',
												'myfunction()',
												'</script>';
												echo "<meta http-equiv='refresh' content='2;url=admin/index.php'>";
											}
											else{
												echo '<script type="text/javascript">',
												'myfunction2()',
												'</script>';
												echo "<meta http-equiv='refresh' content='url=index.php'>";
											}
										}
										?>
									</div>
								</form>
							</div>
						</div>
					</center>
				</body>
				</html>