<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    
</head>
<body class="flex font-mono font-semibold text-gray-800">
 <!--
<div class=" bg-gray-500 xl:hidden flex justify-between w-full p-6 items-center ">
 
  <div class="flex justify-between  items-center space-x-3">
    <p class="text-2xl leading-6 text-gray">Admin</p>
  </div>
  <div aria-label="toggler" class="flex justify-center items-center">
    <button aria-label="open" id="open" onclick="showNav(true)" class="hidden focus:outline-none focus:ring-2">
      <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M4 12H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M4 18H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
    <button aria-label="close" id="close" onclick="showNav(true)" class=" focus:outline-none focus:ring-2">
      <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M6 6L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
  </div>
</div>
-->


<div id="Main" class=" transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start  sm:w-80 bg-gray-200 flex-col shadow-[0_35px_30px_-15px_rgba(0,0,0,0.3)]">

  <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
    <p class="text-2xl leading-6  font-bold uppercase " >Workspace</p>
  </div>
  <div class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
    <button class="flex jusitfy-start items-center space-x-6 w-full  focus:outline-none  focus:text-gray-400  text-gray rounded ">
      <svg class="fill-stroke " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 4H15C14.4477 4 14 4.44772 14 5V9C14 9.55228 14.4477 10 15 10H19C19.5523 10 20 9.55228 20 9V5C20 4.44772 19.5523 4 19 4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <p class="text-base leading-4 ">Dashboard</p>
    </button>
    <button class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-gray focus:text-indigo-400   rounded ">
      <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <p class="text-base leading-4 ">Users</p>
    </button>
  </div>
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button onclick="showMenu1(true)" class="focus:outline-none focus:text-gray-900 text-left  text-gray flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5 ">My Task</p>
      <svg id="icon1" class="transform rotate-90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
    <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 hidden">
      <button class="flex justify-start items-center space-x-6 hover:text-gray focus:bg-gray-400 focus:text-gray hover:bg-gray-400 text-gray-400 rounded px-3 py-2  w-full md:w-52">
      <svg class="NavIcon CheckNavIcon size-5" viewBox="0 0 40 40" aria-hidden="true" focusable="false"><path d="M20,2.5C10.4,2.5,2.5,10.4,2.5,20S10.4,37.5,20,37.5S37.5,29.6,37.5,20S29.6,2.5,20,2.5z M20,34.5C12,34.5,5.5,28,5.5,20S12,5.5,20,5.5S34.5,12,34.5,20S28,34.5,20,34.5z M27.7,15c0.6,0.6,0.6,1.5,0,2.1l-10,10c-0.2,0.2-0.6,0.3-1,0.3c-0.4,0-0.8-0.1-1.1-0.4l-4.1-4.1c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l3.1,3.1l8.9-8.9C26.2,14.4,27.1,14.4,27.7,15z"></path> </svg>
        <p class="text-sm leading-4 text-black ">Task</p>
      </button>
    </div>
  </div>
  <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
    <button onclick="showMenu2(true)" class="focus:outline-none focus:text-gray-900 text-left  text-gray flex justify-between items-center w-full py-5 space-x-14  ">
      <p class="text-sm leading-5 ">Project</p>
      <svg id="icon2" class="transform rotate-90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
    <div id="menu2" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 hidden ">
      <button class="flex justify-start items-center space-x-6 hover:text-gray focus:bg-gray-400 focus:text-gray hover:bg-gray-400 text-gray-400 rounded px-3 py-2  w-full md:w-52">
      <svg class="NavIcon CheckNavIcon size-5" viewBox="0 0 40 40" aria-hidden="true" focusable="false"><path d="M20,2.5C10.4,2.5,2.5,10.4,2.5,20S10.4,37.5,20,37.5S37.5,29.6,37.5,20S29.6,2.5,20,2.5z M20,34.5C12,34.5,5.5,28,5.5,20S12,5.5,20,5.5S34.5,12,34.5,20S28,34.5,20,34.5z M27.7,15c0.6,0.6,0.6,1.5,0,2.1l-10,10c-0.2,0.2-0.6,0.3-1,0.3c-0.4,0-0.8-0.1-1.1-0.4l-4.1-4.1c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l3.1,3.1l8.9-8.9C26.2,14.4,27.1,14.4,27.7,15z"></path> </svg>
        <p class="text-sm leading-4 text-black ">Add project</p>
      </button>
    </div>
  </div>
 
  </div>
</div>


<div class="w-full drop-shadow-lg">
  <div class=" w-full"  x-data="{ isOpen: false }">
    <nav class="bg-gray-200">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
     
           
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-gray focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
  
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click=" isOpen = !isOpen ">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>

                <div 
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-gray focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. 
      <div class="md:hidden" id="mobile-menu">
    
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
        
            <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-gray focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-gray">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-gray">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-gray">Sign out</a>
          </div>
        </div>
      </div>
    </nav>
    -->
  
   
   
  </div>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
      @yield('content-admin')
    </div>
  </main>
</div>
<script>
  let icon1 = document.getElementById("icon1");
  let menu1 = document.getElementById("menu1");
  const showMenu1 = (flag) => {
    if (flag) {
      icon1.classList.toggle("-rotate-180");
      menu1.classList.toggle("hidden");
    }
  };
  let icon2 = document.getElementById("icon2");

  const showMenu2 = (flag) => {
    if (flag) {
      document.getElementById("icon2").classList.toggle("-rotate-180");
      document.getElementById("menu2").classList.toggle("hidden");
    }
  };
  let icon3 = document.getElementById("icon3");

  const showMenu3 = (flag) => {
    if (flag) {
      icon3.classList.toggle("-rotate-45");
    }
  };

  let Main = document.getElementById("Main");
  let open = document.getElementById("open");
  let close = document.getElementById("close");

  const showNav = (flag) => {
    if (flag) {
      Main.classList.toggle("-translate-x-full");
      Main.classList.toggle("translate-x-0");
      open.classList.toggle("hidden");
      close.classList.toggle("hidden");
    }
  };
</script>

</body>
</html>