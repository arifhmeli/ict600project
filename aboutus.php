<?php 

include 'config.php';

session_start();

error_reporting(0);

?>

<?php include "header.php"?>
<body>
  <br>
<h2 class="text-center">About Us </h2>
  <!--Main layout-->
  <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>Why you should join us?</strong></h4>
              <p class="text-muted">
                
              Photography is much more than just having a camera and taking pictures. 
              Students in this club have opportunities to hone their skills by understanding and learning about what makes a good photograph, 
              from composition to artistic expression. In addition, members of this club will learn how to use state of the art software to edit and enhance photographic images for their own use, as well as for publication. 
              Students are encouraged to practice their skills while photographing school related activities and sporting events. 
              All levels of experience are welcome and encouraged to explore this exciting side of the visual arts. 
              </p>
              <p><strong>Members</strong></p>
              <p class="text-muted">
                Muhammad Arif Haikal bin Meli (2020984569)<br>
                Muhammad Nur Hakimi bin Azman (2020183535) <br>
                Muhammad Farid bin Muhammad Dahri (2020975329)<br>
                Nur Irham Atikah binti binti Mohd Raffe @ Sukiman (2020960105)<br>
                Haizatul Zulaikha binti Annual (2020987723) <br>
                RCS2405A
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Featured Photos of the Week!</strong></h4>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    by @khaizaki
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    by @lisamanoban
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    by @AniqHakim
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

</body>
<?php include "footer.php"?>
</html>