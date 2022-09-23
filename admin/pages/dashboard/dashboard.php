
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">No. of Students</p>
                      <h5 class="mb-0 font-bold">
                          <?php
                            $students = "SELECT count(id) AS total FROM students WHERE Swcompany='$accountFor' OR courseCode='$courseCode'";
                            $rows_results = mysqli_query($db, $students);
                            $values = mysqli_fetch_assoc($rows_results);
                            $totalStudents = $values['total'];
                            echo $totalStudents
                          ?>  students
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="fa fa-users leading-none text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Male</p>
                      <h5 class="mb-0 font-bold">
                         <?php
                            if ($accountFor == 'Coordinator') {
                               $students = "SELECT count(id) AS total FROM students WHERE Sgender='Male' AND courseCode='$courseCode'";
                            } else {
                               $students = "SELECT count(id) AS total FROM students WHERE Sgender='Male' AND Swcompany='$accountFor' OR courseCode='$courseCode'";
                            }
                            $rows_results = mysqli_query($db, $students);
                            $values = mysqli_fetch_assoc($rows_results);
                            $totalMale = $values['total'];
                            echo $totalMale
                          ?>  students
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="fa fa-male leading-none text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Female</p>
                      <h5 class="mb-0 font-bold">
                       <?php
                            if ($accountFor == 'Coordinator') {
                               $students = "SELECT count(id) AS total FROM students WHERE Sgender='Female' AND courseCode='$courseCode'";
                            } else {
                               $students = "SELECT count(id) AS total FROM students WHERE Sgender='Female' AND Swcompany='$accountFor' OR courseCode='$courseCode'";
                            }
                            $rows_results = mysqli_query($db, $students);
                            $values = mysqli_fetch_assoc($rows_results);
                            $totalFemale = $values['total'];
                            echo $totalFemale
                        ?>  students
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <!-- <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i> -->
                      <i class="fa fa-female leading-none text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <?php if ($accountFor == 'Coordinator') : ?>
                       <div>
                          <p class="mb-0 font-sans font-semibold leading-normal text-sm">Evaluation</p>
                          <h5 class="mb-0 font-bold">
                          <?php
                                $graded = "SELECT count(id) AS total FROM students WHERE courseCode = '$courseCode' AND iSmidterm = 'graded' OR iSfinal = 'graded'";
                                $rows_results = mysqli_query($db, $graded);
                                $values = mysqli_fetch_assoc($rows_results);
                                $totalStudents = $values['total'];
                                echo $totalStudents
                              ?> results
                          </h5>
                        </div>
                    <?php else : ?>
                      <div>
                          <p class="mb-0 font-sans font-semibold leading-normal text-sm">Request</p>
                          <h5 class="mb-0 font-bold">
                          <?php
                                $request = "SELECT count(id) AS total FROM students WHERE Swcompany = '$accountFor' AND iSmidterm = 'requested' OR iSfinal = 'requested'";
                                $rows_results = mysqli_query($db, $request);
                                $values = mysqli_fetch_assoc($rows_results);
                                $totalStudents = $values['total'];
                                echo $totalStudents
                              ?> request
                          </h5>
                      </div>
                    <?php endif; ?>

                   
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php

