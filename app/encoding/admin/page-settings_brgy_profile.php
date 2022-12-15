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
        <li class="breadcrumb-item">Barangay Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="card-title">Barangay Profile</div>
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="brgy_pop_dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="bg-primary text-light">
                  <th></th>
                  <th>Barangay</th>
                  <th>2008</th>
                  <th>2010</th>
                  <th>2012</th>
                  <th>2014</th>
                  <th>2016</th>
                  <th>2018</th>
                  <th>2020</th>
                  <th>2022</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="brgy_pop_data"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<div class="modal fade" id="brgy_modal" tabindex="-1" >
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Barangay Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="brgy_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <table class="table table-sm table-borderless text-dark" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <th>Barangay name</th>
                    <td>
                      <input id="id" name="id" hidden>
                      <select name="brgy" id="brgy" class="form-control form-control-sm" required="required" readonly>
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
                    <th>Number of Zone/Purok</th>
                    <td>
                      <select name="num_zone" id="num_zone" class="form-control form-control-sm col-auto" required="required">
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
                    <table class="table table-sm table-borderless">
                      <thead>
                        <tr>
                          <th>Census Year: </th>
                          <th class="text-center">2008</th>
                          <th class="text-center">2010</th>
                          <th class="text-center">2012</th>
                          <th class="text-center">2014</th>
                          <th class="text-center">2016</th>
                          <th class="text-center">2018</th>
                          <th class="text-center">2020</th>
                          <th class="text-center">2022</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>No. of Households:</th>
                          <td><input id="hh_2008" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2010" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2012" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2014" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2016" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2018" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2020" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="hh_2022" value="" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <th>Total Population:</th>
                          <td><input id="pop_2008" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2010" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2012" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2014" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2016" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2018" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2020" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="pop_2022" value="" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <th>Male Population</th>
                          <td><input id="male_2008" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2010" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2012" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2014" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2016" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2018" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2020" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="male_2022" value="" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <th>Female Population</th>
                          <td><input id="female_2008" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2010" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2012" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2014" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2016" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2018" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2020" value="" type="number" class="form-control form-control-sm" required="required"></td>
                          <td><input id="female_2022" value="" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                      </tbody>
                    </table>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary text-light" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
          <button type="submit" class="btn btn-primary text-light">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php

include_once 'layout_foot.php';

?>