@include('partials.flash_messages')

<div class="flex flex-col mt-8">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-neongreen-200 sm:rounded-lg">
                <table class="min-w-full table-fixed divide-y divide-neongreen-200">
                    <thead class="bg-neongreen-100 ">
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
                    @foreach($blogposts as $post)
                        <tr class="text-graphite-500">
                            <td class="px-6 py-4 whitespace-nowrap">
                                
                                <div class="flex items-center ml-1 text-sm font-medium">
                                    <a href="{{ route('admin_blogposts_edit', $post->uuid) }}" class="text-sm text-neongreen-400 hover:text-neongreen-600 dark:text-neongreen-300 dark:hover:text-neongreen-200">
                                        {{ $post->title }}
                                    </a>
                                    <a href="{{ route('show_blogpost', $post->slug) }}" class="text-xs ml-1 text-neongreen-400 hover:text-neongreen-600 dark:text-neongreen-200 dark:hover:text-neongreen-300" target="_blank">
                                        (View <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>)
                                    </a>
                                </div>
                            </td>
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm">{{ $post->meta_title }}</div>--}}
{{--                            </td>--}}
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm"> {{ $post->meta_description }}</div>--}}
{{--                            </td>--}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                {{ $post->status == 1 ? 'Published' : 'Draft' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                {{ $post->published_at ? $post->published_at->diffForHumans() : '' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('admin_blogposts_edit', $post->uuid) }}" class="text-neongreen-400 hover:text-neongreen-900 pr-3">
                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-neongreen-500 text-base font-medium text-white hover:bg-neongreen-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 sm:w-auto sm:text-sm">
                                            Edit
                                        </button>
                                    </a>

                                    <button x-on:click="deleteModal = true; bindDeleteForm($event, $dispatch)" type="button"
                                            route="{{ route('admin_blogposts_delete', $post->uuid) }}" title="Delete Post: {{ $post->title }}" desc="Are you sure you want to delete this post?" buttonText="Delete Post"
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
