<x-app-layout>
    <div class="flex flex-col sm:flex-row">
        <!-- Sidebar with Search Bar -->
        <div class="w-full sm:w-1/5 bg-gray-800 text-white p-2">
            <!-- Search Bar -->
            <br>
            <input type="text" placeholder="Search" class="pl-8 pr-2 py-2 border bg-gray-700 rounded mb-4 text-gray-100 w-full sm:w-48">
            
            <!-- Green Card -->
            <div class="tweet-embed">
                <!-- Example: Twitter Embed -->
                <blockquote class="twitter-tweet" data-lang="en" data-theme="dark">
                    <p lang="en" dir="ltr">Great to have Jensen Huang from <a href="https://twitter.com/nvidia?ref_src=twsrc%5Etfw">@nvidia</a> on stage today, as we announced our expanded collaboration to deliver GPU-based solutions. <a href="https://twitter.com/awscloud?ref_src=twsrc%5Etfw">@awscloud</a> will be the first provider to bring NVIDIA GH200 Grace Hopper Superchips with new multi-node NVLink technology to the cloud. Plus, our… <a href="https://t.co/gCHvknTegh">pic.twitter.com/gCHvknTegh</a></p>&mdash; Adam Selipsky (@aselipsky) <a href="https://twitter.com/aselipsky/status/1729689359568499180?ref_src=twsrc%5Etfw">November 29, 2023</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br>
            
            <!-- Chat Banners -->
            @for ($i = 1; $i <= 10; $i++)
                <!-- User Banner -->
                <div class="flex items-center mb-2">
                    <!-- User Avatar -->
                    <img src="{{ asset('images/user_av.jpg') }}" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
            
                    <!-- User Details -->
                    <div class="flex-grow">
                        <p class="text-white font-bold">User Name</p>
                        <p class="text-gray-300 text-xs">Correct picks: 37 out of 71</p>
                    </div>

                    <!-- Badge with Number -->
                    <div class="bg-blue-500 text-white rounded-full h-4 w-4 flex items-center justify-center">
                        <span class="text-xs">{{ $i }}</span>
                    </div>
                </div>
            @endfor
        </div>
    
        <!-- Main Content Area -->
        <div class="w-full sm:w-4/5">
            <div class="py-6 max-w-full mx-auto sm:px-2 lg:px-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Image 1 -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2 mb-4">
                        <img src="{{ asset('images/banner.jpg') }}" alt="Custom Image" class="w-full h-auto rounded">
                    </div>
                    
                    <!-- Image Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-1">
                        <!-- Repeat similar adjustments for other three images -->
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-1">
                            <img src="{{ asset('images/1.jpg') }}" alt="Image 1" class="w-full h-auto rounded">
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-1">
                            <img src="{{ asset('images/2.jpg') }}" alt="Image 1" class="w-full h-auto rounded">
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-1">
                            <img src="{{ asset('images/3.jpg') }}" alt="Image 1" class="w-full h-auto rounded">
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-1">
                            <img src="{{ asset('images/1.jpg') }}" alt="Image 1" class="w-full h-auto rounded">
                        </div>
                        <!-- ... -->
                    </div>
                </div>
                <div class="max-w-full mx-auto sm:px-2 lg:px-4 mt-4 flex justify-center">
                    <!-- Repeat similar adjustments for other menu items -->
                    <div class="cursor-pointer mx-4">
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 1</a>
                    </div>
                    <div class="cursor-pointer mx-4">
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 1</a>
                    </div>
                    <div class="cursor-pointer mx-4">
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 1</a>
                    </div>
                    <div class="cursor-pointer mx-4">
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 transition duration-300">Item 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
