@extends('layout.master')
@section('title', 'Register – The Simplest Chat Platform')
@section('content')
    <div class="layout">
        <div class="main order-md-2">
            <div class="start">
                <div class="container">
                    <div class="col-md-12">
                        <div class="content">
                            <h1>Create Account</h1>
                            <div class="third-party">
                                <button class="btn item bg-blue">
                                    <i class="material-icons">pages</i>
                                </button>
                                <button class="btn item bg-teal">
                                    <i class="material-icons">party_mode</i>
                                </button>
                                <button class="btn item bg-purple">
                                    <i class="material-icons">whatshot</i>
                                </button>
                            </div>
                            <p>or use your Email for Registration:</p>
                            <form class="signup" action="{{route('register')}}" method="POST">
								@csrf
                                <div class="form-parent">
                                    <div class="form-group">
                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name">
                                        <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name">
                                        <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                    </div>
                                </div>
								<div class="form-group">
									<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address">
									<button class="btn icon"><i class="material-icons">mail_outline</i></button>
								</div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                    <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                </div>
								<div class="form-group">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter Confirm Password">
                                    <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                </div>
                                <button type="submit" class="btn button">Register</button>
                                <div class="mt-3">
                                    <span>Already a member? <a href="{{route('signin')}}" class="text-primary fw-bold">Sign In</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aside order-md-1">
            <div class="container">
                <div class="col-md-12">
                    <div class="preference">
                        <h2>Welcome Back!</h2>
                        <p>To keep connected with your friends please login with your personal info.</p>
                        <a href="{{route('signin')}}" class="btn button">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
