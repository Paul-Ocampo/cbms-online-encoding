</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer box-dark">
  <div class="container my-auto">
    <div class="copyright text-center text-light my-auto">
      <span>Copyright &copy; CBMS Tabaco 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Scroll to Top Button-->
<a class="required-field rounded">
  <i class="m-2 text-light" id="requiredField"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-sm btn-primary" href="../logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Add Member Modal-->
<div class="modal fade" id="addmemModal" tabindex="0" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new member</b></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="addmem_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="basicinfo_div col-lg-12 col-xl-6">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">C. Demography</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hidethis">
                    <td>Mem index</td>
                    <td><input name="memindex" id="memindex" value="" type="number" required="required" readonly></td>
                  </tr>
                  <tr>
                    <td>7a. Last name</td>
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
                      <select name="nucfam" id="nucfam" class="custom-select custom-select-sm" aria-readonly="true">
                        <option></option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>9. Relation to the head of the <strong>Household</strong></td>
                    <td>
                      <select name="reln" id="reln" class="custom-select custom-select-sm" required="required">
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
                  <tr class="reln_o_tr hidethis">
                    <td>Other relation:</td>
                    <td><input name="reln_o" id="reln_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr class="reln2_tr hidethis">
                    <td>10. Relation to the head of the <strong>Family</strong></td>
                    <td>
                      <select name="reln2" id="reln2" class="custom-select custom-select-sm">
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
                  <tr>
                    <td>11. Sex</td>
                    <td>
                      <select name="sex" id="sex" class="custom-select custom-select-sm" required="required">
                        <option></option>
                        <option value="1">1 - Male</option>
                        <option value="2">2 - Female</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>12. Is <strong><i class="dfname">_____</i></strong> a member of LGBT</td>
                    <td>
                      <select name="gender" id="gender" class="custom-select custom-select-sm" required="required">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>13a. Birth date</td>
                    <td><input name="birthdate" id="birthdate" value="" type="date" class="form-control form-control-sm" required="required"></td>
                  </tr>
                  <tr>
                    <td>13b. Age</td>
                    <td>
                      <input name="age_yr" id="age" value="" min="0" max="125" type="number" class="form-control form-control-sm col-6" required="required" readonly>
                    </td>
                  </tr>
                  <tr>
                    <td>14. Registered birth</td>
                    <td>
                      <select name="regbirth" id="regbirth" class="custom-select custom-select-sm" required="required">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="civstat">
                    <td>15. Civil status</td>
                    <td>
                      <select name="civstat" id="civstat" class="custom-select custom-select-sm" required="required">
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
                      <select name="religion" id="religion" class="custom-select custom-select-sm" required="required">
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
                  <tr class="religion_o hidethis">
                    <td class="float-right">Other religion</td>
                    <td><input name="religion_o" id="religion_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>17a. Ethnicity by blood</td>
                    <td>
                      <select name="ethgrp" id="ethgrp" class="custom-select custom-select-sm" required="required">
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
                  <tr class="ethgrp_o hidethis">
                    <td class="float-right">Other ethnic group</td>
                    <td><input name="ethgrp_o" id="ethgrp_o" value="" type="text" class="form-control form-control-sm">
                    </td>
                  </tr>
                  <tr class="ofwind_tr hidethis">
                    <td>18. Is <i><b class="dfname">_____</b></i> an OFW</td>
                    <td>
                      <select name="ofwind" id="ofwind" class="custom-select custom-select-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="mlenres_tr hidethis">
                    <td>19. Address last 12 months</td>
                    <td>
                      <select name="mlenres" id="mlenres" class="custom-select custom-select-sm">
                        <option></option>
                        <option value="1">1 - Same address</option>
                        <option value="2">2 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="mlenres_o_tr hidethis">
                    <td class="float-right">Address 12 months ago</td>
                    <td><input name="mlenres_o" id="mlenres_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-lg-12 col-xl-6 ofw hidethis">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">For Overseas Filipino Workers</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20. Is <i><b class="dfname">_____</b></i> Land-based or Sea-based</td>
                    <td width="30%">
                      <select name="ofw_land_sea" id="ofw_land_sea" class="custom-select custom-select-sm ofw_inputs">
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
                      <select name="ofw_reason_leave" id="ofw_reason_leave" class="custom-select custom-select-sm ofw_inputs">
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
                  <tr class="ofw_reason_leave_o_tr hidethis">
                    <td class="float-right">Other reason</td>
                    <td><input name="ofw_reason_leave_o" id="ofw_reason_leave_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>24. Primary reason for returning to Philippines</td>
                    <td>
                      <select name="ofw_reason_return" id="ofw_reason_return" class="custom-select custom-select-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Vacation</option>
                        <option value="2">2 - Finished contract</option>
                        <option value="3">3 - Working at PH Embassy/Consulate abroad</option>
                        <option value="4">4 - Permanent return</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_reason_return_o_tr hidethis">
                    <td class="float-right">Other reason</td>
                    <td><input name="ofw_reason_return_o" id="ofw_reason_return_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>25. Planning to stay permanently in the Philippines</td>
                    <td>
                      <select name="ofw_stay_permanent" id="ofw_stay_permanent" class="custom-select custom-select-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>26. Plans for returning to the Philippines</td>
                    <td>
                      <select name="ofw_plans_return" id="ofw_plans_return" class="custom-select custom-select-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Retire</option>
                        <option value="2">2 - Start a business</option>
                        <option value="3">3 - Find a work</option>
                        <option value="4">4 - Volunteer</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_plans_return_o_tr hidethis">
                    <td class="float-right">Other plan upon returning</td>
                    <td><input name="ofw_plans_return_o" id="ofw_plans_return_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>27. Where the last remitance spent</td>
                    <td>
                      <select name="ofw_remit_spent" id="ofw_remit_spent" class="custom-select custom-select-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Consumptions</option>
                        <option value="2">2 - Investments</option>
                        <option value="3">3 - Savings</option>
                        <option value="4">4 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_remit_spent_o_tr hidethis">
                    <td class="float-right">Other</td>
                    <td><input name="ofw_remit_spent_o" id="ofw_remit_spent_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td>28. Services to avail</td>
                    <td>
                      <select name="ofw_services" id="ofw_services" class="custom-select custom-select-sm ofw_inputs">
                        <option></option>
                        <option value="1">1 - Financial literacy Training</option>
                        <option value="2">2 - Leadership and Management Training</option>
                        <option value="3">3 - Information Technology Related Training</option>
                        <option value="4">4 - Communication skills Training</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ofw_services_o_tr hidethis">
                    <td class="float-right">Other service</td>
                    <td><input name="ofw_services_o" id="ofw_services_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <hr class="educ hidethis">
            <div class="col-lg-12 col-xl-6 educ hidethis">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">D. Education</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" class="float-center"><b>For 3 years old and above</b></td>
                  </tr>
                  <tr class="educ hidethis">
                    <td>29. Is <i><b class="dfname">_____</b></i> currently attending school</td>
                    <td width="30%">
                      <select name="educind" id="educind" class="custom-select custom-select-sm educ_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="gradel_tr hidethis">
                    <td>30. Grade/Year</td>
                    <td>
                      <select name="gradel" id="gradel" class="custom-select custom-select-sm educ_inputs">
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
                  <tr class="course_tr hidethis">
                    <td class="float-right">Course</td>
                    <td><input name="course" id="course" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                  <tr class="schtype_tr hidethis">
                    <td>31. Type of school</td>
                    <td>
                      <select name="schtype" id="schtype" class="custom-select custom-select-sm educ_inputs">
                        <option></option>
                        <option value="1">1 - Public school</option>
                        <option value="2">2 - Private school</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="ynotsch_tr hidethis">
                    <td>32. Reason for not attending school</td>
                    <td>
                      <select name="ynotsch" id="ynotsch" class="custom-select custom-select-sm educ_inputs">
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
                  <tr class="ynotsch_o_tr hidethis">
                    <td class="float-right">Other reason for not attending school</td>
                    <td><input name="ynotsch_o" id="ynotsch_o" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                  <tr class="educ hidethis">
                    <td>33. Highest educational attainment</td>
                    <td>
                      <select name="educal" id="educal" class="custom-select custom-select-sm educ_inputs">
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
                  <tr class="fcourse_tr hidethis">
                    <td class="float-right">Course</td>
                    <td><input name="fcourse" id="fcourse" value="" type="text" class="form-control form-control-sm educ_inputs"></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-sm table-borderless text-light literacy hidethis" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <td colspan="2" class="float-center"><b>For 5 years old and above</b></td>
                  </tr>
                </thead>
                <tr>
                  <td>34. Can <i><b class="dfname">_____</b></i> read/write simple language</td>
                  <td width="30%">
                    <select name="literind" id="literind" class="custom-select custom-select-sm">
                      <option></option>
                      <option value="1">Yes</option>
                      <option value="2">No</option>
                    </select>
                  </td>
                </tr>
                <tr class="language_tr hidethis">
                  <td>35. Language spoken</td>
                  <td>
                    <select name="language" id="language" class="custom-select custom-select-sm language">
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
                <tr class="language_o_tr hidethis">
                  <td class="float-right">Other language</td>
                  <td><input name="language_o" id="language_o" value="" type="text" class="form-control form-control-sm"></td>
                </tr>
                </tbody>
              </table>
            </div>

            <div class="col-lg-12 col-xl-6 job hidethis">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">E. Economic activity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>36. Did <i><b class="dfname">_____</b></i> have any paid work for atleast 1 hour during the past
                      week</td>
                    <td width="30%">
                      <select name="jobind" id="jobind" class="custom-select custom-select-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="occup_tr hidethis">
                    <td>37. Occupation</td>
                    <td><input name="occup" id="occup" value="" type="text" class="form-control form-control-sm job_inputs"></td>
                  </tr>
                  <tr class="occup_tr hidethis">
                    <td>38. Industry</td>
                    <td><input name="indust" id="indust" value="" type="text" class="form-control form-control-sm job_inputs"></td>
                  </tr>
                  <tr class="15up_tr hidethis">
                    <td colspan="2" class="float-center"><b>For 15 years old and above</b></td>
                  </tr>
                  <tr class="15up_tr hidethis">
                    <td>39. Nature of work</td>
                    <td>
                      <select name="jobstat" id="jobstat" class="custom-select custom-select-sm job_inputs_15up">
                        <option></option>
                        <option value="1">1 - Permanent</option>
                        <option value="2">2 - Short-term, seasonal or casual</option>
                        <option value="3">3 - Worked on different jobs on day to day or week to week</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="15up_tr hidethis">
                    <td>40. Class of worker</td>
                    <td>
                      <select name="workclass" id="workclass" class="custom-select custom-select-sm job_inputs_15up">
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
                  <tr class="15up_tr hidethis">
                    <td>41a. Total salary/wage last 12 months (incash)</td>
                    <td><input name="wagecash" id="wagecash" value="" type="text" class="form-control form-control-sm job_inputs_15up"></td>
                  </tr>
                  <tr class="15up_tr hidethis">
                    <td>41b. Total salary/wage last 12 months (inkind)</td>
                    <td><input name="wagekind" id="wagekind" value="" type="text" class="form-control form-control-sm job_inputs_15up"></td>
                  </tr>
                  <tr class="15up_tr hidethis">
                    <td>42. SSS or GSIS member</td>
                    <td>
                      <select name="sss" id="sss" class="custom-select custom-select-sm job_inputs_15up">
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
          </div>
          <hr class="job hidethis">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">F. Crime</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>43. Is <i><b class="dfname">_____</b></i> a victim of crime</td>
                    <td width="30%">
                      <select name="crime" id="crime" class="custom-select custom-select-sm" required="required">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="crimetype_tr hidethis">
                    <td>Type of crime</td>
                    <td>
                      <select name="crimetype" id="crimetype" class="custom-select custom-select-sm">
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
                  <tr class="crimetype_o_tr hidethis">
                    <td class="float-right">Other type of crime</td>
                    <td><input name="crimetype_o" id="crimetype_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">G. Health - I</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>44. Type of PhilHealth</td>
                    <td width="30%">
                      <select name="philhealthtype" id="philhealthtype" class="custom-select custom-select-sm" required="required">
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
                      <select name="healthcareprovider" id="healthcareprovider" class="custom-select custom-select-sm" required="required">
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
                  <tr class="healthcareprovider_o_tr hidethis">
                    <td class="float-right">Other provider of health care</td>
                    <td><input name="healthcareprovider_o" id="healthcareprovider_o" value="" type="text" class="form-control form-control-sm"></td>
                  </tr>
                </tbody>
              </table>

              <hr class="soloparent hidethis">
              <table class="table table-sm table-borderless text-light soloparent hidethis" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>46. Is <i><b class="dfname">_____</b></i> a solo-parent</td>
                    <td width="50%">
                      <select name="uniparind" id="uniparind" class="custom-select custom-select-sm sp_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="uniparreason_tr hidethis">
                    <td>47. Reason for being solo-parent</td>
                    <td>
                      <select name="uniparreason" id="uniparreason" class="custom-select custom-select-sm sp_inputs">
                        <option></option>
                        <option value="1">1 - Death of spouse</option>
                        <option value="2">2 - Imprisonment of spouse for at least one year</option>
                        <option value="3">3 - Mental and physical incapacity of spouse</option>
                        <option value="4">4 - Legal or de facto separation from spouse for at least one year</option>
                        <option value="5">5 - Annulment of marriage as decreed by court or church</option>
                        <option value="6">6 - Abandonment of spouse for at least one year</option>
                        <option value="7">7 - Unmarried mother or father who preferred to keep the child instead of
                          others caring for him/her</option>
                        <option value="8">8 - Any other person who solely provides parental care and support to a child
                          provided he/she is a duly licensed foster parent of DSWD, or duly appointed legal guardian by
                          the court through adoption or legal guardianship</option>
                        <option value="9">9 - Any family member who solely assumes the responsibility as head of the
                          family as a result of death, abandonment, prolonged absence, or disappearance of parent for at
                          least one year</option>
                        <option value="10">10 - Other reasons, specify</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="uniparreason_o_tr hidethis">
                    <td class="float-right">Other reason for being a solo-parent</td>
                    <td><input name="uniparreason_o" id="uniparreason_o" value="" type="text" class="form-control form-control-sm sp_inputs"></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <table class="table table-sm table-borderless pwd text-light hidethis" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>48. Is <i><b class="dfname">_____</b></i> a person with disability</td>
                    <td>
                      <select name="pwdind" id="pwdind" class="custom-select pwdind custom-select-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="pwdtype_tr pwd_inputs_tr hidethis">
                    <td>49. Type of disabilty</td>
                    <td>
                      <select name="pwdtype" id="pwdtype" class="custom-select custom-select-sm pwd_inputs">
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
                  <tr class="pwdtype_o_tr pwd_inputs_o_tr hidethis">
                    <td class="float-right">Other type of disability</td>
                    <td><input name="pwdtype_o" id="pwdtype_o" value="" type="text" class="form-control form-control-sm pwd_inputs"></td>
                  </tr>
                  <tr class="pwdcause_tr pwd_inputs_tr hidethis">
                    <td>50. Cause of disabilty</td>
                    <td>
                      <select name="pwdcause" id="pwdcause" class="custom-select custom-select-sm pwd_inputs">
                        <option></option>
                        <option value="1">1 - In-born</option>
                        <option value="2">2 - Illness</option>
                        <option value="3">3 - Accident</option>
                        <option value="4">4 - Old age</option>
                        <option value="5">5 - Others</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="pwdcause_o_tr pwd_inputs_o_tr hidethis">
                    <td class="float-right">Other cause of disability</td>
                    <td><input name="pwdcause_o" id="pwdcause_o" value="" type="text" class="form-control form-control-sm pwd_inputs"></td>
                  </tr>
                  <tr class="pwdid_tr pwd_inputs_tr hidethis">
                    <td>51. Does <i><b class="dfname">_____</b></i> have a PWD ID</td>
                    <td>
                      <select name="pwdid" id="pwdid" class="custom-select custom-select-sm pwd_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-light seniorcitizen hidethis" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Senior Citizen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>52. Does <i><b class="dfname">_____</b></i> have a Senior Citizen ID</td>
                    <td width="30%">
                      <select name="scid" id="scid" class="custom-select custom-select-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 col-lg-6">
              <table class="table table-sm table-borderless text-light familyplanning hidethis" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Family planning</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>53. Does <i><b class="dfname">_____</b></i> using <br> any type of family planning method?</td>
                    <td width="30%">
                      <select name="famplanind" id="famplanind" class="custom-select custom-select-sm">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                  <tr class="fp_meth_tr hidethis">
                    <td>54. Family planning method</td>
                    <td>
                      <select name="fp_meth" id="fp_meth" class="custom-select custom-select-sm fp_inputs">
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
                  <tr class="fp_meth_o_tr hidethis">
                    <td class="float-right">Other method of family planning</td>
                    <td><input name="fp_meth_o" id="fp_meth_o" value="" type="text" class="form-control form-control-sm fp_inputs"></td>
                  </tr>
                  <tr class="fp_provider_tr hidethis">
                    <td>55. Provider of family planning method</td>
                    <td>
                      <select name="fp_provider" id="fp_provider" class="custom-select custom-select-sm fp_inputs">
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
                  <tr class="fp_provider_o_tr hidethis">
                    <td class="float-right">Other provider of family planning method</td>
                    <td><input name="fp_provider_o" id="fp_provider_o" value="" type="text" class="form-control form-control-sm fp_inputs"></td>
                  </tr>
                </tbody>
              </table>
              <hr class="sdg hidethis">
              <table class="table table-sm table-borderless text-light sdg hidethis" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Reproduction and child survival</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>56. Is <i><b class="dfname">_____</b></i> pregnant</td>
                    <td width="30%">
                      <select name="sdg_pregind" id="sdg_pregind" class="custom-select custom-select-sm rcs_inputs sdg_inputs">
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
                  <tr class="sdg_preg5years_tr hidethis">
                    <td>58. Did <i><b class="dfname">_____</b></i> got pregnant/delivered a child in the past 5 years?
                    </td>
                    <td>
                      <select name="sdg_preg5years" id="sdg_preg5years" class="custom-select custom-select-sm sdg_inputs">
                        <option></option>
                        <option value="1">1 - Yes</option>
                        <option value="2">2 - No</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-sm table-borderless text-light sdg_preg5years_tb hidethis" width="100%" cellspacing="0">
                <tr>
                  <th colspan="2">For women who got pregnant and/or gave birth during the past 5 years</th>
                </tr>
                <tr>
                  <td>59. Child died 0-11 months old</td>
                  <td width="30%"><input name="sdg_died011months" id="sdg_died011months" value="" type="number" min="0" max="30" class="form-control form-control-sm sdg_withchild sdg_inputs"></td>
                </tr>
                <tr>
                  <td>60. Child died 12-59 months old</td>
                  <td><input name="sdg_died1259months" id="sdg_died1259months" value="" type="number" min="0" max="30" class="form-control form-control-sm sdg_withchild sdg_inputs"></td>
                </tr>
                <tr>
                  <td>61. Had miscarriage/still birth/abortion</td>
                  <td>
                    <select name="sdg_stillbirth" id="sdg_stillbirth" id="sdg_stillbirth" class="custom-select custom-select-sm sdg_withchild sdg_inputs">
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
                    <select name="sdg_childdelivery" id="sdg_childdelivery" class="custom-select custom-select-sm sdg_withchild sdg_inputs">
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
                <tr class="sdg_childdelivery_o_tr hidethis">
                  <td class="float-right">Other place of delivery</td>
                  <td><input name="sdg_childdelivery_o" id="sdg_childdelivery_o" value="" type="text" class="form-control form-control-sm sdg_withchild"></td>
                </tr>
                <tr>
                  <td>63. Who assisted <i><b class="dfname">_____</b></i> at the delivery</td>
                  <td>
                    <select name="sdg_deliverassist" id="sdg_deliverassist" class="custom-select custom-select-sm sdg_inputs">
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
                <tr class="sdg_deliverassist_o_tr hidethis">
                  <td class="float-right">Other person who assisted in delivery of child</td>
                  <td><input name="sdg_deliverassist_o" id="sdg_deliverassist_o" value="" type="text" class="form-control form-control-sm sdg_withchild"></td>
                </tr>
                <tr>
                  <td>64. Did <i><b class="dfname">_____</b></i> breastfeed this child</td>
                  <td>
                    <select name="sdg_breastfeedind" id="sdg_breastfeedind" class="custom-select custom-select-sm sdg_inputs">
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
          <button class="btn btn-sm btn-warning float-left" type="button" onclick="addMemForm.reset();">Reset</button>
          <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add Deceased Member Modal-->
<div class="modal fade" id="adddeceasedModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new entry</b></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="adddeceased_form" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <table class="table table-sm table-borderless text-light" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="2">Previous member</th>
                  </tr>
                </thead>
                <tbody>
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
                      <select id="dsex" name="dsex" class="custom-select custom-select-sm" required="required">
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
                      <select id="causeofdeath" name="causeofdeath" class="custom-select custom-select-sm" required="required">
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
                  <tr class="causeofdeath_o_tr hidethis">
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
          <button id="btn_toggler" class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
          <button id="adddeceasedbtn" type="submit" class="btn btn-primary text-white">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="confirm-delete-hpq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>You are about to delete one record, this procedure is irreversible.</p>
        <p>Do you want to proceed?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-sm btn-danger btn-ok" data-dismiss="modal">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="confirm-delete-mem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>You are about to delete one member, this procedure is irreversible.</p>
        <p>Do you want to proceed?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-sm btn-danger btn-ok" data-dismiss="modal">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="confirm-delete-deceased" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>You are about to delete one record, this procedure is irreversible.</p>
        <p>Do you want to proceed?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-sm btn-danger btn-ok" data-dismiss="modal">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Alert message Modal-->
<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content box-dark">
      <div class="modal-header">
        <h4 class="modal-title" id="alert-title"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p id="alert-message"></p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-sm btn-primary" data-dismiss="modal">Continue</a>
      </div>
    </div>
  </div>
</div>

<!-- Message Modal-->
<div class="modal fade" id="msg-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content box-dark">
      <div class="modal-body">
        <p id="msg-message"></p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/assets/js/jquery.serializejson.js"></script>
<script src="/assets/js/encoder.js"></script>
<script>
  $(document).ready(function() {

    $.ajax({
      dataType: "json",
      url: "updateDashboard.php",
      method: "POST",
      data: {
        "action": "updateDashboard"
      },
      success: function(response) {
        for (var prop in response) {
          $("." + prop).html(response[prop]);
        }

        $.ajax({
          url: "getEncoded.php",
          method: "POST",
          data: {
            condition: "encoded"
          },
          success: function(response) {
            $("#dashboardTable").html("<tr><td colspan='7' align='center'><h2><i class='fa fa-spin fa-hourglass'></i></h2></td></tr>");
            $("#dashboardTable").html(response);
            $('#dataTable').DataTable();
          }
        });

      }
    });

  });
</script>
<script>
  function load(target) {
    if (target == "addhpq.php") {
      $(".sidebar").hide();
      $("#navbar-logo").fadeIn(1000);
    }
    // AJAX LOAD
    var xhr = new XMLHttpRequest();
    var target = target;
    xhr.open('POST', target, true);
    xhr.onload = function() {
      document.getElementById("page").innerHTML = this.response;
    };
    xhr.send();
    return true;
  }
</script>
<script>
  $(document).ready(function() {

    function update_user_activity() {
      var action = 'update_time';
      $.ajax({
        url: "../admin/active_users.php",
        method: "POST",
        data: {
          action: action
        },
        success: function(data) {

        }
      });
    }
    setInterval(function() {
      update_user_activity();
    }, 3000);

  });
</script>
</body>

</html>