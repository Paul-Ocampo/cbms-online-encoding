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
        <li class="breadcrumb-item"><a>Tables</a></li>
        <li class="breadcrumb-item active"><a>Surveyed Households | Validated</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-body">
            <h5 class="card-title">Surveyed Households <span>| Validated</span></h5>
            <div class="table-responsive">
              <table class="table table-hover text-dark" id="survey_table" width="100%" cellspacing="0">
                <thead>
                  <tr class="bg-primary text-center text-light">
                    <th></th>
                    <th>HPQ ID</th>
                    <th>Barangay</th>
                    <th>HCN</th>
                    <th>Respondent</th>
                    <th>Date encoded</th>
                    <th>Date uploaded</th>
                    <th>Status</th>
                    <th>Encoder</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="survey_table_body"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</main><!-- End #main -->

<?php

include_once 'layout_foot.php';

?>