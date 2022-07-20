<?php 

include 'config.php';

session_start();

error_reporting(0);

if (!isset($_SESSION['id'])) {
  $_SESSION['role'] = $row['role'];
  $_SESSION['username'] = $row['username'];
}

?>

<?php 

$role = '';
$status = '';

if (!isset($_GET['id'])) {
	$user = $_GET['id'];
	$status = $_GET['status'];

	include 'config.php';
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * 
			FROM users
			WHERE id='$user'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $role = $row['role'];
        $status = $row['status'];		
		
	} else {
		echo "0 results";
	}
	
	mysqli_close($conn);
}

if (isset($_POST['EditUser'])){
	$status = $_POST['status'];

	include 'config.php';
	// SQL query
	$sql = "UPDATE users SET status='$status' WHERE id='$id'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		header("Location: user_view.php");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Approve Membership</h4>
                    </div>
                    <div class="card-body">

                        <form action="user_edit.php?id=<?php $id?>" method="POST">
                            <div class="froum-group mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="<?php echo $status?>" class="form-control">
                            </div>
                            <div class="froum-group mb-3">
								<input type="hidden" name="id" value="<?php echo $id?>">
                                <button type="submit" name="EditUser" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>