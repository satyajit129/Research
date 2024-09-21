@extends('frontend.global.frontend_master')
@section('title', 'Sign In')
@section('frontend_custom_stylesheet')
@endsection

@section('frontend_content')
    <main class="container-bg">
        <div class="container container-bg">
            <div class="login-box">
                <div class="login-content">
                    <h5>SIGN IN</h5>
                    <input class="input" type="text" placeholder="Email">
                    <input class="input" type="password" placeholder="Password">
                    <div class="remember-me-forgot-password">
                        <div class="remember-me">
                            <input type="checkbox"> <span> Remember me</span>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <button class="submit-btn mt-2" type="submit">Sign In</button>
                    <div class="sign-up">
                        <span class="dont-have-account">Don't have an account? <a href="{{ route('signUp') }}" class="sign-up-link">Register
                                Now</a></span>
                        <div class="orcid-login">
                            <span>Or, Sign in with ORCID </span> <span><i class="fa-brands fa-orcid"></i> <a href="">
                                    What is ORCID?</a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('frontend_custom_js')

@endsection
