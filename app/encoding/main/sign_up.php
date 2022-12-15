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
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your information</p>
                </div>
                <form id="registerForm" class="row g-3 needs-validation" method="post" oninput='rpassword.setCustomValidity(rpassword.value != password.value ? "Passwords do not match." : "")'>
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="id" id="id" name="id" value="" hidden>
                      <input type="text" class="form-control first_name" id="first_name" name="first_name" placeholder="First name" oninput="this.value = this.value.toUpperCase()" required="required">
                      <label for="first_name">First name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input type="text" class="form-control mid_name" id="mid_name" name="mid_name" placeholder="Middle name" oninput="this.value = this.value.toUpperCase()" required="required">
                      <label for="mid_name">Middle name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input type="text" class="form-control last_name" id="last_name" name="last_name" placeholder="Last name" oninput="this.value = this.value.toUpperCase()" required="required">
                      <label for="last_name">Last name</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input type="tel" class="form-control cpnumber" id="cpnumber" name="cpnumber" placeholder="Phone Number (format: xxxx-xxx-xxxx)" pattern="^\d{4}-\d{3}-\d{4}$" required="required">
                      <label for="last_name">Phone Number (format: xxxx-xxx-xxxx)</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input type="date" class="form-control birth_date" id="birth_date" name="birth_date" placeholder="Date of birth" required="required">
                      <label for="last_name">Date of birth</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control username" id="username" name="username" placeholder="Username" required="required">
                      <label for="username">Username</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input type="password" class="form-control" id="rpassword" placeholder="Password" required="required">
                      <label for="rpassword">Re-enter Password</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating mb-3">
                      <select class="form-select brgy" id="brgy" name="brgy" aria-label="Barangay" required="required">
                        <option></option>
                        <option value="001">Agnas (San Miguel Island)</option>
                        <option value="002">Bacolod</option>
                        <option value="003">Bangkilingan</option>
                        <option value="004">Bantayan</option>
                        <option value="005">Baranghawon</option>
                        <option value="006">Basagan</option>
                        <option value="007">Basud (Pob.)</option>
                        <option value="008">Bogñabong</option>
                        <option value="009">Bombon (Pob.)</option>
                        <option value="010">Bonot</option>
                        <option value="011">Buang</option>
                        <option value="012">Buhian</option>
                        <option value="013">Cabagñan</option>
                        <option value="014">Cobo</option>
                        <option value="015">Comon </option>
                        <option value="016">Cormidal</option>
                        <option value="017">Divino Rostro (Pob.)</option>
                        <option value="018">Fatima</option>
                        <option value="019">Guinobat</option>
                        <option value="020">Hacienda (San Miguel Island)</option>
                        <option value="021">Magapo</option>
                        <option value="022">Mariroc</option>
                        <option value="023">Matagbac</option>
                        <option value="024">Oras</option>
                        <option value="025">Oson</option>
                        <option value="026">Panal</option>
                        <option value="027">Pawa</option>
                        <option value="028">Pinagbobong</option>
                        <option value="029">Quinale Cabasan (Pob.)</option>
                        <option value="030">Quinastillojan</option>
                        <option value="031">Rawis (San Miguel Island)</option>
                        <option value="032">Sagurong (San Miguel Island)</option>
                        <option value="033">Salvacion</option>
                        <option value="034">San Antonio</option>
                        <option value="035">San Carlos</option>
                        <option value="036">San Isidro (Boring)</option>
                        <option value="037">San Juan (Pob.)</option>
                        <option value="038">San Lorenzo</option>
                        <option value="039">San Ramon</option>
                        <option value="040">San Roque</option>
                        <option value="041">San Vicente</option>
                        <option value="042">Santo Cristo (Pob.)</option>
                        <option value="043">Sua-Igot</option>
                        <option value="044">Tabiguian</option>
                        <option value="045">Tagas</option>
                        <option value="046">Tayhi (Pob.)</option>
                        <option value="047">Visita (San Miguel Island)</option>
                      </select>
                      <label for="brgy">Barangay</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating mb-3">
                      <select class="form-select access_level" id="access_level" name="access_level" aria-label="Account type" required="required">
                        <option></option>
                        <option value="0" disabled>Administrator</option>
                        <option value="1">Coordinator</option>
                        <option value="2">Encoder</option>
                      </select>
                      <label for="access_level">Account type</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="sign_in.php">Log in</a></p>
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