@include('partials.flash_messages')

<div class="flex flex-col mt-8">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-neongreen-200 sm:rounded-lg">
                <table class="min-w-full table-fixed divide-y divide-neongreen-200">
                    <thead class="bg-neongreen-100 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider dark:text-gray-300">
                            Name
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider dark:text-gray-300">
                            Slug
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider dark:text-gray-300">
                            Type
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider dark:text-gray-300">
                            Number of Posts
                        </th>

                        <th scope="col" class="relative w-1/6 px-6 py-3 text-left text-xs font-medium text-graphite-500 uppercase tracking-wider dark:text-gray-300">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-cream-200 divide-y divide-neongreen-200">
                    @foreach($categories as $category)
                        <tr class="text-gray-700 dark:text-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap">

                                <div class="flex items-center ml-1 text-sm font-medium">
                                    <a href="{{ route('admin_categories_edit', [$category->type, $category->slug]) }}" class="text-sm text-neongreen-400 hover:text-neongreen-600 dark:text-neongreen-300 dark:hover:text-neongreen-200">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center ml-1 text-sm lowercase">{{ $category->slug }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                {{ ucfirst($category->type) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                {{ $category->type == "post" ? $category->posts->count() : "NA" }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('admin_categories_edit', [$category->type, $category->slug]) }}" class="text-neongreen-600 hover:text-neongreen-900 pr-3">
                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-neongreen-600 text-base font-medium text-white hover:bg-neongreen-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 sm:w-auto sm:text-sm">
                                            Edit
                                        </button>
                                    </a>

                                    <button x-on:click="deleteModal = true; bindDeleteForm($event, $dispatch)" type="button"
                                            route="{{ route('admin_categories_delete', [$category->type, $category->slug]) }}" title="Delete Category: {{ $category->name }}" desc="Are you sure you want to delete this category?" buttonText="Delete Category"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">
                                        Delete
                                    </button>

                                </div>
                            </td>
                        </tr>

                        @foreach($category->children as $child)

                            <tr class="text-graphite-500">
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="flex items-center ml-1 text-sm font-medium">
                                        <a href="{{ route('admin_categories_edit', [$child->type, $child->slug]) }}" class="text-sm text-neongreen-400 hover:text-neongreen-600 dark:text-neongreen-300 dark:hover:text-neongreen-200">
                                            {{ $child->name }}
                                        </a>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-1">
                                            <div class="text-sm font-medium lowercase">{{ $child->slug }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    {{ ucfirst($child->type) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    {{ $child->type == "post" ? $child->posts->count() : "NA" }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex">
                                        <a href="{{ route('admin_categories_edit', [$child->type, $child->slug]) }}" class="text-neongreen-600 hover:text-neongreen-900 pr-3">
                                            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-neongreen-600 text-base font-medium text-white hover:bg-neongreen-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 sm:w-auto sm:text-sm">
                                                Edit
                                            </button>
                                        </a>

                                        <button x-on:click="deleteModal = true; bindDeleteForm($event, $dispatch)" type="button"
                                                route="{{ route('admin_categories_delete', [$child->type, $child->slug]) }}" title="Delete Category: {{ $child->name }}" desc="Are you sure you want to delete this category?" buttonText="Delete Category"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">
                                            Delete
                                        </button>

                                    </div>
                                </td>
                            </tr>

                            @foreach($child->children as $grandchild)

                                <tr class="text-gray-700 dark:text-gray-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-1">
                                                <div class="text-sm font-medium pl-10">{{ $grandchild->name }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-1">
                                                <div class="text-sm font-medium lowercase">{{ $grandchild->slug }}</div>
                                            </div>
                                        </div>
                                    </td>
        
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        {{ ucfirst($grandchild->type) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        {{ $grandchild->type == "post" ? $grandchild->posts->count() : "NA" }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex">
                                            <a href="{{ route('admin_categories_edit', [$grandchild->type, $grandchild->slug]) }}" class="pr-3">
                                                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-neongreen-500 text-base font-medium text-white hover:bg-neongreen-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 sm:w-auto sm:text-sm">
                                                    Edit
                                                </button>
                                            </a>
        
                                            <button x-on:click="deleteModal = true; bindDeleteForm($event, $dispatch)" type="button"
                                                    route="{{ route('admin_categories_delete', [$grandchild->type, $grandchild->slug]) }}" title="Delete Category: {{ $grandchild->name }}" desc="Are you sure you want to delete this category?" buttonText="Delete Category"
                                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">
                                                Delete
                                            </button>
        
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        @endforeach

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
