@extends('default')

@section('content')

    <div class="auth_content">

        <div class="columns is-centered login_container auth_container">

            <div class="login_form_container auth_form_container">

                <div class="login_form_container">

                    <form class="login_form" role="form" method="POST" action="{{ route('login') }}">

                        @include('partials.flash_messages')

                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label mb-0">Email</label>
                            <div class="form-control">
                                <input name="email" class="input" type="email" placeholder="jonsmith@example.com" value="{{ old('email') }}" required autofocus="true">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label mb-0">Password</label>
                            <div class="control">
                                <input name="password" class="input" type="password" placeholder="••••••••••••" required >
                            </div>
                        </div>

                        <button class="button is-primary register_btn mt-1" style="width: 100%;" type="submit">
                            Login
                        </button>

                    </form>
                </div>

            </div>


        </div>
    </div>
@endsection

