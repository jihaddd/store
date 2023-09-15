@extends('layouts.app')

@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                        @csrf
                        <span class="login100-form-title p-b-32">
                            تسجيل الدخول
                        </span>
                            <span class="txt1 p-b-11">
                               الايميل
                            </span>

                            <div class="wrap-input100 validate-input m-b-36">
                               
                                <input id="email" type="email" class="input100" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <span class="txt1 p-b-11">
                                كلمة المرور
                            </span>

                            <div class="wrap-input100 validate-input m-b-12">
                                <input id="password" type="password" class="input100" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                       

                            <a href="{{'register'}}">انشاء حساب جديد</a>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                              
                            </div>
                        
                    </form>

    </div>
</div>
@endsection
