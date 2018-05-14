<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>Form Registrasi PKN UMM</title>
<style>
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #F5F5F5;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #FF6347;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<body><center>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<div class="container">
  <div class="info">
    <h1>FROM REGISTER PRAKTEK KERJA NYATA</h1><center><span>Universitas Muhammadiyah Malang <i class="fa fa-heart"></i></center></span>
  </div>
</div>
<tr>
<td>Nama</td>
<td><input type="text" class="demoInputBox" name="Nama" value="<?php if(isset($_POST['Nama'])) echo $_POST['Nama']; ?>"></td>
</tr>
<td>NIM</td>
<td><input type="text" class="demoInputBox" name="NIM" value="<?php if(isset($_POST['NIM'])) echo $_POST['NIM']; ?>"></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><input type="text" class="demoInputBox" name="Tanggallahir" value="<?php if(isset($_POST['Tanggallahir'])) echo $_POST['Tanggallahir']; ?>"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><input type="radio" name="jeniskelamin" value="Lelaki" <?php if(isset($_POST['jeniskelamin']) && $_POST['jeniskelamin']=="Lelaki") { ?>checked<?php  } ?>> Lelaki
<input type="radio" name="jeniskelamin" value="Perempuan" <?php if(isset($_POST['jeniskelamin']) && $_POST['jeniskelamin']=="Perempuan") { ?>checked<?php  } ?>> Perempuan
</td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" class="demoInputBox" name="Alamat" value="<?php if(isset($_POST['Alamat'])) echo $_POST['Alamat']; ?>"></td>
</tr>
<tr>
<td>No. Telefon</td>
<td><input type="text" class="demoInputBox" name="notelefon" value="<?php if(isset($_POST['notelefon'])) echo $_POST['notelefon']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<td>Bidang Minat</td>
<td><input type="text" class="demoInputBox" name="BidangMinat" value="<?php if(isset($_POST['BidangMinat'])) echo $_POST['BidangMinat']; ?>"></td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form></center>
</body></html>