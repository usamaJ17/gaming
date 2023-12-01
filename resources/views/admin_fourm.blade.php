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
        <div class="w-2/3">
            <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</x-app-layout>
