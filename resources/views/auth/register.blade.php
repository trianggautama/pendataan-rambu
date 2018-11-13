@extends('layouts.auth')

@section('content')
<br>
<br>
<br>
                    <form method="POST" class="boxes" action="{{ route('register') }}">
                        @csrf
                            <h1>Sign Out</h1>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autocomplete="off" placeholder="nama" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                     

                      

                         
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="e-mail" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
                           

                      
                                <button type="submit" class="btn-input">
                                    {{ __('Register') }}
                                </button>
                           
                    </form>
@endsection
