@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <div class="mb-6 text-md text-center text-gray-600 dark:text-gray-400">
                    A new verification link has been sent to the email address you provided during registration.
                </div>

                <div class="flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div>
                            <input type="submit" class="btn btn-primary" value="Resend verification link">
                        </div>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div>
                            <input type="submit" class="btn btn-neutral" value="Log out">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
