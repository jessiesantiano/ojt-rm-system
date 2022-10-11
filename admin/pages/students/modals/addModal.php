<div id="addStudent" class="show fade hidden">
	<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
		<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
			<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
				<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Add Student</h5>
				<button type="button" data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
			</div>
			<form action="process.php" method="POST">
				<div class="relative flex-auto p-4">
					<div class="flex w-full justify-between">
						<div>
							<b>First Name</b>
							<input autocomplete="off" type="text" placeholder="First Name" name="Sname" value="" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						</div>
						<div>
							<b>Middle Name</b>
							<input autocomplete="off" type="text" placeholder="Optional" name="Smname" value="" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						</div>
						<div>
							<b>Last Name</b>
							<input autocomplete="off" type="text" placeholder="Last Name" name="Slname" value="" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						</div>
					</div>

					<div class="flex w-full justify-between gap-2">
						<div class="w-full">
							<b>Course</b>
							<select name="Scourse" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
								<option hidden selected>Select</option>

								<?php $result = mysqli_query($db, "SELECT * FROM courses WHERE courseCode = '$courseCode'");
								while ($row = mysqli_fetch_array($result)) { ?>
									<option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
								<?php } ?>
							</select>
						</div>
						<!-- <div class="w-full">
							<b>Year</b>
							<select name="Syear" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
								<option hidden selected>Select</option>
								<option value="4">4th Year</option>
							</select>
						</div> -->
						<div class="w-full">
							<b>Block</b>
							<select name="Sblock" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
								<option hidden selected>Select</option>
								<option value="A">Block A</option>
								<option value="B">Block B</option>
								<option value="C">Block C</option>
								<option value="D">Block D</option>
							</select>
						</div>
					</div>


					<b>Student ID</b>
					<input autocomplete="off" type="text" placeholder="Student ID" name="studentID" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
					<!-- <b>Contact No.</b>
						<input type="text" placeholder="Contact No." name="contactno" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
  						<b>Address</b>
						<input type="text" placeholder="Address" name="address" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"> -->
					<b>Gender</b>
					<div class="flex gap-3">
						<div class="mr-4">
							<input value="Male" name="Sgender" class="w-5 h-5 ease-soft text-base -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" />
							<label for="checkbox-1" class="cursor-pointer select-none text-slate-700 ml-2">Male</label>
						</div>
						<div>
							<input value="Female" name="Sgender" class="w-5 h-5 ease-soft text-base -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" />
							<label for="checkbox-1" class="cursor-pointer select-none text-slate-700 ml-2">Female</label>
						</div>
					</div>
					<br>
					<b>OJT School/Company</b>

					<select name="Swcompany" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
						<option hidden selected>Select</option>

					   <?php 
   						 if ($courseCode == 'Education Dept.') {
					   		$result = mysqli_query($db, "SELECT * FROM schools");
						 }else{
        					$result = mysqli_query($db, "SELECT * FROM companies");
						 }
						while ($row = mysqli_fetch_array($result)) { ?>
							<?php  if ($courseCode == 'Education Dept.') : ?>
								<option value="<?php echo $row['school'];?>"><?php echo $row['school']; ?> - <?php echo $row['supervisor'] ?></option>
							<?php else : ?>
								<option value="<?php echo $row['company'];?>"><?php echo $row['company']; ?> - <?php echo $row['supervisor'] ?></option>
							<?php endif; ?>
							<?php } ?>
					</select>

					<input type="hidden" name="courseCode" value="<?php echo $_SESSION['courseCode'] ?>">
					<!-- <input type="text" name="courseCode" value="<?php echo $courseCode ?>"> -->
					<div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
						<button data-toggle="modal" type="submit" name="add" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Add</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $students = mysqli_query($db, "SELECT * FROM reports"); ?>
<?php while ($row = mysqli_fetch_array($students)) { ?>
	<div id="check_id<?php echo $row['id']; ?>" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Check Report</h5>
					<button type="button" data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
				</div>
				<form action="process.php" method="POST">
					<div class="relative flex-auto p-4">

						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<div class="flex w-full justify-center px-3 py-3">
							<b>Are you sure you want to check this report?</b>
						</div>
						<br>

						<span>Comment (optional):</span>
						<textarea name="comment" rows="3" placeholder="Write your thoughts here..." class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></textarea>

						<div class="flex flex-wrap items-center justify-end py-3 px-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
							<button data-dismiss="modal" type="button" data-toggle="modal" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-black uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-700 to-slate-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">No</button> &nbsp;&nbsp;&nbsp;

							<button type="submit" name="check_id" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-green-600 to-green-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Yes</button>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php } ?>