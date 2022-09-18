 <?php include('process.php');
	$id = $_GET['id'];
	$students = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
while ($row = mysqli_fetch_array($students)) { ?>

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
        <a href="#addStudent" data-toggle="modal">
          <button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
            Evaluate
          </button>
        </a>
      </div>
 			</div>
 		</div>
 		<div class="w-full p-6 mx-auto">
 			<div class="flex flex-wrap -mx-3">
        <!-- form here -->
 			</div>


     <div class="flex flex-wrap -mx-3 mt-4">
        <div class="max-w-full px-3 md:w-1/2 md:flex-none">
          <h6 class="mb-0">Evaluation Reports (Midterm/Final)</h6>
        </div>
        <div class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
          <a href="#upload" data-toggle="modal">
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
           <div>
            <p>Midterm report document here</p>
          </div>
       </div>
       <div>
          <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Final Evaluation</h6>
          <!-- document here -->
          <div>
            <p>Final report document here</p>
          </div>
       </div>
    </div>
 		
   </div>
 	</div>
 <?php } ?>

	<?php include './modals/evaluateModal.php'; ?> 
	<?php include './modals/uploadDocument.php'; ?> 

<!-- Documents / Report Section -->


<!-- <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h6 class="mb-0">Documents</h6>
              </div>
              <div class="flex-auto p-4 pt-6">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Oliver Liam</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">oliver@burrito.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Lucas Harper</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Stone Tech Zone</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">lucas@stone-tech.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Ethan James</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Fiber Notion</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">ethan@fiber.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h6 class="mb-0">Reports</h6>
              </div>
              <div class="flex-auto p-4 pt-6">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Oliver Liam</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">oliver@burrito.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Lucas Harper</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Stone Tech Zone</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">lucas@stone-tech.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                  <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50">
                    <div class="flex flex-col">
                      <h6 class="mb-4 leading-normal text-sm">Ethan James</h6>
                      <span class="mb-2 leading-tight text-xs">Company Name: <span class="font-semibold text-slate-700 sm:ml-2">Fiber Notion</span></span>
                      <span class="mb-2 leading-tight text-xs">Email Address: <span class="font-semibold text-slate-700 sm:ml-2">ethan@fiber.com</span></span>
                      <span class="leading-tight text-xs">VAT Number: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                    </div>
                    <div class="ml-auto text-right">
                      <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                      <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
 -->
