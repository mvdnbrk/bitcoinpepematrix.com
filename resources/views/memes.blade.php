<x-layout>
    <div class="flex mt-16 sm:mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">
            {{ config('rune.ticker') }} <span class="pl-4 text-green-500">MEMES</span>
        </h1>
    </div>

    <div class="mt-16 sm:mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($files as $file)
            <a href="{{ asset($file) }}" target="_blank">
                <img
                    src="{{ asset($file) }}"
                    class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                >
            </a>
            @endforeach
        </div>
    </div>
</x-layout>
