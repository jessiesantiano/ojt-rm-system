<?php
    // connection
    include "../../../connection.php";
     $results = mysqli_query($db, "SELECT * FROM students WHERE uploadRequest <> 'Yes' AND uploadRequest IS NOT NULL AND courseCode = '$courseCode'");

?>
	<!--Container-->
					<div class="w-full md:w-4/5 xl:w-3/5" style="padding: 0 40px 0 40px">

		<div class="flex justify-between items-center py-2">
                <h5>Uploading Document Request</h5>
		</div>
		<div id='recipients' class="mt-6 xl:mt-0  bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Name</th>
						<th data-priority="1">Student ID</th>
						<th data-priority="1">Request for ?</th>
						<th data-priority="1">Action</th>
					</tr>
				</thead>
				<tbody class="text-center">
				<?php while ($row = mysqli_fetch_array($results)) { ?>
						<tr>
							<td><?php echo $row['Sname']; ?> <?php echo $row['Slname']; ?></td>
							<td><?php echo $row['studentID']; ?></td>
							<td>
								<?php echo $row['uploadRequest']; ?>
							</td>
							<td>
								 <a href="process.php?accept=<?php echo $row['id']; ?>&whatDocu=<?php echo $row['uploadRequest'] ?>"  class="ml-2 inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
										Accept
 								</a>
							</td>
						</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	