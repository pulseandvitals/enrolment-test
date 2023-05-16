<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Create Post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Post whats on your mind.") }}
        </p>
    </header>
    <div class="max-w-xl">
        <form
            method="post"
            action="{{ route('post.store') }}"
            class="mt-6 space-y-6"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="space-y-2">
                <x-form.label
                    for="Title"
                    :value="__('Enter your Name')"
                />

                <x-form.input
                    id="name"
                    name="name"
                    type="text"
                    class="block w-full"
                    autofocus
                    autocomplete="off"
                />

                <x-form.error :messages="$errors->get('name')" />
            </div>

            <div class="space-y-2">
                <x-form.label
                    for="Content"
                    :value="__('Content')"
                />

                <x-form.input
                    id="content"
                    name="content"
                    type="text"
                    class="block w-full"
                    required
                    autocomplete="off"
                />
                <x-form.error :messages="$errors->get('content')" />
            </div>
            <div class="flex items-center gap-4">
                <x-button>
                    {{ __('Post') }}
                </x-button>
            </div>
        </form>
    </div>
</section>
