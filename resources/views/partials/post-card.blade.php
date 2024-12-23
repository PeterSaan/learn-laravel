<div class="card bg-base-300 shadow-xl">
    @if ($post->displayImage)
        <figure>
            <img src="{{ $post->displayImage }}" alt="Shoes" />
        </figure>
    @endif
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        @if (isset($full) && $full)
            <p>{!! nl2br($post->body) !!}</p>
        @else
            <p>{{ $post->snippet }}</p>
        @endif
        <p class="text-neutral-content">Comments: {{ $post->comments()->count() }}</p>
        <p class="text-neutral-content">Likes: {{ $post->likes()->count() }}</p>
        <p class="text-neutral-content">Posted by: {{ $post->user->name }}</p>
        <p class="text-neutral-content">{{ $post->created_at->diffForHumans() }}</p>
        <div class="card-actions justify-end">
            @if (!isset($full) || !$full)
                <a class="btn btn-accent" href="{{ route('post', ['post' => $post]) }}">Read more</a>
            @endif
        </div>
    </div>
</div>
