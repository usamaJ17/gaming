<x-app-layout>
    <div class="relative h-screen">
        <div class="absolute inset-0">
            {{-- Background Image --}}
            <img src="{{ asset('images/background.jpg') }}" alt="Logged In Image" class="w-full h-full object-cover">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black opacity-20"></div>
        </div>
        
        <div class="absolute inset-0 p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:grid-cols-2 lg:grid-cols-2 mt-4 xl:grid-cols-2">
                {{-- Four Elements --}}
                <div class="bg-gray-300 bg-opacity-50 p-4 rounded h-32 sm:h-52 lg:h-65 xl:h-80 relative">
                    <p class="text-white uppercase italic absolute top-3 left-3 text-sm sm:text-lg md:text-lg lg:text-lg xl:text-lg" style="font-family: 'Oswald', sans-serif;">Settings</p>
                    <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2 text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl">
                        settings
                    </span>
                </div>
                <div class="bg-gray-300 bg-opacity-50 p-4 rounded h-32 sm:h-52 lg:h-65 xl:h-80 relative">
                    <p class="text-white uppercase italic absolute top-3 left-3 text-sm sm:text-lg md:text-lg lg:text-lg xl:text-lg" style="font-family: 'Oswald', sans-serif;">Settings</p>
                    <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2 text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl">
                        settings
                    </span>
                </div>
                <div class="bg-gray-300 bg-opacity-50 p-4 rounded h-32 sm:h-52 lg:h-65 xl:h-80 relative">
                    <p class="text-white uppercase italic absolute top-3 left-3 text-sm sm:text-lg md:text-lg lg:text-lg xl:text-lg" style="font-family: 'Oswald', sans-serif;">Settings</p>
                    <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2 text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl">
                        settings
                    </span>
                </div>
                <a href="/user-profile" class="bg-gray-300 bg-opacity-50 p-4 rounded h-32 sm:h-52 lg:h-65 xl:h-80 relative">
                    <p class="text-white uppercase italic absolute top-3 left-3 text-sm sm:text-lg md:text-3xl lg:text-4xl xl:text-6xl" style="font-family: 'Oswald', sans-serif;">Settings</p>
                    <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2 text-4xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-10xl">
                        settings
                    </span>
                </a>
                <!-- Repeat similar adjustments for other three elements -->
                <!-- ... -->
            </div>
        </div>
    </div>
</x-app-layout>
