 <?php include('process.php') ?>
<div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
  <div class="flex justify-between items-center">
		<div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl"> 
			<h6>Accounts</h6>
		</div>
		<button type="button" class="px-3 py-2 mr-9 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-20 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Add</button>
	</div>	
  <div class="flex-auto px-0 pt-0 pb-2">
    <div class="p-0 overflow-x-auto">
      <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
        <thead class="align-bottom">
          <tr>
            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Students</th>
            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Username</th>
            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Course</th>
            <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
          </tr>
        </thead>
        <tbody>
           <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                  <div class="flex px-2 py-1">
                    <div>
                      <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-0 leading-normal text-sm">John Michael</h6>
                      <p class="mb-0 leading-tight text-xs text-slate-400"><?php echo $row['email']; ?></p>
                    </div>
                  </div>
                </td>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                  <p class="mb-0 font-semibold leading-tight text-xs">Male</p>
                </td>
              
                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                  <span class="font-semibold leading-tight text-xs text-slate-400">BSED</span>
                </td>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                  <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400"> Edit </a>
                </td>
              </tr>
             <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>