@extends('default_no_sidebar')

@section('content')

    <div class="auth_content">

        <div class="background_container">
            <img src="{{ asset('/assets/images/cool-bg-2.png') }}" />
        </div>

        <div class="columns is-centered register_container auth_container">

            <div class="register_form_container auth_form_container">
                <h1><a href="{{ route('signup_page') }}" class="chevron_back"><i class="far fa-chevron-left"></i></a>Create your account</h1>
                <p>We'll simplify mockup creation for you</p>

                <div class="register_form">

{{--                    {{ Form::open(['route' => 'register']) }}--}}
{{--                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">--}}
                    <form class="register-form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                    <div class="field">
                        <label class="label mb-0">Name</label>
                        <div class="control">
                            <input name="name" class="input @if($errors->has('name')) 'is-danger' @endif" type="text" placeholder="Jon Smith" required value="{{ old('name') }}" autofocus="true">
                            @if($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <label class="label mb-0">Email</label>
                        <div class="control">
                            <input name="email" class="input @if($errors->has('email')) 'is-danger' @endif" type="email" placeholder="jonsmith@example.com" value="{{ old('email') }}" required>
{{--                            <span class="icon is-small is-left">--}}
{{--                               <i class="fas fa-envelope"></i>--}}
{{--                            </span>--}}
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <label class="label mb-0">Password</label>
                        <div class="control ">
                            <input name="password" class="input @if($errors->has('password')) 'is-danger' @endif" type="password" placeholder="••••••••••••" required>
{{--                            <span class="icon is-small is-left">--}}
{{--                              <i class="fas fa-lock"></i>--}}
{{--                            </span>--}}
                            @if($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                            <p class="help">Use 8 or more characters with a mix of letters, numbers and symbols.</p>
                        </div>
                    </div>

                    <button class="button is-primary register_btn mt-1" style="width: 100%;" type="submit">
                        Get Started
                    </button>
                    <p class="login_prompt mt-3">By signing up, you confirm that you accept our <a href="{{ url('/terms') }}" target="_blank" class="auth_link">Terms of Service</a> and <a href="{{ url('/privacy') }}" target="_blank" class="auth_link">privacy policy</a></p>
                    <p class="login_prompt">Already signed up? <a href="{{ route('login_page') }}" class="auth_link_primary">Log in</a></p>

{{--                    {{ Form::close() }}--}}
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')

    <script>

        $('.email_signup_btn').on('click', function(){
            $('.auth_form_container').show();
            $('.auth_initial').hide();
        });

        $('.chevron_back').on('click', function(){
            $('.auth_form_container').hide();
            $('.auth_initial').show();
        });


    </script>

@endsection
