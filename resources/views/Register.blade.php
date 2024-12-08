@extends('layouts.guest')

@section('content')
    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo border border-danger">
                        <img src="{{ asset('images/library.png') }}" alt="">
                    </div>
                    <form class="yourform" action="{{ route('register') }}" method="post" style="height: 32vw">
                        @csrf
                        <h3 class="heading">Register</h3>
                        
                        {{-- Name Field --}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>

                        </div>

                        {{-- Username Field --}}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
                        </div>
                        
                        {{-- Password Field --}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        
                        {{-- Confirm Password Field --}}
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>
                        
                        {{-- Submit Button --}}
                        <input type="submit" name="register" class="btn btn-danger" value="Register" />
                        <p>Already have an account? <a href="{{ route('login') }}" class="btn btn-link">login here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
