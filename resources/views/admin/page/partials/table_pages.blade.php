@include('partials.flash_messages')

<div class="flex flex-col mt-8">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-neongreen-200 sm:rounded-lg">
                <table class="min-w-full table-fixed divide-y divide-neongreen-200">
                    <thead class="bg-neongreen-100">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">
                            Title
                        </th>
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">--}}
{{--                            Meta Title--}}
{{--                        </th>--}}
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">--}}
{{--                            Meta Description--}}
{{--                        </th>--}}
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">
                            Last Update
                        </th>
                        <th scope="col" class="relative w-1/6 px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider ">
                            {{--                            <span class="sr-only">Edit</span>--}}
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-cream-200 divide-y divide-neongreen-200">
                    @foreach($pages as $page)
                        <tr class="text-graphite-500">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center ml-1 text-sm font-medium">
                                    <a href="{{ route('admin_pages_edit', $page->uuid) }}" class="text-sm text-neongreen-500 hover:text-neongreen-600 dark:text-neongreen-300 dark:hover:text-neongreen-200">
                                        {{ $page->title }}
                                    </a>
                                    <a href="{{ route('show_page', $page->slug) }}" class="text-xs ml-1 text-neongreen-500 hover:text-neongreen-600 dark:text-neongreen-200 dark:hover:text-neongreen-300" target="_blank">
                                        (View <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>)
                                    </a>
                                </div>
                            </td>
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm"> {{ $page->meta_title }}</div>--}}
{{--                            </td>--}}
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm"> {{ $page->meta_description }}</div>--}}
{{--                            </td>--}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                {{ $page->status == 1 ? 'Published' : 'Draft' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                {{ $page->published_at ? $page->published_at->diffForHumans() : '' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('admin_pages_edit', $page->uuid) }}" class=" pr-3">
                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-neongreen-500 text-base font-medium text-white hover:bg-neongreen-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 sm:w-auto sm:text-sm">
                                            Edit
                                        </button>
                                    </a>
                                    {{--                                    <form method="GET" action="{{ route('admin_pages_delete', $page->uuid) }}" accept-charset="UTF-8">--}}
                                    {{--                                        <a href="#" class="text-red-600 hover:text-red-900">--}}
                                    {{--                                            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">--}}
                                    {{--                                                Delete--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </form>--}}

                                    <button x-on:click="deleteModal = true; bindDeleteForm($event, $dispatch)" type="button"
                                            route="{{ route('admin_pages_delete', $page->uuid) }}" title="Delete Page: {{ $page->title }}" desc="Are you sure you want to delete this page?" buttonText="Delete Page"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">
                                        Delete
                                    </button>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
