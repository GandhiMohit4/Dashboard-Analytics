@extends('layouts.app')

@section('content')
                <div class="ibox-content">
                        <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                        </div>

                        <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i>{{ __('Agree the terms and policy') }} </label></div>
                        </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">
                                    {{ __('Register') }}
                        </button>

                        <p class="text-muted text-center"><small>Already have an account?</small></p>
                        @if (Route::has('register'))
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                    </form>

                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
@endsection
