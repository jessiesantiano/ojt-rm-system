
    <!-- BANNER -->
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../build/assets/img/banner_light.jpg'); background-position-y: 50%">
          <span class="absolute inset-y-0 w-full h-full bg-center bg-cover"></span>
        </div>
        
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3">

            </div>
            <div class="flex-none w-auto max-w-full px-3 my-auto">
              <div class="h-full">
                <h5 class="mb-1">OJT ANNOUNCEMENT & UPDATES</h5>
                <p class="mb-0 font-semibold leading-normal text-sm">Ligao Community College & Company Name</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- end banner -->

      <!-- iba ibang content -->
      <?php $results = mysqli_query($db, "SELECT * FROM announcements"); ?>
      	<?php while ($row = mysqli_fetch_array($results)) { ?>
					 <div class="flex flex-wrap">
          <div class="w-full max-w-full">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h1 class="mb-0"><?php echo $row['title']?></h1>
              </div>
              <div class="flex-auto p-4">
                <h6 class="font-bold leading-tight uppercase text-xs text-slate-500">Date: <?php echo $row['dateAdded']?></h6>
                <div>
                <h6 class="font-bold leading-tight uppercase text-xs text-slate-500">What For ?</h6>
                  <p>
                    <?php echo $row['whatfor']?>
                  </p>
                </div>
                 <h6 class="font-bold leading-tight uppercase text-xs text-slate-500 mt-4">Posted by: <?php echo $row['postedBy']?></h6>
              </div>
            </div>
          </div>
        </div>
				<?php } ?>

       

      <!-- end iba ibang content -->


