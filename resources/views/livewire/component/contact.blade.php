<div id='contact' class="w-full lg:h-screen  dark:bg-gray-800 dark:text-white transition-colors duration-300">
    <div class="max-w-[1240px] px-2 py-16 mx-auto">
        <p
            class="uppercase tracking-widest text-2xl bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-blue-400">
            Contact</p>
        <h3 class="py-4">Lebih dekat dengan saya</h3>
        <div class="grid lg:grid-cols-5 gap-8 ">

            <div
                class="col-span-3 lg:col-span-2  w-full h-full shadow-xl shadow-gray-500 rounded-xl p-4 bg-gradient-to-r from-purple-200 to-blue-100 dark:from-purple-400 dark:to-blue-300">
                <div class="h-full">
                    <div class="">

                        <img src="{{ asset('img/1.jpg') }}" class="rounded-xl group-hover:opacity-10">
                    </div>
                    <div>
                        <h3 class="py-2">Bagas Wihantoro</h3>
                        <p>fullstack dev</p>
                        <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, doloribus
                            architecto modi quos beatae officiis quam.</p>


                        <div class="flex items-center justify-between py-5 m-auto max-w-[330px]">
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

            <div
                class="col-span-3 w-full h-auto shadow-xl shadow-gray-500 rounded-xl lg:p-4 bg-gradient-to-r from-purple-200 to-blue-100 dark:from-purple-400 dark:to-blue-300">
                <div class="p-4">

                    @if($kirimsukses)
                    <div id="alert-1"
                        class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            Berhasil mengirim pesan <a href="#"
                                class="font-semibold underline hover:no-underline"></a>.
                        </div>
                    </div>
                    @endif

                    <form wire:submit.prevent='kirimpesan'>
                        <div class="flex flex-col py-2">
                            <label class="uppercase text-sm py-2">Nama</label>
                            <input type="text" class="rounded-lg border-2 p-3 flex border-gray-300"
                                wire:model='namaPengirim'>
                        </div>

                        <div class="flex flex-col py-2">
                            <label class="uppercase text-sm py-2">email</label>
                            <input type="text" class="rounded-lg border-2 p-3 flex border-gray-300"
                                wire:model='emailPengirim'>
                        </div>
                        <div class="flex flex-col py-2">
                            <label class="uppercase text-sm py-2">pesan</label>
                            <textarea type="text" class="rounded-lg border-2 p-3 flex border-gray-300" rows="10" wire:model='pesanPengirim'></textarea>
                        </div>
                        <button
                            class="w-full text-gray-100 uppercase p-4 mt-4
                        bg-gradient-to-r from-purple-500 to-blue-400 dark:from-purple-700 dark:to-blue-600 hover:scale-105 duration-300 ease-out rounded-xl">Kirim
                            Penan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
