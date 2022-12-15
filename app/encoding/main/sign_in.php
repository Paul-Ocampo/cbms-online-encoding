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
          <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>
                <form id="loginForm" class="row g-3 needs-validation" method="POST">
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
                      <label for="username">Username</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="password" class="form-control" id="pword" name="pword" placeholder="Password" required="required">
                      <label for="pword">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="sign_up.php">Create an account</a></p>
                  </div>
                </form>
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