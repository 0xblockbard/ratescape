
<nav class="w-full px-2 space-y-1 sidebar admin_sidebar py-2 my-4 ">

    <a href="{{ route('admin') }}" class="{{ \Request::route()->getName() == 'admin' ? 'active' : '' }} text-md single group flex items-center px-2 py-2 rounded-md ">
        <svg class="icon group-hover:text-neongreen-500 mr-3 h-4 w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Overview
    </a>

    <a href="{{ route('admin_blogposts_overview') }}" class="{{ (\Request::route()->getName() == 'admin_blogposts_overview' OR \Request::route()->getName() == 'admin_blogposts_edit' OR \Request::route()->getName() == 'admin_blogposts_new') ? 'active' : '' }} text-md single group flex items-center px-2 py-2 rounded-md ">
        <svg xmlns="http://www.w3.org/2000/svg"  class="icon group-hover:text-neongreen-500 mr-3 h-4 w-4 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
        Blogposts
    </a>

    <a href="{{ route('admin_pages_overview') }}" class="{{ (\Request::route()->getName() == 'admin_pages_overview' OR \Request::route()->getName() == 'admin_pages_edit' OR \Request::route()->getName() == 'admin_pages_new') ? 'active' : '' }} text-md single group flex items-center px-2 py-2 rounded-md">
        <svg class="icon group-hover:text-neongreen-500 mr-3 h-4 w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        Pages
    </a>

    <a href="{{ route('admin_categories_overview') }}" class="{{ (\Request::route()->getName() == 'admin_categories_overview' OR \Request::route()->getName() == 'admin_categories_edit' OR \Request::route()->getName() == 'admin_categories_new') ? 'active' : '' }} text-md single group flex items-center px-2 py-2 rounded-md">

        <svg class="icon group-hover:text-neongreen-500 mr-3 h-4 w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
        </svg>
          
        Categories
    </a>


</nav>
