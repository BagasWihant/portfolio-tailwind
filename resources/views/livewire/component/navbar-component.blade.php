<div class="flex justify-center sticky top-3 z-40">
<div id='navbar'
    class="w-[95%] h-20 z-[100] backdrop-blur-lg transition-colors duration-300 dark:text-white text-gray-950 rounded-xl">
    <div class="flex justify-between items-center w-full h-full px-2 2xl:px-16">
        <div class="flex ">
            <img src="{{ asset('img/logo.png') }}" class="w-14 mx-2 rounded-lg">
        </div>    

        <div>
            <ul class="hidden md:flex">
                <a href="#home">
                    <li class="ml-10 uppercase font-bold hover:border-b ">Home</li>
                </a>
                <a href="#about">
                    <li class="ml-10 uppercase font-bold hover:border-b ">About</li>
                </a>
                <a href="#skill">
                    <li class="ml-10 uppercase font-bold hover:border-b">skill</li>
                </a>
                <a href="#project">
                    <li class="ml-10 uppercase font-bold hover:border-b">project</li>
                </a>
                <a href="#contact">
                    <li class="ml-10 uppercase font-bold hover:border-b">contact</li>
                </a>
            </ul>

            @if(!$nav)
            <div class="md:hidden" wire:click='navOn'>
                <x-antdesign-menu-o class="w-10" />
            </div>
            @else
            <div class="md:hidden" wire:click='navOff'>
                <x-antdesign-close-circle-o class="w-10" />
            </div>
            @endif
        </div>

    </div>
</div>
<div
    class="md:hidden p-4 fixed top-0 ease-in duration-700 w-full h-full bg-gray-200 dark:bg-gray-700{{ $nav ? ' navopen' : ' navclose ' }}">
    <div class="">

        <div class="flex justify-between items-center w-full">
            <div class="flex ">
                <img src="{{ asset('img/logo.png') }}" class="w-14 mx-2">
            </div>
            <div class="rounded-full shadow-lg shadow-gray-400 p-1 cursor-pointer" wire:click='navOff'>
                <x-antdesign-close-circle-o class="w-7" />
            </div>
        </div>
    </div>

    <div class="border-b py-3 mx-9 border-gray-400"></div>

    <div class="p-10 flex flex-col dark:text-white text-gray-950">
        <ul class="uppercase" wire:click='navOff'>
            <a href="#home">
                <li class="py-4 ">Home</li>
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
            <p class="uppercase tracking-widest font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-blue-400">Lets connect</p>
            <!-- <div class="flex items-center justify-between my-4 w-full m-auto sm:w-[80%]">
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
            </div> -->

            <div class="flex items-center justify-between py-5 m-auto max-w-[330px]">
                <a href="https://id.linkedin.com/in/bagas-wihantoro-2a489b219" class="rounded-full shadow-lg shadow-gray-600 p-3 cursor-pointer hover:scale-105 hover:bg-gradient-to-r  hover:to-blue-600 hover:from-purple-500 ease-in-out duration-300">
                    <x-antdesign-linkedin class="w-7" />
                </a>
                <a href="https://facebook.com/bagas.wihant"  class="rounded-full shadow-lg shadow-gray-600 p-3 cursor-pointer hover:scale-105  hover:bg-gradient-to-r  hover:to-blue-600 hover:from-purple-500 ease-in-out duration-300">
                    <x-antdesign-facebook class="w-7" />
                </a>
                <a href="https://instagram.com/bagaswihant"  class="rounded-full shadow-lg shadow-gray-600 p-3 cursor-pointer hover:scale-105  hover:bg-gradient-to-r  hover:to-blue-600 hover:from-purple-500 ease-in-out duration-300">
                    <x-antdesign-instagram-o class="w-7" />
                </a>
                <a href="mailto:bagaswihant@gmail.com" class="rounded-full shadow-lg shadow-gray-600 p-3 cursor-pointer hover:scale-105  hover:bg-gradient-to-r  hover:to-blue-600 hover:from-purple-500 ease-in-out duration-300">
                    <x-antdesign-mail-o class="w-7" />
                </a>
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

    </script>
@endpush
