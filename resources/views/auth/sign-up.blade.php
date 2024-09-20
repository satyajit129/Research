@extends('frontend.global.frontend_master')
@section('title', 'Sign In')
@section('frontend_custom_stylesheet')
@endsection

@section('frontend_content')
    <main class="container-bg">
        <div class="containercontainer-bg">
            <div class="login-box">
                <div class="login-content">
                    <h5>REGISTRATION</h5>
                    <input class="input" type="text" placeholder="First Name">
                    <input class="input" type="text" placeholder="Last Name">
                    <input class="input" type="email" placeholder="Email">
                    <input class="input" type="password" placeholder="Password">
                    <input class="input" type="password" placeholder="Confirm password">
                    <div class="remember-me-forgot-password">
                        <div class="remember-me">
                            <input type="checkbox"> <span> By Signing up, I agree to the <a href="">Terms of Servces and Privacy Policy</a></span>
                        </div>
                    </div>
                    <button class="submit-btn mt-2" type="submit">Register</button>
                    <div class="sign-up">
                        <span class="dont-have-account">Already have an account? <a href="{{ route('signIn') }}" class="sign-up-link">Sign In</a></span>
                        <div class="orcid-login">
                            <span>Or Register with ORCID </span> <span><i class="fa-brands fa-orcid"></i> <a href="">
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
