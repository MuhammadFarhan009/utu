@extends('user.apppayment')
@section('payment')

    <body>

        <a href="/">
            <img src="assets/img/left-arrow.png" alt="" class="w-8 h-8 mt-4 ml-72" style="" >
        </a>
        <!-- component -->
        <div>
            <section class="text-gray-700">
                <div class="container px-5 py-24 mx-auto">
                    <div class="mb-20 text-center">
                        <h1 class="mb-4 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">
                            Frequently Asked Question
                        </h1>
                        <p class="mx-auto text-base leading-relaxed xl:w-2/4 lg:w-3/4">
                            The most common questions about how our business works and what
                            can do for you.
                        </p>
                    </div>
                    <div class="flex flex-wrap -mx-2 lg:w-4/5 sm:mx-auto sm:mb-2">
                        <div class="w-full px-4 py-2 lg:w-1/2">
                            <details class="mb-4">
                                <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
                                    Bagaimana jika saat pengantaran pesanan tidak ada orang dirumah?
                                </summary>

                                <span>
                                    Driver kami akan menghubungi konsumen terlebih dahulu dan mengkonfirmasi
                                    pesanan dalam perjalanan, harap mengabari saat dihubungi.

                                </span>
                            </details>
                            <details class="mb-4">
                                <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
                                    Supplier yang ingin menawarkan produknya apakah diseleksi lagi?
                                </summary>

                                <span>
                                    Benar karena sesuai dengan visi misi green flow menawarkan produk yang fresh
                                    dan sehat kepada konsumen, maka partner kami akan menilai produk yang supplier tawarkan

                                </span>
                            </details>
                        </div>
                        <div class="w-full px-4 py-2 lg:w-1/2">
                            <details class="mb-4">
                                <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
                                    Apakah pesanan bisa di cancel ?
                                </summary>

                                <span>
                                    Tidak jika sudah membayar. mohon di perhatikan kembali saat checkout
                                </span>
                            </details>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection
