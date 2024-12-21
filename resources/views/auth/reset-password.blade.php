@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Email</span>
            </div>
            <input type="email" name="email" placeholder="Email address" value="{{old('email', $request->email)}}" class="input input-bordered @error('email') input-error @enderror" required autofocus autocomplete="email">
            @error('email')
                <span class="label-text-alt text-error">
                    {{$message}}
                </span>
            @enderror
        </label>

        <label class="form-control w-full mt-4">
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

        <div class="mt-4">
            <div class="label">
                <span class="label-text">Password</span>
            </div>
            <input type="password" name="password" placeholder="Password" class="input input-bordered @error('password') input-error" @enderror required autofocus autocomplete="current-password">
            @error('password')
                <span class="label-text-alt text-error">
                    {{$message}}
                </span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <input type="submit" class="btn btn-primary" value="Reset Password">
        </div>
    </form>
@endsection
