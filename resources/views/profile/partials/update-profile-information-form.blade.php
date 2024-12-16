<section>
    <div class="card bg-base-300 shadow-xl">
        <div class="card-body">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Profile Information
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Update your account's profile information and email address
                </p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6">
                @csrf
                @method('patch')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Name</span>
                    </div>
                    <input name="name" type="text" placeholder="New name"
                        class="input input-bordered @error('name') input-error @enderror w-full"
                        value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input name="email" type="email" placeholder="New email"
                        class="input input-bordered @error('email') input-error @enderror w-full"
                        value="{{ old('email', $user->email) }}" required autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-6">
                                Your email address is unverified.
                                <br>
                                <button form="send-verification"
                                    class="btn-link text-smrounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Click here to re-send the verification email.
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mx-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    A new verification link has been sent to your email address.
                                </p>
                            @endif
                        </div>
                    @endif
                </label>

                <div class="flex justify-end items-center gap-4">
                    <button class="btn btn-primary">Save</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">
                            Saved
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
