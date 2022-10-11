    

    <div class="w-full px-6 py-2 mx-auto">
          <div class="p-3 pb-6">
            <h2 class="mb-3 text-gray-800 w-full" style="line-height: 18px"><span class="text-pink-400 font-bold pr-1">Hello </span> <span class="capitalize"> <?php echo $name ?></span></h2>
            <small class="pb-3 text-gray-400">Welcome back to OJT Record Management Dashboard</small>
          </div>
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
                
          <!-- <div class="flex gap-2 px-3 items-center w-full py-5 mb-10" style="height: calc(100vh - 360px)"> -->
          <div class="flex gap-2 px-3 items-center w-full py-5">
            <div style="width: 90%;">
              <canvas id="myChart"></canvas>
            </div>
            <div class="bg-white rounded-lg flex items-center justify-center pt-10 md:pt-0 lg:pt-0 w-2/4 h-full  px-5 md:px-0 lg:px-0">
                <div class="flex flex-col h-full w-full font-light">
                    <div class="h-full w-full bg-pink-400 rounded-t flex justify-center items-center ">
                        <span class="day uppercase text-lg text-white"></span>
                    </div>
                    <div class="w-full bg-white flex justify-center items-center py-24 flex-col">
                        <span class="month text-2xl text-gray-500"></span>
                        <span class="date uppercase text-7xl text-gray-700 font-extralight"></span>
                    </div>
                    <div class="h-full w-full bg-blue-300 rounded-b flex justify-center items-center ">
                        <span class="year uppercase text-lg text-white"></span>
                    </div>
                </div>
              </div>
           </div>
           

        </div>
      </div>

      <?php
        include('../../../connection.php');
        // chart label
        $results = mysqli_query($db, "SELECT * FROM schools");
        while ($row = mysqli_fetch_array($results)) {
          $school[] = $row["school"];
          $trainees[] = $row['trainees'];
        }


        // chart data
       

      ?>
      <script>
        const labels = <?php echo json_encode($school) ?>;

        const data = {
          labels: labels,
          datasets: [{
            label: 'No. of Trainees',
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
            ],
            borderWidth: 1,
            data: <?php echo json_encode($trainees) ?>,
          }]
        };

      const config = {
        type: 'bar',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
      };
        const myChart = new Chart(
          document.getElementById('myChart'),
          config
        );
      </script>
      <script src="calendar/js/jquery.min.js"></script>
      <script src="calendar/js/main.js"></script>
    <?php

