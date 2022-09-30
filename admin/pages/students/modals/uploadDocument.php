<?php $students = mysqli_query($db, "SELECT * FROM students "); ?>
<?php while ($row = mysqli_fetch_array($students)) { ?>
  <div id="upload<?php echo $row['id']; ?>" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Upload Report</h5>
					<button type="button"  data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
				</div>
			 <div class="py-6 px-6 lg:px-8">
                    <form  action="eval_process.php" method="post" enctype="multipart/form-data">
                      <div class="space-y-3">
                          <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                            <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Document file name" required="">
                            <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">

                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" value="graded" name="iSmidterm" hidden>
                          </div>
                          <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">What document?</label>
                            <select name="des" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <!-- <option selected>Select</option> -->
                              <option value="Midterm">For Midterm</option>
                              <option value="Final">For Final</option>

                            </select>
                          </div>
                          <div class="flex justify-between">
                            <div class="flex justify-center items-center w-full">
                              <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                  <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                  </svg>
                                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                                  <p class="text-xs text-gray-500 dark:text-gray-400">PDF, PNG, JPG (MAX. 15MB)</p>
                                </div>
                                <input name="myfile" id="dropzone-file" type="file" class="rounded-lg border " />
                              </label>
                            </div>

                          </div>
                          <button type="submit" name="upload" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                            Upload
                          </button>
                      </div>
                    </form>
                  </div>
			      </div>
		    </div>
	</div>

  <?php }?>