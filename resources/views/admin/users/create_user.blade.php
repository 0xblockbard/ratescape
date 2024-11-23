@extends('default_admin')

@section('content')

    <section class="hero hero_title" style="background-image: url({{ config('app.CF_URL').'/assets/images/banner-5.png' }})">
        <div class="hero-body">
            <div class="container header_container columns">

                <div class="column is-8 p-0 hero_left">
                    <h1 class="title">
                        New User
                    </h1>
                    <h2 class="subtitle is-size-6">
                        <a href="{{ route('admin_users_overview') }}"><i class="fa fa-angle-left pr-2"></i> Back to users overview</a>
                    </h2>
                </div>

            </div>
        </div>
    </section>

    <div class="container_section">

        <div class="form_container admin_form_container admin_form_small_container">

            @include('partials.flash_messages')

            {!! Form::open(['route' => ['admin_users_store'], 'files' => 'true', 'autocomplete' => 'off'])  !!}

            <div class="field">
                <div class="control">
                    <input name="name" class="input is-info" type="text" placeholder="Jon Smith" required value="{{ old('name') }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input name="email" class="input is-info" type="email" placeholder="jonsmith@example.com" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input name="password" class="input is-info" type="password" placeholder="••••••••••••" required>
                </div>
            </div>

            <div class="file has-name is-fullwidth is-info field">
                <label class="file-label">
                    <input class="file-input featured-image-file-input" type="file" name="image">
                    <span class="file-cta">
                       <span class="file-icon">
                           <i class="fas fa-upload"></i>
                       </span>
                       <span class="file-label">
                            Choose a file…
                       </span>
                       </span>
                    <span class="file-name featured-image-file-name is-info">
                             Upload Profile Image (Optional)
                       </span>
                </label>
            </div>

            {!! Form::submit('Save', ['class' => 'button is-success small-margin-top', 'style' => 'margin:35px auto; display: block; width: 30%;']) !!}

            {!!  Form::close()  !!}
        </div>

    </div>

@endsection

@section('scripts')

    <script>

        var featuredImageFileInput = document.querySelector('.featured-image-file-input');
        featuredImageFileInput.onchange = () => {
            if(featuredImageFileInput.files.length > 0){
                var fileName = document.querySelector('.featured-image-file-name');
                fileName.textContent = featuredImageFileInput.files[0].name;
            }
        }

    </script>

@endsection
