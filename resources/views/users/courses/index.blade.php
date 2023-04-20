<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Courses') }}
            </h2>
            <x-form.link-button href="{{ route('dashboard') }}">
                {{ __('Back') }}
            </x-form.link-button>
        </div>
    </x-slot>

<section>
    <x-form.card>
        <div class="grid grid-cols-3 gap-3">
            @forelse($courses as $course)
              <x-form.card>
                <img class="w-full"
                style="float: left;
                width:  100px;
                height: 100px;
                margin-right:5px;
                background-size: cover;"
                src="{{ $course->image }}" alt="">
                <div class="px-6 py-3">
                    <div class="font-bold text-xl">
                        {{ $course->name }}
                    </div>
                  <p class="text-gray-700 text-base">
                    Enrollee
                  </p>
                  <p class="text-green-700 text-base">
                    {{ $course->student_capacity. '/'.$course->student_capacity }}
                  </p>
                  <p class="text-green-700 text-base">
                        GPA Requirement: {{ $course->gpa_requirement . '%'}}
                  </p>
                </div>
                <div class="px-3 pt-3 py-2 flex justify-end gap-3">
                    @if(auth()->user()->gpa_average <= $course->gpa_requirement)
                        <span class="text-red-500 p-2"> GPA Average not enough </span>
                    @else
                        <x-button variant="black"> Enroll Course </x-button>
                    @endif
                </div>
            </x-form.card>
            @empty
            @endforelse
        </div>
    </x-form.card>
</x-app-layout>
