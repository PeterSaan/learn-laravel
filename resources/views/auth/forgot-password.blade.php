@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <div class="mb-4 text-md text-center text-gray-600 dark:text-gray-400">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="email" name="email" placeholder="Email address" value="{{old('email')}}" class="input input-bordered @error('email') input-error" @enderror required autofocus autocomplete="email">
                        @error('email')
                            <span class="label-text-alt text-error">
                                {{$message}}
                            </span>
                        @enderror
                    </label>

                    <div class="flex items-center justify-end mt-4">
                        <input type="submit" class="btn btn-primary" value="Send reset link">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
