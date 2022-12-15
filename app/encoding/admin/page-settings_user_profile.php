<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once 'layout_head.php';
include_once 'layout_navbar.php';
include_once 'layout_sidebar.php';

?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="../assets/img/profile-1.png" alt="Profile" class="rounded-circle">
            <h2><?= $_SESSION["user"] ?></h2>
            <h3>Administrator</h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8"><span class="first_name"></span> <span class="last_name"></span></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Account type</div>
                  <div class="col-lg-9 col-md-8">Administrator</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8"><span class="cpnumber"></span></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                  <div class="col-lg-9 col-md-8"><span class="birth_date"></span></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Barangay</div>
                  <div class="col-lg-9 col-md-8"><span class="brgy"></span></div>
                </div>
              </div>
              <div class="tab-pane fade profile-edit " id="profile-edit">
                <!-- Profile Edit Form -->
                <h5 class="card-title">Update Details</h5>
                <form id="user_updateForm" class="row g-3 needs-validation" method="post">
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
                    <div class="form-floating mb-3">
                      <select class="form-select brgy" id="brgy" name="brgy" aria-label="Barangay">
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
                        <option value="0">Administrator</option>
                        <option value="1" disabled>Coordinator</option>
                        <option value="2" disabled>Encoder</option>
                      </select>
                      <label for="access_level">Account type</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form id="pass_updateform">
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php

include_once 'layout_foot.php';

?>