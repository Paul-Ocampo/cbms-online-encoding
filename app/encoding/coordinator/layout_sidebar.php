<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a id="dashboard_nav_link" class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a id="charts_nav_link" class="nav-link " data-bs-target="#charts_nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="page-progress_survey.php">
            <i class="bi bi-circle"></i><span>Surveyed Progress</span>
          </a>
        </li>
        <li>
          <a href="page-population_history.php">
            <i class="bi bi-circle"></i><span>Population Graph</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a id="tables_nav_link" class="nav-link " data-bs-target="#tables_nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>View Tables</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="page-survey_total.php">
            <i class="bi bi-circle"></i><span>Surveyed | All</span>
          </a>
        </li>
        <li>
          <a href="page-survey_today.php">
            <i class="bi bi-circle"></i><span>Surveyed | Today</span>
          </a>
        </li>
        <li>
          <a href="page-survey_validated.php">
            <i class="bi bi-circle"></i><span>Surveyed | Validated</span>
          </a>
        </li>
        <li>
          <a href="page-survey_pending.php">
            <i class="bi bi-circle"></i><span>Surveyed | Pending</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a id="settings_nav_link" class="nav-link " data-bs-target="#settings_nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="settings_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="page-settings_user_profile.php">
            <i class="bi bi-circle"></i><span>User Profile</span>
          </a>
        </li>
        <li>
          <a href="page-settings_brgy_profile.php">
            <i class="bi bi-circle"></i><span>Barangay Data</span>
          </a>
        </li>
        <li>
          <a href="page-settings_manage_users.php">
            <i class="bi bi-circle"></i><span>Manage Users</span>
          </a>
        </li>
      </ul>
    </li>


  </ul>

</aside><!-- End Sidebar-->