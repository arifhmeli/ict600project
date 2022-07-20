<?php 

session_start();


if (!isset($_SESSION['username'])) {
  $_SESSION['role'] = $row['role'];
  $_SESSION['id'] = $row['id'];
    header("Location: welcome.php");
}

?>

<?php include "header.php"?>

  <style>
      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

    </style>

     <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Welcome <?php echo $_SESSION['username'] ?></h1>
            <h5 class="mb-4">You are <?php echo $_SESSION['role'] ?></h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->

</body>
<?php include "footer.php"?>
</html>
