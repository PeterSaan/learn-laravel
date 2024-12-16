<section>
    <div class="card bg-base-300 shadow-xl">
        <div class="card-body">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Update Password
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Ensure your account is using a long, random password to stay secure
                </p>
            </header>

            <form method="post" action="{{ route('password.update') }}" class="mt-7">
                @csrf
                @method('put')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Current password</span>

                    </div>
                    <input name="curr-pass" type="password" placeholder="Your current password"
                        class="input input-bordered @error('curr-pass') input-error @enderror w-full" />
                    <div class="label">
                        @error('curr-pass')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">New password</span>

                    </div>
                    <input name="new-pass" type="password" placeholder="Your new password"
                        class="input input-bordered @error('new-pass') input-error @enderror w-full" />
                    <div class="label">
                        @error('new-pass')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Confirm new password</span>

                    </div>
                    <input name="conf-new-pass" type="password" placeholder="Confirm your new password"
                        class="input input-bordered @error('conf-new-pass') input-error @enderror w-full" />
                    <div class="label">
                        @error('conf-new-pass')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <div class="flex justify-end items-center gap-4">
                    <button class="btn btn-primary">Update</button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
