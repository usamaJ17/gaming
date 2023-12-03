<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="overflow-hidden shadow-sm sm:rounded-lg w-full max-w-7xl mt-0">
            <div class="flex items-center">
                {{-- Profile Image Section --}}
                <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 mr-2 text-center">
                    <div class="rounded-full overflow-hidden w-60 h-60 mx-auto mb-2">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="w-full h-full object-cover" />
                    </div>
                    <div class="text-white overflow-hidden mx-auto mb-2">
                        <h2 class="text-3xl font-bold">John Doe</h2>
                    </div>
                    <div class="text-white overflow-hidden mx-auto mb-2">
                        <span class="text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <div class="flex items-center justify-center mb-2 mt-4">
                        {{-- TreeTree Logo --}}
                        <a href="https://treetree.com" target="_blank" class="mr-4">
                            <img src="{{ asset('images/tweeter.png') }}" alt="TreeTree" class="w-8 h-8" />
                        </a>
                        {{-- Facebook Logo --}}
                        <a href="https://facebook.com" target="_blank">
                            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-8 h-8" />
                        </a>
                    </div>
                    <div class="text-white overflow-hidden mx-auto mb-2">
                        <div class="bg-white bg-opacity-10 p-2 rounded-lg">
                            <p class="text-lg font-bold text-white">
                                Follow
                                <span class="material-symbols-outlined inline-block align-middle">
                                    person_add
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                

                {{-- Right Part (70% width) --}}
                <div class="w-3/4 bg-opacity-80 rounded-xl p-6 rounded-r">
                    <div class="w-full bg-opacity-80 bg-black rounded-xl border-b border-yellow-600  p-6 relative">
                        <div class="text-white text-center overflow-hidden mx-auto mb-2">
                            <p class="text-2 font-bold">Recent match</p>
                        </div>
                        <div class="text-white overflow-hidden mx-auto mb-2 flex justify-between">
                            <p class="font-bold">Liverpool</p>
                            <p class="font-bold">2</p>
                        </div>
                        <div class="text-white overflow-hidden mx-auto mb-2 flex justify-between">
                            <p class="font-bold">Manchester City</p>
                            <p class="font-bold">1</p>
                        </div>
                    </div>
                
                    <div class="flex mt-4 space-x-2">
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-4 space-x-2">
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-4 space-x-2">
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-opacity-80 bg-black rounded-xl p-6 border-b border-yellow-600 relative">
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">VPG Level</p>
                            </div>
                            <div class="text-white text-center overflow-hidden mx-auto mb-2">
                                <p class="text-2 font-bold">200</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
