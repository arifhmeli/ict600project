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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<?php include "header.php"?>

<div align="center">
       <hr>
            <h3>List of Club Members</h3>
       <hr>
</div>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Username</th>
      <th>Full Name</th>
      <th>Status</th>
      <th>Role</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
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
        <button type="button" class="btn btn-link btn-sm btn-rounded btn-success"><a href="user_edit.php?id=<?php echo $row["id"] ?>">
          Approve
        </button>
        <br>
        <button type="button" name="delete_btn" class="btn btn-link btn-sm btn-rounded btn-danger"><a href="user_delete.php?id=<?php echo $row["id"] ?>">
          Reject
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
    
    </tbody>
</table>

<br>
<div align="center">
<div class="blue-button">
    <a href="user_add.php">Add New Member</a></br>
</div>
</div>

</body>
</html>