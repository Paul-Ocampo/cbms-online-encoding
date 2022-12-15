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
    <div class="row">
      <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Households Surveyed <span>| All</span></h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-list"></i>
              </div>
              <div class="ps-3">
                <div class="h5 mb-0 font-weight-bold text-primary">
                  <i id="total_households_surveyed">
                    <span class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </span>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Households Surveyed <span>| Today</span></h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-calendar text-info"></i>
              </div>
              <div class="ps-3">
                <div class="h5 mb-0 font-weight-bold text-info">
                  <i id="total_households_surveyed_today">
                    <span class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </span>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Validated Household <span>| All</span></h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-check-lg text-success"></i>
              </div>
              <div class="ps-3">
                <div class="h5 mb-0 font-weight-bold text-success">
                  <i id="total_validated_household">
                    <span class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </span>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Pending For Validation <span>| All</span></h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-pause-fill text-warning"></i>
              </div>
              <div class="ps-3">
                <div class="h5 mb-0 font-weight-bold text-warning">
                  <i id="total_pending_household">
                    <span class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </span>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow mb-4">
          <div class="card-body">
            <h5 class="card-title">Survey overview <span>| As of Today</span></h5>
            <div class="table-responsive slide">
              <table class="table table-hover text-dark" id="survey_progress_table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="15%">Code</th>
                    <th width="30%">Barangay</th>
                    <th width="40%">Progress</th>
                    <th width="15%">Status</th>
                  </tr>
                </thead>
                <tbody id="survey_progress_table_body"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Recent Activity -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="card-title">Recent Activity</div>
            <div class="activity slide">
              <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  Voluptatem blanditiis blanditiis eveniet
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                  Voluptates corrupti molestias voluptatem
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">1 day</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                  Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">2 days</div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                  Est sit eum reiciendis exercitationem
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">4 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                  Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                </div>
              </div><!-- End activity item-->

            </div>

          </div>
        </div><!-- End Recent Activity -->
      </div>
    </div>

  </section>

</main><!-- End #main -->

<?php

include_once 'layout_foot.php';

?>