<div class="w-full max-w-full px-3 mt-6">
  <color:div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
    <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
      <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <div class="flex flex-wrap -mx-3">
          <div class="max-w-full px-3 md:w-1/2 md:flex-none">
            <h6 class="mb-0 font-semibold leading-normal">Documents / Requirements</h6>
          </div>
          <div class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
           
          
              <?php if ($uploadRequest !='Yes' AND $uploadRequest == NULL) : ?>
                <button type="button" data-modal-toggle="sendrequest" data-target=" #upload" class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
                  <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-400 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-check"> </i>&nbsp;&nbsp;Send Request</a>
                </button>
              <?php endif; ?>

               <?php if ($uploadRequest != 'Yes' AND $uploadRequest == !NULL) : ?>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Request Pending</span>
              <?php endif; ?>
      
             <?php if ($uploadRequest == 'Yes') : ?>
              	 <button type="button" data-modal-toggle="authentication-modal" data-target=" #upload" class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-green-500 to-green-700 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Upload File</a>
                  </button>
             <?php endif; ?>


		
            <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
              <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Upload Document</h3>
                    <form class="space-y-6" action="pages/controller.php" method="post" enctype="multipart/form-data">
                      <div>
                        <input type="hidden" name="studentID" value="<?php echo $_SESSION["studentID"]; ?>">
                        <input type="hidden" name="title" value="<?php echo $whatDocu; ?>">
                      </div>
                      <!-- <div>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Where you will upload the document?</label>
                        <select name="des" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="Before OJT Requirements">Before OJT Requirements</option>
                          <option value="After OJT Requirements">After OJT Requirements</option>

                        </select>
                      </div> -->
                      <input type="hidden" name="des" value="Before OJT Requirements"/>
                        <input type="hidden" name="id" value="<?php echo $_SESSION["id"]; ?>">

                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Please attach your <b> <?php echo $whatDocu ?></b> document!</label>

                      <div class="flex justify-between">
                        <div class="flex justify-center items-center w-full">
                          <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                              <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                              </svg>
                              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                              <p class="text-xs text-gray-500 dark:text-gray-400">PDF (MAX. 15MB)</p>
                            </div>
                            <input name="myfile" id="dropzone-file" type="file" class="rounded-lg border " required/>
                          </label>
                        </div>

                      </div>
                      <!-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button> -->
                      <button type="Dupload" name="Dupload" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Upload
                      </button>
                      <!-- <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>



            <!-- sendrequest modal -->
            <div id="sendrequest" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
              <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="sendrequest">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Send a request</h3>
                    <form class="space-y-6" action="pages/controller.php" method="post" enctype="multipart/form-data">
                      <div>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">What document you want to upload?</label>
                        <select name="uploadRequest" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                         <?php $result = mysqli_query($db, "SELECT * FROM requirements WHERE courseCode = '$courseCode'");
                            while ($row = mysqli_fetch_array($result)) { ?>
                              <option value="<?php echo $row['document']; ?>"><?php echo $row['document']; ?></option>
                            <?php } ?>

                        </select>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $id?>">
                      <button type="Dupload" name="sendrequest" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Send
                      </button>
                      <!-- <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-toggle="">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="inline-flex justify-center items-center w-full">
      <hr class="my-8 w-64 h-px bg-gray-200 border-0 dark:bg-gray-700">
      <span class="absolute left-1/2 px-3 font-medium text-gray-900 bg-white -translate-x-1/2 ">
        <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Documents Before the OJT</h6>
      </span>
    </div>
    <?php


    $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $_SESSION['studentID'] . "' AND destination='Before OJT Requirements' ");
      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
        echo '<div class="flex-auto px-20 pb-0">
        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
          <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
            <div class="flex flex-col">
              <h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">';
              echo $row["title"]; 
              echo '</h6>

              <span class="leading-tight text-xs">
              ';
           $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                echo $date->format('F d, Y h:i:s A'); // Change format as needed
                echo '</span>
            </div>
            <div class="flex items-center leading-normal text-sm">

              <a target="_blank" href="./pages/controller.php?view_id='.$id.'">
                <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
                  <i class="mr-1 fas fa-file-pdf text-lg"></i> View
                </button>
              </a>

              <a href="./pages/controller.php?file_id='.$id.'">
                <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
                  <i class="fa fa-download" aria-hidden="true"></i> Download
                </button>
              </a>

              <a href="./pages/controller.php?delete_id='.$id.'">
                <button name="delete" class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
                  <i class="fa fa-trash" aria-hidden="true"></i> Delete
                </button>
              </a>
            </div>
          </li>
        </ul>
      </div>';


    ?>
      


    <?php }
    } else echo '<section class="flex items-center h-full p-5  dark:text-gray-100">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
      <div class="max-w-md text-center">
        <p class="dark:text-gray-400 text-md font-semibold">Sorry, no documents to be display.</p>
      </div>
    </div>
  </section>';?>


<div class="inline-flex justify-center items-center w-full">
      <hr class="my-8 w-64 h-px bg-gray-200 border-0 dark:bg-gray-700">
      <span class="absolute left-1/2 px-3 font-medium text-gray-900 bg-white -translate-x-1/2 ">
        <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Your Certificate</h6>
      </span>
    </div>
    <?php


    $result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $_SESSION['studentID'] . "' AND destination='After OJT Requirements' ");
      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
        echo '<div class="flex-auto px-20 pb-0">
        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
          <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
            <div class="flex flex-col">
              <h6 class="mb-1 font-semibold leading-normal text-sm text-slate-700">';
              echo $row["title"]; 
              echo '</h6>

              <span class="leading-tight text-xs">
              ';
           $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date']);
                echo $date->format('F d, Y h:i:s A'); // Change format as needed
                echo '</span>
            </div>
            <div class="flex items-center leading-normal text-sm">

              <a target="_blank" href="./pages/controller.php?view_id='.$id.'">
                <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
                  <i class="mr-1 fas fa-file-pdf text-lg"></i> View
                </button>
              </a>

              <a href="./pages/controller.php?file_id='.$id.'">
                <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700">
                  <i class="fa fa-download" aria-hidden="true"></i> Download
                </button>
              </a>

            </div>
          </li>
        </ul>
      </div>';


    ?>
      


    <?php }
    } else echo '<section class="flex items-center h-full p-5  dark:text-gray-100">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
      <div class="max-w-md text-center">
        <p class="dark:text-gray-400 text-md font-semibold">Sorry, no documents to be display.</p>
      </div>
    </div>
  </section>';?>
  </color:div>
</div>
<br>