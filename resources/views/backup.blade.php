<section class="relative mx-auto w-full">
    <nav class="flex justify-between bg-gray-500/60  text-white backdrop-blur-sm ">
        <div class="px-5 xl:px-12 py-4 flex w-full items-center">
            <a class="text-4xl font-bold font-heading text-white flex flex-col pt-1" href="#">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                <span class="flex">Kanvas Batik<span class="text-black">&nbsp;.</span></span>
                <span class="bg-black h-[3px] mt-1">&nbsp;</span>
            </a>
            <!-- Nav Links -->
            <ul class="flex px-4 mx-auto font-semibold text-base font-heading space-x-12 ">
                {{-- Home Page - Hero - CTA --}}
                <li class="flex flex-col pt-2"><a class="hover:text-white/70" href="#">Home</a><span class="bg-black h-[2px] mt-2"></span></li>
                {{-- Category - View Other Users Design --}}
                <li class="flex flex-col pt-2"><a class="hover:text-white/70" href="#">Catagory</a><span class="bg-black h-[2px] mt-2"></span></li>
                {{-- <li><a class="hover:text-white/70" href="#">Catagory</a></li> --}}
                {{-- Collection - User Design --}}
                {{-- <li><a class="hover:text-white/70" href="#">Collections</a></li> --}}
                <li class="flex flex-col pt-2"><a class="hover:text-white/70" href="#">Collections</a><span class="bg-black h-[2px] mt-2"></span></li>
                {{-- <li><a class="hover:text-gray-200" href="#">Contact Us</a></li> --}}
            </ul>
            <!-- Header Icons -->
            <div class="flex space-x-5 items-center text-white">
                {{-- <a class="hover:text-gray-200" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                </a> --}}
                <button aria-label="view favourites" class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                    <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg" alt="favourites">
                    <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg" alt="favourites">
                </button>
                <button aria-label="go to cart" class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                    <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                    <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                    <span class="flex absolute -mt-7 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500"></span>
                    </span>
                </button>
                {{-- <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>

                </a> --}}
                <!-- Sign In / Register      -->
                {{-- <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a> --}}

            </div>
        </div>
    </nav>
</section>
