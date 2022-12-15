<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="../assets/img/logo.png" alt="">
      <span class="d-none d-lg-block ms-2">CBMS <sup>Tabaco</sup></span>
    </a>
    <a id="toggle-sidebar-btn"><i class="bi bi-list toggle-sidebar-btn"></i></a>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle"><?= $_SESSION["username"] ?></span>
          <i class="bi bi-emoji-sunglasses ps-2" style="font-size: 2rem; color: cornflowerblue;"> </i>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= $_SESSION["user"] ?></h6>
            <span>Administrator</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="page-settings_user_profile.php">
              <i class="bi bi-gear me-2"></i>
              <span> Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
              <i class="bi bi-question-circle me-2"></i>
              <span> Need Help?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" onclick="logOut();">
              <i class="bi bi-box-arrow-right me-2"></i>
              <span> Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->