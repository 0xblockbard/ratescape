
<div class="inner w-full h-full border-r font-electrolize">
    
    <div class="w-16 px-2 py-3 logo group">

        <a href="{{ url('/') }}">
            {{-- <svg class="w-12 h-12 relative -top-1 -left-0.5 px-1 fill-current py-1 border rounded-full bg-lightgray-500 border-electricblue-300 text-graphite-500  hover:text-graphite-500 hover:bg-electricblue-100 hover:border-electricblue-500 hover:opacity-80" version="1.1" viewBox="0 0 100 100" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"  stroke-width="3">
                <path d="m35.727 38.441h-4.1328v-4.1328c0-1.3789-1.1172-2.5-2.5-2.5s-2.5 1.1211-2.5 2.5v4.1328h-4.1328c-1.3828 0-2.5 1.1172-2.5 2.5 0 1.3789 1.1172 2.5 2.5 2.5h4.1328v4.1367c0 1.3789 1.1172 2.5 2.5 2.5s2.5-1.1211 2.5-2.5v-4.1328h4.1289c1.3828 0 2.5-1.1172 2.5-2.5 0.003906-1.3828-1.1172-2.5039-2.4961-2.5039zm32.098 0h-1.1016c-1.3828 0-2.5 1.1172-2.5 2.5 0 1.3828 1.1172 2.5 2.5 2.5h1.1016c1.3828 0 2.5-1.1172 2.5-2.5 0-1.3828-1.1211-2.5-2.5-2.5zm9.7188 0-1.1016-0.003906h-0.003906c-1.3789 0-2.4961 1.1172-2.5 2.4961-0.003906 1.3828 1.1133 2.5039 2.4961 2.5039l1.1016 0.003906h0.003906c1.3789 0 2.4961-1.1172 2.5-2.4961 0-1.3789-1.1172-2.5-2.4961-2.5039zm-5.4141 4.3047c-1.3828 0-2.5 1.1172-2.5 2.5v1.1016c0 1.3828 1.1172 2.5 2.5 2.5 1.3828 0 2.5-1.1172 2.5-2.5v-1.1016c0-1.3789-1.1172-2.5-2.5-2.5zm0-3.6133h0.007813c1.3828-0.003906 2.4961-1.1289 2.4922-2.5078l-0.003906-1.1016c-0.003906-1.3789-1.1211-2.4922-2.5-2.4922h-0.007812c-1.3828 0.003906-2.4961 1.1289-2.4922 2.5078l0.003906 1.1016c0.003906 1.3789 1.125 2.4922 2.5 2.4922zm10.957-20.105h-66.172c-6.8945 0-12.5 5.6055-12.5 12.5v20.832c0 3.4375 8.9648 16.883 16.484 27.555 0.46875 0.66406 1.2305 1.0586 2.043 1.0586h11.727c1.3828 0 2.5-1.1172 2.5-2.5l0.003906-13.613h26.109v13.613c0 1.3828 1.1172 2.5 2.5 2.5h11.727c0.83203 0 1.6094-0.41406 2.0742-1.1055 10.617-15.809 16.004-25.062 16.004-27.508v-20.832c0-6.8945-5.6094-12.5-12.5-12.5zm7.5 33.184c-0.59766 2.2812-7.6211 13.594-14.414 23.762h-7.8906l-0.003906-13.613c0-1.3828-1.1172-2.5-2.5-2.5h-31.105c-1.3828 0-2.5 1.1172-2.5 2.5v13.613h-7.9297c-6.9102-9.875-14.316-21.398-14.828-23.719v-20.727c0-4.1367 3.3633-7.5 7.5-7.5h66.168c4.1367 0 7.5 3.3633 7.5 7.5z"/>
            </svg>  --}}
            <img src="{{ asset('storage/assets/units/doge-boi.png') }}" class="lazy relative left-1 top-1 w-11 h-11 hover:opacity-80 rounded-full">
        </a>

    </div>

    <ul class="menu_items tracking-wide flex flex-col h-90p justify-between text-graphite-500 text-base ml-2 mr-2" >
        
        <div class="mt-6">
            
            <li class="flex justify-center single">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 teal-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current " fill="none" version="1.1" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke-width="2" >
                        <g>
                            <path d="m50.234 19.324c8.8125 5.0742 17.621 10.188 26.434 15.266v30.82c-8.8828 5.1484-17.766 10.297-26.688 15.41-8.8828-5.1133-17.805-10.262-26.688-15.41v-30.82c8.8828-5.1133 17.805-10.262 26.688-15.41zm12.582 8.4492-12.836-7.3984-25.672 14.828v29.621l25.672 14.828 25.672-14.828v-29.621l-12.836-7.3984z"/>
                            <path d="m24.457 17.73c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406-2.8633 2.8633-4.6406 6.8164-4.6406 11.168 0 4.3516 1.7773 8.3047 4.6406 11.168 2.8633 2.8633 6.8164 4.6406 11.168 4.6406 4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168 0-4.3516-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m76.16 17.73c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406-2.8633 2.8633-4.6406 6.8164-4.6406 11.168 0 4.3516 1.7773 8.3047 4.6406 11.168 2.8633 2.8633 6.8164 4.6406 11.168 4.6406 4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168 0-4.3516-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m23.84 48.297c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406s-4.6406 6.8164-4.6406 11.168c0 4.3516 1.7773 8.3047 4.6406 11.168 2.8633 2.8633 6.8164 4.6406 11.168 4.6406 4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168 0-4.3516-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m76.16 48.297c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406-2.8633 2.8633-4.6406 6.8164-4.6406 11.168 0 4.3516 1.7773 8.3047 4.6406 11.168 2.8633 2.8633 6.8164 4.6406 11.168 4.6406 4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168 0-4.3516-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m49.98 63.414c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406-2.8633 2.8633-4.6406 6.8164-4.6406 11.168 0 4.3516 1.7773 8.3047 4.6406 11.168s6.8164 4.6406 11.168 4.6406c4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168 0-4.3516-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m49.98 2.9727c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406-2.8633 2.8633-4.6406 6.8164-4.6406 11.168s1.7773 8.3047 4.6406 11.168c2.8633 2.8633 6.8164 4.6406 11.168 4.6406 4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168s-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m49.98 33.176c4.6406 0 8.8477 1.8867 11.895 4.9297 3.0469 3.0469 4.9297 7.25 4.9297 11.895 0 4.6406-1.8867 8.8477-4.9297 11.895-3.0469 3.0469-7.25 4.9297-11.895 4.9297-4.6406 0-8.8477-1.8867-11.895-4.9297-3.0469-3.0469-4.9297-7.25-4.9297-11.895 0-4.6406 1.8867-8.8477 4.9297-11.895 3.0469-3.0469 7.25-4.9297 11.895-4.9297zm11.168 5.6562c-2.8633-2.8633-6.8164-4.6406-11.168-4.6406-4.3516 0-8.3047 1.7773-11.168 4.6406s-4.6406 6.8164-4.6406 11.168 1.7773 8.3047 4.6406 11.168 6.8164 4.6406 11.168 4.6406c4.3516 0 8.3047-1.7773 11.168-4.6406 2.8633-2.8633 4.6406-6.8164 4.6406-11.168s-1.7773-8.3047-4.6406-11.168z"/>
                            <path d="m50.234 0.14453c14.359 8.3047 28.68 16.57 43.039 24.875v50c-14.43 8.3398-28.863 16.68-43.293 25.02-14.43-8.3047-28.863-16.641-43.293-25.02v-50c14.43-8.3047 28.863-16.641 43.293-25.02zm20.883 13.234-21.137-12.219-42.277 24.402v48.805l42.277 24.402 42.277-24.402v-48.805l-21.137-12.219z"/>
                        </g>
                    </svg>

                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Dashboard</span>
                    
                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded-sm teal-menu-item border-2 border-l-6">
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 purple-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current " fill="none" version="1.1" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke-width="2" >
                        <g>
                            <path d="m47.016 58.957v26.867c-8.207 4.4766-15.672 8.957-23.879 13.434-8.207-4.4766-15.672-8.957-23.879-13.434v-26.867l23.879-13.434c8.207 4.4766 15.672 8.957 23.879 13.434zm-23.879-8.207-19.402 11.195v21.641c6.7148 3.7305 12.688 7.4609 19.402 11.195 6.7148-3.7305 12.688-7.4609 19.402-11.195v-21.641c-6.7148-3.7305-12.688-7.4609-19.402-11.195z"/>
                            <path d="m100 58.957v26.867l-23.879 13.434-23.879-13.434v-26.867l23.879-13.434zm-23.879-8.207-19.402 11.195v21.641l19.402 11.195 19.402-11.195v-21.641z"/>
                            <path d="m73.879 13.434v26.867l-23.879 13.434-23.879-13.434v-26.867l23.879-13.434zm-23.879-8.207-19.402 11.195v21.641l19.402 11.195 19.402-11.195v-21.641z"/>
                        </g>
                    </svg>

                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Base</span>
                    
                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded-sm purple-menu-item border-2 border-l-6">
                        Base
                    </span>
                </a>
            </li>

            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 blue-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current " fill="none" version="1.1" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke-width="1" >
                        <g>
                            <path d="m50 55c4.7188 0 8.9727-2.8438 10.777-7.2031 1.8086-4.3594 0.80859-9.375-2.5273-12.715-3.3359-3.3359-8.3555-4.332-12.715-2.5273-4.3594 1.8047-7.2031 6.0586-7.2031 10.777 0.007813 6.4414 5.2266 11.66 11.668 11.668zm0-20c3.3711 0 6.4102 2.0312 7.6992 5.1445 1.2891 3.1133 0.57812 6.6992-1.8086 9.082-2.3828 2.3828-5.9648 3.0938-9.0781 1.8047-3.1172-1.2891-5.1445-4.3281-5.1445-7.6992 0.003906-4.5977 3.7305-8.3281 8.332-8.332z"/>
                            <path d="m16.668 100h4c1.2305 0.007812 2.3594-0.67188 2.9336-1.7617l8.4844-15.73-0.003907 0.003907c0.46875 0.28125 0.97266 0.49219 1.5 0.62891l0.91797 4.5078c0.46484 2.3398 2.5156 4.0234 4.8984 4.0195h5.6016v5c0 0.88281 0.35156 1.7305 0.97656 2.3555s1.4727 0.97656 2.3555 0.97656h3.3359c0.88281 0 1.7305-0.35156 2.3555-0.97656s0.97656-1.4727 0.97656-2.3555v-5h5.6016c2.375 0.003906 4.4258-1.6719 4.8984-4l0.91797-4.5234v-0.003906c0.52734-0.13281 1.0312-0.34766 1.5-0.62891l8.4648 15.703c0.57031 1.1016 1.7109 1.793 2.9492 1.7852h4c0.88672 0 1.7344-0.35156 2.3594-0.97656s0.97656-1.4727 0.97656-2.3555v-21.953c-0.003907-3.5195-1.9141-6.7617-4.9922-8.4727l-7.4492-4.1367c0.51563-4.0742 0.77344-8.1797 0.77344-12.289 0-29.375-17.402-44.984-22.766-49.082-1.3398-0.98438-3.168-0.97656-4.5 0.023437-5.332 4.0742-22.734 19.688-22.734 49.059 0 4.1094 0.25781 8.2148 0.77344 12.289l-7.4414 4.1367c-3.082 1.707-4.9961 4.9531-5 8.4727v21.953c0 0.88281 0.35156 1.7305 0.97656 2.3555s1.4727 0.97656 2.3594 0.97656zm22.734-11.668h-0.003906c-0.79297 0.007813-1.4766-0.55469-1.6328-1.332l-0.74219-3.668h7.9766v5zm8.9297 8.3359v-31.668h3.332v31.668zm12.266-8.332-5.5977-0.003907v-5h7.9766l-0.74609 3.6836c-0.16016 0.77344-0.84375 1.3242-1.6289 1.3164zm19.461-19.18c2.0195 1.1211 3.2734 3.25 3.2734 5.5586v21.953h-4l-9.1055-16.898c0.039063-0.10156 0.089844-0.19141 0.125-0.29688h-0.003906c1.4844-4.5156 2.6094-9.1406 3.3711-13.832zm-30.324-65.734c0.14453-0.11328 0.34766-0.12109 0.5-0.019531 6.7109 5.3359 12.09 12.156 15.703 19.93h-31.875c3.6094-7.7617 8.9727-14.578 15.672-19.91zm-17.117 23.246h34.766c2.8867 7.3711 4.3438 15.227 4.2852 23.148 0.039062 9.7148-1.4766 19.379-4.4844 28.617-0.30859 0.9375-1.1836 1.5703-2.168 1.5664h-10.016v-15c0-0.88281-0.35156-1.7305-0.97656-2.3555s-1.4727-0.97656-2.3555-0.97656h-3.3359c-1.8398 0-3.332 1.4922-3.332 3.332v15h-10.016c-0.98828 0.003906-1.8633-0.63281-2.168-1.5703-3.0078-9.2383-4.5234-18.898-4.4844-28.613-0.058593-7.9219 1.3984-15.777 4.2852-23.148zm-15.949 48.047c0-2.3086 1.2539-4.4375 3.2734-5.5586l6.332-3.5195c0.76172 4.6914 1.8906 9.3164 3.3711 13.832 0.035157 0.10156 0.085938 0.19922 0.125 0.29688l-9.1016 16.902h-4z"/>
                        </g>
                    </svg>

                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Army</span>
                    
                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded-sm blue-menu-item border-2 border-l-6">
                        Army
                    </span>
                </a>
            </li>

            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 orange-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current " fill="none" version="1.1" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke-width="2" >
                        <g>
                            <path d="m29.648 16.062c0-3.3438-2.7188-6.0625-6.0625-6.0625s-6.0625 2.7188-6.0625 6.0625 2.7188 6.0625 6.0625 6.0625 6.0625-2.7188 6.0625-6.0625zm-10.125 0c0-2.2383 1.8242-4.0625 4.0625-4.0625 2.2422 0 4.0625 1.8242 4.0625 4.0625 0 2.2422-1.8203 4.0625-4.0625 4.0625-2.2383 0-4.0625-1.8203-4.0625-4.0625z"/>
                            <path d="m80.535 84.094c0-3.2578-2.6484-5.9062-5.9062-5.9062-3.2539 0-5.9062 2.6484-5.9062 5.9062 0.003906 3.2578 2.6523 5.9062 5.9062 5.9062 3.2578 0 5.9062-2.6484 5.9062-5.9062zm-9.8086 0c0-2.1523 1.75-3.9062 3.9062-3.9062 2.1523 0 3.9062 1.75 3.9062 3.9062-0.003906 2.1562-1.7578 3.9062-3.9102 3.9062s-3.9023-1.75-3.9023-3.9062z"/>
                            <path d="m83.238 15.844c-3.7266 0-6.7617 3.0352-6.7617 6.7617 0 3.7266 3.0312 6.7617 6.7617 6.7617 3.7266 0 6.7617-3.0352 6.7617-6.7617 0-3.7305-3.0352-6.7617-6.7617-6.7617zm0 11.523c-2.625 0-4.7617-2.1367-4.7617-4.7617s2.1367-4.7617 4.7617-4.7617 4.7617 2.1328 4.7617 4.7617c0 2.625-2.1367 4.7617-4.7617 4.7617z"/>
                            <path d="m16.348 87.746c3.5 0 6.3477-2.8477 6.3477-6.3477s-2.8477-6.3477-6.3477-6.3477-6.3477 2.8477-6.3477 6.3477 2.8477 6.3477 6.3477 6.3477zm0-10.695c2.3984 0 4.3477 1.9492 4.3477 4.3477 0 2.3984-1.9492 4.3477-4.3477 4.3477-2.3984 0-4.3477-1.9531-4.3477-4.3477 0-2.3984 1.9492-4.3477 4.3477-4.3477z"/>
                            <path d="m62.887 51.82c-3.5 0-6.3477 2.8477-6.3477 6.3477s2.8477 6.3477 6.3477 6.3477 6.3477-2.8477 6.3477-6.3477-2.8477-6.3477-6.3477-6.3477zm0 10.691c-2.3984 0-4.3477-1.9492-4.3477-4.3477 0-2.3984 1.9492-4.3477 4.3477-4.3477 2.3984 0 4.3477 1.9492 4.3477 4.3477 0 2.3984-1.9531 4.3477-4.3477 4.3477z"/>
                            <path d="m89.375 70.539c1.9102-3.8594-0.78906-9.4766-6.7656-15.504 2.1094-13.648-4.6914-27.695-17.707-34.141-7.7891-3.8594-16.609-4.4531-24.844-1.6719-5.0312 1.6992-9.4727 4.5352-13.047 8.2617-8.7344-1.1719-14.562 0.24609-16.434 4.0234-1.8398 3.7109 0.80859 9.3828 7.457 15.965-1.0078 12.863 5.7305 25.664 17.98 31.73 4.6289 2.293 9.5469 3.3789 14.391 3.3789 7.9766 0 15.75-2.957 21.738-8.3008 2.3203 0.32422 4.4453 0.48828 6.3555 0.48828 5.7109-0.003906 9.4961-1.4492 10.875-4.2305zm-48.68-49.426c3.2031-1.082 6.5039-1.6172 9.7891-1.6172 4.6367 0 9.25 1.0703 13.527 3.1875 11.766 5.8281 18.121 18.273 16.805 30.625-5.8516-5.4102-14.184-11.039-24.078-15.941-9.5586-4.7344-19.145-8.0508-27.293-9.4922 3.1719-3.0078 6.9844-5.3203 11.25-6.7617zm-28.324 11.277c1.3516-2.7305 6.0625-3.8281 13.023-3.0898-1.582 1.918-2.957 4.0234-4.0898 6.3047-1.4922 3.0117-2.4727 6.1484-2.9766 9.3047-5.0312-5.2891-7.25-9.9102-5.957-12.52zm24.531 45.016c-15.086-7.4766-21.281-25.828-13.805-40.918 1.2539-2.5273 2.8242-4.8281 4.6602-6.8711 8.2344 1.2617 18.172 4.625 28.094 9.543 10.746 5.3242 19.109 11.211 24.609 16.535-0.50391 2.6836-1.3711 5.3398-2.6406 7.9062-7.4766 15.086-25.828 21.281-40.918 13.805zm37.094-4.9141c2.2109-2.3164 4.1211-4.9883 5.6172-8.0039 1.1406-2.3047 1.9766-4.6836 2.5352-7.0898 4.8047 5.1094 6.7734 9.5547 5.4375 12.25-1.2969 2.6133-6.3281 3.6445-13.59 2.8438z"/>
                            <path d="m50.312 52.773-7.582-4.1484-4.1484-7.5859c-0.35156-0.64062-1.4062-0.64062-1.7539 0l-4.1484 7.5859-7.5859 4.1484c-0.32031 0.17578-0.51953 0.51172-0.51953 0.87891 0 0.36719 0.19922 0.70312 0.51953 0.87891l7.5859 4.1484 4.1484 7.5859c0.17578 0.32031 0.51172 0.51953 0.875 0.51953s0.70312-0.19922 0.875-0.51953l4.1484-7.5859 7.582-4.1484c0.32031-0.17578 0.51953-0.51172 0.51953-0.87891 0.003906-0.36719-0.19531-0.70312-0.51562-0.87891zm-8.7969 4.2891c-0.16797 0.09375-0.30469 0.23047-0.39844 0.39844l-3.4102 6.2383-3.4102-6.2383c-0.09375-0.16797-0.23047-0.30469-0.39844-0.39844l-6.2383-3.4102 6.2383-3.4102c0.16797-0.09375 0.30469-0.23047 0.39844-0.39844l3.4102-6.2383 3.4102 6.2383c0.09375 0.16797 0.23047 0.30469 0.39844 0.39844l6.2344 3.4062z"/>
                        </g>
                    </svg>

                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Expeditions</span>
                    
                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded-sm orange-menu-item border-2 border-l-6">
                        Expeditions
                    </span>
                </a>
            </li>


            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 pink-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current " fill="none" version="1.1" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke-width="2" >
                        <path d="m56.766 6.6484c-3.1562-0.49219-6.2578 1.1914-7.5625 4.1133-2.2539-3.0859-5.918-4.8242-9.7344-4.6133-3.8164 0.21094-7.2656 2.3359-9.168 5.6523-0.039062 0-0.074219-0.007812-0.11328-0.007812-6.1367 0.007812-11.152 4.9062-11.305 11.047-1.9922 1.1484-3.4297 3.0508-3.9961 5.2812-2.9961 1.1094-5.3828 3.4492-6.5547 6.4219-1.1719 2.9766-1.0273 6.3125 0.40625 9.1719-3.7812 4.9531-3.4102 11.918 0.875 16.438-1.1836 3.5547-0.73828 7.4492 1.2148 10.645s5.2188 5.3633 8.918 5.9297c1.1875 2.6367 3.4727 4.6172 6.25 5.418 0.41406 5.3125 4.0938 9.8008 9.2227 11.246s10.613-0.45703 13.742-4.7695c1.1055 3.2617 4.3984 5.2578 7.8047 4.7305 13.898-2.1758 25.914-10.879 32.305-23.406 6.3945-12.527 6.3945-27.363 0-39.891-6.3906-12.527-18.406-21.23-32.305-23.406zm-18.086 84.391c-5.4727 0-9.9062-4.4375-9.9062-9.9062 0-5.4727 4.4336-9.9062 9.9062-9.9062v-2.832c-6.2734 0.011719-11.605 4.5859-12.57 10.785-3.1367-1.2695-4.9297-4.5859-4.2812-7.9062 0.65234-3.3164 3.5625-5.7109 6.9453-5.707v-2.832c-5.4688 0.007813-9.8984 4.4375-9.9062 9.9062 0.003906 0.33984 0.019531 0.67578 0.054687 1.0156-4.7305-1.3828-7.7266-6.0312-7.0312-10.91 0.69922-4.8789 4.8789-8.5039 9.8086-8.5v-2.832c-4.3672 0.003907-8.4258 2.2461-10.754 5.9414-2.8398-3.7734-2.6094-9.0312 0.55469-12.539l0.70312-0.78906-0.55469-0.89844c-1.2188-1.9609-1.5781-4.332-1.0039-6.5664 0.57812-2.2305 2.0469-4.1289 4.0625-5.2539 0.5625 4.2148 4.1523 7.3633 8.4062 7.3711v-2.832c-2.2891 0-4.3516-1.3789-5.2305-3.4922-0.875-2.1172-0.39062-4.5508 1.2266-6.168 1.6211-1.6211 4.0547-2.1055 6.1719-1.2266 2.1133 0.875 3.4922 2.9375 3.4922 5.2266h2.832c0.015625-2.4844-1.0625-4.8477-2.9531-6.4648-1.8867-1.6172-4.3906-2.3164-6.8438-1.9141 0.58594-3.7344 3.5703-6.6328 7.3203-7.1133-0.87109 3.3828-0.12109 6.9766 2.0234 9.7344 2.1484 2.7539 5.4492 4.3594 8.9414 4.3438v-2.8281c-3.4336 0-6.5312-2.0703-7.8438-5.2422s-0.58594-6.8242 1.8398-9.2539c2.4297-2.4297 6.082-3.1562 9.2539-1.8398 3.1719 1.3125 5.2422 4.4102 5.2422 7.8438v63.68c-0.007813 5.4688-4.4375 9.8984-9.9062 9.9062zm17.652-0.48437v-0.003907c-1.2266 0.19531-2.4766-0.16016-3.4219-0.96875-0.94922-0.80859-1.4922-1.9883-1.4961-3.2305v-72.703c0.003907-2.3516 1.9141-4.2539 4.2656-4.2539 0.21875 0 0.4375 0.019531 0.65234 0.054688 13 2.0312 24.238 10.172 30.219 21.891 5.9805 11.723 5.9805 25.598 0 37.316-5.9805 11.723-17.219 19.863-30.219 21.895zm3.5742-46.215h-5.6602v-2.832h5.6602c0.78125 0 1.4141-0.63281 1.4141-1.4141v-9.9062h2.832v9.9062c-0.003906 2.3438-1.9023 4.2422-4.2461 4.2461zm2.832-16.98h-0.003906c1.7188 0 3.2656-1.0352 3.9219-2.6211 0.66016-1.5859 0.29688-3.4141-0.91797-4.6289-1.2148-1.2109-3.0391-1.5742-4.6289-0.91797-1.5859 0.65625-2.6172 2.2031-2.6172 3.9219 0 2.3438 1.8984 4.2422 4.2422 4.2461zm0-5.6602h-0.003906c0.57422 0 1.0898 0.34375 1.3086 0.87109 0.21875 0.53125 0.097656 1.1406-0.30469 1.543-0.40625 0.40625-1.0156 0.52734-1.543 0.30859-0.53125-0.21875-0.875-0.73438-0.875-1.3086 0-0.78125 0.63281-1.4141 1.4141-1.4141zm-2.832 36.793h-5.6602v-2.832h5.6602c2.3438 0.003906 4.2422 1.9023 4.2461 4.2461v9.9062h-2.832v-9.9062c0-0.78125-0.63281-1.4141-1.4141-1.4141zm2.832 14.152-0.003906-0.003906c-1.7148 0-3.2617 1.0352-3.9219 2.6211-0.65625 1.5859-0.29297 3.4141 0.92188 4.6289 1.2148 1.2109 3.0391 1.5742 4.625 0.91797s2.6211-2.2031 2.6211-3.9219c0-2.3438-1.9023-4.2422-4.2461-4.2461zm0 5.6602-0.003906-0.003907c-0.57031 0-1.0859-0.34375-1.3047-0.87109-0.21875-0.53125-0.097657-1.1406 0.30469-1.543 0.40625-0.40625 1.0156-0.52734 1.543-0.30859s0.875 0.73438 0.875 1.3086c0 0.78125-0.63672 1.4141-1.418 1.4141zm9.9023-38.211h2.832v4.2461c-0.003906 3.9062-3.1719 7.0703-7.0781 7.0742h-14.148v-2.8281h14.152-0.003907c2.3438-0.003907 4.2461-1.9023 4.2461-4.2461zm1.4141-11.32c-1.7148 0-3.2617 1.0352-3.9219 2.6211-0.65625 1.5859-0.29297 3.4141 0.92188 4.625 1.2148 1.2148 3.0391 1.5781 4.625 0.92188 1.5859-0.65625 2.6211-2.207 2.6211-3.9219 0-2.3438-1.9023-4.2422-4.2461-4.2461zm0 5.6602c-0.57031 0-1.0859-0.34375-1.3047-0.875-0.21875-0.52734-0.097656-1.1367 0.30469-1.5391 0.40625-0.40625 1.0156-0.52734 1.543-0.30859s0.875 0.73437 0.875 1.3086c0 0.78125-0.63281 1.4141-1.418 1.4141zm-1.4141 21.227h2.832v14.152h-2.832zm9.9062 2.832h-2.832l0.003906-22.645h2.832zm0 5.6602h-2.832l0.003906-2.832h2.832zm-39.621-45.285h-2.832v-2.8281h2.832zm-9.9062 29.719h2.8281v2.832l-2.8281-0.003907zm8.4922 31.133h2.832v2.832l-2.8359-0.003906zm-24.059-21.227h2.832v2.832l-2.832-0.003907zm25.473-19.812h2.8281v2.832l-2.8281-0.003907zm-26.887 2.8281h2.8281v2.832h-2.8281z"/>
                    </svg>

                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Research</span>
                    
                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded-sm pink-menu-item border-2 border-l-6">
                        Research
                    </span>
                </a>
            </li>

        </div>

        <div>

            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 green-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current" version="1.1" fill="none" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" >
                        <path d="m22.977 43.844c-1.9531-40.766 1.0078-39.492 33.344-16.5 6.6484 4.5781 13.535 8.9219 20.148 15.398 5.2695 5.1562 4.043 10.656-0.67969 15.785-10.453 11.352-23.172 19.816-36.398 27.438-2.3828 1.4219-4.9688 2.3047-7.7188 2.6484-2.7344 0.33594-4.9844-1.2109-5.3906-3.8906-2.3047-14.051-3.3047-24.887-3.3047-40.879zm9.2969 34.867c0.027343 1.1328 1.2578 1.8203 2.2383 1.25 13.625-7.9414 24.797-13.453 36.172-27.047 3.5156-4.2031-10.395-12.094-12.672-13.98-0.039063-0.03125-0.078125-0.0625-0.11719-0.089844-8.3516-5.5469-16.523-11.25-24.266-17.625-0.99219-0.82031-2.4805-0.078125-2.4297 1.207 0.75391 18.695 0.61328 37.434 1.0742 56.285z"/>
                    </svg>
                                 
                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4 ">Mint</span>

                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded green-menu-item border-2 border-l-6">
                        Mint
                    </span>

                </a>
            </li>


            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 yellow-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg class="icon fill-current" version="1.1" fill="none" stroke="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <g>
                        <path d="m95.602 26.199c-1.1016 0-4.6016-0.10156-9.3008 0.10156v-7.1016c0-1.1016-0.80078-1.8984-1.8984-2-2.8984-0.10156-26.301-0.60156-34.398 8.1016-8.1992-8.6992-31.602-8.1992-34.398-8.1016-1.1016 0-1.8984 0.89844-1.8984 2v7.1016c-4.6016-0.19922-8.1016-0.10156-9.1992-0.10156-1.1016 0-1.8984 0.89844-1.8984 2v52.102c0 0.60156 0.30078 1.1992 0.80078 1.6016 0.5 0.39844 1.1016 0.5 1.6992 0.30078 0.30078-0.10156 27.602-7.6992 39.898-0.60156 1.5 0.89844 3.3008 1.3984 5.1016 1.3984s3.6016-0.5 5.1016-1.3984c12.09-7.2031 39.488 0.39844 39.789 0.5 0.60156 0.19922 1.1992 0 1.6992-0.30078 0.5-0.39844 0.80078-0.89844 0.80078-1.6016v-52c0-1.0977-0.80078-2-1.8984-2zm-65.801 48.301c-9.3984 0-19 2-23.398 3.1016l-0.003906-47.5c2 0 4.5 0 7.1992 0.10156v38.602c0 0.5 0.19922 1 0.60156 1.3984 0.39844 0.39844 0.89844 0.60156 1.3984 0.60156 0.19922 0 16.699-0.5 26.602 5.3984-3.5977-1.2031-8-1.7031-12.398-1.7031zm18.199 0.89844c-8.6992-7.6992-24.699-8.6016-30.398-8.6016v-45.695c8.6016 0 26.398 1.3008 30.398 8.1016zm4 0v-46.297c4-6.8008 21.801-8.1016 30.398-8.1016v45.699c-5.6992 0.19922-21.699 1-30.398 8.6992zm41.602 2.2031c-6.5-1.6016-23.898-5.1992-35.801-1.5 10-5.8008 26.398-5.3984 26.602-5.3984 0.5 0 1.1016-0.19922 1.3984-0.60156 0.39844-0.39844 0.60156-0.89844 0.60156-1.3984l-0.003906-38.504c2.6992-0.10156 5.1992-0.10156 7.1992-0.10156z"/>
                        <path d="m24.199 34.102c3.6016 0.39844 10.602 1.3984 16.398 3.5 0.19922 0.10156 0.5 0.10156 0.69922 0.10156 0.80078 0 1.6016-0.5 1.8984-1.3984 0.39844-1.1016-0.19922-2.3008-1.1992-2.6992-6.1992-2.3008-13.5-3.3008-17.301-3.6992-1.1016-0.10156-2.1992 0.69922-2.3008 1.8008-0.19531 1.1914 0.60547 2.1914 1.8047 2.3945z"/>
                        <path d="m42 46.801c-5-2.1016-11.199-3.6992-17.398-4.3984-1.1016-0.10156-2.1992 0.69922-2.3008 1.8008-0.10156 1.1016 0.69922 2.1992 1.8008 2.3008 5.6992 0.69922 11.699 2.1992 16.301 4.1016 0.30078 0.10156 0.5 0.19922 0.80078 0.19922 0.80078 0 1.6016-0.5 1.8984-1.3008 0.5-1.1055 0-2.3047-1.1016-2.7031z"/>
                        <path d="m42.102 59.301c-5.1016-2.5-11-4.1016-17.5-4.6992-1.1016-0.10156-2.1992 0.69922-2.3008 1.8984-0.10156 1.1016 0.69922 2.1992 1.8984 2.3008 6 0.60156 11.398 2.1016 16.102 4.3008 0.30078 0.10156 0.60156 0.19922 0.89844 0.19922 0.80078 0 1.5-0.39844 1.8984-1.1992 0.50391-1 0.10156-2.3008-0.99609-2.8008z"/>
                        <path d="m58.801 37.699c0.19922 0 0.5 0 0.69922-0.10156 5.8008-2.1016 12.699-3.1016 16.398-3.5 1.1016-0.10156 2-1.1992 1.8008-2.3008-0.10156-1.1016-1.1016-2-2.3008-1.8008-3.8008 0.39844-11.102 1.5-17.301 3.6992-1.1016 0.39844-1.6016 1.6016-1.1992 2.6992 0.20312 0.80469 1 1.3047 1.9023 1.3047z"/>
                        <path d="m58.801 50.699c0.30078 0 0.5-0.10156 0.80078-0.19922 4.6016-1.8984 10.602-3.3984 16.301-4.1016 1.1016-0.10156 1.8984-1.1992 1.8008-2.3008-0.10156-1.1016-1.1992-2-2.3008-1.8008-6.2031 0.80469-12.402 2.4023-17.402 4.5039-1.1016 0.39844-1.6016 1.6992-1.1016 2.6992 0.30078 0.80078 1 1.1992 1.9023 1.1992z"/>
                        <path d="m75.398 54.602c-6.5 0.69922-12.398 2.1992-17.5 4.6992-1 0.5-1.5 1.6992-1 2.8008 0.39844 0.69922 1.1016 1.1992 1.8984 1.1992 0.30078 0 0.60156-0.10156 0.89844-0.19922 4.6992-2.3008 10.102-3.6992 16.102-4.3008 1.1016-0.10156 2-1.1016 1.8984-2.3008-0.09375-1.1992-1.1953-2-2.2969-1.8984z"/>
                        </g>
                    </svg>
                                 
                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4">Litepaper</span>

                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded yellow-menu-item border-2 border-l-6">
                        Litepaper
                    </span>

                </a>
            </li>

            <li class="flex justify-center single mt-3">
                <a href="{{ url('/') }}" class="inline-flex relative group rounded-full px-2 py-2 mb-1 deep-red-menu-item border-2 {{ \Request::route()->getName() == 'home' ? 'selected active' : '' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>                      
                                 
                    {{-- Sidebar Text when expanded --}}
                    <span class="menu_item_text hidden pl-4">Disconnect</span>

                    {{-- Tooltip --}}
                    <span class="tooltip hidden group-hover:block items-center justify-center absolute top-0 left-14 h-full ml-4 pl-2 pr-4 py-2 text-base rounded deep-red-menu-item border-2 border-l-6">
                        Disconnect
                    </span>

                </a>
            </li>
            
        </div>

    </ul>
</div>