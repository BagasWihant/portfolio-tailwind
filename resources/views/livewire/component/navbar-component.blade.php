<div class="fixed w-full h-20 shadow-xl z-[100] bg-slate-300">
    <div class="flex justify-between items-center w-full h-full px-2 2xl:px-16">
        <img src="{{ asset('img/logo.png') }}" class="w-14">

        <div>
            <ul class="hidden md:flex">
                <a href="/">
                    <li class="ml-10 uppercase hover:border-b">Home</li>
                </a>
                <a href="/">
                    <li class="ml-10 uppercase hover:border-b">About</li>
                </a>
                <a href="/">
                    <li class="ml-10 uppercase hover:border-b">skill</li>
                </a>
                <a href="/">
                    <li class="ml-10 uppercase hover:border-b">project</li>
                </a>
                <a href="/">
                    <li class="ml-10 uppercase hover:border-b">cont act</li>
                </a>
            </ul>

            <div class="md:hidden" wire:click='navOn'>
                <x-antdesign-menu-o class="w-10" />
            </div>

        </div>

    </div>
    <div class="md:hidden  fixed top-0 ease-in-out duration-700 w-full h-full transform {{ $nav ? 'right-0  ' :'right-[-100%] ' }}">
        <div
            class="fixed top-0 p-4 ease-in-out duration-700 h-screen transform {{ $nav ? ' right-0  w-[75%] sm:w-[60%] md:w-[50%] bg-slate-50' :
                ' right-[-100%] '}} ">
            <div class="">

                <div class="flex justify-between items-center w-full">
                    <img src="{{ asset('img/logo.png') }}" class="w-14">
                    <div class="rounded-full shadow-lg shadow-gray-400 p-1 cursor-pointer" wire:click='navOff'>
                        <x-antdesign-close-circle-o class="w-7" />
                    </div>
                </div>
            </div>

            <div class="border-b py-3 mx-9 border-gray-400"></div>

            <div class="p-10 flex flex-col">
                <ul class="uppercase">
                    <a href="/">
                        <li class="py-4">Home</li>
                    </a>
                    <a href="/">
                        <li class="py-4">About</li>
                    </a>
                    <a href="/">
                        <li class="py-4">skill</li>
                    </a>
                    <a href="/">
                        <li class="py-4">project</li>
                    </a>
                    <a href="/">
                        <li class="py-4">cont act</li>
                    </a>
                </ul>

                <div class="pt-40">
                    <p class="uppercase tracking-widest">Lets connect</p>
                    <div class="flex items-center justify-between my-4 w-full m-auto sm:w-[80%]">
                        <div class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                            <x-antdesign-linkedin class="w-7" />
                        </div>
                        <div class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                            <x-antdesign-linkedin class="w-7" />
                        </div>
                        <div class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                            <x-antdesign-linkedin class="w-7" />
                        </div>
                        <div class="rounded-full shadow-lg shadow-gray-400 p-3 cursor-pointer hover:scale-105 ease-in-out duration-300">
                            <x-antdesign-linkedin class="w-7" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
