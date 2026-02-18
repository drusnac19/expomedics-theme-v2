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

    <div class="container lg:px-10 mx-auto flex flex-col lg:flex-row justify-between items-center py-10 min-h-[400px] ">

        <div class="flex flex-col justify-evenly shrink-2 size-full self-center mb-10 lg:mb-0">
            <h2 class="text-4xl mb-3 font-semibold">Choose your sector</h2>
            <p class="text-md mb-3">Develop your career and work in one of the <br>best medical systems in the world.</p>
            <span>
                <flux:button icon="arrow-right" variant="filled" color="sky">See all jobs</flux:button>
            </span>
        </div>

        <div class=" min-h-60 shrink-1 size-full self-center">
            <div class="grid grid-rows-2 md:grid-rows-2 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-1">

                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=doctors">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/024-stethoscope.svg" alt="">
                    </div>
                    <h6 class="font-medium">DOCTORS</h6>
                    <span class="text-sm text-gray-400">914 jobs </span>
                </a>

                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=physiotherapists">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/013-pill.svg" alt="">
                    </div>
                    <h6 class="font-medium">PHYSIOTHERAPISTS</h6>
                    <span class="text-sm text-gray-400">15 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=ahps">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/045-medical book.svg" alt="">
                    </div>
                    <h6 class="font-medium">AHPs</h6>
                    <span class="text-sm text-gray-400">22 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=dentists">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/021-tooth.svg" alt="">
                    </div>
                    <h6 class="font-medium">DENTISTS</h6>
                    <span class="text-sm text-gray-400">70 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=nurses">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/022-injection.svg" alt="">
                    </div>
                    <h6 class="font-medium">NURSES</h6>
                    <span class="text-sm text-gray-400">110 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=midwifes">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/008-shield.svg" alt="">
                    </div>
                    <h6 class="font-medium">Midwifes</h6>
                    <span class="text-sm text-gray-400">3 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=pharmacists">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/008-pill.svg" alt="">
                    </div>
                    <h6 class="font-medium">Pharmacists</h6>
                    <span class="text-sm text-gray-400">15 jobs </span>
                </a>
                <a class="aspect-3/2 border-1 border-gray-50 sm:aspect-square flex flex-col items-center justify-center bg-gray-50 text-center hover:shadow-lg hover:scale-102 transition-all" href="https://expomedics.com/jobs?category=carers">
                    <div class="category-icon mb-4">
                        <img class="size-8 md:size-10 lg:size:12" src="https://expomedics.com/storage/icons/svg/020-heart.svg" alt="">
                    </div>
                    <h6 class="font-medium">CARERS</h6>
                    <span class="text-sm text-gray-400">5 jobs </span>
                </a>
            </div>
        </div>
    </div>


    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="w-full">
                <div class="sm:hidden">
                    <select aria-label="Select a tab" class="w-full appearance-none rounded-lg border-none bg-white px-3.5 py-2.5 text-base font-medium text-gray-900 shadow-sm outline outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-pink-500 focus:ring-0">
                        <option>Overview</option>
                        <option selected="">Analytics</option>
                        <option>Profile</option>
                        <option>Notifications</option>
                        <option>Plan</option>
                        <option>Settings</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav aria-label="Tabs" class="-mb-px flex items-end gap-x-8">
                            <a href="#" class="inline-flex border-b-2 border-transparent px-1 py-3.5 text-sm font-semibold text-gray-500 hover:border-gray-300 hover:text-gray-700">Overview</a>
                            <a href="#" aria-current="page" class="inline-flex border-b-2 border-pink-500 px-1 py-3.5 text-sm font-semibold text-pink-500">Analytics</a>
                            <a href="#" class="inline-flex border-b-2 border-transparent px-1 py-3.5 text-sm font-semibold text-gray-500 hover:border-gray-300 hover:text-gray-700">Profile</a>
                            <a href="#" class="inline-flex border-b-2 border-transparent px-1 py-3.5 text-sm font-semibold text-gray-500 hover:border-gray-300 hover:text-gray-700">Notifications</a>
                            <a href="#" class="inline-flex border-b-2 border-transparent px-1 py-3.5 text-sm font-semibold text-gray-500 hover:border-gray-300 hover:text-gray-700">Plan</a>
                            <a href="#" class="inline-flex border-b-2 border-transparent px-1 py-3.5 text-sm font-semibold text-gray-500 hover:border-gray-300 hover:text-gray-700">Settings</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="min-h-[1000px]"></div>
</x-layouts::frontend>
