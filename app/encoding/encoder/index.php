<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

$page_title = "Dashboard";

include_once 'layout_head.php';
include_once 'sidebar.php';
include_once 'navbar.php';

unset($_SESSION["hpq_id"]);

?>

<!-- Begin Page Content -->
<div id="page" class="container-fluid">

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body" onclick="loadTable('encoded');">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-primary text-truncate mb-1">Total encoded HPQs</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="total_encoded"><i class="fa fa-spin fa-hourglass"></i></i></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body" onclick="loadTable('encodedToday');">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-success text-truncate mb-1">Encoded HPQs today</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="encoded_today"><i class="fa fa-spin fa-hourglass"></i></i></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body" onclick="loadTable('validated');">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-info text-truncate mb-1">Validated HPQs</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><i class="validated_hpq"><i class="fa fa-spin fa-hourglass"></i></i></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body" onclick="loadTable('invalid');">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-warning text-truncate mb-1">Invalid HPQs</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="incomplete_hpq"><i class="fa fa-spin fa-hourglass"></i></i></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 id="card-title" class="m-0 font-weight-bold text-primary">Total encoded HPQs</h6>
          <a onclick="load('addhpq.php');" class="btn btn-secondary btn-sm text-white float-sm-right mr-1 ml-1"><i class="fas fa-plus-circle fa-fw"></i><span> Add New</span></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>HPQ ID</th>
                  <th>Barangay</th>
                  <th>HCN</th>
                  <th>Respondent</th>
                  <th>Date encoded</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="dashboardTable"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php

  include_once 'layout_foot.php';

  ?>