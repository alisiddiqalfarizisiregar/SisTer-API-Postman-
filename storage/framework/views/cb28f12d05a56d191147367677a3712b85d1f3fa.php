<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato');
            html { font-family: 'Lato', sans-serif; }
         </style>
    </head>
    <body class="bg-gray-100 tracking-wider">
        <nav id="header" class="fixed w-full z-10 top-0 bg-white border-b border-gray-400">
           <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
              <div class="pl-4 flex items-center">
                 <svg class="h-5 pr-3 fill-current text-purple-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM5 9l2-2 2 2 4-4 2 2-6 6-4-4z"/>
                 </svg>
                 <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold"  href="#"> 
                 Admin
                 </a>
              </div>
              <div class="block lg:hidden pr-4">
                 <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-purple-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <title>Menu</title>
                       <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                 </button>
              </div>
              <div class="w-full flex-grow  lg:content-center lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">
                 <div class="flex-1 w-full mx-auto max-w-sm content-center py-4 lg:py-0">
                    <div class="relative pull-right pl-4 pr-4 md:pr-0">
                       <input type="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-purple-500 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                       <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                          <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                             <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                          </svg>
                       </div>
                    </div>
                 </div>
                 <ul class="list-reset lg:flex justify-end items-center">
                    
                    <li class="mr-3 py-2 lg:py-0">
                       <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-2 px-4" href="#">link</a>
                    </li>
                    
                 </ul>
              </div>
           </div>
        </nav>
        <!--Container-->
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
           <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
              <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
              <div class="block lg:hidden sticky inset-0">
                 <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                 </button>
              </div>
              <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
                 <ul class="list-reset">
                    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                       <a href="<?php echo e(route('murid.index')); ?>" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:border-purple-500 lg:hover:border-purple-500">
                       <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">daftar murid</span>
                       </a>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                       <a href="<?php echo e(route('dashboard')); ?>" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                       <span class="pb-1 md:pb-0 text-sm">home</span>
                       </a>
                    </li>
                    
                 </ul>
              </div>
           </div>
           <!--/ Content-->
           <main>
            <?php echo e($slot); ?>

           </main>
           
           <!--/ akhir Content-->
              
           
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php echo $__env->yieldPushContent('modals'); ?>
     </body>
</html>
    <?php /**PATH D:\semester 3\teknologi web\kecak\resources\views/layouts/admin-layout.blade.php ENDPATH**/ ?>