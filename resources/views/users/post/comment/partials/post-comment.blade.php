<section>
    <form method="post" action="{{ route('post.comment.store',$post) }}">
        @csrf
        <div class="flex justify-between mt-2">
            <x-form.input
                    id="comment"
                    name="comment"
                    type="text"
                    class="block w-full"
                    autocomplete="off"
                    placeholder="Comment here..."
                />
            <div class="flex items-center gap-4">
                <x-button class="rounded-none">
                    {{ __('Comment') }}
                </x-button>
            </div>
        </div>
    </form>
</section>
