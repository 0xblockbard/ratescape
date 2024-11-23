@extends('default_admin')

@section('content_admin')

    <div class="w-full pt-2 pb-16 h-full min-h-screen ">

        <div class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">

            <div class="flex items-center space-x-5">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Admin: Categories</h1>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Manage all categories</p>
                </div>
            </div>

            <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                <a href="{{ route('admin_categories_new') }}">
                    <button type="button" class="button">
                        Add New Category
                    </button>
                </a>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 mt-4">
            @include('admin.category.partials.table_categories')
        </div>

    </div>

@endsection
