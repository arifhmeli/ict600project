
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['login'] = true;
                      $_SESSION['role'] = $row['role'];
                      $_SESSION['username'] = $row['username'];
                      $_SESSION['id'] = $row['id'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<?php include "header.php"?>	
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

<body>
<br><br>
<fieldset>
<section class="mb-5">
    <h4 class="mb-5 text-center"><strong>Log In</strong></h4>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">

		<form action="" method="POST" class="login-email">
            
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

			<div class="input-group">
				<button name="submit" class="btn btn-primary btn-block mb-4">Login</button>
				<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			</div>

      </form>
      </div>
    </div>
    </div>
        </div>
    </div>
  </section>
</fieldset>
  <!--Section: Content-->
</div>
</main>
</body>
</html>