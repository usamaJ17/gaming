<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex">
        <!-- Sidebar with Search Bar -->
        <div class="w-1/6 bg-gray-800 text-white p-2">
            <!-- Search Bar -->
            <br>
            <input type="text" placeholder="Search" class="pl-8 pr-2 py-2 border bg-gray-700 rounded mb-4 text-gray-100 w-48">
            <!-- Green Card -->
            <div class="tweet-embed">
                <!-- Example: -->
                <blockquote class="twitter-tweet" data-lang="en" data-theme="dark"><p lang="en" dir="ltr">Great to have Jensen Huang from <a href="https://twitter.com/nvidia?ref_src=twsrc%5Etfw">@nvidia</a> on stage today, as we announced our expanded collaboration to deliver GPU-based solutions. <a href="https://twitter.com/awscloud?ref_src=twsrc%5Etfw">@awscloud</a> will be the first provider to bring NVIDIA GH200 Grace Hopper Superchips with new multi-node NVLink technology to the cloud. Plus, our… <a href="https://t.co/gCHvknTegh">pic.twitter.com/gCHvknTegh</a></p>&mdash; Adam Selipsky (@aselipsky) <a href="https://twitter.com/aselipsky/status/1729689359568499180?ref_src=twsrc%5Etfw">November 29, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br>
            
            
            <!-- Chat Banners -->
            @for ($i = 1; $i <= 10; $i++)
                <div class="relative flex items-center mb-2">
                    <!-- User Avatar -->
                    <img src="{{ asset('images/user_av.jpg') }}" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
            
                    <!-- Badge with Number -->
                    <div class="absolute top-0 right-0 bg-blue-500 text-white rounded-full h-4 w-4 flex items-center justify-center">
                        <span class="text-xs">{{ $i }}</span>
                    </div>
            
                    <!-- User Details -->
                    <div>
                        <p class="text-white font-bold">User Name</p>
                        <p class="text-gray-300 text-sm">Correct picks: 37 out of 71</p>
                    </div>
                </div>
            @endfor
        
        </div>
    
        <!-- Main Content Area -->
        <div class="">
            <div class="py-6 max-w-full mx-auto sm:px-1 lg:px-2">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Replace "You're logged in!" with an image -->
                    <div class="flex items-center justify-between mb-4">
                        <!-- Replace the URL inside src attribute with the actual image URL -->
                        <img src="{{ asset('images/banner.jpg') }}" alt="Custom Image" class="w-full h-auto rounded">
                    </div>
                </div>
            </div>
            <div class="max-w-full mx-auto sm:px-1 lg:px-2 flex justify-between">

                <!-- Image 1 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <img src="{{ asset('images/1.jpg') }}" alt="Image 1" class="w-full h-auto rounded">
                </div>
            
                <!-- Image 2 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <img src="{{ asset('images/2.jpg') }}" alt="Image 2" class="w-full h-auto rounded">
                </div>
            
                <!-- Image 3 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <img src="{{ asset('images/3.jpg') }}" alt="Image 3" class="w-full h-auto rounded">
                </div>
            
                <!-- Image 4 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <img src="{{ asset('images/1.jpg') }}" alt="Image 4" class="w-full h-auto rounded">
                </div>
            
            </div>

            <!-- New Menu Section with Styled Items -->
<div class="max-w-full mx-auto sm:px-1 lg:px-2 mt-4 flex justify-center">

    <!-- Menu Item 1 -->
    <div class="cursor-pointer mx-4">
        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 1</a>
    </div>

    <!-- Menu Item 2 -->
    <div class="cursor-pointer mx-4">
        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 2</a>
    </div>

    <!-- Menu Item 3 -->
    <div class="cursor-pointer mx-4">
        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 3</a>
    </div>

    <!-- Menu Item 4 -->
    <div class="cursor-pointer mx-4">
        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 4</a>
    </div>

</div>

            
        </div>
    </div>
    
</x-app-layout>
