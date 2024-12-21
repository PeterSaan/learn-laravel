@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    This is a secure area of the application. Please confirm your password before continuing
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <input type="password" name="password" placeholder="Password" class="input input-bordered @error('password') input-error" @enderror required autofocus autocomplete="current-password">
                            @error('password')
                                <span class="label-text-alt text-error">
                                    {{$message}}
                                </span>
                            @enderror
                        </label>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" class="btn btn-primary" value="Confirm">
                        </div>
                </form>
            </div>
        </div>
    </div>


@endsection
