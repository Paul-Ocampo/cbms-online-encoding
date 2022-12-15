<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once 'layout_head.php';
include_once 'layout_navbar.php';
include_once 'layout_sidebar.php';

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <!-- Content Row -->
    <div class="row">
      <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
        <div class="card shadow mb-4">
          <div class="card-body">
            <h5 class="card-title">Users</h5>
            <div class="table-responsive">
              <table class="table table-hover text-dark" id="users_table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Barangay</th>
                    <th>Access Level</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="users_table_body"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</main><!-- End #main -->
<div class="modal fade" id="user_modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="profile-overview">
          <div class="row">
            <div class="col-lg-3 col-md-3 label" for="first_name">Full Name</div>
            <div class="col-lg-9 col-md-8">
              <input type="text" readonly class="form-control border-0" id="first_name">
              <input type="text" readonly class="form-control border-0" id="last_name">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 label" for="access_level">Account type</div>
            <div class="col-lg-9 col-md-8">
              <select class="form-control border-0" id="access_level" readOnly>
                <option value="0">Administrator</option>
                <option value="1">Coordinator</option>
                <option value="2">Encoder</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 label" for="cpnumber">Phone</div>
            <div class="col-lg-9 col-md-8"><input type="text" readonly class="form-control border-0" id="cpnumber"></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 label" for="birth_date">Date of Birth</div>
            <div class="col-lg-9 col-md-8"><input type="date" readonly class="form-control border-0" id="birth_date"></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 label" for="brgy">Barangay</div>
            <div class="col-lg-9 col-md-8"><input type="text" readonly class="form-control border-0" id="brgy"></div>
          </div>
          <form id="form_activate_user" method="POST">
            <div class="row">
              <div class="col-3 label" for="stat">Status</div>
              <div class="col-6">
                <input id="id" name="id" class="id" type="hidden">
                <select id="stat" name="stat" class="form-control stat">
                  <option value="0">Verified</option>
                  <option value="1">For activation</option>
                </select>
              </div>
              <div class="col-3">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php

  include_once 'layout_foot.php';

  ?>