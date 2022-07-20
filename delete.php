<?php
include 'config.php';

session_start();

error_reporting(0);

if(isset($_POST['delete_btn']))
{
    if ($id != null) {
  $query = "DELETE FROM users WHERE id = '$id'";
 
  if (mysqli_query($conn, $query)) {
    header("location: user_view.php");
} else {
     echo "Something went wrong. Please try again later.";
}
} else {
    if (empty(trim($_GET["id"]))) {
        echo "Something went wrong. Please try again later.";
        header("location: user_view.php");
        exit();
    }
}
}


?>