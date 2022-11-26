
<?php
    session_start();
    require_once '../connection.php';
    if (isset($_SESSION['id'])) {
      $id = $_SESSION['id'];
      $requestUpload= mysqli_query($db, "SELECT * FROM students WHERE id = $id");
      $requestUpload = $requestUpload -> fetch_assoc();
      ['uploadRequest' => $uploadRequest, 'whatDocu' => $whatDocu, 'courseCode' => $courseCode] = $requestUpload;

      if (isset($_POST['midterm'])) {
        $iSmidterm = $_POST['iSmidterm'];
        mysqli_query($db, "UPDATE students SET iSmidterm='$iSmidterm' WHERE id=$id");
        header('location: index.php');
      }

      if (isset($_POST['final'])) {
        $iSfinal = $_POST['iSfinal'];
        mysqli_query($db, "UPDATE students SET iSfinal='$iSfinal' WHERE id=$id");
        header('location: index.php');
      }


      if (isset($_POST['certificate'])) {
        $isCertificate = $_POST['isCertificate'];
        mysqli_query($db, "UPDATE students SET isCertificate='$isCertificate' WHERE id=$id");
        header('location: index.php');
      }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $Semail = $_POST['Semail'];
            $Spassword = $_POST['Spassword'];

            mysqli_query($db, "UPDATE students SET Semail='$Semail', Spassword='$Spassword' WHERE id=$id");
           
            session_start();
            session_unset();
            session_destroy();
            header("location: index.php");
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>OJT Monitoring Record System</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Nucleo Icons -->
  <link href="../build/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../build/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="../build/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="soft-ui-dashboard-tailwind.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../build/assets/js/bootstrap.min.js"></script>
  <script src="../build/assets/js/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

 

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

  <!-- start navigation -->
  <nav class="w-64 fixed ease-nav-brand   my-4 ml-4 block   flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">


    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto h-full max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">


        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Student Panel</h6>
        </li>


        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="index.php?q=home">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fas fa-th-large"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Home Page</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="index.php?q=profile">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fas fa-user"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Student Profile</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="index.php?q=documents">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fas fa-folder-open"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Documents Page</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="index.php?q=reports">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fas fa-file-pdf"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Reports</span>
          </a>
        </li>
      </ul>
      <?php
          $students = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
          while ($row = mysqli_fetch_array($students)) {
          $iSmidterm = $row['iSmidterm'];  
          $iSfinal = $row['iSfinal'];  
          $isCertificate = $row['isCertificate'];  
          ?>
      <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-300">


        <a href="#" data-modal-toggle="updateAccount" data-target=" #upload" >
        <div class="mt-1 pl-7 flex items-center ">
            <span class=" h-8 w-8 overflow-hidden rounded-full bg-gray-100 flex justify-center">
              <img src="<?php
                      if ($row['Sphoto'] == NULL) {
                        echo './image/temp-profile.jpg';
                      }else{
                          echo './image/' . $row['Sphoto'];
                        }
                      
                          ?>" >
                
              </img>
            </span>
            <span class="text-xs px-3"><?php echo $_SESSION["Sname"]; ?> <?php echo $_SESSION["Slname"]; ?></span>
          </div>
        </a>


              <div class="p-3 pl-9">
                <small>Evaluation Status</small>
                <div>
                  <b><small>MIDTERM</small></b>
                  <?php if ($iSmidterm == NULL) : ?>
                    <form action="" method="POST">
                      <input type="text" value="requested" name="iSmidterm" hidden>
                      <button type="submit" name="midterm" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Request for Midterm Grade</button>
                    </form>
                  <?php else :?>
                      <div>
                        <b><small>Status: </small></b>
                        <?php if ($iSmidterm == 'requested') : ?>
                          <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                        <?php else : ?>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Graded</span>
                        <?php endif; ?>
                      </div>
                  <?php endif; ?>
                </div>

                <?php if ($iSmidterm == 'graded') : ?>
                  <div>
                    <b><small>FINAL</small></b>
                    <?php if ($iSfinal == NULL) : ?>
                      <form action="" method="POST">
                          <input type="text" value="requested" name="iSfinal" hidden>
                          <button type="submit" name="final" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Request for Final Grade</button>
                      </form>
                    <?php else : ?>
                      <div>
                          <b><small>Status: </small></b>
                          <?php if ($iSfinal == 'requested') : ?>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                          <?php else : ?>
                              <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Graded</span>
                          <?php endif; ?>
                      </div>
                    <?php endif; ?>
                  </div>
               <?php endif; ?>


                <?php if ($iSmidterm == 'graded' AND $iSfinal == 'graded') : ?>
                  <div>
                    <small>Certification</small>
                    <?php if ($isCertificate == NUll) : ?>
                      <form action="" method="POST">
                          <input type="text" value="requested" name="isCertificate" hidden>
                          <button type="submit" name="certificate" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Request certificate</button>
                      </form>
                    <?php else : ?>
                      <div>
                          <b><small>Status: </small></b>
                          <?php if ($isCertificate == 'requested') : ?>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                          <?php else : ?>
                              <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Uploaded</span>
                          <?php endif; ?>
                      </div>
                    <?php endif; ?>
                  </div>
               <?php endif; ?>


           </div>
      
        <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="index.php?q=logout">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fa fa-sign-out"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
          </a>
        </li>
      </ul>
    </div>

</nav>

  <!-- end navigation left side -->
            <!-- Main modal -->
            <div id="updateAccount" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
              <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="updateAccount">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit your account</h3>
                    <form class="space-y-6" action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo $row['id']?>">
                      <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add your new email</label>
                        <input type="email"  autocomplete="off" value="<?php echo $row['Semail'] ?>" name="Semail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email" required="">
                      </div>
                      <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add your new password</label>
                        <input type="text" autocomplete="off" value="<?php echo $row['Spassword']?>" name="Spassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Password" required="">
                      </div>
                      <button type="submit" name="update" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update and Logout
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
				<?php } ?>

  <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen bg-gray-50 transition-all duration-200" style="padding-top:-1000px ;">




    <!-- CONTENT -->
    <div class="w-full mx-auto h-full" >


      <?php require_once $content; ?>
      <?php include("./alert.php"); ?>




      <!-- footer -->
      <!-- <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                ©
                <script>
                  document.write(new Date().getFullYear() + "");
                </script>
                OJT MONITORING SYSTEM
              </div>
            </div>

          </div>
        </div>
      </footer> -->

      <!-- end footer -->
    </div>
  </div>

</body>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="../build/assets/js/soft-ui-dashboard-tailwind.js"></script>
<script src="../build/assets/js/soft-ui-dashboard-tailwind.min.js"></script>
<script src="../build/assets/js/sidenav-burger.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>

<script src="sweetalert2.all.min.js"></script>

</html>

<?php
    }else{
          header("location: ../index.php");
          exit();
    }

?>