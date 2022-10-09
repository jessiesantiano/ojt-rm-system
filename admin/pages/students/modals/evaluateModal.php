<?php $students = mysqli_query($db, "SELECT * FROM students"); ?>
<?php while ($row = mysqli_fetch_array($students)) { ?>
    <div id="evaluate<?php echo $row['id']; ?>" class="show fade hidden">
    <div class="fixed w-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="m-5 w-full h-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Evaluate Trainee</h5>
					<button type="button"  data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
				</div>
                 <div class="overflow-y-auto rounded-xl outline-0" style="height: calc(100vh - 100px)">
				 	<div class="pl-4">
						<small class="font-bold uppercase">Trainee Name: <span class="pl-3"><?php echo $row['Sname'] ?> <?php echo $row['Smname'] ?> <?php echo $row['Slname'] ?></span></small>
					</div>
                   <form action="evaluatepdf.php" method="GET" target="_blank">
              		 <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="flex p-4 gap-2">
						<div>
							<small class="font-bold">Excellent/Outstanding = 5</small> /
						</div>
						<div>
							<small class="font-bold">very satisfactory = 4</small> /
						</div>
						<div>
							<small class="font-bold">Satisfactory = 3</small> /
						</div>
						<div>
							<small class="font-bold">Unsatisfactory = 2</small> /
						</div>
						<div>
							<small class="font-bold">Poor = 1</small>
						</div>
					</div>
					<div class="grid grid-cols-3 gap-6 p-4 h-full overflow-y-auto">
						<div class="h-full bg-gray-200 p-3 rounded-md">
							<h6>Section 1 - PLANNING </h6>
							<div class="space-y-3">
								<small>1. Course Long Term Plan – logical flow,content sufficient and appropriate to level</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>2. Lesson Plan – accurate content and activities flow smoothly. Easily referenced.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>3. Demonstrates clear understanding of methodology or strategy being taught.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>4. Opportunities for candidate evaluation throughout</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>5. Appropriate and accurate use of resources</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>6. Able to plan different kinds of lessons.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>7. Understands and identifies differences in learning and performance.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s1-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s1-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s1-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s1-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s1-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
						</div>
						<div class="h-full bg-blue-100 p-3 rounded-md">
							<h6>Section 2 – TEACHING APPROACH</h6>
							<div class="space-y-3">
								<small>1. Teaching methods chosen are appropriate and effective for topic/skill and encourages maximum class participation</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>2. Voice is clear and audible, keeps directions short and simple</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>3. Visual and tactile communication used when appropriate</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							
							<div class="space-y-3">
								<small>4. Teaching of topic/skill done in logical manageable chunks</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>5. Maximum participant practice time is allotted and is realistic and specific to topic/skill</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>

							
							<div class="space-y-3">
								<small>6. Portrays Professional image at all times</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>

							<div class="space-y-3">
								<small>7. Uses teaching resources, curriculum materials, and content area standards</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s2-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s2-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s2-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s2-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s2-rate7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							
						</div>
						<div class="h-full bg-green-200 p-3 rounded-md">
							<h6>Section 3 – EVALUATION</h6>
							<div class="space-y-3">
								<small>1. Recognizes the need for and provides
									immediate, specific and constructive feedback
									during practice attempts, varies approach as
									needed for success</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>2. Demonstrates ongoing evaluation and
								references performance award must sees</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>3. Uses a variety of corrective techniques and
									breaks down skill when correcting</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							
							<div class="space-y-3">
								<small>4. Understands and demonstrates principles of
									evaluation and evaluation standards</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>5. Identifies which skill error needs to be corrected first</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>6. Encourages self-assurance in all students</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="1" name="s3-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input required id="default-radio-1" type="radio" value="2" name="s3-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="3" name="s3-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input required id="default-radio-1" type="radio" value="4" name="s3-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input required id="default-radio-1" type="radio" value="5" name="s3-rate6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">5</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="flex flex-wrap items-center justify-end p-3 rounded-b-xl">
						<button  data-toggle="modal" type="submit" name="evaluate" class="inline-block px-8 py-2 m-1 mb-3 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Evaluate</button>
					</div>
				</form>
              </div>
           </div>
        </div>
    </div>
  </div>
</div>
<?php } ?>
 <!-- end modal -->