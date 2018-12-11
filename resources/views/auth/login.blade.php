@extends('layouts.auth')

@section('content')

            
                    <form method="POST" class="boxes" action="{{ route('login') }}"  autocomplete="off" style="margin-top:25%;">
                        @csrf
                        <h1>Login</h1>
                 
                           
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback"  style="color:white;"role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="color:white;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                    
                                <button type="submit" class="btn-input">
                                    {{ __('Login') }}
                                </button>

                                <br>
                                  <!--  <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> -->
                                <a style="color:white;  text-decoration:none;" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                          <br>
                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
