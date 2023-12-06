<x-app-layout>
    <div class="relative h-screen">
        <div class="absolute inset-0">
            {{-- Background Image --}}
            <img src="{{ asset('images/background.jpg') }}" alt="Logged In Image" class="w-full h-full object-cover">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black opacity-70"></div>
        </div>
        
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                {{-- Logo --}}
                <img src="{{ asset('images/background-image.png') }}" alt="Logo" class="mx-auto mb-4 w-72 sm:w-96">

                {{-- Text --}}
                <div class="bg-white bg-opacity-20 p-4 rounded-lg">
                    <p class="text-lg font-bold text-white">
                        Start Your Career Now
                        <span class="material-symbols-outlined inline-block align-middle">
                            sports_soccer
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
