    

    <div class="w-full px-6 py-2 mx-auto">
          <div class="p-3 pb-6">
            <h2 class="mb-3 text-gray-800 w-full" style="line-height: 18px"><span class="text-pink-400 font-bold pr-1">Hello </span> <span class="capitalize"> <?php echo $name ?></span></h2>
            <small class="pb-3 text-gray-400">Welcome back to OJT Record Monitoring Dashboard</small>
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
                          ?> 
                           <?php if ($totalStudents > 1) : ?>
                              students
                           <?php else : ?>
                              student
                           <?php endif; ?>
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
                          ?>
                           <?php if ($totalMale > 1) : ?>
                              students
                           <?php else : ?>
                              student
                           <?php endif; ?>
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
                        ?>
                         <?php if ($totalFemale > 1) : ?>
                              students
                           <?php else : ?>
                              student
                           <?php endif; ?>
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
                              ?>
                               request
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
              <?php if ($accountFor == 'Coordinator') : ?>
                <div style="width: 90%;">
                  <canvas id="myChart"></canvas>
                </div>
              <?php else : ?>
                <div class="bg-white rounded-lg pt-10 md:pt-0 lg:pt-0 w-full h-full  px-2 md:px-0 lg:px-0">
                    <div class="py-3 w-full">
                      <h5 class="mb-3 text-gray-800 w-full" style="line-height: 18px"><span class="text-pink-400 font-bold pr-1">Generate </span>Profile Report</h5>
                        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
                          <thead class="sticky top-0">
                              <tr>
                                  <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    Profile
                                  </th>
                                  <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    Course
                                  </th>
                                  <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    Midterm
                                  </th>
                                  <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    Final
                                  </th>
                                  <th scope="col" class="md:hidden lg:hidden px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                  </th>
                              </tr>
                          </thead>
                        <?php $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode' OR Swcompany = '$accountFor'"); ?>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>

                            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-500">
                                <tr>
                                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class=" flex items-center gap-2">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <?php if ($row['Sphoto'] == NULL) : ?>
                                                        <img class="h-10 w-10 rounded-full" src="temp-profile.jpg" alt="">
                                                    <?php else : ?>
                                                      <img src="../../../student/image/' . <?php echo $row['Sphoto']; ?>" alt="" class="h-10 w-10 rounded-full"/>
                                                    <?php endif; ?>
                                                </div>
                                                <small><?php echo $row['Sname']; ?> <?php echo $row['Slname']; ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                        <?php echo $row['Scourse']; ?>
                                    </td>
                                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                        <?php if ($row['iSmidterm'] == 'graded') : ?>
                                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Graded</span>
                                         <?php else : ?>
                                          <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                        <?php if ($row['iSfinal'] == 'graded') : ?>
                                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Graded</span>
                                         <?php else : ?>
                                          <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                    <form action="../students/student-profilepdf.php" method="GET" target="_blank">
                                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                     <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">  
                                     <button type="submit" name="generate_id" class="ml-2  px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                                        <i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; Generate
                                     </button>
                                    </form>

                                    </td>
                                </tr>
                            </tbody>
                          <?php } ?>

                        </table>
                    </div>   
                    
              </div>
              <?php endif; ?>
            
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
        if ($courseCode == 'Education Dept.') {
         $results = mysqli_query($db, "SELECT * FROM schools");
          while ($row = mysqli_fetch_array($results)) {
            $ojt[] = $row["school"];
            $trainees[] = $row['trainees'];
          }
        }
        if ($courseCode == 'Economics Dept.') {
          $results = mysqli_query($db, "SELECT * FROM companies");
          while ($row = mysqli_fetch_array($results)) {
            $ojt[] = $row["company"];
            $trainees[] = $row['trainees'];
          }
        }

      ?>

      <script>
        const labels = <?php echo json_encode($ojt) ?>;
        const data = {
          labels: labels,
          datasets: [{
            label: 'No. of Trainees',
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
             'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(201, 203, 207)'
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
                  beginAtZero: true,
                  ticks:{
                    display: false,
                  }
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

