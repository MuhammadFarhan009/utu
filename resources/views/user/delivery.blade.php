@extends('user.app')
@section('content')

    <body class="text-base leading-normal tracking-normal text-gray-600 bg-white work-sans">


        <section class="">
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="lg:text-center">
                        <p
                            class="font-heading mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                            Delivey Information
                        </p>
                    </div>

                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/503163/api-settings.svg">
                                    </div>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Pesanan akan diantar dengan menggunakan grocery bag green flow untuk
                                    mengurangi sampah plastik

                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/503138/webpack.svg">
                                    </div>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Minimun belanja adalah Rp. 30.000 rupiah
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/511771/dashboard-671.svg">

                                    </div>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Maksimum berat total pesanan adalah 7,5 kg
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/76267/free-commercial-label.svg">

                                    </div>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Pengiriman hanya untuk daerah Aceh besar dan Banda Aceh
                                </dd>
                            </div>
                        </dl>
                    </div>

                </div>
            </div>
        </section>


    </body>
@endsection
