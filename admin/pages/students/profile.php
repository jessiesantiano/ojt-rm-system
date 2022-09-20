<?php include('process.php');
$id = $_GET['id'];

// Data Initialization on DATABASE
$students = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
while ($row = mysqli_fetch_array($students)) {

  $studentID = $row['studentID']; ?>
  <!-- Student Profile -->
  <div class="ease-soft-in-out  relative h-full  transition-all duration-200">
    <div class="w-full px-6 mx-auto">
      <div class="flex justify-between items-center">
 				<div class="flex flex-wrap -mx-3">
 					<div class="flex-none w-auto max-w-full px-3">
 						<div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
 							<img src="" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
 						</div>
 					</div>
 					<div class="flex-none w-auto max-w-full px-3 my-auto">
 						<div class="h-full">
 							<h5 class="mb-1"><?php echo $row['Sname'] ?> <?php echo $row['Smname'] ?> <?php echo $row['Slname'] ?></h5>
 							<p class="mb-0 font-semibold leading-normal text-sm"><?php echo $row['courseCode'] ?></p>
 						</div>
 					</div>
 				</div>
        <div>
        <form action="student-profilepdf.php" method="GET" target="_blank">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">
              <button type="submit" name="generate_id" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                <i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; Generate Report
              </button>
            </form>
        </div>
        </div>
      </div>
    </div>
    <div class="w-full p-6 mx-auto">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
              <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                  <h6 class="mb-0">Student Information</h6>
                </div>
              </div>
            </div>
            <div class="flex-auto p-4">


              <ul class="flex flex-col pl-0 mb-0 rounded-lg text-sm">
                <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Full Name:</strong> &nbsp; <?php echo $row['Sname'] ?> <?php echo $row['Smname'] ?> <?php echo $row['Slname'] ?></li>
                <!-- <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Internship:</strong> &nbsp; <?php echo $row['Swcompany'] ?></li> -->
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Course:</strong> &nbsp; <?php echo $row['Scourse'] ?> <?php echo $row['Syear'] ?>-<?php echo $row['Sblock'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Email:</strong> &nbsp; <?php echo $row['studentID'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Address:</strong> &nbsp; <?php echo $row['Sstreet'] ?> <?php echo $row['Scity'] ?> <?php echo $row['Sstate'] ?> <?php echo $row['Szipcode'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Age:</strong> &nbsp; <?php echo $row['Sage'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Gender:</strong> &nbsp; <?php echo $row['Sgender'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Contact no.:</strong> &nbsp; <?php echo $row['Snumber'] ?></li>

              </ul>
            </div>
          </div>
        </div>


        <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
              <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                  <h6 class="mb-0">Health Information</h6>
                </div>
              </div>
            </div>
            <div class="flex-auto p-4">


              <ul class="flex flex-col pl-0 mb-0 rounded-lg text-sm">
                <!-- <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Insurance:</strong> &nbsp; <?php echo $row['Sinsurance'] ?> </li>
 								<li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Philhealth Status:</strong> &nbsp; <?php echo $row['Sph'] ?></li>
 								<li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Parent Philhealth Name:</strong> &nbsp; <?php echo $row['Sparentph'] ?> </li>
 								<li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Philhealth Number:</strong> &nbsp; <?php echo $row['Sphnumber'] ?></li> -->
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Vaccination Status:</strong> &nbsp; <?php echo $row['Svax'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">First Dose:</strong> &nbsp; <?php echo $row['S1dose'] ?> &nbsp;&nbsp;<strong class="text-slate-700">Second Dose:</strong>&nbsp; <?php echo $row['S2dose'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Booster:</strong> &nbsp; <?php echo $row['Sbooster'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Vax Booster:</strong> &nbsp; <?php echo $row['Svaxbooster'] ?></li>

              </ul>
            </div>
          </div>
        </div>

        <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
              <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                  <h6 class="mb-0">OJT Information</h6>
                </div>
              </div>
            </div>
            <div class="flex-auto p-4">


              <ul class="flex flex-col pl-0 mb-0 rounded-lg text-sm">
                <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Name of Company/School:</strong> <br> <?php echo $row['Swcompany'] ?> </li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">No. of hours to complete:</strong> &nbsp; <?php echo $row['Swnumber'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Address:</strong> &nbsp; <?php echo $row['Swlocation'] ?> </li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Name of Supervisor:</strong> &nbsp; <?php echo $row['Swemployer'] ?></li>
                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Contact no.:</strong> &nbsp; <?php echo $row['Swcontact'] ?></li>


              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <a href="index.php?view=documents&studentID=<?php echo  $row['studentID'] ?>">
      <button type="button" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
        View
      </button>
    </a> -->
  </div>
  <br>

  <!-- Student Profile Section End -->

  <!-- Document Section -->

  <h5>Documents</h5>


  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <h6 class="mb-0">List of Documents Before OJT</h6>
        </div>
        <div class="flex-auto p-4 pt-6">
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <?php $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $row['studentID'] . "' AND destination='Before OJT Requirements'");
            while ($row = mysqli_fetch_array($result)) { ?>
              <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                <div class="flex flex-col">
                  <h6 class="mb-4 leading-normal text-sm"><?php echo $row['title'] ?></h6>
                  <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['name'] ?></span></span>
                  <span class="mb-2 leading-tight text-xs">Size: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['size'] ?></span></span>
                  <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2"><?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                                                                                                                echo $date->format('F d, Y h:i:s A'); // Change format as needed 
                                                                                                                ?></span></span>
                </div>
                <div class="ml-auto text-right">
                  <a target="_blank" class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?view_id=<?php echo $row['id'] ?>"><i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                  <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?download_id=<?php echo $row['id'] ?>"><i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>


    <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <h6 class="mb-0">List of Documents After OJT</h6>
        </div>
        <div class="flex-auto p-4 pt-6">
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <?php
            $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='$studentID' AND destination='After OJT Requirements'");
            while ($row = mysqli_fetch_array($result)) { ?>
              <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                <div class="flex flex-col">
                  <h6 class="mb-4 leading-normal text-sm"><?php echo $row['title'] ?></h6>
                  <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['name'] ?></span></span>
                  <span class="mb-2 leading-tight text-xs">Size: <span class="font-semibold text-slate-700 sm:ml-2"><?php $mb =  ($row['size'] ^ 2);
                                                                                                                    echo $mb; ?></span></span>
                  <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2"><?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                                                                                                                echo $date->format('F d, Y h:i:s A'); // Change format as needed 
                                                                                                                ?></span></span>
                </div>
                <div class="ml-auto text-right">
                  <a target="_blank" class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?view_id=<?php echo $row['id'] ?>"> <i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                  <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?download_id=<?php echo $row['id'] ?>"> <i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                </div>

              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- Document Section End -->

  <!-- Report Section -->

  <div class="flex flex-wrap -mx-3 py-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>List of Reports</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                  <!-- <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Function</th> -->
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date Uploaded</th>
                  <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                </tr>
              </thead>
              <tbody>
                <?php $result = mysqli_query($db, "SELECT * FROM reports WHERE studentID ='$studentID'");
                while ($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-6 py-1">
                        <!-- <div>
                              <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                            </div> -->
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 leading-normal text-sm"><?php echo $row['title']; ?></h6>
                          <p class="mb-0 leading-tight text-xs text-slate-400"><?php echo $row['name']; ?></p>
                        </div>
                      </div>
                    </td>
                    <!-- <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                          <p class="mb-0 leading-tight text-xs text-slate-400">Organization</p>
                        </td> -->


                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">

                      <?php
                      if ($row['status'] == 'pending') {
                        echo '<span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Pending</span>';
                      } elseif ($row['status'] == 'checked') {
                        echo '<span class="bg-gradient-to-tl from-green-600 to-green-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Checked</span>';
                      } else {
                        echo '<span class="bg-gradient-to-tl from-red-600 to-red-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Failed</span>';
                      }
                      ?>


                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="font-semibold leading-tight text-xs text-slate-400"><?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                                                                                        echo $date->format('m/d/y'); // Change format as needed 
                                                                                        ?></span>
                    </td>
                    <td class="p-1 align-center justify-content-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <a target="_blank" href="./process.php?viewR_id=<?php echo $row['id'] ?>" class="font-semibold leading-tight text-sm text-slate-400 px-3"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View </a>
                      <a href="./process.php?downloadR_id=<?php echo $row['id'] ?>" class="font-semibold leading-tight text-sm text-slate-400 px-3"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp;Download </a>

                      <?php
                      if ($row['status'] == 'pending') {
                        echo "<a href='#check_id" . $row['id'] . "' data-toggle='modal' href='' class='font-semibold leading-tight text-sm text-slate-400'><i class='fa fa-check-circle'></i> &nbsp;Mark as check </a>";
                      } elseif ($row['status'] == 'checked') {
                      }
                      ?>

                    </td>
                  <?php } ?>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Report Section End -->

<?php } ?>

<?php include './modals/addModal.php'; ?>