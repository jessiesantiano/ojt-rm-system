 
 <?php include('process.php'); 
 	$id = $_GET['id'];
 	$company = $_GET['company'];
 	$students = mysqli_query($db, "SELECT * FROM students WHERE Swcompany='$company'")
 ?>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
		<div class="flex justify-between items-center py-5">
            <h5><?php echo $company?> / List of Trainee's</h5>
			<!-- <a href="#addStudent" data-toggle="modal">
				<button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
					Add
				</button>
			</a> -->
		</div>
		<div id='recipients' class="p-8 mt-6 xl:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Name</th>
						<th data-priority="1">Email</th>
						<th data-priority="1">Student ID</th>
						<th data-priority="1">Action</th>
					</tr>
				</thead>
				<tbody class="text-center">
				<?php while ($row = mysqli_fetch_array($students)) { ?>
					<tr>
						<td><?php echo $row['Sname']; ?> <?php echo $row['Slname']; ?></td>
						<td><?php echo $row['Semail']; ?></td>
						<td><?php echo $row['studentID']; ?></td>
						<td>
							<a href="index.php?view=trainee&id=<?php echo $row['id']; ?>">
                         	  <button type="button" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
								View
							  </button>
                       		 </a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	