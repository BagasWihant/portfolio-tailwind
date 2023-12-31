<div class="flex justify-center sticky top-3 z-40">
    <div id='navbar'
        class="w-[95%] h-20 z-[100] backdrop-blur-lg transition-colors duration-300 dark:text-white text-gray-950 rounded-xl">
        <div class="flex justify-between items-center w-full h-full px-2 2xl:px-16">
            <div class="flex ">
                <div class="w-14 mx-2 ">
                    <img src="{{ asset('img/logo.png') }}"  class="hidden rounded-lg" id="logo-light">
                    <img src="{{ asset('img/dark.jpeg') }}" class="hidden rounded-lg"  id="logo-dark">
                </div>
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

                <div class="md:hidden" id='btnopen' onclick="navOn()">
                    <x-antdesign-menu-o class="w-10" />
                </div>

                <div class="md:hidden" id='btnclose' onclick='navOff()'>
                    <x-antdesign-close-circle-o class="w-10" />
                </div>

            </div>

        </div>
    </div>
    <div id='navbarDiv'
        class="md:hidden p-4 fixed top-0 ease-in duration-700 w-full h-full backdrop-blur-3xl dark:bg-white/5 bg-white/25 dark:text-white text-gray-950">

        <div class="flex flex-col justify-between h-full">
            <div class="px-10 pt-20 flex flex-col ">
                <ul class="uppercase" onclick='navOff()'>
                    <a href="#home">
                        <li class="py-4 font-bold ">Home</li>
                    </a>
                    <a href="#about">
                        <li class="py-4 font-bold">About</li>
                    </a>
                    <a href="#skill">
                        <li class="py-4 font-bold">skill</li>
                    </a>
                    <a href="#project">
                        <li class="py-4 font-bold">project</li>
                    </a>
                    <a href="#contact">
                        <li class="py-4 font-bold">contact</li>
                    </a>
                </ul>

            </div>
            <div class="">
                <p
                    class="uppercase tracking-widest font-extrabold bg-clip-text bg-gradient-to-r dark:text-white text-gray-950">
                    Lets connect</p>
                @include('livewire.component.sosmed')

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

        let statusNavbar = false;

        navbarDiv = document.getElementById('navbarDiv')
        btnopen = document.getElementById('btnopen')
        btnclose = document.getElementById('btnclose')

        document.addEventListener("DOMContentLoaded", () => {
            cek()
        });

        function cek() {
            console.log('navbar ' + statusNavbar);

            if (statusNavbar) {
                navbarDiv.classList.add('navopen')
                navbarDiv.classList.remove('navclose')

                btnclose.classList.remove('hidden')
                btnopen.classList.add('hidden')
            } else {
                btnopen.classList.remove('hidden')
                btnclose.classList.add('hidden')

                navbarDiv.classList.remove('navopen')
                navbarDiv.classList.add('navclose')
            }
        }

        function navOn() {
            statusNavbar = true;
            cek()

        }

        function navOff() {
            statusNavbar = false;
            cek()
        }

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var logodark = document.getElementById('logo-dark');
        var logolight = document.getElementById('logo-light');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            logolight.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            logodark.classList.remove('hidden');

        }

        var themeToggleBtn = document.getElementById('theme-toggle');
        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');
            logodark.classList.toggle('hidden');
            logolight.classList.toggle('hidden');

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
