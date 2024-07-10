<x-layout.main title="{{ $rune->ticker }} x Pizza Pets">
    <div class="relative isolate overflow-hidden">
        <canvas id="matrix" class="absolute -z-10 h-full w-full" aria-hidden="true"></canvas>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <h1 class="mt-10 text-2xl font-bold tracking-wider text-white sm:text-4xl">
                    HAVE AN EGGCELENT DAY!
                </h1>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="flex space-x-4 rounded-2xl bg-slate-900 p-2">
                    <img
                        src="{{ asset('https://pbs.twimg.com/tweet_video_thumb/GRlvQgbWEAATtMz.jpg') }}"
                        alt="This is EggCelent!"
                        width="240"
                        height="240"
                        class="w-[16rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    >
                    <img
                        src="{{ asset('images/bitcoin-pepe-matrix.gif') }}"
                        alt="{{ $rune->ticker }}"
                        width="240"
                        height="240"
                        class="w-[16rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    >
                </div>
            </div>
        </div>
    </div>
</x-layout.main>
