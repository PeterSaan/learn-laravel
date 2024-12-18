<div class="card bg-base-300 shadow-xl mt-3">
    <div class="card-body">
        <form action="{{ route('comment.create', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="from-control w-full">
                <div class="label">
                    <span class="label-text">Add your comment</span>
                </div>
                <input type="text" name="body" placeholder="Comment here"
                    class="input input-bordered @error('title') input-error @enderror w-full">
                <div class="label">
                    @error('comment')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <div class="flex justify-end items-center">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>
