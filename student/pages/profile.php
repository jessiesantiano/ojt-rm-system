<?php
$id = $_SESSION['id'];

// $result = mysqli_query($conn, "SELECT * FROM accounts INNER JOIN students ON accounts.studentID = student_info.studentID where id='$id'");
$result = mysqli_query($db, "SELECT * FROM students WHERE id='$id'");
while ($row = mysqli_fetch_array($result)) {


?>

  <div class="w-full max-w-full px-3 text-center flex-0">
    <h3 class="mt-12">Your Profile</h3>
    <h5 class="font-normal dark:text-dark text-slate-400">This information will let us know more about you.</h5>
    <br>
    <div>
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0"></div>

        </div>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="./pages/controller.php" method="POST" enctype="multipart/form-data">
          <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
              <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                    <input readonly value="<?php echo $row['Sname']; ?>" type="text" name="Sname" id="first-name" autocomplete="given-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-2">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input readonly value="<?php echo $row['Slname']; ?>" type="text" name="Slname" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-2">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Middle Initial</label>
                    <input readonly value="<?php echo $row['Smname']; ?>" type="text" name="Smname" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                 

                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Course</label>
                    <input readonly value="<?php echo $row['Scourse']; ?>" type="text" name="Scourse" id="first-name" autocomplete="given-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <!-- <div class="col-span-6 sm:col-span-1">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Year</label>
                    <input readonly value="<?php echo $row['Syear']; ?>" type="text" name="Syear" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div> -->

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Block</label>
                    <input readonly value="<?php echo $row['Sblock']; ?>" type="text" name="Sblock" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>



                  <div class="col-span-6">
                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                    <input value="<?php echo $row['Sstreet']; ?>" type="text" name="Sstreet" id="street-address" autocomplete="street-address" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input value="<?php echo $row['Scity']; ?>" type="text" name="Scity" id="city" autocomplete="address-level2" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                    <input value="<?php echo $row['Sstate']; ?>" type="text" name="Sstate" id="region" autocomplete="address-level1" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                    <input value="<?php echo $row['Szipcode']; ?>" type="text" name="Szipcode" id="postal-code" autocomplete="postal-code" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <input value="<?php echo $row['Sage']; ?>" type="text" name="Sage" id="age" autocomplete="age" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>


                  <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                    <label for="birthday" class="block text-sm font-medium text-gray-700">Birth date</label>
                    <input value="<?php echo $row['Sbday']; ?>" type="date" name="Sbday" id="birthday" autocomplete="date" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="number" class="block text-sm font-medium text-gray-700">Mobile no.</label>
                    <input value="<?php echo $row['Snumber']; ?>" type="text" name="Snumber" id="number" autocomplete="number" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input value="<?php echo $row['Semail']; ?>" type="text" name="Semail" id="email" autocomplete="email" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
                </div>


              </div>

              <div class="">
                <label class="block text-sm font-medium text-gray-700">Photo</label>
                <div class="mt-1 flex items-center justify-center">
                  <span class="inline-block h-20 w-20 overflow-hidden rounded-full bg-gray-100 flex justify-center">
                    <img src="<?php
                    if ($row['Sphoto'] == NULL) {
                      echo './image/temp-profile.jpg';
                    } else {
                      echo './image/' . $row['Sphoto'];
                    } ?>" id="profileDisplay" onClick="triggerClick()">
                    </img>
                  </span>

                  <button data-modal-toggle="popup-modal" type="button" id="changepic" class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>

                  <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <h3 class="text-xl py-3 font-semibold text-gray-900 dark:text-white">
                          Change Profile Picture
                        </h3>
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">


                          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
                          <input value="" name="myfile" onChange="displayImage(this)" id="profileImage" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                          <br>
                          <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Upload
                          </button>
                          <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <!-- <button type="submit" name="update_id" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button> -->
                </div>
              </div>
              <!-- </form> -->
            </div>
          </div>

      </div>

      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>

      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Student Health Information</h3>
              <p class="mt-1 text-sm text-gray-600"></p>
            </div>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">

            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <!-- <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Insurance</label>
                <input value="<?php echo $row['Sinsurance']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div> -->
                  <!-- <div class="col-span-6 sm:col-span-4">
                <label for="country" class="block text-sm font-medium text-gray-700">Philhealth</label>
                <select id="country" name="country" autocomplete="country-name" class="text-center mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option selected value="<?php echo $row['Sph']; ?>"><?php echo $row['Sph']; ?></option>  
                  <option>with Philhealth</option>
                  <option>wihtout Philhealth</option>
                </select>
              </div> -->
                  <!-- <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Name of parent with Philhealth</label>
                <input value="<?php echo $row['Sparentph']; ?>" type="text" name="first-name" id="first-name" autocomplete="given-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Philhealth number</label>
                <input value="<?php echo $row['Sphnumber']; ?>" type="text" name="last-name" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div> -->

                  <div class="col-span-6 sm:col-span-6">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Vaccination Status</label>
                    <label for="country" class="block text-sm font-medium text-gray-700">Name of Vaccine</label>
                    <select id="country" name="Svax" autocomplete="country-name" class="text-center mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option hidden value="<?php echo $row['Svax']; ?>"><?php echo $row['Svax']; ?></option>
                      <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                      <option value="Sinovac-CoronaVac">Sinovac-CoronaVac</option>
                      <option value="Moderna">Moderna</option>
                      <option value="Johnson & Johnson">Johnson & Johnson</option>
                      <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Date of 1st Dose</label>
                    <input value="<?php echo $row['S1dose']; ?>" type="date" name="S1dose" id="first-name" autocomplete="given-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Date of 2nd Dose</label>
                    <input value="<?php echo $row['S2dose']; ?>" type="date" name="S2dose" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Vaccine for Booster</label>
                    <select id="country" name="Svaxbooster" autocomplete="country-name" class="text-center mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option hidden value="<?php echo $row['Svaxbooster']; ?>"><?php echo $row['Svaxbooster']; ?></option>
                      <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                      <option value="Sinovac-CoronaVac">Sinovac-CoronaVac</option>
                      <option value="Moderna">Moderna</option>
                      <option value="Johnson & Johnson">Johnson & Johnson</option>
                      <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                      <option value="N/A">N/A</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Date of Booster</label>
                    <input value="<?php echo $row['Sbooster']; ?>" type="date" name="Sbooster" id="last-name" autocomplete="family-name" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>




                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <!-- <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button> -->
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>

      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Student OJT Information</h3>
              <p class="mt-1 text-sm text-gray-600"></p>
            </div>
          </div>
          <div class="mt-5 md:col-span-2 md:mt-0">

            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                <fieldset>
                  <!-- <legend class="sr-only">By Email</legend> -->
                  <!-- <div class="text-base font-medium text-gray-900" aria-hidden="true">By Email</div> -->
                  <div class="mt-6 space-y-6 items-center">

                    <!-- <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Nature of Work / Type of Job</label>
                  <input value="<?php echo $row['Swname']; ?>" type="text" class="text-center text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div> -->
                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Name of Company/School</label>
                      <input readonly name="Swcompany" value="<?php echo $row['Swcompany']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">OJT no. hours</label>
                      <input name="Swnumber" value="<?php echo $row['Swnumber']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Location of Work</label>
                      <input name="Swlocation" value="<?php echo $row['Swlocation']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Schoolhead / Supervisor Name</label>
                      <input readonly name="Swemployer" value="<?php echo $row['Swemployer']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Contact Number</label>
                      <input name="Swcontact" value="<?php echo $row['Swcontact']; ?>" type="text" class="text-center mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                  </div>
                </fieldset>

              </div>
              <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="update" name="update_id" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>


    </div>


  <?php } ?>



  <script>
    function triggerClick(e) {
      document.querySelector("#profileImage").click();
    }

    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document
            .querySelector("#profileDisplay")
            .setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>