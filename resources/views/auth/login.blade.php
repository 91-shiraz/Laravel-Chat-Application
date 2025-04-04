@extends('layout.master')
@section('title', 'Login – The Simplest Chat Platform')
@section('content')
    <div class="layout">
        <div class="main order-md-1">
            <div class="start">
                <div class="container">
                    <div class="col-md-12">
                        <div class="content">
                            <h1>Sign in to Swipe</h1>
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
                            <p>or use your Email Account:</p>
                            <form action="{{route('login')}}" method="POST">
								@csrf
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" autofocus>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                    <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                </div>
                                <button type="submit" class="btn button">Sign In</button>
                                <div class="mt-3">
                                    <span>Don't have Account? <a href="{{route('signup')}}" class="text-primary fw-bold">Sign Up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aside order-md-2">
            <div class="container">
                <div class="col-md-12">
                    <div class="preference">
                        <h2>Hello, Friend!</h2>
                        <p>Enter your personal details and start your journey with Swipe today.</p>
                        <a href="{{route('signup')}}" class="btn button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
