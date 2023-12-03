<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-0 relative"> {{-- Set py-0 to remove vertical padding, and add relative for positioning --}}
        <div class="sm:px-0 lg:px-0 relative"> {{-- Set px-0 to remove horizontal padding --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                {{-- Add an overlay with a black background --}}
                <div class="absolute inset-0 bg-black opacity-70"></div>
                <div class="p-0 text-gray-900 dark:text-gray-100 relative z-10"> {{-- Set p-0 to remove padding --}}
                    <img src="{{ asset('images/background.jpg') }}" alt="Logged In Image" class="w-full">
                    {{-- Centered logo and text --}}
                    <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                        {{-- Logo --}}
                        <img src="{{ asset('images/background-image.png') }}" alt="Logo" class="mx-auto mb-4 w-72 sm:w-96">
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
        </div>
    </div>
</x-app-layout>
