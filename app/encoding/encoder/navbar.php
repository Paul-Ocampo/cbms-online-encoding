<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Navbar - Brand -->
      <div id="navbar-logo" class="hidethis">
        <a class="navbar-brand d-flex align-items-center justify-content-center" href="index.php">
          <img src="../cbms.png" alt="Logo" class="navbar-logo mr-2">
          <div class="col-form-label-sm">Encoder</div>
        </a>
      </div>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle text-dark" href="#">
            <span>Form ID: <i id="form_id"></i></span>
          </a>
          <!-- Dropdown - Alerts -->
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["username"] ?> </span>
            <i class="fas fa-laugh-wink user-avatar" style="font-size: 2rem;"></i>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->