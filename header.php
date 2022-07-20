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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2">
      <img
        src="logo.png"
        height="16"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <?php
            if ($_SESSION['role'] == 'Admin') {
                                echo '<li class="nav-item"><a class="nav-link" href="user_view.php">Manage Member</a></li>';
                            }
            if ($_SESSION['role'] == 'User') {
                                echo '<li class="nav-item"><a class="nav-link" href="profile.php">My Profile</a></li>';
                                // uncomment the following one line to open the new user items page
                                //echo '<li><a href="index.php?page=useritems">My Items</a></li>';
                            }
                            
                            ?>
      </ul>
      <!-- Left links -->
      </div>
      <div class="d-flex align-items-center">
      <?php
                  if ($_SESSION['role'] == 'Admin') {
                    echo '<button type="button" class="btn btn-link px-3 me-2"><a href="logout.php">Logout</a></li></button>';
                    }
                  if ($_SESSION['role'] == 'User') {
                      echo '<button type="button" class="btn btn-link px-3 me-2"><a href="logout.php">Logout</a></li></button>';
                      }
                  if ($_SESSION['role'] == null){
                      echo '<button type="button" class="btn btn-link px-3 me-2"><a href="login.php">Log In</a></li></button>';
                }
        ?>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->