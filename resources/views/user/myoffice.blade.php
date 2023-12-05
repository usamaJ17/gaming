<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-0 relative">
        <div class="sm:px-0 lg:px-0 relative">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                {{-- Add an overlay with a black background --}}
                
                <div class="p-0 text-gray-900 dark:text-gray-100 relative z-10">
                    <img src="{{ asset('images/background.jpg') }}" alt="Logged In Image" class="w-full">
                    <div class="absolute inset-0 bg-black opacity-20"></div>
                    {{-- Two Rows --}}
                    <div class="grid grid-cols-2 gap-20 absolute inset-0 m-20">
                        {{-- First Row --}}
                        <div class="col-span-2 sm:col-span-1 bg-gray-300 bg-opacity-50 p-4 rounded relative">
                            <p class="text-white uppercase italic absolute top-3 left-3" style="font-family: 'Oswald', sans-serif;">Settings</p>
                            <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2">
                                settings
                            </span>
                        </div>
                        <div class="col-span-2 sm:col-span-1 bg-gray-300 bg-opacity-50 p-4 rounded relative">
                            <p class="text-white uppercase italic absolute top-3 left-3" style="font-family: 'Oswald', sans-serif;">Settings</p>
                            <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2">
                                settings
                            </span>
                        </div>
                        <div class="col-span-2 sm:col-span-1 bg-gray-300 bg-opacity-50 p-4 rounded relative">
                            <p class="text-white uppercase italic absolute top-3 left-3" style="font-family: 'Oswald', sans-serif;">Settings</p>
                            <span class="material-symbols-outlined absolute bottom-7 right-3 mb-2">
                                settings
                            </span>
                        </div>
                        <a href="/user-profile" class="col-span-2 sm:col-span-1 bg-gray-300 bg-opacity-50 p-4 rounded relative block">
                            <p class="text-white uppercase italic text-5xl absolute top-3 left-3" style="font-family: 'Oswald', sans-serif;">Settings</p>
                            <span class="material-symbols-outlined text-9xl absolute bottom-7 right-3 mb-2">
                                settings
                            </span>
                        </a>
                                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
