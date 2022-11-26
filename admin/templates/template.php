<?php
    session_start();

    if (isset($_SESSION['id']) && (isset($_SESSION['email']))) {
    include "../../../connection.php";
    $id = $_SESSION['id'];
    $getUserLoggedin= mysqli_query($db, "SELECT * FROM accounts WHERE id = $id");
    $getUserLoggedin = $getUserLoggedin -> fetch_assoc();
    ['courseCode' => $courseCode, 'name' => $name, 'accountFor' => $accountFor, 'email' => $email, 'password' => $password] = $getUserLoggedin;

    // $loggedin = mysqli_fetch_array($getUserLoggedin);
    // $name = $loggedin['name'];

     if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            mysqli_query($db, "UPDATE accounts SET email='$email', password='$password' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            session_start();
            session_unset();
            session_destroy();
            header("location: index.php");
        }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>OJT-RMS</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../../../build/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../build/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <!-- chart -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../../../build/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    <link rel="stylesheet" href="../../../build/css/soft-ui-dashboard-tailwind.css" />
    <!-- calendar -->
    <script src="../../../build/assets/js/fullcalendar.min.js"></script>
    <script src="../../../build/assets/js/soft-ui-dashboard-tailwind.js"></script>

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <style>
		/*Overrides for Tailwind CSS */

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #edf2f7;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 900;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;
			/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important;
			/*bg-indigo-500*/
		}
	</style>

  </head>
  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
      <div class="w-full px-6 py-6 mx-auto">
        <?php include 'sidebar.php'; ?> 
      </div>
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
         
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="font-bold uppercase text-slate-700" href="javascript:;"><?php
                  if ($accountFor == 'Coordinator') {
                    echo $courseCode;
                  }else{
                    echo $accountFor;
                  }
                ?></a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page"><?php echo $title ?></li>
            </ol>
            <h6 class="mb-0 font-bold capitalize"></h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="#edit<?php echo $id;?>" data-toggle="modal" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                  <i class="fa fa-user sm:mr-1"></i>
                      <span class="hidden sm:inline capitalize"><?php echo $name?></span>
                </a>
              </li>
              <li class="flex items-center">
                <a href="../../auth/logout.backend.php" class="pl-4  block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500 ">
                    <button class="w-full  " name="login">Sign out</button>
                </a>
              </li>

              <!-- notifications -->

             
            </ul>
          </div>


          <!-- edit account -->
                <div id="edit<?php echo $id; ?>" class="show fade hidden">
                <div class="fixed w-full h-full top-0 left-0 flex justify-center items-center z-10" style="background: rgba(0,0,0,0.5);">
                    <div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                      <div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                        <h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Edit your credentials</h5>
                        <div>
                          <button type="button" data-toggle="modal" class=" fa fa-close w-5 h-5  box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
                        </div>
                      </div>
                    <form action="" method="POST">
                        <div class="relative flex-auto p-4">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <b>Your Email</b>
                          <input autocomplete="off" type="text" placeholder="Email" name="email" value="<?php echo $email?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                          <b>Your Password</b>
                          <input autocomplete="off" type="text" placeholder="Password" name="password" value="<?php echo $password?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                          <div class="flex flex-wrap items-center justify-end p-3 shrink-0 border-slate-100 rounded-b-xl">
                            <button  data-toggle="modal" type="submit" name="update" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Update and Logout</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>


        </div>
      </nav>
      <!-- end Navbar -->

      <!-- Pages Content -->
        <div class="bg-white h-full py-5">
 		       <?php 
              $id = $_SESSION['id'];
              $getUserLoggedin= mysqli_query($db, "SELECT * FROM accounts WHERE id = $id");
              $getUserLoggedin = $getUserLoggedin -> fetch_assoc();
              ['courseCode' => $courseCode, 'name' => $name, 'accountFor' => $accountFor] = $getUserLoggedin;
              require_once $content;
             ?> 
               <?php include("alert.php"); ?>
        </div>
       <!--end Pages Content -->

  </div>
  
  <!-- <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
            ©
            <script>
              document.write(new Date().getFullYear() + "");
            </script>
            OJT RECORD MANAGEMENT SYSTEM
          </div>
        </div>

      </div>
    </div>
  </footer> -->
</div>
      <!-- end cards -->
</main>
  </body>
  <!-- plugin for charts  -->
  <script src="../../../build/assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="../../../build/assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="../../../build/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
  <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
  <!-- <script type="text/javascript">
            function toggleModal(modalID){
              document.getElementById(modalID).classList.toggle("hidden");
              document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
              document.getElementById(modalID).classList.toggle("flex");
              document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
          </script> -->

    <script src="../../../build/assets/js/bootstrap.min.js"></script>
    <!-- <script src="../../../build/assets/js/jquery-1.12.4.js"></script> -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="sweetalert2.all.min.js"></script>




</html>
<?php
    }else{
          header("location: ../../index.php");
          exit();
    }

?>