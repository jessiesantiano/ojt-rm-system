<!-- gagamitun tah kadi kung gusto mo magper page ang student profile -->

<?php include('process.php');
$studentID = $_GET['studentID'];

$result = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $_GET['studentID'] . "'");
while ($row = mysqli_fetch_array($result)) { ?>

    <div class="ease-soft-in-out  relative h-full  transition-all duration-200">
        <div class="w-full px-6 mx-auto">
            <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            </div>
            <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-10 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-auto max-w-full px-3">
                        <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                            <img src="" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
                        </div>
                    </div>
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1"><?php echo $row['title'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>