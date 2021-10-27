<div class="grid grid-cols-9 w-full">
    <div class="flex flex-col justify-center col-span-4 max-w-7xl">
        <div class="flex flex-col pl-16 tracking-tight font-extrabold">
            <span
                class="block xl:inline
                text-6xl md:text-7xl lg:text-8xl
                font-extrabold text-blue-600"
            >Streamline</span>
            <span
                class="block xl:inline
                text-4xl sm:text-5xl md:text-6xl
                font-extrabold text-gray-500"
            >your entire workflow.</span>
            <div class="flex w-full mt-6 space-x-4">
                <a href="{{ route('register') }}"
                class="px-4 py-2
                text-lg md:text-xl lg:text-2xl
                text-white font-medium
                bg-blue-500 hover:bg-blue-600
                transition-colors duration-250
                rounded-full"
                >Get Started</a>
                <a href="{{ route('login') }}"
                class="px-4 py-2
                text-lg md:text-xl lg:text-2xl
                text-black font-medium
                bg-gray-200 hover:bg-gray-300
                transition-colors duration-250
                rounded-full"
                >Log in</a>
            </div>
        </div>
    </div>
    <div class="col-span-5">
        <img
            src="{{ asset('img/home/proj_manager.svg') }}"
            class="w-auto"
            alt="Hero Image"
        >
    </div>
</div>
