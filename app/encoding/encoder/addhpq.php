<!-- Begin Page Content -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <b id="navlink1" href="#main_page1" class="nav-link active" data-toggle="tab">Introduction and<br>Household Characteristic</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink2" href="#main_page2" class="nav-link" data-toggle="tab">Household<br>members</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink3" href="#main_page3" class="nav-link" data-toggle="tab">Hunger and<br>Death</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink4" href="#main_page4" class="nav-link" data-toggle="tab">Water and Sanitation<br>Tenure status</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink5" href="#main_page5" class="nav-link" data-toggle="tab">Assets and Amenities<br>Waste Management</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink6" href="#main_page6" class="nav-link" data-toggle="tab">Calamity and<br>Disaster Preparedness</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink7" href="#main_page7" class="nav-link" data-toggle="tab">Source of Income<br>Agriculture</b>
  </li>
  <li class="nav-item others hidethis">
    <b id="navlink8" href="#main_page8" class="nav-link" data-toggle="tab">Programs and<br>Services</b>
  </li>
</ul>
<form id="addnew_form" method="post">
  <div class="card mb-2">
    <div class="card-body auto-height">
      <div class="tab-content">
        <div class="tab-pane active" id="main_page1">
          <div class="row mt-2">
            <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-5">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">A. Identification</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>I.</th>
                        <th colspan="2">Location</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td class="text-truncate">a. Region</td>
                        <td>
                          <select name="regn" id="regn" class="custom-select custom-select-sm" aria-readonly="true">
                            <option value="05" selected>Region V</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-truncate">b. Province</td>
                        <td>
                          <select name="prov" id="prov" class="custom-select custom-select-sm" aria-readonly="true">
                            <option value="05" selected>Albay</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-truncate">c. City/Municipality</td>
                        <td>
                          <select name="mun" id="mun" class="custom-select custom-select-sm" aria-readonly="true">
                            <option value="017" selected>City of Tabaco</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-truncate">d. Barangay</td>
                        <td>
                          <select name="brgy" id="brgy" class="custom-select custom-select-sm" required="required" readonly="readonly">
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
                            <option value="011">Buang</option>
                            <option value="012">Buhian</option>
                            <option value="013">Cabagñan</option>
                            <option value="014">Cobo</option>
                            <option value="015">Comon </option>
                            <option value="016">Cormidal</option>
                            <option value="017">Divino Rostro (Pob.)</option>
                            <option value="018">Fatima</option>
                            <option value="019">Guinobat</option>
                            <option value="020">Hacienda (San Miguel Island)</option>
                            <option value="021">Magapo</option>
                            <option value="022">Mariroc</option>
                            <option value="023">Matagbac</option>
                            <option value="024">Oras</option>
                            <option value="025">Oson</option>
                            <option value="026">Panal</option>
                            <option value="027">Pawa</option>
                            <option value="028">Pinagbobong</option>
                            <option value="029">Quinale Cabasan (Pob.)</option>
                            <option value="030">Quinastillojan</option>
                            <option value="031">Rawis (San Miguel Island)</option>
                            <option value="032">Sagurong (San Miguel Island)</option>
                            <option value="033">Salvacion</option>
                            <option value="034">San Antonio</option>
                            <option value="035">San Carlos</option>
                            <option value="036">San Isidro (Boring)</option>
                            <option value="037">San Juan (Pob.)</option>
                            <option value="038">San Lorenzo</option>
                            <option value="039">San Ramon</option>
                            <option value="040">San Roque</option>
                            <option value="041">San Vicente</option>
                            <option value="042">Santo Cristo (Pob.)</option>
                            <option value="043">Sua-Igot</option>
                            <option value="044">Tabiguian</option>
                            <option value="045">Tagas</option>
                            <option value="046">Tayhi (Pob.)</option>
                            <option value="047">Visita (San Miguel Island)</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-truncate">e. Zone/Purok</td>
                        <td><input name="purok" id="purok" value="" type="number" min="1" max="9" class="form-control form-control-sm col-6" required="required"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-truncate">f. Street</td>
                        <td><input name="street" id="street" value="None" type="text" class="form-control form-control-sm" required="required"></td>
                      </tr>
                      <tr>
                        <th>II.</th>
                        <th class="text-truncate">Household Identification Number</th>
                        <td><input name="hcn" id="hcn" value="" type="text" class="form-control form-control-sm col-6" required="required"></td>
                      </tr>
                      <tr>
                        <th>III.</th>
                        <th class="text-truncate">Respondent</th>
                        <td><input name="respondent" id="respondent" value="" type="text" class="form-control form-control-sm" required="required"></td>
                      </tr>
                      <tr>
                        <th>IV.</th>
                        <th class="text-truncate">Date encoded</th>
                        <td><input name="int_date" id="int_date" value="<?= date('Y-m-d') ?>" type="text" class="form-control form-control-sm col-6" required="required" readonly></td>
                      </tr>
                      <tr>
                        <th>V.</th>
                        <th class="text-truncate">Interviewer</th>
                        <td><input name="interviewer" id="interviewer" value="" type="text" class="form-control form-control-sm" required="required"></td>
                      </tr>
                      <tr>
                        <th>VI.</th>
                        <th class="text-truncate">Field Coordinator</th>
                        <td><input name="field_coordinator" id="field_coordinator" value="" type="text" class="form-control form-control-sm" required="required"></td>
                      </tr>
                      <tr>
                        <th>VII.</th>
                        <th class="text-truncate">Barangay Captain</th>
                        <td><input name="brgy_captain" id="brgy_captain" value="" type="text" class="form-control form-control-sm" required="required"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div id="confirm_panel" class="card-footer">
                  <a class="btn btn-success btn-sm text-white float-sm-right" onclick="setHPQ_ID();">Continue</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-5 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">B. Housing Characteristics</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <td><b>1.</b> House type</td>
                        <td width="50%">
                          <select name="htype" id="htype" class="custom-select custom-select-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
                            <option></option>
                            <option value="1">1 - Single House</option>
                            <option value="2">2 - Duplex</option>
                            <option value="3">3 - Multi-unuit residential (three or more units)</option>
                            <option value="4">4 - Commercial/Industrial/Agricultural building/House (e.g., office,factory, others)</option>
                            <option value="5">5 - Other housing units(boat, cave and others)</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td><b>2.</b> Number of CR</td>
                        <td><input name="numcr" id="numcr" value="0" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                      </tr>
                      <tr>
                        <td><b>3.</b> Number of bedroom</td>
                        <td><input name="numbed" id="numbed" value="0" min="0" type="number" class="form-control form-control-sm col-sm-3" required="required"></td>
                      </tr>
                      <tr>
                        <td><b>4.</b> Roof construction</td>
                        <td>
                          <select name="roof" id="roof" class="custom-select custom-select-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
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
                          <select name="wall" id="wall" class="custom-select custom-select-sm col-12 col-sm-12 col-md-12 col-lg-12" required="required">
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

                  <table class="table table-sm table-borderless" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <td colspan="2" align="center"><b>Household Characteristics</b></td>
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
        <div class="tab-pane fade" id="main_page2">
          <div class="row mt-2">
            <div class="col-lg-12 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Household members</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless col-sm-12 col-md-12 col-lg-9 col-xl-6" cellspacing="10">
                    <tr>
                      <td>
                        <label for="phsize" class="text-truncate"><b>Number of household members</b></label>
                      </td>
                      <td width="20%">
                        <input name="phsize" id="phsize" value="" type="number" min="1" class="form-control form-control-sm col-12" required="required">
                      </td>
                      <td width="20%">
                        <div id="addmem_btn" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addmemModal">
                          <i class="fas fa-plus fa-sm fa-fw"></i>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-bordered mb-2" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Relation</th>
                          <th>Birthday</th>
                          <th>Sex</th>
                          <th>Age</th>
                          <th>Civil Status</th>
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
          <div class="row mt-2">
            <div class="col-lg-4 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">L. Hunger</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <td class="text-wrap"><b>68.</b> In the last 3 months, did the household experienced hunger and have nothing to
                          eat?</td>
                        <td width="50%">
                          <select name="hunger_ind" id="hunger_ind" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2" selected>2 - No</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-8 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">K. Previous household members</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless col-sm-12 col-md-12 col-lg-9 col-xl-6" cellspacing="10">
                    <tr>
                      <td>
                        <label for="mdead"><b>Number of previous household members</b></label>
                      </td>
                      <td width="20%">
                        <input name="mdead" id="mdead" value="" type="number" min="0" class="form-control form-control-sm col-12" required="required">
                      </td>
                      <td width="20%">
                        <div id="adddeceased_btn" class="btn btn-sm btn-success" data-toggle="modal" data-target="#adddeceasedModal">
                          <i class="fas fa-plus fa-sm fa-fw"></i>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-bordered mb-2" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Sex</th>
                          <th>Age</th>
                          <th>Cause of death</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="death_table">
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
          <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 col-xxxl-3 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">M. Water and Sanitation</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>73.</th>
                        <td>Household's main source of drinking water</td>
                        <td width="30%">
                          <select name="water" id="water" class="custom-select custom-select-sm" required="required">
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
                      <tr class="water_o_tr hidethis">
                        <td></td>
                        <td class="float-right">Other main source of drinking water</td>
                        <td width="30%"><input name="water_o" id="water_o" value="" type="text" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>74.</th>
                        <td>Household's toilet facility</td>
                        <td width="30%">
                          <select name="toilet" id="toilet" class="custom-select custom-select-sm" required="required">
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
                      <tr class="toilet_o_tr hidethis">
                        <td></td>
                        <td class="float-right">Other type of toilet facility</td>
                        <td width="30%"><input name="toilet_o" id="toilet_o" value="" type="text" class="form-control form-control-sm"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">N. Housing</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>75.</th>
                        <td>Tenure status of the housing unit and lot occupied by the household</td>
                        <td width="30%">
                          <select name="tenur" id="tenur" class="custom-select custom-select-sm" required="required">
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
                      <tr class="tenur_o_tr hidethis">
                        <th></th>
                        <td class="float-right">Other type of tenur status</td>
                        <td width="30%"><input name="tenur_o" id="tenur_o" value="" type="text" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>76.</th>
                        <td>Does the house have a building permit?</td>
                        <td width="30%">
                          <select name="bpermit" id="bpermit" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2">2 - No</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th>77.</th>
                        <td>When was the house built?</td>
                        <td width="30%"><input name="built_when" id="built_when" value="<?= date("Y") ?>" min="1900" type="number" class="form-control form-control-sm" placeholder="Year" required="required">
                        </td>
                      </tr>
                      <tr>
                        <th>78.</th>
                        <td>How long did the household living in the house?</td>
                        <td width="30%"><input name="len_stay" id="len_stay" value="" min="0" type="number" class="form-control form-control-sm" placeholder="Number of years"></td>
                      </tr>
                      <tr>
                        <th>79.</th>
                        <td>Is there any electricity in dwelling place?</td>
                        <td width="30%">
                          <select name="elec_ind" id="elec_ind" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2">2 - No</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="elec_type_tr hidethis">
                        <th>80.</th>
                        <td>What is the source of electricity of the dwelling place?</td>
                        <td width="30%">
                          <select name="elec_type" id="elec_type" class="custom-select custom-select-sm">
                            <option></option>
                            <option value="1">1 - Electric company (APEC)</option>
                            <option value="2">2 - Gas-powered generator</option>
                            <option value="3">3 - Solar-powered generator</option>
                            <option value="4">4 - Hydro-powered generator</option>
                            <option value="5">5 - Battery</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="imprnt_tr hidethis">
                        <th>81.</th>
                        <td>Estimated rent of the house/lot</td>
                        <td width="30%"><input name="imprnt" id="imprnt" value="" min="300" type="number" class="form-control form-control-sm"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 col-xxxl-3 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">N.1 Relocation</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>82.</th>
                        <td>Is the household in a relocation?</td>
                        <td width="30%">
                          <select name="reloc_ind" id="reloc_ind" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2">2 - No</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="reloc_tr hidethis">
                        <th>83.</th>
                        <td>Reason for being relocated</td>
                        <td width="30%">
                          <select name="reloc_reason" id="reloc_reason" class="custom-select custom-select-sm reloc_inputs" required="required">
                            <option></option>
                            <option value="1">1 - Located on a hazard prone area</option>
                            <option value="2">2 - No house to live in</option>
                            <option value="3">3 - Victim of calamity (natural/man-made)</option>
                            <option value="4">4 - Government Infrastructure</option>
                            <option value="5">5 - Threat of eviction</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="reloc_tr hidethis">
                        <th>84.</th>
                        <td>Beneficiary of what Housing Project</td>
                        <td width="30%">
                          <select name="housing" id="housing" class="custom-select custom-select-sm reloc_inputs" required="required">
                            <option></option>
                            <option value="1">1 - Lot only</option>
                            <option value="2">2 - Adopt-A-Home</option>
                            <option value="3">3 - Cash Assistance</option>
                            <option value="4">4 - Core Shelter</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="reloc_tr hidethis">
                        <th>85.</th>
                        <td>Place currently staying</td>
                        <td width="30%">
                          <select name="curstay" id="curstay" class="custom-select custom-select-sm reloc_inputs" required="required">
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
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">N.2 Easement</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>87.</th>
                        <td>Is the household living near an easement?</td>
                        <td width="30%">
                          <select name="easement_ind" id="easement_ind" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2">2 - No</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="easement_type_tr hidethis">
                        <th>88.</th>
                        <td>In what type of easement?</td>
                        <td width="30%">
                          <select name="easement_type" id="easement_type" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - River (within 3 meters from river bank)</option>
                            <option value="2">2 - Coastline (40 meters)</option>
                            <option value="3">3 - Road network (3-5 meters)</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">O. Hazard Susceptibility</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>89.</th>
                        <td>Is the house susceptible to any type of hazard?</td>
                        <td width="30%">
                          <select name="haz_ind" id="haz_ind" class="custom-select custom-select-sm" required="required">
                            <option></option>
                            <option value="1">1 - Yes</option>
                            <option value="2">2 - No</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="haz_type_tr hidethis">
                        <th>90.</th>
                        <td>In what type of hazard?</td>
                        <td width="30%">
                          <select name="haz_type" id="haz_type" class="custom-select custom-select-sm haz_inputs" required="required">
                            <option></option>
                            <option value="1">1 - Flooding</option>
                            <option value="2">2 - Volcanic eruption</option>
                            <option value="3">3 - Landslide</option>
                            <option value="4">4 - Tsunami/Stormsurge</option>
                            <option value="5">5 - Lahar flow/Mud flow</option>
                            <option value="6">6 - Earthquake/Liquefaction</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="haz_flood_tr hidethis">
                        <th>91.</th>
                        <td>Height of flood</td>
                        <td width="30%">
                          <select name="haz_flood_height" id="haz_flood_height" class="custom-select custom-select-sm haz_flood_inputs">
                            <option></option>
                            <option value="1">1 - Less than half meter (50cm)</option>
                            <option value="2">2 - More than half meter but less than 1 meter</option>
                            <option value="3">3 - More than 1 meter but less than 1.5 meter</option>
                            <option value="4">4 - More than 1.5 meter</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="haz_flood_tr hidethis">
                        <th>92.</th>
                        <td>Main reason of flooding</td>
                        <td width="30%">
                          <select name="haz_flood_reason" id="haz_flood_reason" class="custom-select custom-select-sm haz_flood_inputs">
                            <option></option>
                            <option value="1">1 - Typhoon/Heavy rain</option>
                            <option value="2">2 - Clogged drainage system</option>
                            <option value="3">3 - Houses built on waterways</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="haz_volcano_tr hidethis">
                        <th>93.</th>
                        <td>Distance from crater of Mayon volcano</td>
                        <td width="30%">
                          <select name="haz_volcano_dist" id="haz_volcano_dist" class="custom-select custom-select-sm haz_volcano_inputs">
                            <option></option>
                            <option value="1">1 - 6 kilometer</option>
                            <option value="2">2 - 7 kilometer</option>
                            <option value="3">3 - 8 kilometer</option>
                            <option value="4">4 - 9 kilometer</option>
                            <option value="5">5 - 10 kilometer and/or above</option>
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
        <div class="tab-pane fade" id="main_page5">
          <div class="row mt-2">
            <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4 col-xxxl-3 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">P. Assets and Amenities</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-borderless" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th colspan="4">94. Number of owned assets/amenities</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Radio/Radio Casette</td>
                          <td width="95"><input name="radio" id="radio" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Televsion</td>
                          <td width="95"><input name="tv" id="tv" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>DVD Player</td>
                          <td><input name="dvd" id="dvd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Component/Stereo set</td>
                          <td><input name="stereo" id="stereo" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Karaoke/Videoke machine</td>
                          <td><input name="karaoke" id="karaoke" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Refrigerator/Freezer</td>
                          <td><input name="refrigerator" id="refrigerator" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Electric fan</td>
                          <td><input name="efan" id="efan" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Flat iron</td>
                          <td><input name="iron" id="iron" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>LPG Gas stove/Gas range</td>
                          <td><input name="stove" id="stove" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Washing machine</td>
                          <td><input name="washmachine" id="washmachine" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Microwave oven</td>
                          <td><input name="oven" id="oven" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Computer set/Laptop</td>
                          <td><input name="computer" id="computer" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Internet connection</td>
                          <td><input name="internet" id="internet" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Cellphone</td>
                          <td><input name="cellphone" id="cellphone" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Landline telephon</td>
                          <td><input name="telephone" id="telephone" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Air conditioner</td>
                          <td><input name="aircon" id="aircon" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Sewing machine</td>
                          <td><input name="sew" id="sew" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Car/Jeep/etc.</td>
                          <td><input name="car" id="car" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Tricycle/Motorcycle</td>
                          <td><input name="motor" id="motor" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Sofa/Sala set</td>
                          <td><input name="sofa" id="sofa" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Dinning set</td>
                          <td><input name="dinning" id="dinning" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Agricultural land</td>
                          <td><input name="land_agri" id="land_agri" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                        <tr>
                          <td>Residential land</td>
                          <td><input name="land_res" id="land_res" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                          <td>Commercial land</td>
                          <td><input name="land_com" id="land_com" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Q. Waste Management</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                      <thead>
                        <th colspan="2">96. Garbage disposal?</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1. Garbage collection</td>
                          <td width="30%">
                            <select name="garb_collect" id="garb_collect" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>2. Burning</td>
                          <td width="30%">
                            <select name="garb_burn" id="garb_burn" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>3. Composting</td>
                          <td width="30%">
                            <select name="garb_compost" id="garb_compost" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>4. Recycling</td>
                          <td width="30%">
                            <select name="garb_recycle" id="garb_recycle" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>5. Waste segregation</td>
                          <td width="30%">
                            <select name="garb_segregate" id="garb_segregate" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>6. Pit with cover</td>
                          <td width="30%">
                            <select name="garb_pitcover" id="garb_pitcover" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>7. Pit without cover</td>
                          <td width="30%">
                            <select name="garb_pitnocover" id="garb_pitnocover" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>8. River/Vacant Lot</td>
                          <td width="30%">
                            <select name="garb_river" id="garb_river" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>9. Others, specify</td>
                          <td width="30%">
                            <select name="garb_other_ind" id="garb_other_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                        </tr>
                        <tr class="garb_other_o_tr hidethis">
                          <td colspan="2">
                            <input name="garb_other_o" id="garb_other_o" value="" type="text" class="form-control form-control-sm" placeholder="Other type of garbage disposal">
                          </td>
                        </tr>
                        <tr class="garb_collector_tr hidethis">
                          <td><b>97.</b> Collector of garbage</td>
                          <td width="30%">
                            <select name="garb_collector" id="garb_collector" class="custom-select custom-select-sm garb_collect_inputs">
                              <option></option>
                              <option value="1">1 - City/Municipality collector</option>
                              <option value="2">2 - Barangay collector</option>
                              <option value="3">3 - Private collector</option>
                            </select>
                          </td>
                        </tr>
                        <tr class="garb_collector_tr hidethis">
                          <td><b>98.</b> Frequency of collection</td>
                          <td width="30%">
                            <select name="garb_collector_freq" id="garb_collector_freq" class="custom-select custom-select-sm garb_collect_inputs" required="required">
                              <option></option>
                              <option value="1">1 - Daily</option>
                              <option value="2">2 - 3 times a week</option>
                              <option value="3">3 - 2 times a week</option>
                              <option value="4">4 - Once a week</option>
                              <option value="5">5 - Others, specify</option>
                            </select>
                          </td>
                        </tr>
                        <tr class="garb_collector_freq_o_tr hidethis">
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
          <div class="row mt-2">
            <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">R. Calamity</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-borderless" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th><label>99. Experienced calamity last 3 years</label></th>
                          <th><label>Yes/No</label></th>
                          <th><label>100. Received assistance?</label></th>
                          <th><label>101. Received assistance from:</label></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1. Typhoon</td>
                          <td>
                            <select name="calam_typhoon_ind" id="calam_typhoon_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_typhoon_aid_ind" id="calam_typhoon_aid_ind" class="custom-select custom-select-sm calam_typhoon_inputs" disabled>
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_typhoon_aid_source" id="calam_typhoon_aid_source" class="custom-select custom-select-sm calam_typhoon_inputs" disabled>
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
                            <select name="calam_flood_ind" id="calam_flood_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_flood_aid_ind" id="calam_flood_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_flood_aid_source" id="calam_flood_aid_source" class="custom-select custom-select-sm">
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
                            <select name="calam_drought_ind" id="calam_drought_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_drought_aid_ind" id="calam_drought_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_drought_aid_source" id="calam_drought_aid_source" class="custom-select custom-select-sm">
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
                            <select name="calam_earthquake_ind" id="calam_earthquake_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_earthquake_aid_ind" id="calam_earthquake_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_earthquake_aid_source" id="calam_earthquake_aid_source" class="custom-select custom-select-sm">
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
                            <select name="calam_eruption_ind" id="calam_eruption_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_eruption_aid_ind" id="calam_eruption_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_eruption_aid_source" id="calam_eruption_aid_source" class="custom-select custom-select-sm">
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
                            <select name="calam_fire_ind" id="calam_fire_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_fire_aid_ind" id="calam_fire_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_fire_aid_source" id="calam_fire_aid_source" class="custom-select custom-select-sm">
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
                            <select name="calam_epidemic_ind" id="calam_epidemic_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_epidemic_aid_ind" id="calam_epidemic_aid_ind" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td>
                            <select name="calam_epidemic_aid_source" id="calam_epidemic_aid_source" class="custom-select custom-select-sm">
                              <option></option>
                              <option value="1">1 - Government</option>
                              <option value="2">2 - Non-Government Organizations</option>
                              <option value="3">3 - Relatives</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2"><b>98. </b>Temporary evacuated to:</td>
                          <td colspan="2">
                            <select name="calam_evac" id="calam_evac" class="custom-select custom-select-sm" required="required">
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
            <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">S. Disaster Preparedness</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-borderless" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th colspan="2">102. Disaster Preparedness Kit</th>
                          <th>Would last for:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1. Water</td>
                          <td width="30%">
                            <select name="dpkit_water_ind" id="dpkit_water_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td width="30%"><input name="dpkit_water_last" id="dpkit_water_last" value="" min="1" type="number" class="form-control form-control-sm" placeholder="Number of days" disabled></td>
                        </tr>
                        <tr>
                          <td>2. Food</td>
                          <td width="30%">
                            <select name="dpkit_food_ind" id="dpkit_food_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td width="30%"><input name="dpkit_food_last" id="dpkit_food_last" value="" min="1" type="number" class="form-control form-control-sm" placeholder="Number of days" disabled></td>
                        </tr>
                        <tr>
                          <td>3. Lighter/Matches</td>
                          <td width="30%">
                            <select name="dpkit_lighter_ind" id="dpkit_lighter_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>4. Flashlights/Emergency lights</td>
                          <td width="30%">
                            <select name="dpkit_flash_ind" id="dpkit_flash_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>5. Battery operated radio</td>
                          <td width="30%">
                            <select name="dpkit_radio_ind" id="dpkit_radio_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>6. Candle</td>
                          <td width="30%">
                            <select name="dpkit_candle_ind" id="dpkit_candle_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>7. Medical kit</td>
                          <td width="30%">
                            <select name="dpkit_medkit_ind" id="dpkit_medkit_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>8. Whistle</td>
                          <td width="30%">
                            <select name="dpkit_whistle_ind" id="dpkit_whistle_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>9. Clothes</td>
                          <td width="30%">
                            <select name="dpkit_clothes_ind" id="dpkit_clothes_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>10. Blankets</td>
                          <td width="30%">
                            <select name="dpkit_blankets_ind" id="dpkit_blankets_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>11. Batteries</td>
                          <td width="30%">
                            <select name="dpkit_batt_ind" id="dpkit_batt_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>12. Important documents</td>
                          <td width="30%">
                            <select name="dpkit_docs_ind" id="dpkit_docs_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td></td>
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
          <div class="row mt-2">
            <div class="col-lg-12 col-xl-12 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">T. Source of Income</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 col-xl-6 mb-2">
                      <div class="table-responsive">
                        <table class="table table-sm mb-0 table-borderless text-dark" cellspacing="0">
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
                                <select name="crop_ind" id="crop_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="live_ind" id="live_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="fish_ind" id="fish_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="hunt_ind" id="hunt_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="sale_ind" id="sale_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="manu_ind" id="manu_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="social_ind" id="social_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="trans_ind" id="trans_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="quar_ind" id="quar_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="cons_ind" id="cons_ind" class="custom-select custom-select-sm" required="required">
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
                                <select name="oea_ind" id="oea_ind" class="custom-select custom-select-sm" required="required">
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
                    <div class="col-lg-12 col-xl-6 mb-2">
                      <div class="table-responsive">
                        <table class="table table-sm mb-0 table-borderless text-dark" cellspacing="0">
                          <thead>
                            <th width="5%">T.3.</th>
                            <th>Other sources of income</th>
                            <th width="20%">In-cash</th>
                            <th width="20%">In-kind</th>
                          </thead>
                          <tbody>
                            <tr>
                              <th>116.</th>
                              <td>Net share of crops, fruits, and vegetables produced, aquaculture products harvested,
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
                              <td>Cash receipts, gifts, support, relief, and other forms of assistance from abroad
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
                              <td>Interest from bankdeposits, interest from loans extended to other families.</td>
                              <td><input name="intr_csh" id="intr_csh" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                              <td><input name="intr_knd" id="intr_knd" value="0" min="0" type="number" class="form-control form-control-sm" required="required"></td>
                            </tr>
                            <tr>
                              <th>122.</th>
                              <td>Pension and retirement, workmen's compensation, and social security benefits</td>
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
            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-2 agricrop hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">U. Agriculture - Crop Farming</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 col-xl-5 mb-2">
                      <div class="table-responsive">
                        <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <th>129.</th>
                              <td>Ownership status of household on the agricultural land</td>
                              <td width="30%">
                                <select name="agri_own_id" id="agri_own_id" class="custom-select custom-select-sm agri_inputs">
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
                            <tr class="agri_own_o_tr hidethis">
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
                    <div class="col-lg-3 col-xl-3 mb-2">
                      <div class="table-responsive">
                        <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
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
          <div class="row mt-2">
            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-2 others hidethis">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">V. Programs</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm mb-2 table-borderless text-dark" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th width="50%">Types of programs</th>
                          <th width="10%">131.</th>
                          <th width="20%">132. Name of program</th>
                          <th width="20%">133. Implementor of program</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1. Sustainable Livelihood Program (DSWD)</td>
                          <td>
                            <select name="prog_slp_ind" id="prog_slp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_slp_name" id="prog_slp_name" value="Sustainable Livelihood Program (DSWD)" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_slp_impl" id="prog_slp_impl" class="custom-select custom-select-sm">
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
                          <td>2. Food for School</td>
                          <td>
                            <select name="prog_ffp_ind" id="prog_ffp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_ffp_name" id="prog_ffp_name" value="Food for School" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_ffp_impl" id="prog_ffp_impl" class="custom-select custom-select-sm">
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
                          <td>3. Food for Work/Cash for Work</td>
                          <td>
                            <select name="prog_cfw_ind" id="prog_cfw_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_cfw_name" id="prog_cfw_name" value="Food for Work/Cash for Work" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_cfw_impl" id="prog_cfw_impl" class="custom-select custom-select-sm">
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
                          <td>4. Social Pension for Indigent Senior Citizen</td>
                          <td>
                            <select name="prog_sp_ind" id="prog_sp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_sp_name" id="prog_sp_name" value="Social Pension for Indigent Senior Citizen" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_sp_impl" id="prog_sp_impl" class="custom-select custom-select-sm">
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
                          <td>5. Pantawid Pamilyan Pilipino Program (4Ps)/KALAHI-CIDDSS/Listahan</td>
                          <td>
                            <select name="prog_pppp_ind" id="prog_pppp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_pppp_name" id="prog_pppp_name" value="Pantawid Pamilyan Pilipino Program (4Ps)/KALAHI-CIDDSS/Listahan" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_pppp_impl" id="prog_pppp_impl" class="custom-select custom-select-sm">
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
                          <td>6. Agrarian Reform Community Development Program (ARCDP)</td>
                          <td>
                            <select name="prog_arcdp_ind" id="prog_arcdp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_arcdp_name" id="prog_arcdp_name" value="Agrarian Reform Community Development Program (ARCDP)" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_arcdp_impl" id="prog_arcdp_impl" class="custom-select custom-select-sm">
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
                          <td>7. Training for Work Scholarship Program (TWSP)</td>
                          <td>
                            <select name="prog_twsp_ind" id="prog_twsp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_twsp_name" id="prog_twsp_name" value="Training for Work Scholarship Program (TWSP)" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_twsp_impl" id="prog_twsp_impl" class="custom-select custom-select-sm">
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
                          <td>8. Community-Based Employment Program (CBEP)</td>
                          <td>
                            <select name="prog_cbep_ind" id="prog_cbep_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_cbep_name" id="prog_cbep_name" value="Community-Based Employment Program (CBEP)" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_cbep_impl" id="prog_cbep_impl" class="custom-select custom-select-sm">
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
                          <td>9. Health care Insurance (Maxicare/Medicare/Intellicare/etc.)</td>
                          <td>
                            <select name="prog_hci_ind" id="prog_hci_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_hci_name" id="prog_hci_name" value="Health care Insurance" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_hci_impl" id="prog_hci_impl" class="custom-select custom-select-sm">
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
                          <td>10. <b>Gender and Development Programs</b> (Teenage Pregnancy Seminar, PhilHealth
                            Enrollment Program, Mental Health Program,
                            Livelihood Program, Teen Center, Women's Month Program, Women and Family Welfare Program,
                            Anti-VAWC/Child abuse Program, Solo Parent Program, Reproductive Health/HIV-AIDS Program,
                            Scholarship/Educational Assistance, Story-Reading Program, Dear Santa Activity, etc.)</td>
                          <td>
                            <select name="prog_gadp_ind" id="prog_gadp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_gadp_name" id="prog_gadp_name" value="Gender and Development Programs" type="text" class="form-control form-control-sm" readonly></td>
                          <td>
                            <select name="prog_gadp_impl" id="prog_gadp_impl" class="custom-select custom-select-sm">
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
                          <td>11. Health Care Assistance Program</td>
                          <td>
                            <select name="prog_hcap_ind" id="prog_hcap_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_hcap_name" id="prog_hcap_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_hcap_impl" id="prog_hcap_impl" class="custom-select custom-select-sm">
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
                          <td>12. Supplemental Feeding Program</td>
                          <td>
                            <select name="prog_sfp_ind" id="prog_sfp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_sfp_name" id="prog_sfp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_sfp_impl" id="prog_sfp_impl" class="custom-select custom-select-sm">
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
                          <td>13. Educational Assistance/Scholarship Program</td>
                          <td>
                            <select name="prog_easp_ind" id="prog_easp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_easp_name" id="prog_easp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_easp_impl" id="prog_easp_impl" class="custom-select custom-select-sm">
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
                          <td>14. Skills or Livelihood Training Program</td>
                          <td>
                            <select name="prog_sltp_ind" id="prog_sltp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_sltp_name" id="prog_sltp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_sltp_impl" id="prog_sltp_impl" class="custom-select custom-select-sm">
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
                          <td>15. Credit/Lending Program</td>
                          <td>
                            <select name="prog_clp_ind" id="prog_clp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_clp_name" id="prog_clp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_clp_impl" id="prog_clp_impl" class="custom-select custom-select-sm">
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
                          <td>16. Housing Program</td>
                          <td>
                            <select name="prog_hp_ind" id="prog_hp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_hp_name" id="prog_hp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_hp_impl" id="prog_hp_impl" class="custom-select custom-select-sm">
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
                          <td>17. LGU Gift Giving / Pamaskong Handog</td>
                          <td>
                            <select name="prog_lgg_ind" id="prog_lgg_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_lgg_name" id="prog_lgg_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_lgg_impl" id="prog_lgg_impl" class="custom-select custom-select-sm">
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
                          <td>18. Longevity Cash Gift for Indigent Seinor Citizen</td>
                          <td>
                            <select name="prog_lcgp_ind" id="prog_lcgp_ind" class="custom-select custom-select-sm" required="required">
                              <option></option>
                              <option value="1">1 - Yes</option>
                              <option value="2">2 - No</option>
                            </select>
                          </td>
                          <td><input name="prog_lcgp_name" id="prog_lcgp_name" value="" type="text" class="form-control form-control-sm" placeholder="Name of program"></td>
                          <td>
                            <select name="prog_lcgp_impl" id="prog_lcgp_impl" class="custom-select custom-select-sm">
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
    <div id="submit_panel" class="card-footer">
    <input name="hpq_id" id="hpq_id" value="" type="hidden" class="btn btn-primary btn-sm text-white">
    <a name="prev_page" id="prev_page" onclick="navigate('prev');" class="btn btn-primary btn-sm text-white">Prev page</a>
    <a name="next_page" id="next_page" onclick="navigate('next');" class="btn btn-primary btn-sm text-white">Next page</a>
      <input name="hpq_stat" id="hpq_stat" value="" type="hidden">
      <a id="submit_btn" onclick="saveData();" class="btn btn-primary btn-sm text-white float-sm-right mr-1 ml-1 disabled">Save</a>
      <a id="cancel_btn" href="index.php" class="btn btn-danger btn-sm text-white float-sm-right mr-1 ml-1">Cancel</a>
    </div>
  </div>
</form>
