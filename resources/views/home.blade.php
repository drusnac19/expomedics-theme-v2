<x-layouts::frontend :title="__('Dashboard')">

    <section class="relative isolate overflow-hidden bg-sky-100">

        <svg viewBox="0 0 1024 1024"
             class="absolute left-1/2 top-1/2 -z-10 h-[72rem] w-[72rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
             aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7"></circle>
            <defs>
                <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                    <stop stop-color="#15b8a6"></stop>
                    <stop offset="1" stop-color="#15b8a6"></stop>
                </radialGradient>
            </defs>
        </svg>

        <img class="absolute inset-0 flex flex-col items-center justify-center left-0 bottom-0 -z-10" style="width: 350px" src="{{ asset('medic-banner.svg') }}" alt="">

        <div class="absolute left-[calc(50%-4rem)] top-0 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                 style="clip-path:polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>


        <div class="md:flex items-center justify-center sm:flex-col min-h-200 md:min-h-150 lg:min-h-180 ">
            <div class="max-w-full flex-shrink-0 text-center py-4 lg:mx-0 lg:max-w-3xl lg:py-8">
                <h1 class="text-5xl font-bold tracking-tight text-zinc-900 sm:text-6xl">
                    Europe’s largest <span class="text-sky-800">Medical</span> and Nursing <span class="text-sky-800">Career</span> Fairs
                </h1>

                <p class="mt-8 text-xl leading-8 text-gray-500">Connecting Healthcare Professionals with Employers Worldwide</p>

                <div class="mt-5 flex items-center justify-center gap-x-6 text-white">
                    <div class="size-full">
                        <h4>VISITORS</h4>
                        <p>I’d like to attend</p>
                        <flux:button icon="arrow-right">REGISTER NOW</flux:button>
                    </div>

                    <div class="size-full">
                        <h4>EMPLOYERS</h4>
                        <p>I’d like to exhibit</p>
                        <flux:button icon="arrow-right">RESERVE A STAND</flux:button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts::frontend>
