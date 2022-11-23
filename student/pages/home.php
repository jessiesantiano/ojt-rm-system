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
          <p class="mb-0 font-semibold leading-normal text-sm">Ligao Community College</p>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- end banner -->

<!-- iba ibang content -->
<?php $results = mysqli_query($db, "SELECT * FROM announcements"); ?>
<?php while ($row = mysqli_fetch_array($results)) { ?>
  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
      <div class="flex flex-wrap -mx-3">
        <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
          <div class="flex flex-col h-full">
            <p class="text-xs"><?php echo $row['dateAdded'] ?></p>
            <h5 class="font-bold text-lg"><?php echo $row['title'] ?></h5>
            <p class="text-sm"><?php echo $row['whatfor'] ?></p>
            <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
             Posted by: &nbsp; <?php echo $row ['postedBy'] ?>
            </a>
          </div>
        </div>
        <div class="rounded-xl max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
          <div class="h-full  rounded-xl">
           
            <div class="relative flex items-center justify-center h-full rounded-xl">
                <?php if ($row['name'] == '') : ?>
              	<h5></h5>
              <?php else : ?>
                <img class="relative z-20  pt-6 rounded-xl w-2/3" src="<?php echo '../admin/pages/announcement/uploads/' . $row['name']; ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
<?php } ?>



<!-- end iba ibang content -->