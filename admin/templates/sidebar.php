    <aside class="w-64 fixed ease-nav-brand   my-4 ml-4 block   flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
         <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="../dashboard">
          
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">OJT RECORD MANAGEMENT</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div>
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../dashboard">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>

       <?php if ($courseCode != "Education Dep.") : ?>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../students">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
              <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <?php if ($courseCode != NULL) : ?>
               <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"><?php echo $courseCode ?> Students</span>
              <?php else : ?>
                 <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Trainees</span>
              <?php endif; ?>
            </a>
          </li>
        <?php else : ?>
            <!-- dont display -->
        <?php endif; ?>

          <?php if ($courseCode == NULL) : ?>
            <li class="mt-0.5 w-full">
              <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../evaluation">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                  <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(453.000000, 454.000000)">
                            <path class="fill-slate-800 opacity-60" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                            <path class="fill-slate-800" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Evaluation Request</span>
              </a>
            </li>
           <?php else : ?>
            <!-- dont display -->
           <?php endif; ?>


          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../announcement">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              </div>
              <?php if ($courseCode != NULL) : ?>
                 <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Announcement Page</span>
              <?php else : ?>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Post Announcement</span>
              <?php endif; ?>
            </a>
          </li>
      <?php if ($courseCode != NULL) : ?>
         <?php if ($courseCode != "Coordinator") : ?>
              <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../school">
                  <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                  <i class="fa fa-handshake-o" aria-hidden="true"></i>
                  </div>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">School / Company</span>
                </a>
              </li>
          <?php endif; ?>
   
          <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../licomco.accounts">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Course OJT Coordinators</span>
            </a>
          </li>
         <?php if ($courseCode != "Coordinator") : ?>
              <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../internship.accounts">
                  <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                  <i class="fa fa-address-card" aria-hidden="true"></i>
                  </div>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Schoolhead / Supervisors</span>
                </a>
              </li>
          <?php endif; ?>
        </ul>
      </div>
   <?php else : ?>
     <!-- dont display -->
   <?php endif; ?>
    </aside>