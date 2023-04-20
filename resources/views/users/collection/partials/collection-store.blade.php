<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Post Collection') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Post any collection you want.") }}
        </p>
    </header>
    <div class="max-w-xl">
        <form
            method="post"
            action="{{ route('collection.store') }}"
            class="mt-6 space-y-6"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="space-y-2">
                <x-form.label
                    for="Title"
                    :value="__('Title')"
                />

                <x-form.input
                    id="title"
                    name="title"
                    type="text"
                    class="block w-full"
                    autofocus
                    autocomplete="off"
                />

                <x-form.error :messages="$errors->get('title')" />
            </div>

            <div class="space-y-2">
                <x-form.label
                    for="desc"
                    :value="__('Description')"
                />

                <x-form.input
                    id="description"
                    name="description"
                    type="text"
                    class="block w-full"
                    required
                    autocomplete="off"
                />
                <x-form.error :messages="$errors->get('description')" />
            </div>
            <div class="space-y-2">
                    <x-form.label
                        for="Genre"
                        :value="__('Genre')"
                    />

                    <x-form.input
                        id="genre"
                        name="genre"
                        type="text"
                        class="block w-full"
                        required
                        autocomplete="off"
                        placeholder="Example: Sports,Comedy.."
                    />

                <x-form.error :messages="$errors->get('genre')" />
            </div>
            <div class="space-y-2">
                <x-form.label
                    for="Files"
                    :value="__('Files')"
                />

                <x-form.input
                    name="files[]"
                    type="file"
                    class="block w-full"
                    required
                    multiple
                />

            <x-form.error :messages="$errors->get('files')" />
        </div>
            <div class="flex items-center gap-4">
                <x-button>
                    {{ __('Post Collection') }}
                </x-button>
                @if (session('status') === 'collection-stored')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-green-600 dark:text-gray-400"
                    >
                        {{ __('Stored') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
