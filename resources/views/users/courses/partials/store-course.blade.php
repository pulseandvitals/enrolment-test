<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Create Courses') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Details of courses you want to store.") }}
        </p>
    </header>
    <div class="max-w-xl">
        <form
            method="post"
            action="{{ route('course.store') }}"
            class="mt-6 space-y-6"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="space-y-2">
                <x-form.label
                    for="Title"
                    :value="__('Course Title')"
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
                    for="desc"
                    :value="__('GPA Average Requirement (%)')"
                />

                <x-form.input
                    id="gpa_requirement"
                    name="gpa_requirement"
                    type="number"
                    class="block w-full"
                    required
                    autocomplete="off"
                />
                <x-form.error :messages="$errors->get('gpa_requirement')" />
            </div>
            <div class="space-y-2">
                    <x-form.label
                        for="student_capacity"
                        :value="__('Enrolment Capacity')"
                    />

                    <x-form.input
                        id="student_capacity"
                        name="student_capacity"
                        type="number"
                        class="block w-full"
                        required
                        autocomplete="off"
                    />

                <x-form.error :messages="$errors->get('student_capacity')" />
            </div>
            <div class="space-y-2">
                <x-form.label
                    for="Requires schoolarship?"
                    :value="__('Requires Schoolarship?')"
                />

                <x-form.input
                    name="requires_scholarship"
                    type="checkbox"
                    class="block"
                    autocomplete="off"
                />

            <x-form.error :messages="$errors->get('requires_scholarship')" />
        </div>
            <div class="space-y-2">
                <x-form.label
                    for="Files"
                    :value="__('Image or Background')"
                />

                <x-form.input
                    name="image"
                    type="file"
                    class="block w-full"
                    required
                />

            <x-form.error :messages="$errors->get('image')" />
        </div>
            <div class="flex items-center gap-4">
                <x-button>
                    {{ __('Post Course') }}
                </x-button>
                @if (session('status') === 'store-course')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-green-600 dark:text-gray-400"
                    >
                        {{ __('New Course Stored') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
