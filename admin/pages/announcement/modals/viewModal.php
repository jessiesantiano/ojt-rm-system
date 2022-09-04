<?php $announcements = mysqli_query($db, "SELECT * FROM announcements"); 
    $id = $_SESSION['id'];
    $getUserLoggedin = mysqli_query($db, "SELECT * FROM accounts WHERE id = $id");
    $loggedin = mysqli_fetch_array($getUserLoggedin);
    $name = $loggedin['name'];
?>
<?php while ($row = mysqli_fetch_array($announcements)) { ?>
    <div id="view<?php echo $row['id']; ?>" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Announcement</h5>
					<div>
						<button type="button" data-toggle="modal" class=" fa fa-close w-5 h-5  box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
					</div>
				</div>
			   <div class="p-4">
					<div>
						<h5><?php echo $row['title'] ?></h5>
					</div>
					<div>
						<p><b>What for: </b> <?php echo $row['whatfor'] ?></p>
					</div>
					
					 
					<?php if ($row['postedBy'] == $name) : ?>
						<small><i><b>Posted by you! </b></i></small> 
					<?php else : ?>
						<div>
							<small><b>Posted by: </b> <?php echo $row['postedBy'] ?></small> / 
							<small>Course Trainees Supervisor</small>
					    </div>
					<?php endif; ?>
			   </div>
			</div>
		</div>
	</div>
<?php } ?>