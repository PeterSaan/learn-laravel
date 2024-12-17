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

            <div class="flex justify-end items-center mt-2">
                <button class="btn btn-secondary" onclick="deletion_form.showModal()">
                    Delete account
                </button>
            </div>

            <dialog id="deletion_form" name="confirm-user-deletion" :show="$errors - > userDeletion - > isNotEmpty()"
                class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h2 class="text-lg font-bold">
                        Are you sure you want to delete your account?
                    </h2>

                    <p class="py-4 text-sm">
                        Once your account is deleted, all of its resources and data will be permanently deleted
                    </p>
                    <div class="">
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 mt-6">
                            @csrf
                            @method('delete')



                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Confirm your password</span>

                                </div>
                                <input name="conf-pass" type="password" placeholder="Your current password"
                                    class="input input-bordered @error('conf-pass') input-error @enderror w-full" />
                                <div class="label">
                                    @error('conf-pass')
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </label>

                            <div class="flex justify-between items-center my-4">
                                <button type="button" class="btn btn-neutral" onclick="deletion_form.close()">
                                    Cancel
                                </button>
                                <button class="btn btn-secondary">
                                    Delete account
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </dialog>
        </div>
    </div>
</section>
