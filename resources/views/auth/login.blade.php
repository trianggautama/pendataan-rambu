@extends('layouts.auth')

@section('content')

            
                    <form method="POST" class="boxes" action="{{ route('login') }}"  autocomplete="off" style="margin-top:25%;">
                        @csrf
                        <h1>Login</h1>
                 
                           
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback"  style="color:white;"role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                           
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="color:white;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                    
                                <button type="submit" class="btn-input">
                                   <b>Login</b>
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
