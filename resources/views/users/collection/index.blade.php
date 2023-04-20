<x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl leading-tight">
                    {{ __('My Collections') }}
                </h2>
                <x-form.link-button href="{{ route('dashboard') }}">
                    {{ __('Back') }}
                </x-form.link-button>
            </div>
        </x-slot>

    <section>
        <x-form.card>
            <div class="grid grid-cols-3 gap-4">
                @foreach($collections as $collection)
                  <x-form.card>
                    <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                  </x-form.card>
                @endforeach
            </div>
        </x-form.card>
    </section>
</x-app-layout>
