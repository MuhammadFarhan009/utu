@extends('user.app')
@section('content')

    <body>


        <!-- component -->
        <div>
            <section class="text-gray-700">
                <div class="container px-5 py-24 mx-auto">
                    <div class="text-center mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">
                            Frequently Asked Question
                        </h1>
                        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
                            The most common questions about how our business works and what
                            can do for you.
                        </p>
                    </div>
                    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                        <div class="w-full lg:w-1/2 px-4 py-2">
                            <details class="mb-4">
                                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                    Bagaimana jika saat pengantaran pesanan tidak ada orang dirumah?
                                </summary>

                                <span>
                                    Driver kami akan menghubungi konsumen terlebih dahulu dan mengkonfirmasi
                                    pesanan dalam perjalanan, harap mengabari saat dihubungi.

                                </span>
                            </details>
                            <details class="mb-4">
                                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                    Supplier yang ingin menawarkan produknya apakah diseleksi lagi?
                                </summary>

                                <span>
                                    Benar karena sesuai dengan visi misi green flow menawarkan produk yang fresh
                                    dan sehat kepada konsumen, maka partner kami akan menilai produk yang supplier tawarkan

                                </span>
                            </details>
                        </div>
                        <div class="w-full lg:w-1/2 px-4 py-2">
                            <details class="mb-4">
                                <summary class="font-semibold bg-gray-200 rounded-md py-2 px-4">
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
