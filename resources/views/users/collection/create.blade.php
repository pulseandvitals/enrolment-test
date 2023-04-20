<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <x-form.card>
        @include('users.collection.partials.collection-store')
    </x-form.card>
</x-app-layout>
