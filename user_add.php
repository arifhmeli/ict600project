<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$name = $_POST['name'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $dob = $_POST['dob'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (email, name, username, password, dob, gender, role)
			VALUES ('$email','$name','$username', '$password', '$dob', '$gender', '$role')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<?php include "header.php"?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>

	<title>Add New Member</title>
</head>
<body>
<section class="mb-5">
    <h4 class="mb-5 text-center"><strong>Add Member</strong></h4>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">

		<form action="" method="POST" class="login-email">
            
			<!-- Username input -->
      <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required/>
            <label class="form-label">Email address</label>
      </div>

      <!-- Name input -->
      <div class="form-outline mb-4">
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required/>
            <label class="form-label">Name</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required/>
            <label class="form-label">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" value="<?php echo $_POST['password']; ?>" required/>
            <label class="form-label">Password</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
            <input type="password" name="cpassword" class="form-control" value="<?php echo $_POST['cpassword']; ?>" required/>
            <label class="form-label">Confirm Password</label>
      </div>

      <!-- Dob input -->
      <div class="form-outline mb-4">
            <input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>" required/>
            <label class="form-label">Date of Birth</label>
      </div>

      <!-- Role input -->
      <div class="form-outline mb-4">
            <input type="text" name="role" class="form-control" value="<?php echo $role; ?>" required/>
            <label class="form-label">Role</label>
      </div>

			<div class="input-group">
				<button name="submit" class="btn btn-primary btn-block mb-4">Submit</button>
			</div>

      </form>
      </div>
    </div>
  </section>
  <!--Section: Content-->
</div>
</main>