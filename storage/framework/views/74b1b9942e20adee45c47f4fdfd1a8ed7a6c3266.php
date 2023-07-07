<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<div class="max-w-auto mx-auto sm:px-6 lg:px-8 dark:bg-gray-500">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-200 ">
            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                    <h1 class="text-4xl font-bold tracking-tight text-gray900">Keranjang Destination</h1>
                </div>
                <section>
                    <div class="flex justify-around md:justify-around py-5">
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-6">

                            <!-- =============== CONTENT 1 ============== -->
                            <div class="font-sans pt-8 border-slate-200">
                                <div class="max-w-sm">
                                    <div class="">
                                        <img src="https://i.pinimg.com/564x/0d/3f/5e/0d3f5ea58c5828162a193e43468c1f6f.jpg"
                                            alt="" class="md:h-80 md:w-56 inset-0 object-cover rounded-lg"
                                            loading="lazy" />
                                    </div>
                                    <form class="pt-6">
                                        <div class="flex flex-wrap">
                                            <h1 class="flex font-medium text-slate-900">
                                                Kecak Fire Gianyar
                                            </h1>

                                        </div>
                                        <p class="text-sm text-slate-500">
                                            Family
                                        </p>
                                        <div class="w-full flex-none order-1 text-3xl fontbold text-violet-600">
                                            -Rp. 100.000-
                                        </div>
                                        <button
                                            class="flex-auto h-10 px-6 my-20 font-semibold rounded-full text-slate-200 border border-slate-500 dark:text-white hover:bg-violet-800 hover:border-none">
                                            Masukkan Keranjang
                                        </button>

                                    </form>
                                </div>
                            </div>
                            <!-- =============== CONTENT 2 ============== -->
                            <div class="font-sans pt-8 border-slate-200">
                                <div class="max-w-sm">
                                    <div class="md:shrink-0">
                                        <img src="https://i.pinimg.com/564x/ed/4f/d0/ed4fd019f8557c71b72df37b3b77feed.jpg"
                                            alt="" class="md:h-80 md:w-56 inset-0 object-cover rounded-lg"
                                            loading="lazy" />
                                    </div>
                                    <form class="pt-6">
                                        <div class="flex flex-wrap">
                                            <h1 class="flex font-medium text-slate-900">
                                                Heaven's Gate Lempuyang
                                            </h1>
                                            <div class="flex space-x-4 mt-1 text-sm font-medium">

                                            </div>
                                        </div>
                                        <p class="text-sm text-slate-500">
                                            Family
                                        </p>
                                        <div class="w-full flex-none order-1 text-3xl fontbold text-violet-600">
                                            -Rp. 50.000-
                                        </div>
                                        <div
                                            class="w-full flex-none order-1 text-3xl textbold uppercase fontbold text-red-600">
                                            NOT Available
                                        </div>
                                        <button
                                            class="flex-auto h-10 px-6 my-10 font-semibold rounded-full text-slate-200 border border-slate-500 dark:text-white hover:bg-violet-800 hover:border-none">
                                            Masukkan Keranjang
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- =============== CONTENT 3 ============== -->
                            <div class="font-sans pt-8 border-slate-500">
                                <div class="max-w-sm">
                                    <div class="md:shrink-0">
                                        <img src="https://i.pinimg.com/564x/1e/f6/3b/1ef63b79d76006b03ff0e3085d6e8bc2.jpg"
                                            alt="" class="md:h-80 md:w-56 inset-0 object-cover rounded-lg"
                                            loading="lazy" />
                                    </div>
                                    <form class="pt-6">
                                        <div class="flex flex-wrap">
                                            <h1 class="flex font-medium text-slate-900">
                                                Calonarang Traditional Culture
                                            </h1>
                                            <div class="flex space-x-4 mt-1 text-sm font-medium">

                                            </div>
                                        </div>
                                        <p class="text-sm text-red-500">
                                            21+ (not for children)
                                        </p>
                                        <div class="w-full flex-none order-1 text-3xl fontbold text-violet-600">
                                            -Rp. 200.000-
                                        </div>
                                        <button
                                            class="flex-auto h-10 px-6 my-20 font-semibold rounded-full text-slate-200 border border-slate-500 dark:text-white hover:bg-violet-800 hover:border-none">
                                            Masukkan Keranjang
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="relative ">


                            <h1 class=" font-semibold text-2xl my-2">Identitas Ordering </h1>

                            <input type="text" id="Nama" placeholder="Nama Anda"
                                class="  focus:ring-blue-500 focus:border-blue-400 block  px-10 py-2 text-sm w-full">
                            <input type="text" id="NIK" placeholder="NIK"
                                class="  focus:ring-blue-500 focus:border-blue-400 block  px-10 py-2 text-sm w-full">
                            <input type="text" id="alamat" placeholder="Alamat"
                                class="  focus:ring-blue-500 focus:border-blue-400 block  px-10 py-10 text-sm w-full">

                            <h1 class=" font-semibold text-2xl my-5"> Order </h1>

                            <!-- ==== CONTENT 1 ==== -->
                            <div class="flex justify-between mt-5 mb-5">
                                <span class="font-sans text-sm ">Kecak Fire Gianyar</span>
                                <span class="font-semibold text-sm">Rp 100.000</span>

                            </div>
                            <div class="lex justify-between mt-5 mb-5">
                                <span
                                    class="px-5 font-sans text-sm rounded-full border border-slate-400 hover:bg-violet-600 hover:text-slate-200">delete</span>
                                <span
                                    class="px-5 font-sans text-sm rounded-full border border-slate-400 hover:bg-violet-600 hover:text-slate-200">tambah</span>
                            </div>
                            <!-- ======CONTENT 3 ====== -->
                            <div class="flex justify-between mb-5">
                                <span class="font-sans text-sm ">Calonarang Traditional Culture</span>
                                <span class="font-semibold text-sm">Rp 200.000</span>


                            </div>

                            <div class="my-auto mx-auto">
                                <span
                                    class="px-5 font-sans text-sm rounded-full border border-slate-400 hover:bg-violet-600 hover:text-slate-200">delete</span>
                                <span
                                    class="px-5 font-sans text-sm rounded-full border border-slate-400 hover:bg-violet-600 hover:text-slate-200">tambah</span>
                            </div>

                            <div class="flex justify-between mb-5 text-slate-400">
                                <span class="font-sans text-sm ">Breakfast, Lunch</span>
                                <span class="font-semibold text-sm">Free</span>
                            </div>

                            <div class="pt-20">
                                <label for="promo" class="font-semibold inline-block mb-3 text-sm ">Promo
                                    Code</label>
                                <input type="text" id="promo" placeholder="Enter your Promo"
                                    class="  focus:ring-blue-500 focus:border-blue-400 block wful p-2 text-sm w-full">
                            </div>

                            <button
                                class="bg-slate-400 hover:bg-violet-600 px-5 py-2 mt-2 text-sm text-white">Use</button>
                            <div class="border-t mt-4">
                                <div class="flex font-semibold justify-between py-6 text-sm ">
                                    <span>Total</span>
                                    <span>Rp 300.000</span>
                                </div>
                                <button
                                    class="bg-violet-400 font-semibold hover:bg-violet-900 py-3 text-sm text-white  w-full">Checkout</button>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>
</div<?php /**PATH D:\semester 3\teknologi web\kecak_men\resources\views/frontpage/pemesanantiket.blade.php ENDPATH**/ ?>