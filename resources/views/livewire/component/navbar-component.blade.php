<div id='navbar'
    class="fixed w-full h-20  z-[100] bg-[#ecf0f3] dark:bg-gray-800 dark:text-white transition-colors duration-300">
    <div class="flex justify-between items-center w-full h-full px-2 2xl:px-16">
        <div class="flex ">
            <img src="{{ asset('img/logo.png') }}" class="w-14 mx-2">
            <button wire:ignore id="theme-toggle"
                class="dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-blue" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 " fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>



        <div>
            <ul class="hidden md:flex">
                <a href="#home">
                    <li class="ml-10 uppercase hover:border-b">Home</li>
                </a>
                <a href="#about">
                    <li class="ml-10 uppercase hover:border-b">About</li>
                </a>
                <a href="#skill">
                    <li class="ml-10 uppercase hover:border-b">skill</li>
                </a>
                <a href="#project">
                    <li class="ml-10 uppercase hover:border-b">project</li>
                </a>
                <a href="#contact">
                    <li class="ml-10 uppercase hover:border-b">contact</li>
                </a>
            </ul>

            <div class="md:hidden" wire:click='navOn'>
                <x-antdesign-menu-o class="w-10" />
            </div>

        </div>

    </div>
    <div
        class="md:hidden p-4 fixed top-0 ease-in duration-700 w-full h-full bg-gray-400 dark:bg-gray-700{{ $nav ? ' navopen' : ' navclose ' }}">
        <div class="">

            <div class="flex justify-between items-center w-full">
                <div class="flex ">
                    <img src="{{ asset('img/logo.png') }}" class="w-14 mx-2">
                    <button wire:ignore id="theme-toggle2"
                        class="dark:text-gray-200  hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon2" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon2" class="hidden w-5 h-5 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="rounded-full shadow-lg shadow-gray-400 p-1 cursor-pointer" wire:click='navOff'>
                    <x-antdesign-close-circle-o class="w-7" />
                </div>
            </div>
        </div>

        <div class="border-b py-3 mx-9 border-gray-400"></div>

        <div class="p-10 flex flex-col">
            <ul class="uppercase">
                <a href="#home">
                    <li class="py-4">Home</li>
                </a>
                <a href="#about">
                    <li class="py-4">About</li>
                </a>
                <a href="#skill">
                    <li class="py-4">skill</li>
                </a>
                <a href="#project">
                    <li class="py-4">project</li>
                </a>
                <a href="#contact">
                    <li class="py-4">contact</li>
                </a>
            </ul>

            <div class="pt-40">
                <p class="uppercase tracking-widest">Lets connect</p>
                <div class="flex items-center justify-between my-4 w-full m-auto sm:w-[80%]">
                    <div
                        class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                        <x-antdesign-linkedin class="w-7" />
                    </div>
                    <div
                        class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                        <x-antdesign-linkedin class="w-7" />
                    </div>
                    <div
                        class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                        <x-antdesign-linkedin class="w-7" />
                    </div>
                    <div
                        class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                        <x-antdesign-linkedin class="w-7" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        nav = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY >= 100) {
                nav.classList.add('shadow-xl')
            } else {
                nav.classList.remove('shadow-xl')
            }
        })

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');
        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });



        var themeToggleBtn2 = document.getElementById('theme-toggle2');

        var themeToggleDarkIcon2 = document.getElementById('theme-toggle-dark-icon2');
        var themeToggleLightIcon2 = document.getElementById('theme-toggle-light-icon2');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon2.classList.remove('hidden');
        } else {
            themeToggleDarkIcon2.classList.remove('hidden');
        }

        themeToggleBtn2.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon2.classList.toggle('hidden');
            themeToggleLightIcon2.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>
@endpush
