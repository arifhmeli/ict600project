
<?php

session_start();

error_reporting(0);

if (isset($_POST['submit'])){
    $currentUser = $_SESSION['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $email = $_POST['password'];
    $cpassword = $_POST['password'];

	include 'config.php';


	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		header("Location: profile.php");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
    if ($password == $cpassword) {

        // SQL query
	    $sql = "UPDATE users SET 
        password = '$password', 
        cpassword = '$cpassword', 
        username = '$username', 
        email = '$email'
        WHERE id ='$currentUser'";

		$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
                header("Location: profile.php");
                die();
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}

	mysqli_close($conn);
}

?>
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

</head>
<body>
<br><br>
<fieldset>
<section class="mb-5">
    <h4 class="mb-5 text-center"><strong>Update My Profile</strong></h4>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">

		<form action="" method="POST" class="login-email">
            
			<!-- Username input -->
      <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required/>
            <label class="form-label">Username</label>
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
      <div class="input-group">
				<button name="update" class="btn btn-primary btn-block mb-4">Update</button>
			</div>
      </form>
      
      </div>
    </div>
  </section>
</fieldset>
  <!--Section: Content-->
</div>
</main>




