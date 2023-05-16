<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Post Lists') }}
            </h2>
        </div>
    </x-slot>
    @forelse($posts as $post)
    <div class="mt-2 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex justify-between">
            <span class="text-gray-400">
                Posted by: {{ $post->name }}
            </span>
            <span class="text-gray-300">
                {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
            </span>
        </div>
        <h3 class="text-gray-500">
            {{ $post->content }}
        </h3>
        @include('users.post.comment.partials.post-comment',['post' => $post ])

        <h3 class="font-bold font-mono mt-3 text-gray-500"> Comments </h3>
        @foreach($post->comments as $comment)
            <div class="flex justify-between mt-3">
                <span class="text-gray-400 mt-3">
                    {{ $comment->user->name .' - '. $comment->comment }}
                </span>
                <span class="text-gray-300">
                    {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                </span>
            </div>
            @foreach($comment->replies as $reply)
                <div class="flex justify-between mt-3 ml-3">
                    <span class="text-gray-400 mt-3">
                        {{ $comment->user->name .' - '. $reply->reply }}
                    </span>
                    <span class="text-gray-300">
                        {{ \Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}
                    </span>
                </div>
            @endforeach
            @include('users.post.comment.reply.store-reply', ['comment' => $comment])
        @endforeach
    </div>

    @empty
        <span class="text-gray-500 font-bold">
            No available post
        </span>
    @endforelse
</x-app-layout>
