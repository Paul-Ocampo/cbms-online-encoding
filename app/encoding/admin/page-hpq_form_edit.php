<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once 'layout_head.php';

?>

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
          <i class="bi bi-gear ps-2" style="font-size: 2rem; color: cornflowerblue;"> </i>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <span>Options</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" onclick="hpq_save('save');">
              <i class="bi bi-save"></i><span>Save</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" onclick="hpq_save('exit');">
              <i class="bi bi-save"></i><span>Save and Exit</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" onclick="window.location.href = localStorage.getItem('prev_page');unSetSession();">
              <i class="bi bi-box-arrow-right"></i>
              <span>Exit</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li>

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item collpased">
      <a id="dashboard_nav_link" class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a id="pages_nav_link" class="nav-link" data-bs-target="#pages_nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Page navigation</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pages_nav" class="nav-content collapse show" role="tablist">
        <li>
          <a class="nav-link active" data-bs-toggle="tab" href="#main_page1" rel="main_page1"><i class="bi bi-circle"></i><span>Location and<br>Household Characteristics</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page2" rel="main_page2"><i class="bi bi-circle"></i><span>Household<br>members</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page3" rel="main_page3"><i class="bi bi-circle"></i><span>Hunger and<br>Death</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page4" rel="main_page4"><i class="bi bi-circle"></i><span>Water and Sanitation<br>Tenure status</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page5" rel="main_page5"><i class="bi bi-circle"></i><span>Assets and Amenities<br>Waste Management</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page6" rel="main_page6"><i class="bi bi-circle"></i><span>Calamity and<br>Disaster Preparedness</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page7" rel="main_page7"><i class="bi bi-circle"></i><span>Source of Income<br>Agriculture</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page8" rel="main_page8"><i class="bi bi-circle"></i><span>Programs and<br>Services</span></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="tab" href="#main_page9" rel="main_page9"><i class="bi bi-circle"></i><span>Notes and<br>Remarks</span></a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-target="#members_nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Household Members</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <!-- Sidebar -->
      <ul id="members_nav" class="nav-content collapse show" role="tablist">
      </ul>
    </li>

  </ul>

</aside><!-- End Sidebar-->

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
        <form id="addnew_form" method="post">
          <div class="tab-content">
            <div class="tab-pane active" id="main_page1">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">A. Identification</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>I.</th>
                              <th colspan="3">Location</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td colspan="3"><b>Coordinates</b></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>Latitude</td>
                              <td>
                                <input name="id" id="id" value="" type="text" class="form-control form-control-sm" hidden>
                                <input name="latitude" id="latitude" value="" type="text" class="form-control form-control-sm" required="required" readonly>
                              </td>
                              <td rowspan="2">
                                <div class="btn btn-secondary btn-block" type="button" style="width:100%; height:100%">Get<br><b>GPS</b></div>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>Longitude</td>
                              <td>
                                <input name="longitude" id="longitude" value="" type="text" required="required" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                            <tr hidden>
                              <td></td>
                              <td>HPQ ID</td>
                              <td>
                                <input name="hpq_id" id="hpq_id" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>a. Region</td>
                              <td colspan="2">
                                <select name="regn" id="regn" class="form-control form-control-sm" aria-readonly="true">
                                  <option value="05" selected>Region V</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>b. Province</td>
                              <td colspan="2">
                                <select name="prov" id="prov" class="form-control form-control-sm" aria-readonly="true">
                                  <option value="05" selected>Albay</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>c. City/Municipality</td>
                              <td colspan="2">
                                <select name="mun" id="mun" class="form-control form-control-sm" aria-readonly="true">
                                  <option value="017" selected>City of Tabaco</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>d. Barangay</td>
                              <td colspan="2">
                                <select name="brgy" id="brgy" class="form-control form-control-sm" required="required">
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
                                  <option value="012">Buang</option>
                                  <option value="013">Buhian</option>
                                  <option value="014">Cabagñan</option>
                                  <option value="015">Cobo</option>
                                  <option value="016">Comon </option>
                                  <option value="017">Cormidal</option>
                                  <option value="018">Divino Rostro (Pob.)</option>
                                  <option value="019">Fatima</option>
                                  <option value="020">Guinobat</option>
                                  <option value="021">Hacienda (San Miguel Island)</option>
                                  <option value="022">Magapo</option>
                                  <option value="023">Mariroc</option>
                                  <option value="024">Matagbac</option>
                                  <option value="025">Oras</option>
                                  <option value="026">Oson</option>
                                  <option value="027">Panal</option>
                                  <option value="029">Pawa</option>
                                  <option value="030">Pinagbobong</option>
                                  <option value="031">Quinale Cabasan (Pob.)</option>
                                  <option value="032">Quinastillojan</option>
                                  <option value="033">Rawis (San Miguel Island)</option>
                                  <option value="034">Sagurong (San Miguel Island)</option>
                                  <option value="035">Salvacion</option>
                                  <option value="036">San Antonio</option>
                                  <option value="037">San Carlos</option>
                                  <option value="011">San Isidro (Boring)</option>
                                  <option value="038">San Juan (Pob.)</option>
                                  <option value="039">San Lorenzo</option>
                                  <option value="040">San Ramon</option>
                                  <option value="041">San Roque</option>
                                  <option value="042">San Vicente</option>
                                  <option value="044">Santo Cristo (Pob.)</option>
                                  <option value="045">Sua-Igot</option>
                                  <option value="046">Tabiguian</option>
                                  <option value="048">Tagas</option>
                                  <option value="049">Tayhi (Pob.)</option>
                                  <option value="050">Visita (San Miguel Island)</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>e. Zone/Purok</td>
                              <td colspan="2">
                                <select name="purok" id="purok" class="form-control form-control-sm col-auto" required="required">
                                  <option></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>f. Street</td>
                              <td colspan="2">
                                <input name="street" id="street" value="None" type="text" class="form-control form-control-sm" required="required">
                              </td>
                            </tr>
                            <tr>
                              <th>II.</th>
                              <th>Household Identification Number</th>
                              <td colspan="2">
                                <input name="hcn" id="hcn" value="" type="number" min="1" class="form-control form-control-sm" required="required">
                              </td>
                            </tr>
                            <tr>
                              <th>III.</th>
                              <th>Respondent</th>
                              <td colspan="2">
                                <input name="respondent" id="respondent" value="" type="text" class="form-control form-control-sm" required="required">
                              </td>
                            </tr>
                            <tr>
                              <th>IV.</th>
                              <th>Date encoded</th>
                              <td colspan="2">
                                <input name="int_date" id="int_date" value="" type="date" class="form-control form-control-sm col-6" required="required" readonly>
                              </td>
                            </tr>
                            <tr>
                              <th>V.</th>
                              <th>Interviewer</th>
                              <td colspan="2">
                                <input name="interviewer" id="interviewer" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                            <tr>
                              <th>VI.</th>
                              <th>Field Coordinator</th>
                              <td colspan="2">
                                <input name="field_coordinator" id="field_coordinator" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                            <tr>
                              <th>VII.</th>
                              <th>Barangay Captain</th>
                              <td colspan="2">
                                <input name="brgy_captain" id="brgy_captain" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">B. Housing Characteristics</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <td><b>1.</b> House type</td>
                              <td width="50%">
                                <select name="htype" id="htype" class="form-control form-control-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
                                  <option></option>
                                  <option value="1">1 - Single House</option>
                                  <option value="2">2 - Duplex</option>
                                  <option value="3">3 - Multi-unuit residential (three or more units)</option>
                                  <option value="4">4 - Commercial/Industrial/Agricultural building/House (e.g.,
                                    office,factory, others)</option>
                                  <option value="5">5 - Other housing units(boat, cave and others)</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="htype_o_tr">
                              <td>Other type of house</td>
                              <td><input name="htype_o" id="htype_o" value="" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>2.</b> Number of CR</td>
                              <td><input name="numcr" id="numcr" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>3.</b> Number of bedroom</td>
                              <td><input name="numbed" id="numbed" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>4.</b> Roof construction</td>
                              <td>
                                <select name="roof" id="roof" class="form-control form-control-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
                                  <option></option>
                                  <option value="1">1 - Strong materials (galvanized iron, aluminum, tile, concrete, brick,
                                    stone, asbestos)</option>
                                  <option value="2">2 - Light materials (cogon, nipa, anahaw, bamboo)</option>
                                  <option value="3">3 - Salvaged/Makeshift materials</option>
                                  <option value="4">4 - Mixed but predominantly strong materials</option>
                                  <option value="5">5 - Mixed but predominantly light materials</option>
                                  <option value="6">6 - Mixed but predominantly salvaged materials</option>
                                  <option value="7">7 - Not applicable</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td><b>5.</b> Wall construction</td>
                              <td>
                                <select name="wall" id="wall" class="form-control form-control-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
                                  <option></option>
                                  <option value="1">1 - Strong materials (aluminum, tile, concrete, brick, stone, asbestos,
                                    wood, plywood)</option>
                                  <option value="2">2 - Light materials (bamboo, sawali, cogon, nipa, anahaw)</option>
                                  <option value="3">3 - Salvaged/Makeshift materials</option>
                                  <option value="4">4 - Mixed but predominantly strong materials</option>
                                  <option value="5">5 - Mixed but predominantly light materials</option>
                                  <option value="6">6 - Mixed but predominantly salvaged materials</option>
                                  <option value="7">7 - Not applicable</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <td colspan="2"><b>Household Characteristics</b></td>
                            </tr>
                            <tr>
                              <td><b>a.</b> Number of OFWs</td>
                              <td width="50%"><input name="numofw" id="numofw" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>b.</b> Number of families</td>
                              <td width="50%"><input name="numfam" id="numfam" value="" min="1" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>c.</b> Number of pregnant</td>
                              <td width="50%"><input name="numpreg" id="numpreg" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>d.</b> Number of solo-parent</td>
                              <td width="50%"><input name="numunipar" id="numunipar" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                            <tr>
                              <td><b>e.</b> Number of PWDs</td>
                              <td width="50%"><input name="numpwd" id="numpwd" value="" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page2">
              <div class="row">
                <div class="col-lg-12 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Household members</h6>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                          <label for="phsize"><b>Number of household members</b></label>
                        </div>
                        <div class="col-2">
                          <input name="phsize" id="phsize" value="" type="number" min="1" class="form-control form-control-sm" required="required">
                        </div>
                        <div class="col-4">
                          <div id="addmem_btn" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addmemModal">
                            <i class="bi bi-plus fa-sm fa-fw"></i>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless table-hover text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Relation</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="mem_table">
                            <!-- Dynamicaly generated html table for hpq_mem -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page3">
              <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-4 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">L. Hunger</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <td class="text-wrap"><b>68.</b> In the last 3 months, did the household experienced
                                hunger and have nothing to eat?</td>
                              <td width="50%">
                                <select name="hunger_ind" id="hunger_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-xl-8 col-xxl-8  others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">K. Previous household members</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <div class="row">
                          <div class="col-4">
                            <label for="mdead"><b>Number of previous household members</b></label>
                          </div>
                          <div class="col-2">
                            <input name="mdead" id="mdead" value="" type="number" min="0" class="form-control form-control-sm col-12" required="required">
                          </div>
                          <div class="col-4">
                            <div id="adddeceased_btn" class="btn btn-sm btn-success" onclick="add_deceased();" data-bs-toggle="modal" data-bs-target="#adddeceasedModal">
                              <i class="bi bi-plus fa-sm fa-fw"></i>
                            </div>
                          </div>
                        </div>
                        <table class="table table-sm table-borderless table-hover text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Sex</th>
                              <th>Age</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="deceased_table">
                            <!-- Dynamicaly generated html table for hpq_death -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page4">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">M. Water and Sanitation</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <th>73.</th>
                              <td>Household's main source of drinking water</td>
                              <td width="50%">
                                <select name="water" id="water" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Own use faucet, community water system</option>
                                  <option value="2">2 - Shared faucet, community water system</option>
                                  <option value="3">3 - Own use tubed/piped deep well</option>
                                  <option value="4">4 - Shared tubed/piped deep well</option>
                                  <option value="5">5 - Tubed/piped shallow well</option>
                                  <option value="6">6 - Dug well</option>
                                  <option value="7">7 - Protected spring</option>
                                  <option value="8">8 - Unprotected spring</option>
                                  <option value="9">9 - Lake, river, rain and others</option>
                                  <option value="10">10 - Peddler</option>
                                  <option value="11">11 - Bottled water</option>
                                  <option value="12">12 - Others, specify</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="water_o_tr">
                              <td></td>
                              <td class="float-right">Other main source of drinking water</td>
                              <td width="50%"><input name="water_o" id="water_o" value="" type="text" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th>74.</th>
                              <td>Household's toilet facility</td>
                              <td width="50%">
                                <select name="toilet" id="toilet" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Water-sealed, sewer septinc tank, own use</option>
                                  <option value="2">2 - Water-sealed, sewer septinc tank, shared</option>
                                  <option value="3">3 - Water-sealed, other depository, own use</option>
                                  <option value="4">4 - Water-sealed, other depository, shared</option>
                                  <option value="5">5 - Pit with cover</option>
                                  <option value="6">6 - Pit without cover</option>
                                  <option value="7">7 - Others, specify</option>
                                  <option value="8">8 - None</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="toilet_o_tr">
                              <td></td>
                              <td class="float-right">Other type of toilet facility</td>
                              <td width="50%"><input name="toilet_o" id="toilet_o" value="" type="text" class="form-control form-control-sm"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">N. Housing</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <th>75.</th>
                              <td>Tenure status of the housing unit and lot occupied by the household</td>
                              <td width="50%">
                                <select name="tenur" id="tenur" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Own or owner-like possesion house and lot</option>
                                  <option value="2">2 - Rent house/room including lot</option>
                                  <option value="3">3 - Own house/rent lot</option>
                                  <option value="4">4 - Own house/rent-free lot with consent of owner</option>
                                  <option value="5">5 - Own house/rent-free lot without consent of owner</option>
                                  <option value="6">6 - Rent free house and lot with consent of owner</option>
                                  <option value="7">7 - Rent free house and lot without consent of owner</option>
                                  <option value="8">8 - Living in a public place with rent</option>
                                  <option value="9">9 - Living in a public place without rent</option>
                                  <option value="10">10 - Mortgage</option>
                                  <option value="11">11 - Others, specify</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="tenur_o_tr">
                              <th></th>
                              <td class="float-right">Other type of tenur status</td>
                              <td width="30%"><input name="tenur_o" id="tenur_o" value="" type="text" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th>76.</th>
                              <td>Does the house have a building permit?</td>
                              <td width="50%">
                                <select name="bpermit" id="bpermit" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <th>77.</th>
                              <td>When was the house built?</td>
                              <td width="50%"><input name="built_when" id="built_when" value="" min="1970" max="" type="number" class="form-control form-control-sm" placeholder="Year" required="required">
                              </td>
                            </tr>
                            <tr>
                              <th>78.</th>
                              <td>How long is the household living in this house?</td>
                              <td width="50%"><input name="len_stay" id="len_stay" value="" min="0" type="number" class="form-control form-control-sm" placeholder="Number of years"></td>
                            </tr>
                            <tr>
                              <th>79.</th>
                              <td>Is there any electricity in dwelling place?</td>
                              <td width="50%">
                                <select name="elec_ind" id="elec_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="elec_type_tr">
                              <th>80.</th>
                              <td>What is the primary source of electricity of the dwelling place?</td>
                              <td width="50%">
                                <select name="elec_type" id="elec_type" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Electric company (APEC)</option>
                                  <option value="2">2 - Gas-powered generator</option>
                                  <option value="3">3 - Solar-powered generator</option>
                                  <option value="4">4 - Hydro-powered generator</option>
                                  <option value="5">5 - Battery</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="imprnt_tr">
                              <th>81.</th>
                              <td>Estimated rent of the house/lot</td>
                              <td width="50%"><input name="imprnt" id="imprnt" value="" min="300" type="number" class="form-control form-control-sm"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">N.1 Relocation</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <th>82.</th>
                              <td>Is the household in a relocation area?</td>
                              <td width="30%">
                                <select name="reloc_ind" id="reloc_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="reloc_tr">
                              <th>83.</th>
                              <td>Reason for being relocated</td>
                              <td width="30%">
                                <select name="reloc_reason" id="reloc_reason" class="form-control form-control-sm reloc_inputs" required="required">
                                  <option></option>
                                  <option value="1">1 - Located on a hazard prone area</option>
                                  <option value="2">2 - No house to live in</option>
                                  <option value="3">3 - Victim of calamity (natural/man-made)</option>
                                  <option value="4">4 - Government Infrastructure</option>
                                  <option value="5">5 - Threat of eviction</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="reloc_tr">
                              <th>84.</th>
                              <td>Beneficiary of what Housing Project</td>
                              <td width="30%">
                                <select name="housing" id="housing" class="form-control form-control-sm reloc_inputs" required="required">
                                  <option></option>
                                  <option value="1">1 - Lot only</option>
                                  <option value="2">2 - Adopt-A-Home</option>
                                  <option value="3">3 - Cash Assistance</option>
                                  <option value="4">4 - Core Shelter</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="reloc_tr">
                              <th>85.</th>
                              <td>Place currently staying</td>
                              <td width="30%">
                                <select name="curstay" id="curstay" class="form-control form-control-sm reloc_inputs" required="required">
                                  <option></option>
                                  <option value="1">1 - Occupied (Habitable)</option>
                                  <option value="2">2 - Unoccupied (Habitable)</option>
                                  <option value="3">3 - Unoccupied (Non-habitable)</option>
                                  <option value="4">4 - Vacant lot</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page5">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">P. Assets and Amenities</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th colspan="4">94. Number of owned assets/amenities</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Radio/Radio Casette</td>
                              <td width="95"><input name="radio" id="radio" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Televsion</td>
                              <td width="95"><input name="tv" id="tv" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>DVD Player</td>
                              <td><input name="dvd" id="dvd" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Component/Stereo set</td>
                              <td><input name="stereo" id="stereo" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Karaoke/Videoke machine</td>
                              <td><input name="karaoke" id="karaoke" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Refrigerator/Freezer</td>
                              <td><input name="refrigerator" id="refrigerator" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Electric fan</td>
                              <td><input name="efan" id="efan" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Flat iron</td>
                              <td><input name="iron" id="iron" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>LPG Gas stove/Gas range</td>
                              <td><input name="stove" id="stove" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Washing machine</td>
                              <td><input name="washmachine" id="washmachine" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Microwave oven</td>
                              <td><input name="oven" id="oven" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Computer set/Laptop</td>
                              <td><input name="computer" id="computer" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Internet connection</td>
                              <td><input name="internet" id="internet" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Cellphone</td>
                              <td><input name="cellphone" id="cellphone" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Landline telephon</td>
                              <td><input name="telephone" id="telephone" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Air conditioner</td>
                              <td><input name="aircon" id="aircon" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Sewing machine</td>
                              <td><input name="sew" id="sew" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Car/Jeep/etc.</td>
                              <td><input name="car" id="car" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Tricycle/Motorcycle</td>
                              <td><input name="motor" id="motor" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Sofa/Sala set</td>
                              <td><input name="sofa" id="sofa" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Dinning set</td>
                              <td><input name="dinning" id="dinning" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Agricultural land</td>
                              <td><input name="land_agri" id="land_agri" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <td>Residential land</td>
                              <td><input name="land_res" id="land_res" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td>Commercial land</td>
                              <td><input name="land_com" id="land_com" value="" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Q. Waste Management</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <thead>
                            <th colspan="2">96. Garbage disposal?</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td> 1. Garbage collection</td>
                              <td width="30%">
                                <select name="garb_collect" id="garb_collect" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>2. Burning</td>
                              <td width="30%">
                                <select name="garb_burn" id="garb_burn" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>3. Composting</td>
                              <td width="30%">
                                <select name="garb_compost" id="garb_compost" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>4. Recycling</td>
                              <td width="30%">
                                <select name="garb_recycle" id="garb_recycle" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>5. Waste segregation</td>
                              <td width="30%">
                                <select name="garb_segregate" id="garb_segregate" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>6. Pit with cover</td>
                              <td width="30%">
                                <select name="garb_pitcover" id="garb_pitcover" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>7. Pit without cover</td>
                              <td width="30%">
                                <select name="garb_pitnocover" id="garb_pitnocover" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>8. River/Vacant Lot</td>
                              <td width="30%">
                                <select name="garb_river" id="garb_river" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>9. Others, specify</td>
                              <td width="30%">
                                <select name="garb_other_ind" id="garb_other_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="garb_other_o_tr">
                              <td colspan="2">
                                <input name="garb_other_o" id="garb_other_o" value="" type="text" class="form-control form-control-sm" placeholder="Other type of garbage disposal">
                              </td>
                            </tr>
                            <tr class="garb_collector_tr">
                              <td><b>97.</b> Collector of garbage</td>
                              <td width="30%">
                                <select name="garb_collector" id="garb_collector" class="form-control form-control-sm garb_collect_inputs">
                                  <option></option>
                                  <option value="1">1 - City/Municipality collector</option>
                                  <option value="2">2 - Barangay collector</option>
                                  <option value="3">3 - Private collector</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="garb_collector_tr">
                              <td><b>98.</b> Frequency of collection</td>
                              <td width="30%">
                                <select name="garb_collector_freq" id="garb_collector_freq" class="form-control form-control-sm garb_collect_inputs" required="required">
                                  <option></option>
                                  <option value="1">1 - Daily</option>
                                  <option value="2">2 - 3 times a week</option>
                                  <option value="3">3 - 2 times a week</option>
                                  <option value="4">4 - Once a week</option>
                                  <option value="5">5 - Others, specify</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="garb_collector_freq_o_tr">
                              <td colspan="2">
                                <input name="garb_collector_freq_o" id="garb_collector_freq_o" value="" type="text" class="form-control form-control-sm garb_collect_inputs" placeholder="Other type of garbage disposal">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page6">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">R. Calamity</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th width="40%"><label>99. Experienced calamity last 3 years</label></th>
                              <th width="20%"><label>Yes/No</label></th>
                              <th width="20%"><label>100. Received assistance?</label></th>
                              <th width="20%"><label>101. Received assistance from:</label></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1. Typhoon</td>
                              <td>
                                <select name="calam_typhoon_ind" id="calam_typhoon_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_typhoon_aid_ind" id="calam_typhoon_aid_ind" class="form-control form-control-sm calam_typhoon_inputs">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_typhoon_aid_source" id="calam_typhoon_aid_source" class="form-control form-control-sm calam_typhoon_inputs">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>2. Flood</td>
                              <td>
                                <select name="calam_flood_ind" id="calam_flood_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_flood_aid_ind" id="calam_flood_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_flood_aid_source" id="calam_flood_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>3. Drought</td>
                              <td>
                                <select name="calam_drought_ind" id="calam_drought_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_drought_aid_ind" id="calam_drought_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_drought_aid_source" id="calam_drought_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>4. Earthquake</td>
                              <td>
                                <select name="calam_earthquake_ind" id="calam_earthquake_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_earthquake_aid_ind" id="calam_earthquake_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_earthquake_aid_source" id="calam_earthquake_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>5. Volcanic eruption</td>
                              <td>
                                <select name="calam_eruption_ind" id="calam_eruption_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_eruption_aid_ind" id="calam_eruption_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_eruption_aid_source" id="calam_eruption_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>6. Fire</td>
                              <td>
                                <select name="calam_fire_ind" id="calam_fire_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_fire_aid_ind" id="calam_fire_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_fire_aid_source" id="calam_fire_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>7. Epidemic/Pandemic</td>
                              <td>
                                <select name="calam_epidemic_ind" id="calam_epidemic_ind" class="form-control form-control-sm" required="required">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_epidemic_aid_ind" id="calam_epidemic_aid_ind" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Yes</option>
                                  <option value="2">2 - No</option>
                                </select>
                              </td>
                              <td>
                                <select name="calam_epidemic_aid_source" id="calam_epidemic_aid_source" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - Government</option>
                                  <option value="2">2 - Non-Government Organizations</option>
                                  <option value="3">3 - Relatives</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="calam_evac_tr">
                              <td colspan="2"><b>98. </b>Temporary evacuated to:</td>
                              <td colspan="2">
                                <select name="calam_evac" id="calam_evac" class="form-control form-control-sm">
                                  <option></option>
                                  <option value="1">1 - School</option>
                                  <option value="2">2 - Church</option>
                                  <option value="3">3 - Covered court/Gym</option>
                                  <option value="4">4 - Relative's house</option>
                                  <option value="5">5 - Neighbor's house</option>
                                  <option value="6">6 - Brgy. Hall/Chapel</option>
                                  <option value="7">7 - LGU Designated evacuation centers</option>
                                  <option value="8">8 - Did not evacuate</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page7">
              <div class="row">
                <div class="col-lg-12 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">T. Source of Income</h6>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-xl-6">
                          <div class="table-responsive">
                            <table class="table table-sm table-borderless text-dark" cellspacing="0">
                              <thead>
                                <th width="5%">T.1.</th>
                                <th>Entreprenuerial Activities</th>
                                <th width="10%">Yes/No</th>
                                <th width="20%">In-cash</th>
                                <th width="20%">In-kind</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>103.</th>
                                  <td>Crop farming/Gardening</td>
                                  <td>
                                    <select name="crop_ind" id="crop_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="crop_csh" id="crop_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="crop_knd" id="crop_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>104.</th>
                                  <td>Livestock/Poultry raising</td>
                                  <td>
                                    <select name="live_ind" id="live_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="live_csh" id="live_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="live_knd" id="live_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>105.</th>
                                  <td>Fishing</td>
                                  <td>
                                    <select name="fish_ind" id="fish_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="fish_csh" id="fish_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="fish_knd" id="fish_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>106.</th>
                                  <td>Forestry and Hunting</td>
                                  <td>
                                    <select name="hunt_ind" id="hunt_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="hunt_csh" id="hunt_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="hunt_knd" id="hunt_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>107.</th>
                                  <td>Wholesale and Retail</td>
                                  <td>
                                    <select name="sale_ind" id="sale_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="sale_csh" id="sale_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="sale_knd" id="sale_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>108.</th>
                                  <td>Manufacturing</td>
                                  <td>
                                    <select name="manu_ind" id="manu_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="manu_csh" id="manu_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="manu_knd" id="manu_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>109.</th>
                                  <td>Community, Social, Recreational, and Personal Activities</td>
                                  <td>
                                    <select name="social_ind" id="social_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="social_csh" id="social_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="social_knd" id="social_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>110.</th>
                                  <td>Transportation/Communication Services</td>
                                  <td>
                                    <select name="trans_ind" id="trans_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="trans_csh" id="trans_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="trans_knd" id="trans_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>111.</th>
                                  <td>Mining and Quarrying</td>
                                  <td>
                                    <select name="quar_ind" id="quar_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="quar_csh" id="quar_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="quar_knd" id="quar_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>112.</th>
                                  <td>Construction</td>
                                  <td>
                                    <select name="cons_ind" id="cons_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="cons_csh" id="cons_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="cons_knd" id="cons_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>113.</th>
                                  <td>Activities not elsewhere classified</td>
                                  <td>
                                    <select name="oea_ind" id="oea_ind" class="form-control form-control-sm" required="required">
                                      <option></option>
                                      <option value="1">1 - Yes</option>
                                      <option value="2">2 - No</option>
                                    </select>
                                  </td>
                                  <td><input name="oea_csh" id="oea_csh" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                  <td><input name="oea_knd" id="oea_knd" value="0" min="0" type="number" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                  <th>114.</th>
                                  <th colspan="2">Total Net Income from Entreprenuerial Activities</th>
                                  <td><input name="totea_csh" id="totea_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                  <td><input name="totea_knd" id="totea_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                                <tr>
                                  <th colspan="3">T.2. 115. Total Salaries and Wages from employed members</th>
                                  <td><input name="totwage_csh" id="totwage_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                  <td><input name="totwage_knd" id="totwage_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                          <div class="table-responsive">
                            <table class="table table-sm table-borderless text-dark" cellspacing="0">
                              <thead>
                                <th width="5%">T.3.</th>
                                <th>Other sources of income</th>
                                <th width="20%">In-cash</th>
                                <th width="20%">In-kind</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>116.</th>
                                  <td>Net share of crops, fruits, and vegetables produced, aquaculture products
                                    harvested,
                                    livestock or poultry raised by other households</td>
                                  <td><input name="ags_csh" id="ags_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="ags_knd" id="ags_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>117.</th>
                                  <td>Remittances from Overseas Filipino Workers</td>
                                  <td><input name="ofw_csh" id="ofw_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="ofw_knd" id="ofw_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>118.</th>
                                  <td>Cash receipts, gifts, support, relief, and other forms of assistance from
                                    abroad
                                  </td>
                                  <td><input name="supf_csh" id="supf_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="supf_knd" id="supf_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>119.</th>
                                  <td>Cash receipts, support, relief from domestic sources</td>
                                  <td><input name="supr_csh" id="supr_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="supr_knd" id="supr_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>120.</th>
                                  <td>Rentals received from non-agricultural lands, buildings, spaces, and other
                                    properties</td>
                                  <td><input name="rent_csh" id="rent_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="rent_knd" id="rent_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>121.</th>
                                  <td>Interest from bankdeposits, interest from loans extended to other families.
                                  </td>
                                  <td><input name="intr_csh" id="intr_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="intr_knd" id="intr_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>122.</th>
                                  <td>Pension and retirement, workmen's compensation, and social security benefits
                                  </td>
                                  <td><input name="pen_csh" id="pen_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="pen_knd" id="pen_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>123.</th>
                                  <td>Dividends from investments</td>
                                  <td><input name="div_csh" id="div_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="div_knd" id="div_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>124.</th>
                                  <td>Other sources of income not elsewhere classified</td>
                                  <td><input name="oth_csh" id="oth_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                  <td><input name="oth_knd" id="oth_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                                </tr>
                                <tr>
                                  <th>125.</th>
                                  <th>Total Gross income from other source of income</th>
                                  <td><input name="etot_csh" id="etot_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                  <td><input name="etot_knd" id="etot_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                                <tr>
                                  <th>126</th>
                                  <th>Total estimated rent of the house</th>
                                  <td colspan="2"><input name="imprnttot" id="imprnttot" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                                <tr>
                                  <th>127.</th>
                                  <th>Total household income in cash and in kind</th>
                                  <td><input name="totin_csh" id="totin_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                  <td><input name="totin_knd" id="totin_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                                <tr>
                                  <th>128.</th>
                                  <th>Total household income</th>
                                  <td colspan="2"><input name="totin" id="totin" value="0" min="0" type="number" class="form-control form-control-sm" required="required" readonly></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-6 col-xxl-6 agricrop">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">U. Agriculture - Crop Farming</h6>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-xl-6">
                          <div class="table-responsive">
                            <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                              <tbody>
                                <tr>
                                  <th>129.</th>
                                  <td>Ownership status of household on the agricultural land</td>
                                  <td width="30%">
                                    <select name="agri_own_id" id="agri_own_id" class="form-control form-control-sm agri_inputs">
                                      <option></option>
                                      <option value="1">1 - Owned</option>
                                      <option value="2">2 - Owner-like possesion</option>
                                      <option value="3">3 - Tenant</option>
                                      <option value="4">4 - Rent</option>
                                      <option value="5">5 - REnt free</option>
                                      <option value="6">6 - CLT/CLOA</option>
                                      <option value="7">7 - CADT/CALT</option>
                                      <option value="8">8 - CBFMA/Stewardship</option>
                                      <option value="9">9 - Others, specify</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr class="agri_own_o_tr">
                                  <th></th>
                                  <td colspan="2"><input name="agri_own_o" id="agri_own_o" value="" type="text" class="form-control form-control-sm agri_inputs" placeholder="Other type of land ownership"></td>
                                </tr>
                                <tr>
                                  <th>130.</th>
                                  <td>Total area of agricultural land (m<sup>2</sup>)</td>
                                  <td width="30%"><input name="agri_own_area" id="agri_own_area" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                          <div class="table-responsive">
                            <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th colspan="2">Area per type of crops</th>
                                  <th>Area (m<sup>2</sup>)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1.</td>
                                  <td width="50%"> Rice</td>
                                  <td width="45%"><input name="agri_rice" id="agri_rice" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>2. </td>
                                  <td>Vegetables</td>
                                  <td width="20%"><input name="agri_vegy" id="agri_vegy" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>3. </td>
                                  <td>Corn</td>
                                  <td width="20%"><input name="agri_corn" id="agri_corn" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>4. </td>
                                  <td>Sweet Potato</td>
                                  <td width="20%"><input name="agri_potato" id="agri_potato" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>5. </td>
                                  <td>Cassava</td>
                                  <td width="20%"><input name="agri_cassava" id="agri_cassava" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>6. </td>
                                  <td>Hemp (Abaca)</td>
                                  <td width="20%"><input name="agri_hemp" id="agri_hemp" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>7. </td>
                                  <td>Coconut</td>
                                  <td width="20%"><input name="agri_coco" id="agri_coco" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td>8. </td>
                                  <td>Others, specify</td>
                                  <td width="20%"><input name="agri_other" id="agri_other" value="0" min="0" type="number" class="form-control form-control-sm agri_inputs"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td width="20%" colspan="2"><input name="agri_other_o" id="agri_other_o" value="" type="text" class="form-control form-control-sm agri_inputs" placeholder="Other type of crops"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page8">
              <div class="row">
                <div class="col-md-12 col-lg-10 col-xl-8 col-xxl-8 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">V. Programs</h6>
                      <a name="addprogbtn" id="addprogbtn" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#addprogModal">
                        <i class="bi bi-plus"></i>
                      </a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless col-sm-12 col-md-12 col-lg-9 col-xl-6 text-dark" cellspacing="10">
                          <tr>
                            <td>
                              <b>Add programs received by the household</b>
                            </td>
                            <td width="20%">
                            </td>
                            <td>
                            </td>
                          </tr>
                        </table>
                        <table class="table table-sm table-borderless table-hover text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th width="40%">Types of programs</th>
                              <th width="40%">Name of program</th>
                              <th width="20%">Action</th>
                            </tr>
                          </thead>
                          <tbody id="prog_table">
                            <!-- Dynamicaly generated html table for hpq_prog -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="main_page9">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 others">
                  <div class="card">
                    <div class="card-header mb-4 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">VI. Notes and Remarks</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th width="50%">Notes and Remarks</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="2">
                                <textarea name="note" id="note" value="" type="textarea" class="form-control form-control-sm" required="required"></textarea>
                            </tr>
                            <tr>
                              <td width="50%">Form status</td>
                              <td>
                                <select id="hpq_stat" name="hpq_stat" class="form-control form-control-sm" required="required">
                                  <option value="0">Incomplete</option>
                                  <option value="1">Not validated</option>
                                  <option value="2">Validated</option>
                                  <option value="3" disabled>Uploaded</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td><label>Encoder:</label></td>
                              <td>
                                <input name="encoder" id="encoder" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                            <tr>
                              <td><label>Filename:</label></td>
                              <td>
                                <input name="hpq_filename" id="hpq_filename" value="" type="text" class="form-control form-control-sm" readonly>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="py-3 d-flex flex-row align-items-center justify-content-between">
          <button id="prev" class="btn btn-primary text-white mr-1 ml-1" disabled>
            <i class="bi bi-arrow-left"></i> Prev
          </button>
          <button id="next" class="btn btn-primary text-white mr-1 ml-1">
            Next <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <div class="required-field rounded">
    <a class="icon" href="#" data-bs-toggle="dropdown">
      <span class="m-2 text-light" id="requiredField"></span>
    </a>
    <ul id="reqFields" class="dropdown-menu dropdown-menu-end py-0 text-light" style="width: 200px;  background: rgba(90, 92, 105, 0.75);">

    </ul>
  </div>

<!-- Map Modal -->
<div class="modal fade" id="getLocModal" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Capture location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="map">
          <div id="crosshair"><i class="fas fa-plus"></i></div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success text-light" type="button" onclick="getCoordinates();">OK</button>
        <button class="btn btn-secondary text-light" type="button" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary text-light" type="button" onclick="getLocation();">Find me</button>
      </div>
    </div>
  </div>
</div>

<!-- Member Modal -->
<div class="modal fade" id="addmemModal" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addmem_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="basicinfo_div col-lg-12 col-xl-6">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">C. Demography</th>
                  </tr>
                </thead>
                <tbody>
                  <tr hidden>
                    <td><input name="id" id="id" value="" readonly></td>
                  </tr>
                  <tr hidden>
                    <td><input name="hpq_id" id="hpq_id" value="" readonly></td>
                  </tr>
                  <tr hidden>
                    <td><input name="memindex" id="memindex" value="" readonly></td>
                  <tr>
                    <td width="50%">7a. Last name</td>
                    <td><input name="lname" id="lname" value="" type="text" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>7b. First name</td>
                    <td><input name="fname" id="fname" value="" type="text" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>7c. Middle name</td>
                    <td><input name="mname" id="mname" value="" type="text" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>8. Nuclear family</td>
                    <td>
                      <select name="nucfam" id="nucfam" class="form-control form-control-sm" aria-readonly="true">
                        <option></option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>9. Relation to the head of the <strong>Household</strong></td>
                    <td>
                      <select name="reln" id="reln" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Head</option>
                        <option value="2">2 - Spouse</option>
                        <option value="3">3 - Son/Daughter</option>
                        <option value="4">4 - Son-in-Law/Daughter-in-Law</option>
                        <option value="5">5 - Grandchildren</option>
                        <option value="6">6 - Parents</option>
                        <option value="7">7 - Father-in-Law/Mother-in-Law</option>
                        <option value="8">8 - Brother/Sister</option>
                        <option value="9">9 - Uncle/Aunt</option>
                        <option value="10">10 - Grandparents</option>
                        <option value="11">11 - Nephew/Niece</option>
                        <option value="12">12 - Housemaid/Houseboy</option>
                        <option value="13">13 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="reln_o_tr">
                    <td>Other relation:</td>
                    <td><input name="reln_o" id="reln_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                  <tr class="reln2_tr">
                    <td>10. Relation to the head of the <strong>Family</strong></td>
                    <td>
                      <select name="reln2" id="reln2" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Head</option>
                        <option value="2">2 - Spouse</option>
                        <option value="3">3 - Son/Daughter</option>
                        <option value="4">4 - Son-in-Law/Daughter-in-Law</option>
                        <option value="5">5 - Grandchildren</option>
                        <option value="6">6 - Parents</option>
                        <option value="7">7 - Father-in-Law/Mother-in-Law</option>
                        <option value="8">8 - Brother/Sister</option>
                        <option value="9">9 - Uncle/Aunt</option>
                        <option value="10">10 - Grandparents</option>
                        <option value="11">11 - Nephew/Niece</option>
                        <option value="12">12 - Housemaid/Houseboy</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="reln2_o_tr">
                    <td>Other relation:</td>
                    <td><input name="reln2_o" id="reln2_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                  <tr>
                    <td>11a. Birth date</td>
                    <td><input name="birthdate" id="birthdate" value="" type="date" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>11b. Age</td>
                    <td>
                      <input name="age_yr" id="age" value="" min="0" max="125" type="number" class="form-control form-control-sm col-6" required="required" readonly>
                    </td>
                  </tr>
                  <tr>
                    <td>12. Sex</td>
                    <td>
                      <select name="sex" id="sex" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Male</option>
                        <option value="2">2 - Female</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="gender">
                    <td>13a. Is <strong><i class="dfname">_____</i></strong> a member of LGBTQIA</td>
                    <td>
                      <select name="gender" id="gender" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="gender_t">
                    <td>13b. <strong><i class="dfname">_____</i></strong> a?</td>
                    <td>
                      <select name="gender_t" id="gender_t" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Lesbian</option>
                        <option value="2">2 - Gay</option>
                        <option value="3">3 - Bisexual</option>
                        <option value="4">4 - Trangender</option>
                        <option value="5">5 - Queer</option>
                        <option value="6">6 - Intersex</option>
                        <option value="7">7 - Asexual</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>14. Registered birth</td>
                    <td>
                      <select name="regbirth" id="regbirth" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="civstat">
                    <td>15. Civil status</td>
                    <td>
                      <select name="civstat" id="civstat" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Single</option>
                        <option value="2">2 - Married</option>
                        <option value="3">3 - Widow</option>
                        <option value="4">4 - Separated</option>
                        <option value="5">5 - Common Law/Live-In</option>
                        <option value="6">6 - Don't know</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>16a. Religion</td>
                    <td>
                      <select name="religion" id="religion" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Roman Catholic</option>
                        <option value="2">2 - Protestant</option>
                        <option value="3">3 - Iglesia Ni Cristo</option>
                        <option value="4">4 - Aglipay</option>
                        <option value="5">5 - Islam</option>
                        <option value="6">6 - Mormons</option>
                        <option value="6">7 - Jehova's Witnesses</option>
                        <option value="6">8 - 7th-day Adventists</option>
                        <option value="7">9 - Others</option>
                        <option value="8">10 - None</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="religion_o">
                    <td class="float-right">Other religion</td>
                    <td><input name="religion_o" id="religion_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>17a. Ethnicity by blood</td>
                    <td>
                      <select name="ethgrp" id="ethgrp" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Bikolnon</option>
                        <option value="2">2 - Ibanag</option>
                        <option value="3">3 - Kankanay</option>
                        <option value="4">4 - Mangyan</option>
                        <option value="5">5 - Ibaloi</option>
                        <option value="6">6 - Aeta</option>
                        <option value="7">7 - Tagbanuas</option>
                        <option value="8">8 - Cuyonen</option>
                        <option value="9">9 - Subanen</option>
                        <option value="10">10 - B'laan</option>
                        <option value="11">11 - Mandaya</option>
                        <option value="12">12 - Manobo</option>
                        <option value="13">13 - Teduray</option>
                        <option value="14">14 - Bukidnon</option>
                        <option value="15">15 - Ati</option>
                        <option value="16">16 - Cimaron</option>
                        <option value="17">17 - Itom</option>
                        <option value="18">18 - Pullon</option>
                        <option value="19">19 - Badjao</option>
                        <option value="20">20 - Batak</option>
                        <option value="21">21 - Palawano</option>
                        <option value="22">22 - Tau't Bato</option>
                        <option value="23">23 - Dumagat</option>
                        <option value="24">24 - T'boli</option>
                        <option value="25">25 - ago</option>
                        <option value="26">26 - Others</option>
                        <option value="27">27 - None</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ethgrp_o">
                    <td class="float-right">Other ethnic group</td>
                    <td><input name="ethgrp_o" id="ethgrp_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                  <tr class="ofwind_tr">
                    <td>18. Is <i><b class="dfname">_____</b></i> an OFW</td>
                    <td>
                      <select name="ofwind" id="ofwind" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="mlenres_tr">
                    <td>19. Address last 12 months</td>
                    <td>
                      <select name="mlenres" id="mlenres" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Same address</option>
                        <option value="2">2 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="mlenres_o_tr">
                    <td class="float-right">Address 12 months ago</td>
                    <td><input name="mlenres_o" id="mlenres_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12 col-xl-6 ofw">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">For Overseas Filipino Workers</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">20. Is <i><b class="dfname">_____</b></i> Land-based or Sea-based</td>
                    <td>
                      <select name="ofw_land_sea" id="ofw_land_sea" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Land-based</option>
                        <option value="2">2 - Sea-based</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>21. Country</td>
                    <td><input name="ofw_country" id="ofw_country" value="" type="text" class="form-control form-control-sm ofw_inputs"></td>
                  </tr>
                  <tr>
                    <td>22. Length of stay</td>
                    <td><input name="ofw_len_stay" id="ofw_len_stay" value="" type="number" min="0" class="form-control form-control-sm ofw_inputs" placeholder="Number of months"></td>
                  </tr>
                  <tr>
                    <td>23. Reason for leaving Philippines</td>
                    <td>
                      <select name="ofw_reason_leave" id="ofw_reason_leave" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Overseas Contract Worker</option>
                        <option value="2">2 - Worker (Not OCW)</option>
                        <option value="3">3 - Working at PH Embassy/Consulate abroad</option>
                        <option value="4">4 - Tourist</option>
                        <option value="5">5 - Student</option>
                        <option value="6">6 - Imigrant</option>
                        <option value="7">7 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_reason_leave_o_tr">
                    <td class="float-right">Other reason</td>
                    <td><input name="ofw_reason_leave_o" id="ofw_reason_leave_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>24. Primary reason for returning to Philippines</td>
                    <td>
                      <select name="ofw_reason_return" id="ofw_reason_return" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Vacation</option>
                        <option value="2">2 - Finished contract</option>
                        <option value="3">3 - Working at PH Embassy/Consulate abroad</option>
                        <option value="4">4 - Permanent return</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_reason_return_o_tr">
                    <td class="float-right">Other reason</td>
                    <td><input name="ofw_reason_return_o" id="ofw_reason_return_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>25. Planning to stay permanently in the Philippines</td>
                    <td>
                      <select name="ofw_stay_permanent" id="ofw_stay_permanent" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>26. Plans for returning to the Philippines</td>
                    <td>
                      <select name="ofw_plans_return" id="ofw_plans_return" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Retire</option>
                        <option value="2">2 - Start a business</option>
                        <option value="3">3 - Find a work</option>
                        <option value="4">4 - Volunteer</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_plans_return_o_tr">
                    <td class="float-right">Other plan upon returning</td>
                    <td><input name="ofw_plans_return_o" id="ofw_plans_return_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>27. Where the last remitance spent</td>
                    <td>
                      <select name="ofw_remit_spent" id="ofw_remit_spent" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Consumptions</option>
                        <option value="2">2 - Investments</option>
                        <option value="3">3 - Savings</option>
                        <option value="4">4 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_remit_spent_o_tr">
                    <td class="float-right">Other</td>
                    <td><input name="ofw_remit_spent_o" id="ofw_remit_spent_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>28. Services to avail</td>
                    <td>
                      <select name="ofw_services" id="ofw_services" class="form-control form-control-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Financial literacy Training</option>
                        <option value="2">2 - Leadership and Management Training</option>
                        <option value="3">3 - Information Technology Related Training</option>
                        <option value="4">4 - Communication skills Training</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_services_o_tr">
                    <td class="float-right">Other service</td>
                    <td><input name="ofw_services_o" id="ofw_services_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12 col-xl-6 educ">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">D. Education</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" class="float-center"><b>For 3 years old and above</b></td>
                  </tr>
                  <tr class="educ">
                    <td width="50%">29. Is <i><b class="dfname">_____</b></i> currently attending school</td>
                    <td>
                      <select name="educind" id="educind" class="form-control form-control-sm educ_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="gradel_tr">
                    <td>30. Grade/Year</td>
                    <td>
                      <select name="gradel" id="gradel" class="form-control form-control-sm educ_inputs">
                        <optgroup>
                          <option></option>
                          <option value="0">0 - No grade</option>
                          <option value="1">1 - Day Care</option>
                          <option value="2">2 - Kindergarten/Preparatory</option>
                        </optgroup>
                        <optgroup label="Grade School">
                          <option value="11">11 - Grade I</option>
                          <option value="12">12 - Grade II</option>
                          <option value="13">13 - Grade III</option>
                          <option value="14">14 - Grade IV</option>
                          <option value="15">15 - Grade V</option>
                          <option value="16">16 - Grade VI</option>
                        </optgroup>
                        <optgroup label="Junior High School">
                          <option value="17">17 - Grade VII</option>
                          <option value="18">18 - Grade VIII</option>
                          <option value="19">19 - Grade IX/3rd Year High School</option>
                          <option value="20">20 - Grade X/4th Year High School</option>
                        </optgroup>
                        <optgroup label="Senior High School">
                          <option value="21">21 - Grade XI</option>
                          <option value="22">22 - Grade XII</option>
                        </optgroup>
                        <optgroup label="Technical Vocational">
                          <option value="23">23 - 1st Year PS/N-TV</option>
                          <option value="24">24 - 2nd Year PS/N-TV</option>
                          <option value="25">25 - 3rd Year PS/N-TV</option>
                        </optgroup>
                        <optgroup label="College">
                          <option value="31">31 - 1st Year College</option>
                          <option value="32">32 - 2nd Year College</option>
                          <option value="33">33 - 3rd Year College</option>
                          <option value="34">34 - 3rd Year College</option>
                        </optgroup>
                        <optgroup label="Masters/PhD">
                          <option value="41">41 - Post Grad w/ units, specify course</option>
                        </optgroup>
                        <optgroup label="ALS/SPED">
                          <option value="51">51 - ALS Elementary</option>
                          <option value="52">52 - ALS Secondary</option>
                          <option value="53">53 - SPED Elementary</option>
                          <option value="54">54 - SPED Secondary</option>
                        </optgroup>
                      </select>
                    </td>
                  </tr>
                  <tr class="course_tr">
                    <td class="float-right">Course</td>
                    <td><input name="course" id="course" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                  <tr class="schtype_tr">
                    <td>31. Type of school</td>
                    <td>
                      <select name="schtype" id="schtype" class="form-control form-control-sm educ_inputs">
                        <option></option>
                        <option value="1">1 - Public school</option>
                        <option value="2">2 - Private school</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ynotsch_tr">
                    <td>32. Reason for not attending school</td>
                    <td>
                      <select name="ynotsch" id="ynotsch" class="form-control form-control-sm educ_inputs">
                        <option></option>
                        <option value="1">1 - Schools are very far</option>
                        <option value="2">2 - No schools within the barangay</option>
                        <option value="3">3 - No regular transportation</option>
                        <option value="4">4 - High cost of education</option>
                        <option value="5">5 - Illness/Disability</option>
                        <option value="6">6 - Housekeeping/ taking care of siblings</option>
                        <option value="7">7 - Marriage</option>
                        <option value="8">8 - Employment/Looking for work</option>
                        <option value="9">9 - Lack of interest</option>
                        <option value="10">10 - Cannot cope with school work</option>
                        <option value="11">11 - Finished schooling</option>
                        <option value="12">12 - Problem with school record</option>
                        <option value="13">13 - Problem with birth certificate</option>
                        <option value="14">14 - Too young to go to school</option>
                        <option value="15">15 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ynotsch_o_tr">
                    <td class="float-right">Other reason for not attending school</td>
                    <td><input name="ynotsch_o" id="ynotsch_o" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                  <tr class="educ">
                    <td>33. Highest educational attainment</td>
                    <td>
                      <select name="educal" id="educal" class="form-control form-control-sm educ_inputs">
                        <optgroup>
                          <option></option>
                          <option value="0">0 - No grade</option>
                          <option value="1">1 - Day Care</option>
                          <option value="2">2 - Kindergarten/Preparatory</option>
                        </optgroup>
                        <optgroup label="Grade School">
                          <option value="11">11 - Grade I</option>
                          <option value="12">12 - Grade II</option>
                          <option value="13">13 - Grade III</option>
                          <option value="14">14 - Grade IV</option>
                          <option value="15">15 - Grade V</option>
                          <option value="16">16 - Grade VI</option>
                        </optgroup>
                        <optgroup label="Junior High School">
                          <option value="17">17 - Grade VII</option>
                          <option value="18">18 - Grade VIII</option>
                          <option value="19">19 - Grade IX/3rd Year High School</option>
                          <option value="20">20 - Grade X/4th Year High School</option>
                        </optgroup>
                        <optgroup label="Senior High School">
                          <option value="21">21 - Grade XI</option>
                          <option value="22">22 - Grade XII</option>
                        </optgroup>
                        <optgroup label="Technical Vocational">
                          <option value="23">23 - 1st Year PS/N-TV</option>
                          <option value="24">24 - 2nd Year PS/N-TV</option>
                          <option value="25">25 - 3rd Year PS/N-TV</option>
                        </optgroup>
                        <optgroup label="College">
                          <option value="31">31 - 1st Year College</option>
                          <option value="32">32 - 2nd Year College</option>
                          <option value="33">33 - 3rd Year College</option>
                          <option value="34">34 - 3rd Year College</option>
                        </optgroup>
                        <optgroup label="Masters/PhD">
                          <option value="41">41 - Post Grad w/ units, specify course</option>
                        </optgroup>
                        <optgroup label="---------------">
                          <option value="51">51 - ALS Elementary</option>
                          <option value="52">52 - ALS Secondary</option>
                          <option value="53">53 - SPED Elementary</option>
                          <option value="54">54 - SPED Secondary</option>
                          <option value="100">100 - Grade School Graduate</option>
                          <option value="200">200 - High School Graduate</option>
                          <option value="210">210 - Post Secondary Graduate</option>
                          <option value="300">300 - College Graduate, specify course</option>
                          <option value="400">400 - Masters/PhD Graduate, specify course</option>
                        </optgroup>
                      </select>
                    </td>
                  </tr>
                  <tr class="fcourse_tr">
                    <td class="float-right">Course</td>
                    <td><input name="fcourse" id="fcourse" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-dark literacy" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <td colspan="2" class="float-center"><b>For 5 years old and above</b></td>
                  </tr>
                </thead>
                <tr>
                  <td width="50%">34. Can <i><b class="dfname">_____</b></i> read/write simple language</td>
                  <td>
                    <select name="literind" id="literind" class="form-control form-control-sm">
                      <option></option>
                      <option value="1">Yes</option>
                      <option value="2">No</option>
                    </select>
                  </td>
                </tr>
                <tr class="lang_tr">
                  <td>35. Language spoken</td>
                  <td>
                    <select name="lang" id="lang" class="form-control form-control-sm lang">
                      <option></option>
                      <option value="1">1 - Tagalog</option>
                      <option value="2">2 - Hiligaynon/Ilongo</option>
                      <option value="3">3 - Cebuano</option>
                      <option value="4">4 - Ilocano</option>
                      <option value="5">5 - Waray</option>
                      <option value="6">6 - Bikol</option>
                      <option value="7">7 - Kapampangan</option>
                      <option value="8">8 - Other, specify</option>
                    </select>
                  </td>
                </tr>
                <tr class="lang_o_tr">
                  <td class="float-right">Other language</td>
                  <td><input name="lang_o" id="lang_o" value="" type="text" class="form-control form-control-sm"></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12 col-xl-6 job">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">E. Economic activity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">36. Did <i><b class="dfname">_____</b></i> have any paid work for atleast 1 hour
                      during the
                      past
                      week</td>
                    <td>
                      <select name="jobind" id="jobind" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="occup_tr">
                    <td>37. Occupation</td>
                    <td><input name="occup" id="occup" value="" type="text" class="form-control form-control-sm job_inputs"></td>
                  </tr>
                  <tr class="occup_tr">
                    <td>38. Industry</td>
                    <td><input name="indust" id="indust" value="" type="text" class="form-control form-control-sm job_inputs"></td>
                  </tr>
                  <tr class="15up_tr">
                    <td colspan="2" class="float-center"><b>For 15 years old and above</b></td>
                  </tr>
                  <tr class="15up_tr">
                    <td>39. Nature of work</td>
                    <td>
                      <select name="jobstat" id="jobstat" class="form-control form-control-sm job_inputs_15up">
                        <option></option>
                        <option value="1">1 - Permanent</option>
                        <option value="2">2 - Short-term, seasonal or casual</option>
                        <option value="3">3 - Worked on different jobs on day to day or week to week</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="15up_tr">
                    <td>40. Class of worker</td>
                    <td>
                      <select name="workclass" id="workclass" class="form-control form-control-sm job_inputs_15up">
                        <option></option>
                        <option value="1">1 - Working for private household</option>
                        <option value="2">2 - Working for private/farm</option>
                        <option value="3">3 - Working for government/corporation</option>
                        <option value="4">4 - Self-employed without any employee</option>
                        <option value="5">5 - Employer in own familyoperated or business</option>
                        <option value="6">6 - Working with pay on family-operated or business</option>
                        <option value="7">7 - Working without pay on family-operated or business</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="15up_tr">
                    <td>41a. Total salary/wage last 12 months (incash)</td>
                    <td><input name="wagecash" id="wagecash" value="" type="number" class="form-control form-control-sm job_inputs_15up"></td>
                  </tr>
                  <tr class="15up_tr">
                    <td>41b. Total salary/wage last 12 months (inkind)</td>
                    <td><input name="wagekind" id="wagekind" value="" type="number" class="form-control form-control-sm job_inputs_15up"></td>
                  </tr>
                  <tr class="15up_tr">
                    <td>42. SSS or GSIS member</td>
                    <td>
                      <select name="sss" id="sss" class="form-control form-control-sm job_inputs_15up">
                        <option></option>
                        <option value="1">1 - SSS</option>
                        <option value="2">2 - GSIS</option>
                        <option value="3">3 - Both SSS and GSIS</option>
                        <option value="4">4 - None</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12 col-xl-6">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">F. Crime</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">43. Is <i><b class="dfname">_____</b></i> a victim of crime</td>
                    <td>
                      <select name="crime" id="crime" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="crimetype_tr">
                    <td>Type of crime</td>
                    <td>
                      <select name="crimetype" id="crimetype" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Theft</option>
                        <option value="2">2 - Robbery</option>
                        <option value="3">3 - Rape</option>
                        <option value="4">4 - Physical Injury</option>
                        <option value="5">5 - Carnapping</option>
                        <option value="6">6 - Cuttle Rustling</option>
                        <option value="7">7 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="crimetype_o_tr">
                    <td class="float-right">Other type of crime</td>
                    <td><input name="crimetype_o" id="crimetype_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">G. Health - I</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">44. Type of PhilHealth</td>
                    <td>
                      <select name="philhealthtype" id="philhealthtype" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Sponsored/indigents</option>
                        <option value="2">2 - Employed</option>
                        <option value="3">3 - Individually paying / voluntary</option>
                        <option value="4">4 - Lifetime due to retirement</option>
                        <option value="5">5 - OFW</option>
                        <option value="6">6 - None</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>45. Healthcare provider</td>
                    <td>
                      <select name="healthcareprovider" id="healthcareprovider" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - National Public Hospital</option>
                        <option value="2">2 - Provincial Public Hospital</option>
                        <option value="3">3 - District Public Hospital</option>
                        <option value="4">4 - Private Hospital/Clinic</option>
                        <option value="5">5 - Rural Health Units</option>
                        <option value="6">6 - Brgy. Health Station/Center</option>
                        <option value="7">7 - Non-medical/non-trained Hilot/Personnel</option>
                        <option value="8">8 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="healthcareprovider_o_tr">
                    <td class="float-right">Other provider of health care</td>
                    <td><input name="healthcareprovider_o" id="healthcareprovider_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-dark soloparent" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="50%">46. Is <i><b class="dfname">_____</b></i> a solo-parent</td>
                    <td>
                      <select name="uniparind" id="uniparind" class="form-control form-control-sm sp_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="uniparreason_tr">
                    <td>47. Reason for being solo-parent</td>
                    <td>
                      <select name="uniparreason" id="uniparreason" class="form-control form-control-sm sp_inputs">
                        <option></option>
                        <option value="1">1 - Death of spouse</option>
                        <option value="2">2 - Imprisonment of spouse for at least one year</option>
                        <option value="3">3 - Mental and physical incapacity of spouse</option>
                        <option value="4">4 - Legal or de facto separation from spouse for at least one year</option>
                        <option value="5">5 - Annulment of marriage as decreed by court or church</option>
                        <option value="6">6 - Abandonment of spouse for at least one year</option>
                        <option value="7">7 - Unmarried mother or father who preferred to keep the child instead of
                          others caring for him/her</option>
                        <option value="8">8 - Any other person who solely provides parental care and support to a
                          child
                          provided he/she is a duly licensed foster parent of DSWD, or duly appointed legal guardian
                          by
                          the court through adoption or legal guardianship</option>
                        <option value="9">9 - Any family member who solely assumes the responsibility as head of the
                          family as a result of death, abandonment, prolonged absence, or disappearance of parent for
                          at
                          least one year</option>
                        <option value="10">10 - Other reasons, specify</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="uniparreason_o_tr">
                    <td class="float-right">Other reason for being a solo-parent</td>
                    <td><input name="uniparreason_o" id="uniparreason_o" value="" type="text" class="form-control form-control-sm sp_inputs"></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-sm table-borderless pwd text-dark" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="50%">48. Is <i><b class="dfname">_____</b></i> a person with disability</td>
                    <td>
                      <select name="pwdind" id="pwdind" class="form-control form-control-sm pwdind">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="pwdtype_tr pwd_inputs_tr">
                    <td>49. Type of disabilty</td>
                    <td>
                      <select name="pwdtype" id="pwdtype" class="form-control form-control-sm pwd_inputs">
                        <option></option>
                        <option value="1">1 - Total Blindness</option>
                        <option value="2">2 - Partially Blindness</option>
                        <option value="3">3 - Low Vision</option>
                        <option value="4">4 - Totally Deaf</option>
                        <option value="5">5 - Partially Deaf</option>
                        <option value="6">6 - Oral Defect</option>
                        <option value="7">7 - One Hand</option>
                        <option value="8">8 - No Hands</option>
                        <option value="9">9 - One Leg</option>
                        <option value="10">10 - No Legs</option>
                        <option value="11">11 - Mild Cerebral Palsy</option>
                        <option value="12">12 - Severe Cerebral Palsy</option>
                        <option value="13">13 - Retarded</option>
                        <option value="14">14 - Mentally Ill</option>
                        <option value="15">15 - Mental Retardation</option>
                        <option value="16">16 - Multiple impairment</option>
                        <option value="17">17 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="pwdtype_o_tr pwd_inputs_o_tr">
                    <td class="float-right">Other type of disability</td>
                    <td><input name="pwdtype_o" id="pwdtype_o" value="" type="text" class="form-control form-control-sm pwd_inputs"></td>
                  </tr>
                  <tr class="pwdcause_tr pwd_inputs_tr">
                    <td>50. Cause of disabilty</td>
                    <td>
                      <select name="pwdcause" id="pwdcause" class="form-control form-control-sm pwd_inputs">
                        <option></option>
                        <option value="1">1 - In-born</option>
                        <option value="2">2 - Illness</option>
                        <option value="3">3 - Accident</option>
                        <option value="4">4 - Old age</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="pwdcause_o_tr pwd_inputs_o_tr">
                    <td class="float-right">Other cause of disability</td>
                    <td><input name="pwdcause_o" id="pwdcause_o" value="" type="text" class="form-control form-control-sm pwd_inputs"></td>
                  </tr>
                  <tr class="pwdid_tr pwd_inputs_tr">
                    <td>51. Does <i><b class="dfname">_____</b></i> have a PWD ID</td>
                    <td>
                      <select name="pwdid" id="pwdid" class="form-control form-control-sm pwd_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-dark seniorcitizen" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Senior Citizen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">52. Does <i><b class="dfname">_____</b></i> have a Senior Citizen ID</td>
                    <td>
                      <select name="scid" id="scid" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12 col-xl-6">
              <table class="table table-sm table-borderless text-dark familyplanning" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Family planning</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">53. Does <i><b class="dfname">_____</b></i> using <br> any type of family planning
                      method?
                    </td>
                    <td>
                      <select name="famplanind" id="famplanind" class="form-control form-control-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="fp_meth_tr">
                    <td>54. Family planning method</td>
                    <td>
                      <select name="fp_meth" id="fp_meth" class="form-control form-control-sm fp_inputs">
                        <option></option>
                        <option value="1">1 - Male sterilization</option>
                        <option value="2">2 - Female sterilization</option>
                        <option value="3">3 - Pill</option>
                        <option value="4">4 - IUD</option>
                        <option value="5">5 - Injectible</option>
                        <option value="6">6 - Implants</option>
                        <option value="7">7 - Patch</option>
                        <option value="8">8 - Condom</option>
                        <option value="9">9 - Female Condom</option>
                        <option value="10">10 - Diaphragm</option>
                        <option value="11">11 - Foam/Jelly/Cream</option>
                        <option value="12">12 - Mucus, Billings, Ovulation</option>
                        <option value="13">13 - Basal Body Temperature</option>
                        <option value="14">14 - Symptothermal</option>
                        <option value="15">15 - Standard days method</option>
                        <option value="16">16 - Calendar/Rhythm/Periodic Abstinence</option>
                        <option value="17">17 - Withdrawal</option>
                        <option value="18">18 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="fp_meth_o_tr">
                    <td class="float-right">Other method of family planning</td>
                    <td><input name="fp_meth_o" id="fp_meth_o" value="" type="text" class="form-control form-control-sm fp_inputs"></td>
                  </tr>
                  <tr class="fp_provider_tr">
                    <td>55. Provider of family planning method</td>
                    <td>
                      <select name="fp_provider" id="fp_provider" class="form-control form-control-sm fp_inputs">
                        <option></option>
                        <option value="1">1 - Barangay Health Center</option>
                        <option value="2">2 - City Health Unit</option>
                        <option value="3">3 - Lying-in (Private)</option>
                        <option value="4">4 - Lying-in (Government)</option>
                        <option value="5">5 - Pharmacy</option>
                        <option value="6">6 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="fp_provider_o_tr">
                    <td class="float-right">Other provider of family planning method</td>
                    <td><input name="fp_provider_o" id="fp_provider_o" value="" type="text" class="form-control form-control-sm fp_inputs"></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-dark sdg" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Reproduction and child survival</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="50%">56. Is <i><b class="dfname">_____</b></i> pregnant</td>
                    <td>
                      <select name="sdg_pregind" id="sdg_pregind" class="form-control form-control-sm rcs_inputs sdg_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>57. Number of child born</td>
                    <td><input name="sdg_numchildborn" id="sdg_numchildborn" value="" type="number" min="0" max="30" class="form-control form-control-sm rcs_inputs sdg_inputs"></td>
                  </tr>
                  <tr class="sdg_preg5years_tr">
                    <td>58. Did <i><b class="dfname">_____</b></i> got pregnant/delivered a child in the past 5 years?
                    </td>
                    <td>
                      <select name="sdg_preg5years" id="sdg_preg5years" class="form-control form-control-sm sdg_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-dark sdg_preg5years_tb" width="100%" cellspacing="0">
                <tr>
                  <th colspan="2">For women who got pregnant and/or gave birth during the past 5 years</th>
                </tr>
                <tr>
                  <td width="50%">59. Child died 0-11 months old</td>
                  <td><input name="sdg_died011months" id="sdg_died011months" value="" type="number" min="0" max="30" class="form-control form-control-sm sdg_withchild sdg_inputs"></td>
                </tr>
                <tr>
                  <td>60. Child died 12-59 months old</td>
                  <td><input name="sdg_died1259months" id="sdg_died1259months" value="" type="number" min="0" max="30" class="form-control form-control-sm sdg_withchild sdg_inputs"></td>
                </tr>
                <tr>
                  <td>61. Had miscarriage/still birth/abortion</td>
                  <td>
                    <select name="sdg_stillbirth" id="sdg_stillbirth" id="sdg_stillbirth" class="form-control form-control-sm sdg_withchild sdg_inputs">
                      <option></option>
                      <option value="0">0 - None</option>
                      <option value="1">1 - Abortion</option>
                      <option value="2">2 - Miscarriage</option>
                      <option value="3">3 - Still birth</option>
                      <option value="4">4 - Both 1 and 2</option>
                      <option value="5">5 - Both 2 and 3</option>
                      <option value="6">6 - All 1, 2 and 3</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>62. Where did <i><b class="dfname">_____</b></i> deliver her youngest child?</td>
                  <td>
                    <select name="sdg_childdelivery" id="sdg_childdelivery" class="form-control form-control-sm sdg_withchild sdg_inputs">
                      <option></option>
                      <option value="1">1 - House</option>
                      <option value="2">2 - Government Health Center (BHS/RHU/UUHC)</option>
                      <option value="3">3 - Government Hospital</option>
                      <option value="4">4 - Private Hospital</option>
                      <option value="5">5 - Private Clinic</option>
                      <option value="6">6 - Others</option>
                      <option value="7">7 - Don't know</option>
                    </select>
                  </td>
                </tr>
                <tr class="sdg_childdelivery_o_tr">
                  <td class="float-right">Other place of delivery</td>
                  <td><input name="sdg_childdelivery_o" id="sdg_childdelivery_o" value="" type="text" class="form-control form-control-sm sdg_withchild"></td>
                </tr>
                <tr>
                  <td>63. Who assisted <i><b class="dfname">_____</b></i> at the delivery</td>
                  <td>
                    <select name="sdg_deliverassist" id="sdg_deliverassist" class="form-control form-control-sm sdg_inputs">
                      <option></option>
                      <option value="1">1 - Doctor</option>
                      <option value="2">2 - Nurse</option>
                      <option value="3">3 - Midwife</option>
                      <option value="4">4 - Trained Hilot</option>
                      <option value="5">5 - Untrained Hilot</option>
                      <option value="6">6 - Relatives/Friends</option>
                      <option value="7">7 - Others</option>
                      <option value="8">8 - Don't know</option>
                    </select>
                  </td>
                </tr>
                <tr class="sdg_deliverassist_o_tr">
                  <td class="float-right">Other person who assisted in delivery of child</td>
                  <td><input name="sdg_deliverassist_o" id="sdg_deliverassist_o" value="" type="text" class="form-control form-control-sm sdg_withchild"></td>
                </tr>
                <tr>
                  <td>64. Did <i><b class="dfname">_____</b></i> breastfeed this child</td>
                  <td>
                    <select name="sdg_breastfeedind" id="sdg_breastfeedind" class="form-control form-control-sm sdg_inputs">
                      <option></option>
                      <option value="1">1 - Yes</option>
                      <option value="2">2 - No</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>65. How many months did <i><b class="dfname">_____</b></i> breastfeed this child</td>
                  <td><input name="sdg_breastfeedlen" id="sdg_breastfeedlen" value="" type="number" min="0" class="form-control form-control-sm sdg_withchild" placeholder="Number of months"></td>
                </tr>
                <tr>
                  <td>66. How many months of exclusive breastfeeding</td>
                  <td><input name="sdg_breastfeedexlen" id="sdg_breastfeedexlen" value="" type="number" min="0" class="form-control form-control-sm sdg_withchild" placeholder="Number of months"></td>
                </tr>
                <tr>
                  <td>67. What month started giving infant formula</td>
                  <td><input name="sdg_startinfantformula" id="sdg_startinfantformula" value="" type="number" min="0" class="form-control form-control-sm sdg_withchild" placeholder="Age in months"></td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning float-left text-light add_edit_hpq" type="reset">Reset</button>
          <button class="btn btn-secondary text-light add_edit_hpq" type="button" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary text-light add_edit_hpq" type="submit">Confirm</button>
          <button class="btn btn-secondary text-light view_hpq" type="button" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Deceased Modal -->
<div class="modal fade" id="adddeceasedModal" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new entry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="adddeceased_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Previous member</th>
                  </tr>
                </thead>
                <tbody>
                  <tr hidden>
                    <td></td>
                    <td><input name="id" id="id" value="" readonly></td>
                  </tr>
                  <tr hidden>
                    <td></td>
                    <td><input name="hpq_id" id="hpq_id" value="" readonly></td>
                  </tr>
                  <tr hidden>
                    <td>Dead index</td>
                    <td><input name="dindex" id="dindex" value="" readonly></td>
                  </tr>
                  <tr>
                    <td>69a. Last name</td>
                    <td><input id="dlname" name="dlname" value="" type="text" class="form-control form-control-sm" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td>69b. First name</td>
                    <td><input id="dfname" name="dfname" value="" type="text" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>69b. Middle name</td>
                    <td><input id="dmname" name="dmname" value="" type="text" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>72. Sex</td>
                    <td>
                      <select id="dsex" name="dsex" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Male</option>
                        <option value="2">2 - Female</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>71. Age</td>
                    <td><input id="dage_yr" name="dage_yr" value="" type="number" class="form-control form-control-sm" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td>72. Cause of death</td>
                    <td>
                      <select id="causeofdeath" name="causeofdeath" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Heart disease</option>
                        <option value="2">2 - Disease of the Vascular System</option>
                        <option value="3">3 - Pneumonia</option>
                        <option value="4">4 - Tuberculosis</option>
                        <option value="5">5 - Cancer</option>
                        <option value="6">6 - Diarrhea</option>
                        <option value="7">7 - Complication during pregnancy of childbirth</option>
                        <option value="8">8 - Vehicular accident</option>
                        <option value="9">9 - Diabetes</option>
                        <option value="10">10 - Disease of the Lungs</option>
                        <option value="11">11 - Disease of the Kidney</option>
                        <option value="12">12 - Murdered</option>
                        <option value="13">13 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="causeofdeath_o_tr">
                    <td class="float-right">Other cause of death</td>
                    <td><input id="causeofdeath_o" name="causeofdeath_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary text-light add_edit_hpq" type="button" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary text-light add_edit_hpq" type="submit">Confirm</button>
          <button class="btn btn-secondary text-light view_hpq" type="button" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Programs Modal -->
<div class="modal fade" id="addprogModal" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Disabled Backdrop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addprog_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Programs</th>
                  </tr>
                </thead>
                <tbody>
                  <tr hidden>
                    <td>Prog index</td>
                    <td>
                      <input name="id" id="id" value="" required="required">
                      <input name="hpq_id" id="hpq_id" value="" required="required">
                      <input name="pindex" id="pindex" value="" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td>Type of program</td>
                    <td>
                      <select name="prog_type" id="prog_type" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - Sustainable Livelihood Program (DSWD)</option>
                        <option value="2">2 - Food for School</option>
                        <option value="3">3 - Food for Work/Cash for Work</option>
                        <option value="4">4 - Social Pension for Indigent Senior Citizen</option>
                        <option value="5">5 - Pantawid Pamilyan Pilipino Program (4Ps)/KALAHI-CIDDSS/Listahan</option>
                        <option value="6">6 - Agrarian Reform Community Development Program (ARCDP)</option>
                        <option value="7">7 - Training for Work Scholarship Program (TWSP)</option>
                        <option value="8">8 - Community-Based Employment Program (CBEP)</option>
                        <option value="9">9 - Health care Insurance (Maxicare/Medicare/Intellicare/etc.)</option>
                        <option value="10">10 - Gender and Development Programs (Teenage Pregnancy Seminar,
                          PhilHealth Enrollment Program, Mental Health Program,
                          Livelihood Program, Teen Center, Women's Month Program, Women and Family Welfare Program,
                          Anti-VAWC/Child abuse Program, Solo Parent Program, Reproductive Health/HIV-AIDS Program,
                          Scholarship/Educational Assistance, Story-Reading Program, Dear Santa Activity,
                          etc.)</option>
                        <option value="11">11 - Health Care Assistance Program</option>
                        <option value="12">12 - Supplemental Feeding Program</option>
                        <option value="13">13 - Educational Assistance/Scholarship Program</option>
                        <option value="14">14 - Skills or Livelihood Training Program</option>
                        <option value="15">15 - Credit/Lending Program</option>
                        <option value="16">16 - Housing Program</option>
                        <option value="17">17 - LGU Gift Giving / Pamaskong Handog</option>
                        <option value="18">18 - Longevity Cash Gift for Indigent Seinor Citizen</option>
                        <option value="19">19 - Other type of program</option>
                      </select>
                    </td>
                  </tr>
                  <tr id="prog_type_o_tr" class="hidethis">
                    <td>Other type of program</td>
                    <td>
                      <input name="prog_type_o" id="prog_type_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                  <tr>
                    <td>Name of program</td>
                    <td>
                      <input name="prog_name" id="prog_name" value="" type="text" class="form-control form-control-sm" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td>Implementor of program</td>
                    <td>
                      <select name="prog_impl" id="prog_impl" class="form-control form-control-sm" required="required">
                        <option></option>
                        <option value="1">1 - National</option>
                        <option value="2">2 - Province</option>
                        <option value="3">3 - City/Municipality</option>
                        <option value="4">4 - Barangay</option>
                        <option value="5">5 - Congress/District</option>
                        <option value="6">6 - Private Organizations/NGOs</option>
                        <option value="7">7 - Don't know</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Beneficiary of the program</td>
                    <td id="hpq_ref">
                    </td>
                  </tr>
                  <tr id="mem_ref_none" class="hidethis">
                    <td colspan="2"><i class="text-danger">Select atleast one member of the household to continue.</i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary text-light add_edit_hpq" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
          <button id="addprogbtn" type="submit" class="btn btn-primary text-light add_edit_hpq">Confirm</button>
          <a class="btn btn-secondary text-light view_hpq" type="button" data-bs-dismiss="modal" aria-label="Close">Close</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php

include_once 'layout_foot.php';

?>