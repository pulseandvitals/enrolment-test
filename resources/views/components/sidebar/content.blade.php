<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="My Collection"
        :active="Str::startsWith(request()->route()->uri(), 'collection')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink
            title="List"
            href="{{ route('collection.list') }}"
            :active="request()->routeIs('collection.list')"
        />
        <x-sidebar.sublink
            title="Create"
            href="{{ route('collection.create') }}"
            :active="request()->routeIs('collection.create')"
        />

    </x-sidebar.dropdown>

    <x-sidebar.dropdown
    title="Courses"
    :active="Str::startsWith(request()->route()->uri(), 'course')"
>
    <x-slot name="icon">
        <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
    </x-slot>
    <x-sidebar.sublink
        title="List"
        href="{{ route('course.list') }}"
        :active="request()->routeIs('collection.list')"
    />
    @if(auth()->user()->role == 'Admin')
    <x-sidebar.sublink
        title="Create"
        href="{{ route('course.create') }}"
        :active="request()->routeIs('collection.create')"
    />
    @endif

</x-sidebar.dropdown>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Dummy Links
    </div>


</x-perfect-scrollbar>
