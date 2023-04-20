<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Create Course') }}
        </h2>
    </x-slot>
    <x-form.card>
        @include('users.courses.partials.store-course')
    </x-form.card>
</x-app-layout>
