 <?php include('process.php') ?>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">name</th>
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