 <?php include('process.php') ?>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
		<div class="flex justify-between items-center py-5">
			<h5>Announcements List</h5>
			<button type="button" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Add</button>
		</div>
			<div id='recipients' class="p-8 mt-6 xl:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">title</th>
					</tr>
				</thead>
				<tbody>
           <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
            </tr>
           <?php } ?>
				</tbody>
			</table>
		</div>
	</div>