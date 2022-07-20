<?php 

include 'config.php';

session_start();

error_reporting(0);

if (!isset($_SESSION['id'])) {
    $_SESSION['role'] = $row['role'];
    $_SESSION['username'] = $row['username'];
  }

?>
<?php include "header.php"?>
<br>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
              <h2 class="text-center">My Profile </h2>
                <div class="col-md-12">
                    <div class="page-header clearfix">
                    </div>
					
                   
                </div>
            </div>
        </div>

</body>
</html>

<?php

$currentUser = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id ='$currentUser'";
$result = mysqli_query($conn, $sql);
?>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Username</th>
      <th>Full Name</th>
      <th>Status</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 

$currentUser = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id ='$currentUser'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $row["username"] ?></p>
            <p class="text-muted mb-0"><?php echo $row["email"] ?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $row["name"] ?></p>
        <p class="text-muted mb-0"><?php echo $row["dob"] ?></p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline"><?php echo $row["status"] ?></span>
      </td>
      <td><?php echo $row["role"] ?></td>
      <td>
      <form action="" method="POST">
        <button type="button" name="update_btn" class="btn btn-link btn-sm btn-rounded btn-primary"><a href="profile_update.php">
          Update
        </button>
      </form>
      </td>
    </tr>

    <?php
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

mysqli_close($conn);
?>
</table>
