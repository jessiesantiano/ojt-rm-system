 
 <?php include('process.php'); 
 	$id = $_GET['id'];
 	$students = mysqli_query($db, "SELECT * FROM students WHERE id = $id")
 ?>
 
<?php while ($row = mysqli_fetch_array($students)) { ?>  
   <div class="ease-soft-in-out  relative h-full max-h-screen bg-gray-50 transition-all duration-200">
      <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
        </div>
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-10 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3">
              <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
              </div>
            </div>
            <div class="flex-none w-auto max-w-full px-3 my-auto">
              <div class="h-full">
                <h5 class="mb-1"><?php echo $row['Sname']?> <?php echo $row['Slname']?></h5>
                <p class="mb-0 font-semibold leading-normal text-sm"><?php echo $row['courseCode'] ?></p>
              </div>
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
                  <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                    <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                      <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                    </a>
                    <div data-target="tooltip" class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                      Edit Profile
                      <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-4">
                <p class="leading-normal text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quod natus, quis reprehenderit amet voluptatum. Expedita rerum perspiciatis autem odio!</p>
                <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">Full Name:</strong> &nbsp; <?php echo $row['Sname'] ?> <?php echo $row['Slname'] ?></li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Internship:</strong> &nbsp; Ligao National High School</li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Course:</strong> &nbsp; BSED Math</li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Email:</strong> &nbsp; alecthompson@mail.com</li>
                  <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">Address:</strong> &nbsp; Polangui Albay</li>
                </ul>
              </div>
            </div>
          </div>
		  
         
			<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
			   <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
				<div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
				<h6 class="mb-0">Requirements</h6>
				</div>
					<div class="flex-auto p-4 pb-0">
					<ul class="flex flex-col pl-0 mb-0 rounded-lg">
						<li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Medical Certificate
							</h6>
							<span class="leading-tight text-xs"> March, 01, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-pdf text-lg"></i> PDF
							</button>
						</div>
						</li>
						<li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-xl text-inherit">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Endorsement Letter
							</h6>
							<span class="leading-tight text-xs">February, 10, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-pdf text-lg"></i> PDF
							</button>
						</div>
						</li>
						<li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-xl text-inherit">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Parent's Permit
							</h6>
							<span class="leading-tight text-xs">April, 05, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-pdf text-lg"></i> PDF
							</button>
						</div>
						</li>
						<li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-xl text-inherit">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Memorandum of Agreement (MOA)
							</h6>
							<span class="leading-tight text-xs">June, 25, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-pdf text-lg"></i> PDF
							</button>
						</div>
						</li>
						<li class="relative flex justify-between px-4 py-2 pl-0 bg-white border-0 rounded-b-inherit rounded-xl text-inherit">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Philhealth
							</h6>
							<span class="leading-tight text-xs">March, 01, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-image text-lg"></i> JPG
							</button>
						</div>
						</li>
						<li class="relative flex justify-between px-4 py-2 pl-0 bg-white border-0 rounded-b-inherit rounded-xl text-inherit">
						<div class="flex flex-col">
							<h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">
							Vaccination Card
							</h6>
							<span class="leading-tight text-xs">March, 01, 2022</span>
						</div>
						<div class="flex items-center leading-normal text-sm">

							<button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
							<i class="mr-1 fas fa-file-image text-lg"></i> JPG
							</button>
						</div>
						</li>
				   </ul>
				</div>
            </div>
          </div>

		   <div class="w-full max-w-full px-3 xl:w-4/12">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h6 class="mb-0">Reports Stats</h6>
              </div>
              <div class="flex-auto p-4">
                <h6 class="font-bold leading-tight uppercase text-xs text-slate-500">Requirements</h6>
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
				<div class="flex-auto p-4">
					<div class="flex flex-row -mx-3">
					<div class="flex-none w-2/3 max-w-full px-3">
						<div>
						<p class="mb-0 font-sans font-semibold leading-normal text-sm">Completed</p>
						<h5 class="mb-0 font-bold">
							8 Documents
						</h5>
						</div>
					</div>
					<div class="px-3 text-right basis-1/3">
						<div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
						<i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
						</div>
					</div>
					</div>
				</div>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
