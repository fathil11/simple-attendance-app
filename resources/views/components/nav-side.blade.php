<div class="hidden w md:flex md:w-1/6">
    <div class="fixed flex w-1/6 flex-col h-screen bg-white dark:bg-gray-800 justify-between">
        {{-- Logo --}}
        <div>
            <div class="flex justify-center bg-gray-200 dark:bg-gray-200">
                <img class="px-20 py-10 h-auto"
                    src="https://static.wixstatic.com/media/70a07f_ca7d4aba5d1a4ff5ba1c2246dbe340fb~mv2.png/v1/fill/w_294,h_120,al_c,q_85,usm_0.66_1.00_0.01/logo_12.webp"
                    alt="">
            </div>

            <div class="flex-col w-full p-2 mt-4">
                <button id="theme-toggle" type="button" class=" text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                <a href="{{ route('dashboard') }}"
                    class="mt-4 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('employee.index') }}"
                    class=" mt-1 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                    Karyawan
                </a>

                <div x-data="{dropdownOpen:false}">
                    <button @click="dropdownOpen = !dropdownOpen"
                        class=" mt-1 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                            </path>
                        </svg>
                        Statistik
                    </button>

                    {{-- Statistics Dropdown Menu --}}
                    <div class="" :class="{'hidden':!dropdownOpen, 'flex flex-col':dropdownOpen}">
                        <a href=""
                            class=" mt-1 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6 ml-4 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Dashboard
                        </a>

                        <a href=""
                            class=" mt-1 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6 ml-4 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Dashboard
                        </a>

                        <a href=""
                            class=" mt-1 flex p-2 w-full rounded-lg text-lg font-medium text-gray-700 rounded-t-lg hover:text-black hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6 ml-4 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Account --}}

        <div class="border-t-2 border-gray-200 dark:border-gray-600 p-4 flex flex-row justify-around text-black dark:text-gray-300">
            <div
                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-full w-full rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </div>
            <div class="flex flex-col self-center p-2">
                <h1>{{ Auth::user()->name }}</h1>
                <h1>{{ Auth::user()->email }}</h1>
            </div>
            <div class="flex">
                <a href="" class="p-2 border-2 border-gray-200 dark:border-gray-600 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-md flex items-center">Logout</a>
            </div>
        </div>
    </div>
</div>
