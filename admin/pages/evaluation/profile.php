 <?php include('process.php');
  $id = $_GET['id'];
  $students = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
  while ($row = mysqli_fetch_array($students)) {
    
    $studentID = $row['studentID'];?>

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
           <a href="#evaluate<?php echo $row['id'];?>" data-toggle="modal">
             <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
               Evaluate
             </button>
           </a>
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
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Internship:</strong> &nbsp; <?php echo $row['Swcompany'] ?></li>
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Course:</strong> &nbsp; <?php echo $row['Scourse'] ?> <?php echo $row['Syear'] ?> <?php echo $row['Sblock'] ?></li>
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
                 <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Name of Company/School:</strong> &nbsp; <?php echo $row['Sinsurance'] ?> </li>
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">No. of hours to complete:</strong> &nbsp; <?php echo $row['Sph'] ?></li>
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Address:</strong> &nbsp; <?php echo $row['Sparentph'] ?> </li>
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Name of Supervisor:</strong> &nbsp; <?php echo $row['Sphnumber'] ?></li>
                 <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Contact no.:</strong> &nbsp; <?php echo $row['Svax'] ?></li>


               </ul>
             </div>
           </div>
         </div>
       </div>

       <div class="flex flex-wrap -mx-3 mt-4">
         <div class="max-w-full px-3 md:w-1/2 md:flex-none">
           <h6 class="mb-0">Evaluation Reports (Midterm/Final)</h6>
         </div>
         <div class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
           <a href="#upload<?php echo $row['studentID']; ?>" data-toggle="modal">
             <button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
               Upload Report
             </button>
           </a>
         </div>
       </div>
       <div>
         <div>
           <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Midterm Evaluation</h6>
           <!-- document here -->
           <div class="flex-auto p-4 pt-6">
             <ul class="flex flex-col pl-0 mb-0 rounded-lg">
               <?php $result = mysqli_query($db, "SELECT * FROM evaluation WHERE studentID ='$studentID' AND des='Midterm'");
                while ($row = mysqli_fetch_array($result)) { ?>
                 <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                   <div class="flex flex-col">
                     <h6 class="mb-4 leading-normal text-sm"><?php echo $row['title'] ?></h6>
                     <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['name'] ?></span></span>
                     <!-- <span class="mb-2 leading-tight text-xs">Size: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['size'] ?></span></span> -->
                     <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2"><?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                                                                                                                  echo $date->format('F d, Y h:i:s A'); // Change format as needed 
                                                                                                                  ?></span></span>
                   </div>
                   <div class="ml-auto text-right">
                   <a target="_blank" class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?view_id=<?php echo $row['id'] ?>"><i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                     <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?download_id=<?php echo $row['id'] ?>"><i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                     <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?delete_id=<?php echo $row['id'] ?>"><i class="mr-2 fa fa-trash bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Delete</a>
                   </div>
                 </li>
               <?php } ?>
             </ul>
           </div>

         </div>
         <div>
           <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Final Evaluation</h6>
           <!-- document here -->
           <div class="flex-auto p-4 pt-6">
             <ul class="flex flex-col pl-0 mb-0 rounded-lg">
               <?php $result = mysqli_query($db, "SELECT * FROM evaluation WHERE studentID ='$studentID' AND des='Final'");
                while ($row = mysqli_fetch_array($result)) { ?>
                 <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                   <div class="flex flex-col">
                     <h6 class="mb-4 leading-normal text-sm"><?php echo $row['title'] ?></h6>
                     <span class="mb-2 leading-tight text-xs">File name: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['name'] ?></span></span>
                     <!-- <span class="mb-2 leading-tight text-xs">Size: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $row['size'] ?></span></span> -->
                     <span class="leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2"><?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                                                                                                                  echo $date->format('F d, Y h:i:s A'); // Change format as needed 
                                                                                                                  ?></span></span>
                   </div>
                   <div class="ml-auto text-right">
                     <a target="_blank" class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?view_id=<?php echo $row['id'] ?>"><i class="mr-2 far fa-eye bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>View</a>
                     <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?download_id=<?php echo $row['id'] ?>"><i class="mr-2 fa fa-download bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Download</a>
                     <a class="relative inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-800 bg-gradient-to-tl from-blue-600 to-blue-200 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="./process.php?delete_id=<?php echo $row['id'] ?>"><i class="mr-2 fa fa-trash bg-150 bg-blue-600 bg-x-25 bg-clip-text"></i>Delete</a>
                   </div>
                 </li>
               <?php } ?>
             </ul>
           </div>

         </div>
       </div>

     </div>
   </div>
 <?php } ?>

 <?php include './modals/evaluateModal.php'; ?>
 <?php include './modals/uploadDocument.php'; ?>