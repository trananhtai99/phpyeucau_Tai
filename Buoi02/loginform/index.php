<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'html/head.php';?>
</head>
<body>
<?php
//Buoc 01
echo '<pre>';
print_r($_POST);
echo '</pre>';

//Buoc 02

if(isset($_POST['btnSubmit'])){
	//Buoc 2.1
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Buoc 2.2
	if($email == 'admin@gmail.com' && $password == '123'){
		header("Location: admin.php");
		exit();
	}
	//Buoc2.3
	if($email == 'member@gmail.com'&& $password == '123'){
		header("Location: member.php");
		exit();
	}
}	
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method ='post' >
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class ="error" style="color: red"> "Ban nhap thong tin chua dung"</div> 

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="btnSubmit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>	

	<div id="dropDownSelect1"></div>
	
	<?php require_once 'html/script.php';?>

</body>
</html>