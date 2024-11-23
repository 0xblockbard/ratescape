<button type="button" class="toggle_page_sidebar hidden sm:inline-flex items-center justify-center rounded-md border border-neongreen-300  text-neongreen-500 shadow-sm px-2 py-2 bg-neongreen-50 hover:bg-neongreen-300 hover:text-white focus:outline-none  sm:text-sm transition duration-500 ease-in-out">

    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ session('toggleSidebar') == true ? 'hidden' : '' }} arrow_right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 arrow_left {{ session('toggleSidebar') == true ? '' : 'hidden' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>

</button>