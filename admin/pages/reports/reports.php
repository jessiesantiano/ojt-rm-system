<?php
    // connection
    include "../../../connection.php";
     $results = mysqli_query($db, "SELECT * FROM students WHERE Swcompany = '$accountFor' AND iSmidterm = 'requested' AND iSfinal IS NULL OR iSfinal = 'requested'");
?>
	<!--Container-->
	<div class="w-full md:w-4/5 xl:w-3/5" style="padding: 0 40px 0 40px">
			<h1 class="h3 mb-3 text-gray-800 w-full"><span class="text-pink-400 font-bold">Easy </span> Generate Reports</h1>
			<div class="flex items-center gap-4 w-full pb-7 mb-10" style="height: 580px">
				<div class="bg-white w-full h-full">
					<!-- <p class="text-lg p-3">Easy Generate Report</p> -->
					<div class="flex justify-center items-center h-full">
						<form action="pdf.php" method="GET" target="_blank">
 							<input type="hidden" name="courseCode" value="<?php echo $courseCode; ?>">
							<div class="flex justify-center items-center flex-col space-y-4">
								<div class="w-72">
									<img src="./img.svg" alt="" class="w-full ">
								</div>  
								<p class="max-w-xl text-gray-600">Select to generate list.</p>
								<div>
									<select class="" name="toprint" style="border: 2px solid #E5E7EB; padding: 6px; width: 280px; font-size: 20px">
										<!-- <option class="" value="" disabled selected hidden>Others</option> -->
										<option class="" value="Vaccination Status" name="vaccination">Vaccination Status</option>
										<option class="" value="Pending Documents" name="documents">With Pending Documents</option>
										<option class="" value="Checked Documents" name="documents">Checked Documents</option>
										<option class="" value="Grades" name="grades">Students Grades</option>
									</select>
								</div>
								<button type="submit" name="generate" class="flex justify-between  px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
									<i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; Generate Report
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		
	</div>
	