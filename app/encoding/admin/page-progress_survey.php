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
      <li class="breadcrumb-item active"><a>Survey Progress</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <!-- Content Row -->
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
                    <div class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
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
                    <div class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
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
                    <div class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
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
                  <i id="total_validated_household">
                    <div class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
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
            <h5 class="card-title">Survey Progress <span>| As of Today</span></h5>
            <div id="survey_progress">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Recent Activity -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="card-title">Recent Activity</div>
            <div class="activity">
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