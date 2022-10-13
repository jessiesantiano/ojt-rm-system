<?php
    session_start();

    if (isset($_SESSION['id']) && (isset($_SESSION['email']))) {
    include "../../../connection.php";
    $id = $_SESSION['id'];
    $getUserLoggedin= mysqli_query($db, "SELECT * FROM accounts WHERE id = $id");
    $getUserLoggedin = $getUserLoggedin -> fetch_assoc();
    ['courseCode' => $courseCode, 'name' => $name, 'accountFor' => $accountFor] = $getUserLoggedin;

    // $loggedin = mysqli_fetch_array($getUserLoggedin);
    // $name = $loggedin['name'];
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
                <a href="#" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
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