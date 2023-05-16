<section>
    <form method="post" action="{{ route('post.comment.reply.store',$comment) }}">
        @csrf
        <div class="flex justify-between mt-2">
            <x-form.input
                    id="reply"
                    name="reply"
                    type="text"
                    class="block w-full"
                    autocomplete="off"
                    placeholder="Reply here..."
                />
            <div class="flex items-center gap-4">
                <x-button class="rounded-none">
                    {{ __('Reply') }}
                </x-button>
            </div>
        </div>
    </form>
</section>
