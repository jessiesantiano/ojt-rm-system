<?php include('process.php');
$id = $_GET['id'];
$update_id = $_GET['id'];

// Data Initialization on DATABASE
$students = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
//  $deleteGet= mysqli_query($db, "SELECT * FROM students WHERE id = $id");
//   $deleteGet = $deleteGet -> fetch_assoc();
//   ['evalRequest' => 'Midterm'] = $deleteGet
while ($row = mysqli_fetch_array($students)) {

  $studentID = $row['studentID'];
   $ID = $row['id'];
   $isCertificate = $row['isCertificate'];
  ?>
  <!-- Student Profile -->
  <div class="ease-soft-in-out  relative h-full  transition-all duration-200">
    <div class="w-full px-6 mx-auto">
      <div class="flex justify-between items-center">
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-auto max-w-full px-3">
            <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
              <img src="<?php
                        if ($row['Sphoto'] == NULL) {
                          echo '../../../student/image/temp-profile.jpg';
                        } else {
                          echo '../../../student/image/' . $row['Sphoto'];
                        } ?>" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
            </div>
          </div>
          <div class="flex-none w-auto max-w-full px-3 my-auto">
            <div class="h-full">
              <h5 class="mb-1 uppercase"><?php echo $row['Sname'] ?> <?php echo $row['Smname'] ?> <?php echo $row['Slname'] ?></h5>
              <p class="mb-0 font-semibold leading-normal text-sm"><?php echo $row['courseCode'] ?></p>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-2">
          <form action="student-profilepdf.php" method="GET" target="_blank">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">
            <button type="submit" name="generate_id" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
              <i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; Generate Report
            </button>
          </form>
          <?php if ($accountFor != 'Coordinator') : ?>
            <?php if ($row['iSmidterm'] == 'requested'  or $row['iSfinal'] == 'requested') : ?>
              <div>
                <a href="#evaluate<?php echo $row['id']; ?>" data-toggle="modal">
                  <button type="submit" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; Evaluate
                  </button>
                </a>
              </div>
            <?php endif; ?>
          <?php endif; ?>

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
              <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Full Name:</strong> &nbsp;<span class="uppercase"> <?php echo $row['Sname'] ?> <?php echo $row['Smname'] ?> <?php echo $row['Slname'] ?></span></li>
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
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">First Dose:</strong> &nbsp; <?php echo $row['S1dose'] ?> <br><strong class="text-slate-700">Second Dose:</strong>&nbsp; <?php echo $row['S2dose'] ?></li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Booster:</strong> &nbsp; <?php echo $row['Svaxbooster'] ?></li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Vax Booster:</strong> &nbsp; <?php echo $row['Sbooster'] ?></li>

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
              <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Name of Company/School:</strong> <br> <span class="uppercase"><?php echo $row['Swcompany'] ?></span> </li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">No. of hours to complete:</strong> &nbsp; <?php echo $row['Swnumber'] ?></li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Address:</strong> &nbsp; <?php echo $row['Swlocation'] ?> </li>
              <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Name of Supervisor:</strong> &nbsp;  <span class="uppercase"><?php echo $row['Swemployer'] ?></span></li>
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
  <div class="flex flex-wrap">
    <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6>List of Documents Before OJT</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Document Name</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date Uploaded</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $row['studentID'] . "' AND destination='Before OJT Requirements'");
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $name = $row['name'];
                        $id = $row['id'];
                        echo '
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">                          
                          <div class="flex px-3 py-5">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 leading-normal text-xs">' . $title . '</h6>
                              <p class="mb-0 leading-tight text-xs text-slate-400">' . $name . '</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800">';
                        $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                        echo $date->format('m/d/y'); // Change format as needed 

                        echo ' </span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <a target="_blank" class="px-2 font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./process.php?view_id=' . $id . '"><i class="mr-1 far fa-eye "></i>View</a>
                          <br><a class="font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./process.php?download_id=' . $id . '"><i class="mr-1 fa fa-download"></i>Download</a>
                        </td>';
                      }
                    } else echo '<section class="flex items-center h-full p-5  dark:text-gray-100">
                      <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
                        <div class="max-w-md text-center">
                        <i class="fa text-gray-100 text-5xl fa-file-pdf-o" aria-hidden="true"></i>
                          <p class="dark:text-gray-400 text-md font-semibold">Sorry, no documents to display.</p>
                          <p class="mt-4 text-xs dark:text-gray-400">The student did not upload any documents here.</p>
                        </div>
                      </div>
                    </section>'; ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="flex justify-between">
              <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <h6>Certificate</h6>
                </div>

                  <?php if ($accountFor != 'Coordinator') : ?>
                    <?php if ($isCertificate == 'requested') : ?>
                      <button type="button" data-modal-toggle="authentication-modal" data-target=" #upload" class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
                        <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Upload File</a>
                      </button>
                    <?php endif; ?>
                  <?php endif; ?>
           </div>  
        
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 ">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Document Name</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date Uploaded</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='$studentID' AND destination='After OJT Requirements'");
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $name = $row['name'];
                        $fileid = $row['id'];
                        echo '
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">                          
                          <div class="flex px-3 py-5">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 leading-normal text-xs">' . $title . '</h6>
                              <p class="mb-0 leading-tight text-xs text-slate-400">' . $name . '</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <span class="font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800">';
                        $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                       echo $date->format('m/d/y');  // Change format as needed 
                       echo '</span>
                        </td>';
                       echo '<td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                         <a target="_blank" class="px-2 font-bold text-center uppercase align-middle bg-transparent shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./process.php?view_id=' . $fileid . '"><i class="mr-1 far fa-eye "></i>View</a>
                          <br><a class="font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./process.php?download_id=' . $fileid . '"><i class="mr-1 fa fa-download"></i>Download</a>
                       ';
                          if ($_SESSION['accountFor'] != 'Coordinator') {
                           echo '  <br><a href="process.php?delete_id='.$fileid.'&redirectID='.$ID.'" class="px-2 font-bold text-center uppercase align-middle bg-transparent shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400">
                                       <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                   </a>';
                          }else{
                            echo'
                            ';
                          }
                         echo  '</td>';
                      }
                    } else echo '<section class="flex items-center h-full p-5  dark:text-gray-100">
                      <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
                        <div class="max-w-md text-center">
                        <i class="fa text-gray-100 text-5xl fa-file-pdf-o" aria-hidden="true"></i>
                          <p class="dark:text-gray-400 text-md font-semibold">Sorry, no documents to display.</p>
                          <p class="mt-4 text-xs dark:text-gray-400">The student did not upload any documents here.</p>
                        </div>
                      </div>
                    </section>'; ?>
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
  <!-- Document Section End -->

  <!-- Report Section -->
  <div class="flex flex-wrap py-3">
    <div class="flex-none w-full max-w-full px-3 ">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>List of Reports</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

              <tr>
                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date Uploaded</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $result = mysqli_query($db, "SELECT * FROM reports WHERE studentID ='$studentID'");
              if (mysqli_num_rows($result) > 0) {
                while ($rep = mysqli_fetch_array($result)) {
                  $title = $rep['title'];
                  $name = $rep['name'];
                  $id = $rep['id'];
                  echo '
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-6 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 leading-normal text-sm">' . $title . '</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">' . $name . '</p>
                      </div>
                    </div>
                  </td>

                  <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
';

                  if ($rep['status'] == 'pending') {
                    echo '<span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Pending</span>';
                  } elseif ($rep['status'] == 'checked') {
                    echo '<span class="bg-gradient-to-tl from-green-600 to-green-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Checked</span>';
                  } else {
                    echo '<span class="bg-gradient-to-tl from-red-600 to-red-300 px-3 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Failed</span>';
                  }


                  echo '
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="font-semibold leading-tight text-xs text-slate-600">';
                  $date = DateTime::createFromFormat('Y-m-d H:i:s', $rep['date']);
                  echo $date->format('m/d/y'); // Change format as needed 
                  echo '</span>
                  </td>
                  <td class="p-1 text-center justify-content-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a target="_blank" href="./process.php?viewR_id=' . $id . '" class="px-2 font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View </a>
                    <a href="./process.php?download_id=' . $id . '" class="px-2 font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp;Download </a>
';

                  if ($accountFor == 'Coordinator') {
                    if ($rep['status'] == 'pending') {
                      echo "<a href='#check_id" . $rep['id'] . "' data-toggle='modal' href='' class='font-bold text-center uppercase align-middle shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-blue-400'><i class='fa fa-check-circle'></i> &nbsp;Mark as check </a>";
                    } elseif ($rep['status'] == 'checked') {
                    };
                  } else echo '';


                  echo '
                  </td>
                </tr>
            </tbody>';
                }
              } else echo '<section class="flex items-center h-full p-5  dark:text-gray-100">
          <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
            <i class="fa text-gray-100 text-5xl fa-file-pdf-o" aria-hidden="true"></i>
              <p class="dark:text-gray-400 text-md font-semibold">Sorry, no documents to display.</p>
              <p class="mt-4 text-xs dark:text-gray-400">The student did not upload any documents here.</p>
            </div>
          </div>
        </section>'; ?>
          </table>
        </div>
      </div>
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
  
          <div class="flex flex-wrap -mx-3 mt-4 p-5">
            <div class="max-w-full px-3 md:w-1/2 md:flex-none">
              <h6 class="mb-0">Evaluation Reports (Midterm/Final)</h6>
            </div>
          <?php $result = mysqli_query($db, "SELECT * FROM students WHERE studentID ='$studentID'");
          while ($row = mysqli_fetch_array($result)) {
          $studentID = $row['studentID']; ?>
            <?php if ($_SESSION['accountFor'] == 'Coordinator') {
              echo '';
            } else echo '
            <div class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
              <a href="#upload' . $row['id'] . '" data-toggle="modal">
                <button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                  Upload Report
                </button>
              </a>
            </div>'; ?>
           <?php } ?>

          </div>

        <div class="p-5">
          <div>
            <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Midterm Evaluation</h6>
            <div class="flex-auto p-4 pt-6">
              <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                <?php $result = mysqli_query($db, "SELECT * FROM evaluation WHERE studentID ='$studentID' AND des='Midterm'");
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $name = $row['name'];
                    echo '
                  <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h5 class="mb-4 leading-normal text-sm">' . $title . '</h5>
                      <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2">' . $name . '</span></span>
                      <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2">';
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                    echo $date->format('F d, Y h:i:s A'); // Change format as needed 

                    echo '   
                    </span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a target="_blank" class="px-3 font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?view_id=' . $id . '"><i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                      <a class="px-3 font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?download_id=' . $id . '"><i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                      ';
                    // if ($accountFor == 'Coordinator') {
                    //   echo '';
                    // } else
                    //   echo '
                    //         <a class="font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?delete_id=' . $id . '&update_id=' . $update_id . '&request=Midterm"><i class="mr-2 fa fa-trash bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Delete</a>
                    //     '; ?>
            </div>
            </li>
        <?php }
                } else echo '<section class="flex items-center h-full p-1  dark:text-gray-100">
                <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
                  <div class="max-w-md text-center">
                  <i class="fa text-gray-100 text-5xl fa-file-pdf-o" aria-hidden="true"></i>
                    <p class="dark:text-gray-400 text-md font-semibold">Sorry, no evaluation report to display.</p>
                    <p class="mt-4 text-xs dark:text-gray-400">The supervisor/schoolhead did not upload any report here.</p>
                  </div>
                </div>
              </section>'; ?>
        </ul>
          </div>
        </div>

        <div>
          <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Final Evaluation</h6>
          <div class="flex-auto p-4 pt-6">
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
              <?php $result = mysqli_query($db, "SELECT * FROM evaluation WHERE studentID ='$studentID' AND des='Final'");

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  $id = $row['id'];
                  $title = $row['title'];
                  $name = $row['name'];
                  echo '
                  <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h5 class="mb-4 leading-normal text-sm">' . $title . '</h5>
                      <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2">' . $name . '</span></span>
                      <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2">';
                  $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                  echo $date->format('F d, Y h:i:s A'); // Change format as needed 

                  echo '   
                    </span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a target="_blank" class="px-3 font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?view_id=' . $id . '"><i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                      <a class="px-3 font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?download_id=' . $id . '"><i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                      ';

                  // if ($accountFor == 'Coordinator') {
                  //   echo '';
                  // } else echo '
                  //     <a class="font-bold text-center uppercase align-middle shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-blue-400" href="./eval_process.php?delete_id=' . $id . '&update_id=' . $update_id . '&request=Final"><i class="mr-2 fa fa-trash bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Delete</a>
                  //   '; ?>
          </div>
          </li>


      <?php }
              } else echo '<section class="flex items-center h-full p-1  dark:text-gray-100">
                <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
                  <div class="max-w-md text-center">
                  <i class="fa text-gray-100 text-5xl fa-file-pdf-o" aria-hidden="true"></i>
                    <p class="dark:text-gray-400 text-md font-semibold">Sorry, no evaluation report to display.</p>
                    <p class="mt-4 text-xs dark:text-gray-400">The supervisor/schoolhead did not upload any report here.</p>
                  </div>
                </div>
              </section>'; ?>

      </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Report Section End -->
<?php include './modals/uploadCertificate.php'; ?>


<?php } ?>

<?php include './modals/addModal.php'; ?>
<?php include './modals/evaluateModal.php'; ?>
<?php include './modals/uploadDocument.php'; ?>