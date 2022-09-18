  <div id="addStudent" class="show fade ">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="m-5 w-full h-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Evaluate Trainee</h5>
					<button type="button"  data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
				</div>
			     <form action="reports.php" method="GET">
					<div class="grid grid-cols-3 gap-6 p-4 h-full overflow-y-auto">
						<div class="h-full bg-gray-200 p-3">
							<h6>Section 1 - PLANNING </h6>
							<div class="space-y-3">
								<small>Course Long Term Plan – logical flow,content sufficient and appropriate to level</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Lesson Plan – accurate content and activities flow smoothly. Easily referenced.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Demonstrates clear understanding of methodology or strategy being taught.</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Opportunities for candidate evaluation throughout</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
						</div>
						<div class="h-full bg-blue-100 p-3">
							<h6>Section 2 – TEACHING APPROACH</h6>
							<div class="space-y-3">
								<small>Teaching methods chosen are appropriate and effective for topic/skill and encourages maximum class participation</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Voice is clear and audible, keeps directions short and simple</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Visual and tactile communication used when appropriate</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							
							<div class="space-y-3">
								<small>Teaching of topic/skill done in logical manageable chunks</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							
						</div>
						<div class="h-full bg-green-200 p-3">
							<h6>Section 3 – EVALUATION</h6>
							<div class="space-y-3">
								<small>Recognizes the need for and provides
									immediate, specific and constructive feedback
									during practice attempts, varies approach as
									needed for success</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Demonstrates ongoing evaluation and
								references performance award must sees</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							<div class="space-y-3">
								<small>Uses a variety of corrective techniques and
									breaks down skill when correcting</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							
							<div class="space-y-3">
								<small>Understands and demonstrates principles of
									evaluation and evaluation standards</small>
								<div class="flex justify-between w-full px-8">
									<div class="flex flex-col items-center justify-center gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">0</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2  h-full mb-4">
										<input id="default-radio-1" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">1</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="2" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">2</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2 h-full mb-4">
										<input id="default-radio-1" type="radio" value="3" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">3</label>
									</div>
									<div class="flex flex-col items-center justify-between gap-2h-full mb-4">
										<input id="default-radio-1" type="radio" value="4" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
										<label for="default-radio-1" class=" text-xs font-medium text-gray-900 dark:text-gray-300">4</label>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<div class="flex p-3 gap-2">
						<div>
							<small class="font-bold">Excellent/Outstanding = 4</small> /
						</div>
						<div>
							<small class="font-bold">very satisfactory= 3</small> /
						</div>
						<div>
							<small class="font-bold">Satisfactory = 2</small> /
						</div>
						<div>
							<small class="font-bold">Unsatisfactory = 1</small> /
						</div>
						<div>
							<small class="font-bold">Poor = 0</small>
						</div>
					</div>
					<div class="flex flex-wrap items-center justify-end p-3  rounded-b-xl">
						<button data-toggle="modal" type="submit" name="evaluate" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Proceed</button>
					</div>
				</form>
			</div>
		</div>
	</div>