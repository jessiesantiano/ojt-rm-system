<?php
    // connection
    include "../../../connection.php";
     $results = mysqli_query($db, "SELECT * FROM students WHERE iSmidterm = 'requested' AND iSfinal IS NULL OR iSfinal = 'requested' AND Swcompany='$accountFor'");

?>
	<!--Container-->
					<div class="w-full md:w-4/5 xl:w-3/5" style="padding: 0 40px 0 40px">

		<div class="flex justify-between items-center py-2">
			 
              <?php if ($courseCode == 'Education Dept.' AND 'Economics Dept.') : ?>
              	<h5><?php echo $courseCode ?> Students List</h5>
              <?php else : ?>
                <h5>Trainee's Evaluation Request</h5>
              <?php endif; ?>
		
			<!-- <a href="#addStudent" data-toggle="modal">
				<button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
					Add
				</button>
			</a> -->
		</div>
		<div id='recipients' class="mt-6 xl:mt-0  bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Name</th>
						<th data-priority="1">Student ID</th>
						<th data-priority="1">Evaluation for ?</th>
						<th data-priority="1">Action</th>
					</tr>
				</thead>
				<tbody class="text-center">
				<?php while ($row = mysqli_fetch_array($results)) { ?>
				    <?php if ($row['Swcompany'] == $accountFor) : ?>
						<tr>
							<td><?php echo $row['Sname']; ?> <?php echo $row['Slname']; ?></td>
							<td><?php echo $row['studentID']; ?></td>
							<td>
								<?php if ($row['iSmidterm'] == 'requested') : ?>
									Midterm Evaluation
								<?php else : ?>
									Final Evaluation
								<?php endif;?>
							</td>
							<td>
								<!-- <a href="#edit<?php echo $row['id'];?>" data-toggle="modal">
								<i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
								</a> -->
								<a href="../students/index.php?view=view&id=<?php echo $row['id']; ?>">
								<button type="button" class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
									View Profile
								</button>
								</a>
								
							</td>
						</tr>
				     <?php endif; ?>

					
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	