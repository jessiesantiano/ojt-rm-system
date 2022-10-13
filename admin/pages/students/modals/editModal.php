<?php $students = mysqli_query($db, "SELECT * FROM students"); ?>

<?php while ($row = mysqli_fetch_array($students)) { ?>

    <div id="edit<?php echo $row['id']; ?>" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Edit Student</h5>
					<div>
						 <a href="process.php?del=<?php echo $row['id']; ?>&prev=<?php echo $row['Swcompany']?>">
						    <i style="margin-right: 10px" class="fa fa-trash w-4 h-4 box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer"></i>
						 </a>
						<button type="button" data-toggle="modal" class=" fa fa-close w-5 h-5  box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
					</div>
				</div>
			   <form action="process.php" method="POST">
					<div class="relative flex-auto p-4">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<div class="flex w-full justify-between">
							<div>
								<b>First Name</b>
								<input autocomplete="off" type="text" placeholder="First Name" name="Sname" value="<?php echo $row['Sname'] ?>" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
							</div>
							<div>
								<b>Middle Name</b>
								<input autocomplete="off" type="text" placeholder="Optional" name="Smname" value="<?php echo $row['Smname'] ?>" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
							</div>
							<div>
								<b>Last Name</b>
								<input autocomplete="off" type="text" placeholder="Last Name" name="Slname" value="<?php echo $row['Slname'] ?>" class="uppercase dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
							</div>
						</div>

						<div class="flex w-full justify-between gap-2">
							<div class="w-full">
								<b>Course</b>
								<select name="Scourse" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
									<option hidden selected><?php echo $row['Scourse'] ?></option>
									<?php $result = mysqli_query($db, "SELECT * FROM courses WHERE courseCode = '$courseCode'");
									while ($course = mysqli_fetch_array($result)) { ?>
										<option value="<?php echo $course['course']; ?>"><?php echo $course['course']; ?></option>
									<?php } ?>
								</select>
							</div>
							<!-- <div class="w-full">
								<b>Year</b>
								<select name="Syear" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
									<option hidden selected><?php echo $row['Syear'] ?></option>
									<option value="4">4th Year</option>
								</select>
							</div> -->
							<div class="w-full">
								<b>Block</b>
								<select name="Sblock" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
									<option hidden selected><?php echo $row['Sblock'] ?></option>
									<option value="A">Block A</option>
									<option value="B">Block B</option>
								</select>
							</div>
						</div>
  						<!-- <b>Email</b>
						<input type="text" placeholder="Email" name="Semail" value="<?php echo $row['Semail']?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"> -->
  						<b>Student ID</b>
						<input autocomplete="off" type="text" placeholder="Student ID" name="studentID" value="<?php echo $row['studentID']?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						<b>Gender</b>
						<div class="flex gap-3">
							<div class="mr-4">
								<input <?php if($row['Sgender']=="Male") {echo "checked";}?> value="Male" name="Sgender" class="w-5 h-5 ease-soft text-base -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" />
								<label for="checkbox-1" class="cursor-pointer select-none text-slate-700 ml-2">Male</label>
							</div>
							<div>
								<input <?php if($row['Sgender']=="Female") {echo "checked";}?> value="Female" name="Sgender" class="w-5 h-5 ease-soft text-base -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" />
								<label for="checkbox-1" class="cursor-pointer select-none text-slate-700 ml-2">Female</label>
							</div>
						</div>
					 	   
							<input type="hidden" value="<?php echo $row['Swcompany'];?>" name="prev"/>
							
						<br>
							<?php  if ($accountFor == 'Coordinator') : ?>
								<b>OJT School/Company</b>

								<select name="Swcompany" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
									<option hidden selected><?php echo $row['Swcompany'] ?></option>

									<?php  if ($courseCode == 'Education Dept.') {
										$result = mysqli_query($db, "SELECT * FROM schools");
									}else{
										$result = mysqli_query($db, "SELECT * FROM companies");
									}
									while ($row = mysqli_fetch_array($result)) { ?>
										<?php  if ($courseCode == 'Education Dept.') : ?>
											<option value="<?php echo $row['school'];?>"><?php echo $row['school']; ?></option>
										<?php else : ?>
											<option value="<?php echo $row['company'];?>"><?php echo $row['company']; ?></option>
										<?php endif; ?>
									<?php } ?>
								</select>
							<?php endif; ?>
				
						<div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
							<button  data-toggle="modal" type="submit" name="update" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>