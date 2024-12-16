<section>
    <div class="card bg-base-300 shadow-xl">
        <div class="card-body">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Delete account
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Once your account is deleted, all of its resources and data will be permanently deleted
                </p>
            </header>

            <div class="flex justify-end items-center">
                <button
                class="btn btn-secondary"
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                    Delete account
                </button>
            </div>

            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        Are you sure you want to delete your account?
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        Once your account is deleted, all of its resources and data will be permanently deleted
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="Password" class="sr-only" />

                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                            placeholder="Password" />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            Cancel
                        </x-secondary-button>

                        <x-danger-button class="ms-3">
                            Delete account
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </div>
    </div>
</section>
