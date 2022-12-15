<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once 'layout_head.php';

?>

<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">
            <div class="card mb-3">
              <div class="card-body">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="welcome text-primary">
                      <img src="../assets/img/tabaco.png" alt="Tabaco City Logo" class="text-center city-logo">
                      <img src="../assets/img/cbms.png" alt="CBMS Logo" class="text-center cbms-logo">
                      <br><b>Welcome!</b>
                    </h1>
                  </div>
                  <h3 class="home-title text-primary">COMMUNITY-BASED MONITORING SYSTEM</h3>
                  <div class="d-flex justify-content-around">
                    <a class="btn btn-primary position-relative" type="button" href="sign_in.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </div>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="sign_up.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../app/com.cbms.cbmsencode.apk">Download mobile app</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="credits">
              Developed by: <a href="../resume/index.html">Paul Victoriano Ocampo</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main><!-- End #main -->

<?php

include_once 'layout_foot.php';

?>