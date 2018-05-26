
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/CognitorFormFiles/style1.css">
 <div class="container">
   <div class="row">
      <div class="col-md-4">
         <a href="<?php echo base_url(); ?>supervisor/viewProfile">
            <button class="btn btn-primary"><i class="mdi mdi-chevron-left"></i>Back</button>
         </a>
      </div>
      <div class="col-md-4"></div>
   </div>
 </div>  
   <?php foreach ($studentInfo as $studentInfo):?>
      <?php endforeach ?>
  <?php foreach ($student as $student):?>
      <?php endforeach ?>

<div id="c-forms-container" class="cognito c-safari c-lrg container">
   <script src="<?php echo base_url();?>/assets/CognitorFormFiles/88be12b9-8c99-4872-a5dd-446f35bfd50f"></script>
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/CognitorFormFiles/style2.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/CognitorFormFiles/style3.css">
            <?php $saveQuestionnaire = "supervisor/saveQuestionnaire?&id=".$student['id']."?&stuId=".$student['student_id']; ?>
   <?php echo form_open_multipart($saveQuestionnaire,'class="form-horizontal"'); ?>
      <div class="c-forms-form" tabindex="0">
         <div class="c-forms-form-body">
            <div class="c-forms-heading">
               <div class="c-forms-form-title">
                  <h2>Companies Form PNC</h2>
               </div>
            </div>
            <div class="c-forms-template" sys:attach="dataview" >
               <div class="c-forms-form-main c-span-24 c-sml-span-12">
                  
                  <div class="c-text-singleline c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required">
                     <div class="c-label  ">
                        <label for="c-0-205">Name of your company </label></div>
                     <div class="c-editor">
                        <input type="text"  id="c-0-205" value="<?php echo $studentInfo['name']; ?>" name="companyName" placeholder="Your Company Name" >
                     </div>
                     <div class="c-validation">Name of your company  is required.</div>
                  </div>
                  
                  <div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <div class="c-label ">
                        <label>Name of the intern </label>
                     </div>
                     <div>
                        <div class="c-offscreen">
                           <label for="c-1-204">First</label>
                        </div>
                        <div class="c-editor c-span-1" style="width: 50%; float: left;">
                           <input type="text" id="c-1-204" name="firstname" value="<?php echo $studentInfo['sFirstname']; ?>" placeholder="First Name" >
                        </div>
                        <div class="c-offscreen">
                           <label for="c-2-204">Last</label>
                        </div>
                        <div class="c-editor c-span-1" style="width: 50%; float: left;">
                           <input type="text" id="c-2-204" name="lastname" value="<?php echo $studentInfo['sLastname']; ?>" placeholder="Last Name" >
                        </div>
                     </div>
                     <div class="c-validation">First and Last are required.</div>
                  </div>
                  <div class="c-choice-radiobuttons c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label  ">Sex</legend>
                     <div class="c-editor c-columns-0">
                     <!-- <span class="required text-danger"><?php echo form_error("sex"); ?></span> -->
                        <div class="c-choice-option">
                           <label for="c-4-202">
                           <input type="radio" name="sex" id="c-4-202" value="Male"
                              <?php 
                                 if ($student['gender'] == 'Male') {
                                    echo "checked='checked'";
                                 }
                               ?>>
                               <span>Male</span>
                           </label>
                        </div>
                        <div class="c-choice-option">
                           <label for="c-4-203">
                           <input type="radio" name="sex"  id="c-4-203" value="Female"
                              <?php 
                                 if ($student['gender'] == "Female") {
                                    echo "checked='checked'";
                                 }
                               ?>
                           ><span>Female</span>
                           </label>
                        </div>
                     </div> 

                                 
                  </div>
                  <div class="c-rating-scale c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label ">How likely is that you would recommend a PN intern ?</legend>
                     <div class="c-rating-scale-questions">
                        <table>
                           <thead>
                              <tr>
                                 <th></th>
                                 <th class="c-choice-option-header">1 (Not likely at all)</th>
                                 <th class="c-choice-option-header">2</th>
                                 <th class="c-choice-option-header">3</th>
                                 <th class="c-choice-option-header">4</th>
                                 <th class="c-choice-option-header">5</th>
                                 <th class="c-choice-option-header">6</th>
                                 <th class="c-choice-option-header">7</th>
                                 <th class="c-choice-option-header">8</th>
                                 <th class="c-choice-option-header">9</th>
                                 <th class="c-choice-option-header">10 (Extremely likely)</th>
                              </tr>
                           </thead>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">How likely is that you would recommend a PN intern ?</th>
                                 <td class="c-choice-option">
                                 
                                    <label for="c-5-191">
                                       <input type="radio" name="q1" value="1" id="c-5-191" <?php 
                                          if ($student['question1'] == 1) {
                                             echo "checked='checked'";
                                          }
                                        ?>>
                                       <span><span class="c-offscreen">1 (Not likely at all)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-5-192">
                                       <input type="radio" name="q1" value="2"  id="c-5-192" 
                                          <?php 
                                          if ($student['question1'] == 2) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">2</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-5-193">
                                       <input type="radio" name="q1" value="3" id="c-5-193">
                                       <span><span class="c-offscreen">3</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-5-194">
                                       <input type="radio" name="q1" value="4" id="c-5-194"
                                          <?php 
                                          if ($student['question1'] == 4) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">4</span></span></label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-195"> 
                                       <input type="radio" name="q1" value="5" id="c-5-195"
                                          <?php 
                                          if ($student['question1'] == 5) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">5</span></span>
                                    </label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-196">
                                       <input type="radio" name="q1" value="6" id="c-5-196"
                                          <?php 
                                          if ($student['question1'] == 6) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">6</span></span>
                                    </label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-197">
                                       <input type="radio" name="q1" value="7" id="c-5-197"
                                          <?php 
                                          if ($student['question1'] == 7) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">7</span></span>
                                    </label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-198">
                                       <input type="radio" name="q1" value="8" id="c-5-198"
                                          <?php 
                                          if ($student['question1'] == 8) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">8</span></span>
                                    </label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-199">
                                    
                                       <input type="radio" name="q1" value="9" id="c-5-199"/
                                          <?php 
                                          if ($student['question1'] == 9) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                       >
                                       <span><span class="c-offscreen">9</span></span>
                                    </label></td>
                                 <td class="c-choice-option">
                                    <label for="c-5-200">
                                    <input type="radio" name="q1" value="10" id="c-5-200"
                                          <?php 
                                          if ($student['question1'] == 10) {
                                             echo "checked='checked'";
                                          }
                                        ?>
                                    >

                                    </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="11">
                                    <div class="c-validation">How likely is that you would recommend a PN intern ? is required.</div>
                                 </td>
                                       
                              </tr>
                              <tr>
                                 <td class="c-validation-row"> 
                                    <!-- <span class="required text-danger"><?php echo form_error("q1"); ?></span> -->
                                 </td>
                              </tr>

                           </tbody>
                        </table>
                     </div>
                     <div class="c-validation"></div>
                  </div>
                  <div class="c-choice-radiobuttons c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label  ">What was the major of your intern at PNC ?</legend>
                     <div class="c-editor c-columns-0">
                     <!-- <span class="required text-danger"><?php echo form_error("major"); ?></span> -->
                        <div class="c-choice-option">
                           <label for="c-7-187">
                              <input type="radio" name="major" value="WEB" id="c-7-187"
                                 <?php 
                                    if ($student['major'] == 'WEB') {
                                      echo "checked='checked'";
                                    }
                                 ?>
                              >
                              <span>WEP</span>
                           </label>
                        </div>
                        <div class="c-choice-option">
                           <label for="c-7-188">
                              <input type="radio" name="major" value="SNA" id="c-7-188"
                                 <?php 
                                    if ($student['major'] == 'SNA') {
                                      echo "checked='checked'";
                                    }
                                 ?>
                              >
                              <span>SNA</span>
                           </label>
                              
                        </div>
                     </div>
                  </div>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-rating-scale c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                        <legend class="c-label ">Where would you rank your PN intern amongst your other interns/junior staff ?</legend>
                        <div class="c-rating-scale-questions">
                           <table>
                              <thead>
                                 <tr>
                                    <th></th>
                                    <th class="c-choice-option-header">Cannot judge (X)</th>
                                    <th class="c-choice-option-header">Below average (-)</th>
                                    <th class="c-choice-option-header">Around average (=)</th>
                                    <th class="c-choice-option-header">Above average (+)</th>
                                    <th class="c-choice-option-header">One of the best (++)</th>
                                 </tr>
                              </thead>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Gather common user requirements, Project Management</th>
                                    <td class="c-choice-option">
                                       <label for="c-8-181">
                                          <input type="radio" name="group180" id="c-8-181">
                                          <span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-8-182">
                                          <input type="radio" name="group180" id="c-8-182">
                                          <span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-8-183">
                                          <input type="radio" name="group180" id="c-8-183">
                                          <span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-8-184">
                                          <input type="radio" name="group180" id="c-8-184">
                                          <span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-8-185">
                                          <input type="radio" name="group180" id="c-8-185">
                                          <span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Gather common user requirements, Project Management is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Develop and test simple web applications</th>
                                    <td class="c-choice-option">
                                       <label for="c-9-175">
                                          <input type="radio" name="group174" id="c-9-175">
                                          <span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-9-176">
                                          <input type="radio" name="group174" id="c-9-176">
                                          <span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-9-177">
                                          <input type="radio" name="group174" id="c-9-177">
                                          <span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-9-178">
                                          <input type="radio" name="group174" id="c-9-178">
                                          <span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-9-179">
                                          <input type="radio" name="group174" id="c-9-179">
                                          <span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Develop and test simple web applications is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Develop web front end, CMS</th>
                                    <td class="c-choice-option">
                                       <label for="c-10-169">
                                          <input type="radio" name="group168" id="c-10-169"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-10-170">
                                          <input type="radio" name="group168" id="c-10-170"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-10-171">
                                          <input type="radio" name="group168" id="c-10-171"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-10-172">
                                          <input type="radio" name="group168" id="c-10-172"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-10-173">
                                          <input type="radio" name="group168" id="c-10-173"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Develop web front end, CMS is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Develop web back end</th>
                                    <td class="c-choice-option">
                                       <label for="c-11-163">
                                          <input type="radio" name="group162" id="c-11-163"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-11-164">
                                          <input type="radio" name="group162" id="c-11-164"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-11-165">
                                          <input type="radio" name="group162" id="c-11-165"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-11-166">
                                          <input type="radio" name="group162" id="c-11-166"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-11-167">
                                          <input type="radio" name="group162" id="c-11-167"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Develop web back end is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Mobile development</th>
                                    <td class="c-choice-option">
                                       <label for="c-12-157">
                                          <input type="radio" name="group156" id="c-12-157"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-12-158">
                                          <input type="radio" name="group156" id="c-12-158"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-12-159">
                                          <input type="radio" name="group156" id="c-12-159"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-12-160">
                                          <input type="radio" name="group156" id="c-12-160"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-12-161">
                                          <input type="radio" name="group156" id="c-12-161"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Mobile development is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Graphic design</th>
                                    <td class="c-choice-option">
                                       <label for="c-13-151">
                                          <input type="radio" name="group150" id="c-13-151"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-13-152">
                                          <input type="radio" name="group150" id="c-13-152"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-13-153">
                                          <input type="radio" name="group150" id="c-13-153"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-13-154">
                                          <input type="radio" name="group150" id="c-13-154"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-13-155">
                                          <input type="radio" name="group150" id="c-13-155"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Graphic design is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Self-learn from information found on the internet (tutorial, MOOC,...)</th>
                                    <td class="c-choice-option">
                                       <label for="c-14-145">
                                          <input type="radio" name="group144" id="c-14-145"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-14-146">
                                          <input type="radio" name="group144" id="c-14-146"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-14-147">
                                          <input type="radio" name="group144" id="c-14-147"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-14-148">
                                          <input type="radio" name="group144" id="c-14-148"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-14-149">
                                          <input type="radio" name="group144" id="c-14-149"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Self-learn from information found on the internet (tutorial, MOOC,...) is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="c-validation"></div>
                     </div>
                  </span>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-label  "><label for="c-16-142">Feel free to add any comments regarding the intern's performance</label></div>
                        <div class="c-editor"><textarea id="c-16-142" placeholder="" type="text" height="" ></textarea></div>
                        <div class="c-validation"></div>
                     </div>
                  </span>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-rating-scale c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                        <legend class="c-label ">Where would you rank your PN intern amongst your other interns/junior staff ?</legend>
                        <div class="c-rating-scale-questions">
                           <table>
                              <thead>
                                 <tr>
                                    <th></th>
                                    <th class="c-choice-option-header">Cannot judge (X)</th>
                                    <th class="c-choice-option-header">Below average (-)</th>
                                    <th class="c-choice-option-header">Around average (=)</th>
                                    <th class="c-choice-option-header">Above average (+)</th>
                                    <th class="c-choice-option-header">One of the best (++)</th>
                                 </tr>
                              </thead>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Computer configuration and maintenance</th>
                                    <td class="c-choice-option">
                                       <label for="c-17-137">
                                          <input type="radio" name="group136" id="c-17-137"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-17-138">
                                          <input type="radio" name="group136" id="c-17-138"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-17-139">
                                          <input type="radio" name="group136" id="c-17-139"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-17-140">
                                          <input type="radio" name="group136" id="c-17-140"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-17-141">
                                          <input type="radio" name="group136" id="c-17-141"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Computer configuration and maintenance is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Install, manage and maintain servers using up to date operating system (linux and windows)</th>
                                    <td class="c-choice-option">
                                       <label for="c-18-131">
                                          <input type="radio" name="group130" id="c-18-131"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-18-132">
                                          <input type="radio" name="group130" id="c-18-132"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-18-133">
                                          <input type="radio" name="group130" id="c-18-133"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-18-134">
                                          <input type="radio" name="group130" id="c-18-134"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-18-135">
                                          <input type="radio" name="group130" id="c-18-135"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Install, manage and maintain servers using up to date operating system (linux and windows) is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Install, test and update common services on servers (FTP, HTTP, DHCP, DNS, DC, VPN, File...)</th>
                                    <td class="c-choice-option">
                                       <label for="c-19-125"><input type="radio" name="group124" id="c-19-125"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-19-126"><input type="radio" name="group124" id="c-19-126"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-19-127"><input type="radio" name="group124" id="c-19-127"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-19-128"><input type="radio" name="group124" id="c-19-128"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-19-129"><input type="radio" name="group124" id="c-19-129"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Install, test and update common services on servers (FTP, HTTP, DHCP, DNS, DC, VPN, File...) is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Software installation</th>
                                    <td class="c-choice-option">
                                       <label for="c-20-119"><input type="radio" name="group118" id="c-20-119"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-20-120"><input type="radio" name="group118" id="c-20-120"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-20-121"><input type="radio" name="group118" id="c-20-121"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-20-122"><input type="radio" name="group118" id="c-20-122"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-20-123"><input type="radio" name="group118" id="c-20-123"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Software installation is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Network installation and administration</th>
                                    <td class="c-choice-option">
                                       <label for="c-21-113"><input type="radio" name="group112" id="c-21-113"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-21-114"><input type="radio" name="group112" id="c-21-114"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-21-115"><input type="radio" name="group112" id="c-21-115"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-21-116"><input type="radio" name="group112" id="c-21-116"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-21-117"><input type="radio" name="group112" id="c-21-117"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Network installation and administration is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Install and administer a database</th>
                                    <td class="c-choice-option">
                                       <label for="c-22-107"><input type="radio" name="group106" id="c-22-107"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-22-108"><input type="radio" name="group106" id="c-22-108"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-22-109"><input type="radio" name="group106" id="c-22-109"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-22-110"><input type="radio" name="group106" id="c-22-110"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-22-111"><input type="radio" name="group106" id="c-22-111"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Install and administer a database is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Trouble shooting</th>
                                    <td class="c-choice-option">
                                       <label for="c-23-101"><input type="radio" name="group100" id="c-23-101"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-23-102"><input type="radio" name="group100" id="c-23-102"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-23-103"><input type="radio" name="group100" id="c-23-103"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-23-104"><input type="radio" name="group100" id="c-23-104"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-23-105"><input type="radio" name="group100" id="c-23-105"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Trouble shooting is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">User or customer support</th>
                                    <td class="c-choice-option">
                                       <label for="c-24-95"><input type="radio" name="group94" id="c-24-95"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-24-96"><input type="radio" name="group94" id="c-24-96"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-24-97"><input type="radio" name="group94" id="c-24-97"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-24-98"><input type="radio" name="group94" id="c-24-98"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-24-99"><input type="radio" name="group94" id="c-24-99"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">User or customer support is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody class="">
                                 <tr class="">
                                    <th class="c-choice-question" scope="row">Secure a network to prevent intrusion and disasters</th>
                                    <td class="c-choice-option">
                                       <label for="c-25-89"><input type="radio" name="group88" id="c-25-89"><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-25-90"><input type="radio" name="group88" id="c-25-90"><span><span class="c-offscreen">Below average (-)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-25-91"><input type="radio" name="group88" id="c-25-91"><span><span class="c-offscreen">Around average (=)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-25-92"><input type="radio" name="group88" id="c-25-92"><span><span class="c-offscreen">Above average (+)</span></span>
                                       </label>
                                    </td>
                                    <td class="c-choice-option">
                                       <label for="c-25-93"><input type="radio" name="group88" id="c-25-93"><span><span class="c-offscreen">One of the best (++)</span></span>
                                       </label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="c-validation-row" colspan="6">
                                       <div class="c-validation">Secure a network to prevent intrusion and disasters is required.</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="c-validation"></div>
                     </div>
                  </span>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-label  "><label for="c-27-86">Feel free to add any comments regarding the intern's performance</label></div>
                        <div class="c-editor"><textarea id="c-27-86" placeholder="" type="text" height="" ></textarea></div>
                        <div class="c-validation"></div>
                     </div>
                  </span>
                  <div class="c-choice-radiobuttons c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label  ">Did your company use Linux operating system ?</legend>
                     <div class="c-editor c-columns-0">
                     <!-- <span class="required text-danger"><?php echo form_error("q2"); ?></span> -->
                        <div class="c-choice-option"><label for="c-28-84">
                           <input type="radio" name="q2" value="1" id="c-28-84"
                              <?php 
                                 if ($student['question2'] == 1) {
                                   echo "checked='checked'";
                                 }
                              ?> ><span>Yes</span></label></div>
                        <div class="c-choice-option"><label for="c-28-85">
                           <input type="radio" name="q2" value="2" id="c-28-85"
                              <?php 
                                 if ($student['question2'] == 2) {
                                   echo "checked='checked'";
                                 }
                              ?>> 
                           <span>No</span></label></div>
                     </div>
                     <div class="c-validation">Did your company use Linux operating system ? is required.</div>
                  </div>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-choice-checkboxes c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                        <legend class="c-label  ">Which Linux operating system do you use ?</legend>
                        <div class="c-editor c-columns-0">
                           <div class="c-choice-option">
                              <label for="c-29-78"><input type="checkbox" name="group77" id="c-29-78"><span>Ubuntu</span></label>
                           </div>
                           <div class="c-choice-option">
                              <label for="c-29-79"><input type="checkbox" name="group77" id="c-29-79"><span>Fedora</span></label>
                           </div>
                           <div class="c-choice-option">
                              <label for="c-29-80"><input type="checkbox" name="group77" id="c-29-80"><span>CentOS</span></label>
                           </div>
                           <div class="c-choice-option">
                              <label for="c-29-81"><input type="checkbox" name="group77" id="c-29-81"><span>Redhat</span></label>
                           </div>
                           <div class="c-choice-option c-choice-fillin">
                              <label for="c-29-82">
                                 <input type="checkbox" name="group77" id="c-29-82" class="c-fillin-checkradio">
                                 <div>
                                    <input type="text" class="c-fillin-text" placeholder="Other">
                                 </div>
                              </label>
                           </div>
                        </div>
                        <div class="c-validation">Which Linux operating system do you use ? is required.</div>
                     </div>
                  </span>
                  <div class="c-choice-radiobuttons c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label  ">Did your company use the CISCO device ?</legend>
                     <div class="c-editor c-columns-0">
                     <!-- <span class="required text-danger"><?php echo form_error("q3"); ?></span> -->
                        <div class="c-choice-option">
                           <label for="c-30-75"><input type="radio" name="q3" value="1" id="c-30-75" 
                              <?php 
                                    if ($student['question3'] == 1) {
                                      echo "checked='checked'";
                                    }
                                 ?>      
                           >   <span>Yes</span>
                           </label>
                        </div>
                        <div class="c-choice-option">
                           <label for="c-30-76"><input type="radio" name="q3" value="2" id="c-30-76" 
                                <?php 
                                    if ($student['question3'] == 2) {
                                      echo "checked='checked'";
                                    }
                                 ?>   
                           >   <span>No</span>
                           </label>
                        </div>
                     </div>
                     <div class="c-validation">Did your company use the CISCO device ? is required.</div>
                  </div>
                  <span class="c-visible-container toggle-off" style="display: none;">
                     <div class="c-text-singleline c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-label  ">
                           <label for="c-31-73">Which networking devices does your company use ?</label>
                        </div>
                        <div class="c-editor">
                           <input type="text" id="c-31-73" placeholder="">
                        </div>
                        <div class="c-validation"></div>
                     </div>
                  </span>
                  <div class="c-rating-scale c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label ">4/ Where would you rank your PN intern amongst your other interns/junior staff ?</legend>

                     <div class="c-rating-scale-questions">
                        <table>
                           <thead>
                              <tr>
                                 <th></th>
                                 <th class="c-choice-option-header">Cannot judge (X)</th>
                                 <th class="c-choice-option-header">Below average (-)</th>
                                 <th class="c-choice-option-header">Around average (=)</th>
                                 <th class="c-choice-option-header">Above average (+)</th>
                                 <th class="c-choice-option-header">One of the best (++)</th>
                              </tr>
                           </thead>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Respect of working hours</th>

                                 <td class="c-choice-option">
                                    <label for="c-32-68"><input type="radio" name="q4" value="1" id="c-32-68" 
                                       <?php 
                                             if ($student['question4'] == 1) {
                                               echo "checked='checked'";
                                             }
                                          ?>    
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-32-69"><input type="radio" name="q4" value="2" id="c-32-69" 
                                       <?php 
                                             if ($student['question4'] == 2) {
                                               echo "checked='checked'";
                                             }
                                          ?>    
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-32-70"><input type="radio" name="q4" value="3" id="c-32-70" 
                                        <?php 
                                              if ($student['question4'] == 3) {
                                                echo "checked='checked'";
                                              }
                                           ?>   
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-32-71"><input type="radio" name="q4" value="4" id="c-32-71" 
                                       <?php 
                                             if ($student['question4'] == 4) {
                                               echo "checked='checked'";
                                             }
                                          ?>    
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-32-72"><input type="radio" name="q4" value="5" id="c-32-72" 
                                       <?php 
                                             if ($student['question4'] == 5) {
                                               echo "checked='checked'";
                                             }
                                          ?>    
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q4"); ?></span> -->
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Information management skills (synthesis, attention to details, broad picture)</th>
                                 <td class="c-choice-option">
                                    <label for="c-33-62"><input type="radio" name="q5" value="1" id="c-33-62" 
                                       <?php 
                                             if ($student['question5'] == 1) {
                                               echo "checked='checked'";
                                             }
                                          ?> 
                                       ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-33-63"><input type="radio" name="q5" value="2" id="c-33-63" 
                                       <?php 
                                             if ($student['question5'] == 2) {
                                               echo "checked='checked'";
                                             }
                                          ?> 
                                       ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-33-64"><input type="radio" name="q5" value="3" id="c-33-64"
                                       <?php 
                                          if ($student['question5'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?>    
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-33-65"><input type="radio" name="q5" value="4" id="c-33-65"
                                       <?php 
                                          if ($student['question5'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-33-66"><input type="radio" name="q5" value="5" id="c-33-66"
                                       <?php 
                                          if ($student['question5'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q5"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Information management skills (synthesis, attention to details, broad picture) is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Communication</th>
                                 <td class="c-choice-option">
                                    <label for="c-34-56"><input type="radio" name="q6" value="1" id="c-34-56"  
                                       <?php 
                                          if ($student['question6'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?>    
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-34-57"><input type="radio" name="q6" value="2" id="c-34-57"  
                                       <?php 
                                          if ($student['question6'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?>    
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-34-58"><input type="radio" name="q6" value="3" id="c-34-58" 
                                       <?php 
                                          if ($student['question6'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?>    
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-34-59"><input type="radio" name="q6" value="4" id="c-34-59"
                                       <?php 
                                          if ($student['question6'] ==4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-34-60"><input type="radio" name="q6" value="5" id="c-34-60"
                                       <?php 
                                          if ($student['question6'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q6"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Communication is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Interest in learning, curiosity</th>
                                 <td class="c-choice-option">
                                    <label for="c-35-50"><input type="radio" name="q7" value="1" id="c-35-50" 
                                       <?php 
                                          if ($student['question7'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-35-51"><input type="radio" name="q7" value="2" id="c-35-51" 
                                       <?php 
                                          if ($student['question7'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-35-52"><input type="radio" name="q7" value="3" id="c-35-52" 
                                       <?php 
                                          if ($student['question7'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-35-53"><input type="radio" name="q7" value="4" id="c-35-53" 
                                       <?php 
                                          if ($student['question7'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-35-54"><input type="radio" name="q7" value="5" id="c-35-54" 
                                       <?php 
                                          if ($student['question7'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q7"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Interest in learning, curiosity is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Leadership, team-work</th>
                                 <td class="c-choice-option">
                                    <label for="c-36-44"><input type="radio" name="q8" value="1" id="c-36-44"
                                       <?php 
                                          if ($student['question8'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-36-45"><input type="radio" name="q8" value="2" id="c-36-45"
                                       <?php 
                                          if ($student['question8'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-36-46"><input type="radio" name="q8" value="3" id="c-36-46"
                                       <?php 
                                          if ($student['question8'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-36-47"><input type="radio" name="q8" value="4" id="c-36-47"
                                       <?php 
                                          if ($student['question8'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-36-48"><input type="radio" name="q8" value="5" id="c-36-48"
                                       <?php 
                                          if ($student['question8'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q8"); ?></span> -->
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Critical thinking, problem solving, decision-making, logic, creativity</th>
                                 <td class="c-choice-option">
                                    <label for="c-37-38"><input type="radio" name="q9" value="1" id="c-37-38" 
                                       <?php 
                                          if ($student['question9'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-37-39"><input type="radio" name="q9" value="2" id="c-37-39" 
                                       <?php 
                                          if ($student['question9'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-37-40"><input type="radio" name="q9" value="3" id="c-37-40" 
                                       <?php 
                                          if ($student['question9'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-37-41"><input type="radio" name="q9" value="4" id="c-37-41" 
                                      <?php 
                                          if ($student['question9'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-37-42"><input type="radio" name="q9" value="5" id="c-37-42" 
                                       <?php 
                                          if ($student['question9'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q9"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Critical thinking, problem solving, decision-making, logic, creativity is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Good relationship with coworkers</th>
                                 <td class="c-choice-option">
                                    <label for="c-38-32"><input type="radio" name="q10" value="1" id="c-38-32"
                                      <?php 
                                          if ($student['question10'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-38-33"><input type="radio" name="q10" value="2" id="c-38-33"
                                       <?php 
                                          if ($student['question10'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-38-34"><input type="radio" name="q10" value="3" id="c-38-34"
                                      <?php 
                                          if ($student['question10'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-38-35"><input type="radio" name="q10" value="4" id="c-38-35"
                                       <?php 
                                          if ($student['question10'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-38-36"><input type="radio" name="q10" value="5" id="c-38-36"
                                       <?php 
                                          if ($student['question10'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                               <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q10"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Good relationship with coworkers is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Self-management (time, stress, priority, autonomy etc.)</th>
                                 <td class="c-choice-option">
                                    <label for="c-39-26"><input type="radio" name="q11" value="1" id="c-39-26"
                                     <?php 
                                          if ($student['question11'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?>   
                                    ><span><span class="c-offscreen">Cannot judge (X)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-39-27"><input type="radio" name="q11" value="2" id="c-39-27"
                                      <?php 
                                          if ($student['question11'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">Below average (-)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-39-28"><input type="radio" name="q11" value="3" id="c-39-28"
                                       <?php 
                                          if ($student['question11'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Around average (=)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-39-29"><input type="radio" name="q11" value="4" id="c-39-29"
                                       <?php 
                                          if ($student['question11'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">Above average (+)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-39-30"><input type="radio" name="q11" value="5" id="c-39-30"
                                       <?php 
                                          if ($student['question11'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">One of the best (++)</span></span>
                                    </label>
                                 </td>
                              </tr>
                               <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q11"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Self-management (time, stress, priority, autonomy etc.) is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="c-validation"></div>
                  </div>
                  <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                     <div class="c-label  "><label for="c-41-23">Feel free to add any comments regarding the intern's performance</label></div>
                     <div class="c-editor"><textarea id="c-41-23" type="text" name="q12" height="">
                        <?php 
                          echo $student['question12']
                        ?> 
                     </textarea>
                     <!-- <span class="required text-danger"><?php echo form_error("q12"); ?></span> -->
                               
                  </div>
                     <div class="c-validation"></div>
                  </div>
                  <div class="c-rating-scale c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required">
                     <legend class="c-label ">How would you evaluate your PN intern's english skills ?</legend>
                     <div class="c-rating-scale-questions">
                        <table>
                           <thead>
                              <tr>
                                 <th></th>
                                 <th class="c-choice-option-header">1 (very insufficient)</th>
                                 <th class="c-choice-option-header">2</th>
                                 <th class="c-choice-option-header">3</th>
                                 <th class="c-choice-option-header">4</th>
                                 <th class="c-choice-option-header">5 (very good)</th>
                              </tr>
                           </thead>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Writing documents and mails</th>
                                 <td class="c-choice-option">
                                    <label for="c-42-18"><input type="radio" name="q13" value="1" id="c-42-18"
                                       <?php 
                                          if ($student['question13'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">1 (very insufficient)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-42-19"><input type="radio" name="q13" value="2" id="c-42-19"
                                       <?php 
                                          if ($student['question13'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">2</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-42-20"><input type="radio" name="q13" value="3" id="c-42-20"
                                       <?php 
                                          if ($student['question13'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?> 
                                    ><span><span class="c-offscreen">3</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-42-21"><input type="radio" name="q13" value="4" id="c-42-21"
                                      <?php 
                                          if ($student['question13'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">4</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-42-22"><input type="radio" name="q13" value="5" id="c-42-22"
                                      <?php 
                                          if ($student['question13'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?>  
                                    ><span><span class="c-offscreen">5 (very good)</span></span>
                                    </label>
                                 </td>
                              </tr>
                               <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q13"); ?></span> -->
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Speaking in meetings</th>
                                 <td class="c-choice-option">
                                    <label for="c-43-12"><input type="radio" name="q14" value="1" id="c-43-12"
                                       <?php 
                                          if ($student['question14'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">1 (very insufficient)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-43-13"><input type="radio" name="q14" value="2" id="c-43-13"
                                       <?php 
                                          if ($student['question14'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">2</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-43-14"><input type="radio" name="q14" value="3" id="c-43-14"
                                       <?php 
                                          if ($student['question14'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">3</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-43-15"><input type="radio" name="q14" value="4" id="c-43-15"
                                       <?php 
                                          if ($student['question14'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">4</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-43-16"><input type="radio" name="q14" value="5" id="c-43-16"
                                       <?php 
                                          if ($student['question14'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">5 (very good)</span></span>
                                    </label>
                                 </td>
                              </tr>
                               <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q14"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Speaking in meetings is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                           <tbody class="">
                              <tr class="">
                                 <th class="c-choice-question" scope="row">Researching information in English, reading documents</th>
                                 <td class="c-choice-option">
                                    <label for="c-44-6"><input type="radio" name="q15" value="1" id="c-44-6"
                                    <?php 
                                          if ($student['question15'] == 1) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">1 (very insufficient)</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-44-7"><input type="radio" name="q15" value="2" id="c-44-7"
                                    <?php 
                                          if ($student['question15'] == 2) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">2</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-44-8"><input type="radio" name="q15" value="3" id="c-44-8"
                                    <?php 
                                          if ($student['question15'] == 3) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">3</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-44-9"><input type="radio" name="q15" value="4" id="c-44-9"
                                    <?php 
                                          if ($student['question15'] == 4) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">4</span></span>
                                    </label>
                                 </td>
                                 <td class="c-choice-option">
                                    <label for="c-44-10"><input type="radio" name="q15" value="5" id="c-44-10"
                                    <?php 
                                          if ($student['question15'] == 5) {
                                            echo "checked='checked'";
                                          }
                                       ?>
                                    ><span><span class="c-offscreen">5 (very good)</span></span>
                                    </label>
                                 </td>
                              </tr>
                               <tr>
                                 <td class="c-validation-row">
                                    <!-- <span class="required text-danger"><?php echo form_error("q15"); ?></span> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td class="c-validation-row" colspan="6">
                                    <div class="c-validation">Researching information in English, reading documents is required.</div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="c-validation"></div>
                  </div>
                  <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                     <div class="c-label  "><label for="c-46-3">Feel free to add any comments regarding the intern's performance</label></div>
                     <div class="c-editor">
                        <textarea id="c-46-3" name="q16" type="text">
                           <?php echo $student['question16']; ?>
                        </textarea>
                        <!-- <span class="required text-danger"><?php echo form_error("q16"); ?></span> -->
                                 
                     </div>
                     <div class="c-validation"></div>
                  </div>
                  <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                     <div class="c-label  "><label for="c-47-2">What skills would you have wished your PN intern had ?</label></div>
                     <div class="c-editor">
                        <textarea id="c-47-2" name="q17" type="text">
                           <?php echo $student['question17']; ?>
                        </textarea>
                        <!-- <span class="required text-danger"><?php echo form_error("q17"); ?></span> -->
                     </div>
                     <div class="c-validation"></div>
                  </div>
               </div>
            </div>
            <div class="c-button-section">
               <div class="c-ac tion">
                  <button type="submit" class="c-button" id="c-submit-button" style="float: right;">Submit</button>
                  <button type="submit" class="c-button" id="c-submit-button" style="float: left; background-color: green;">Save</button>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
<script>
    $(function(){
      $('.form-control').keypress(function(event) {
          if (event.keyCode == 13 || event.which == 13) {
              $('#formLogin').submit();
          }
      });
    });
</script>