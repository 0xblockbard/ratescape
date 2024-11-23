@extends('default_admin')

@section('content')

    <section class="hero hero_title" style="background-image: url('/assets/images/home-banner.png')">
        <div class="hero-body">
            <div class="container columns">
                <div class="column is-8 p-0">
                    <h1 class="title">
                        Admin: Users
                    </h1>
                    <h2 class="subtitle is-size-6">
                        Manage all users
                    </h2>
                </div>
                <div class="column is-2 p-0 is-offset-2">
                    <a href="{{ route('admin_users_new') }}">
                        <div class="button is-primary admin_title_btn btn_style_one is-inverted mr-6">Add new user</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container_section">
        @include('admin.users.partials.table_users')
    </div>

@endsection
