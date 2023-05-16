<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    <x-form.card>
        @include('users.post.partials.store-post')
    </x-form.card>
</x-app-layout>
