@if (session('status') === 'saved')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-green-600 dark:text-gray-400"
    >
        {{ __('Saved.') }}
    </p>
@endif
