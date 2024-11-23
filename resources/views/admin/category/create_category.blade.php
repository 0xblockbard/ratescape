@extends('default_admin')

@section('content_admin')

    <div class="w-full pt-2 pb-16 h-full min-h-screen ">

        <div class="flex items-center max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="flex mr-3">
                <a href="{{ route('admin_categories_overview') }}" class="hover:text-neongreen-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            <h1 class="flex items-center text-2xl flex-1 font-semibold text-gray-900">
                <span class="w-24 text-base sm:w-auto sm:text-xl">New Category:</span>
            </h1>

            <div class="flex justify-end">

                <button type="submit" class="button ml-3" form="category_form">
                    Save New Category
                </button>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

            @include('partials.flash_messages')

            {!! Form::open(['route' => ['admin_categories_store'], 'id' => 'category_form'])  !!}

            <div class="md:grid md:grid-cols-12 mt-4">

                <div class="page_main_content lg:col-span-12 mt-3 sm:mt-2 space-y-6 sm:space-y-5">

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field mt-1 sm:mt-0 sm:col-span-12">
                            <input type="text" value="{{ old('name') }}" placeholder="Category Name" name="name" id="name" autocomplete="name" class="block sm:text-lg font-semibold w-full shadow-sm focus:ring-neongreen-300 focus:border-neongreen-300 border-neongreen-300 rounded-md bg-cream-200">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field mt-1 sm:mt-0 sm:col-span-12">
                            <textarea name="description" placeholder="Category Description" rows="2" style="resize:none" class="shadow-sm block w-full focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md bg-cream-200">{!!  old('description')  !!}</textarea>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">

                        <div class="mt-1 sm:mt-0 sm:col-span-12">
                            <select id="type" name="type" autocomplete="type" class="block focus:ring-neongreen-300 focus:border-neongreen-500 w-full shadow-sm sm:text-sm border-neongreen-300 rounded-md">
                                <option value="" class="text-graphite-300" disabled selected>Category Type</option>
                                <option value="post" {{ old('type') == "post" ? 'selected' :''  }}>Post</option>
                                <option value="page" {{ old('type') == "page" ? 'selected' :''  }}>Page</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">

                        @include('admin.partials.categories_select_dropdown_create')

                    </div>

                </div>

            </div>

        </div>

        <div class="ml-8 pt-0 mt-12 border-t border-gray-200">
            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="submit" class="button ml-5">
                    Save New Category
                </button>
            </div>
        </div>

        {!! Form::close() !!}

    </div>


@endsection

@section('scripts')

    <script src="{{ asset_path('/assets/js/admin/admin.js') }}"></script>
    <script src="{{ asset_path('/assets/js/admin/content_image_upload.js') }}"></script>

@endsection
