@extends('user.app')
@section('content')

    <body class="text-base leading-normal tracking-normal text-gray-600 bg-white work-sans">


        <div class="container relative mx-auto carousel" style="max-width:1600px;">
            <div class="relative w-full overflow-hidden carousel-inner">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked">
                <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                    <div class="flex block w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                        style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                        <div class="container mx-auto">
                            <div
                                class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                                <p class="my-4 text-2xl text-black">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                                <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                    href="#">view product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="carousel-3"
                    class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
                <label for="carousel-2"
                    class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                    hidden="">
                <div class="absolute bg-right bg-cover opacity-0 carousel-item" style="height:50vh;">
                    <div class="flex block w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                        style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">

                        <div class="container mx-auto">
                            <div
                                class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                                <p class="my-4 text-2xl text-black">Real Bamboo Wall Clock</p>
                                <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                    href="#">view product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="carousel-1"
                    class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
                <label for="carousel-3"
                    class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                    hidden="">
                <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                    <div class="flex block w-full h-full pt-6 mx-auto bg-bottom bg-cover md:pt-0 md:items-center"
                        style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                        <div class="container mx-auto">
                            <div
                                class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                                <p class="my-4 text-2xl text-black">Brown and blue hardbound book</p>
                                <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                    href="#">view product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="carousel-2"
                    class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
                <label for="carousel-1"
                    class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1"
                            class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2"
                            class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3"
                            class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                    </li>
                </ol>

            </div>
        </div>

        <!--

    Alternatively if you want to just have a single hero

    <section class="flex w-full pt-12 mx-auto bg-right bg-cover bg-nordic-gray-light md:pt-0 md:items-center" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

     <div class="container mx-auto">

      <div class="flex flex-col items-start justify-center w-full px-6 tracking-wide lg:w-1/2">
       <h1 class="my-4 text-2xl text-black">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
       <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black" href="#">products</a>

      </div>

     </div>

    </section>

    -->

        <section class="py-8 bg-white">

            <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

                <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                    <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                        <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline "
                            href="#">
                            Store
                        </a>

                        <div class="flex items-center" id="store-nav-content">

                            <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                                </svg>
                            </a>

                            <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </nav>

                <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                    <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                        <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/home.png" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Semua</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/iconapple.png" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Buah</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/daging.jpg" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Daging</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/grosir (2).png" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Grosir</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/sayur.jpg" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Sayur</a></li>
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/frozen.jpg" alt="Deskripsi Gambar"
                                        class="w-10 h-10">Frozen</a></li>
                        </ul>
                    </div>
                </nav>



                <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                    <a href="#" class="w-64 h-64">
                        <img class="mx-auto my-auto w-32 h-32 hover:grow hover:shadow-lg" src="assets/img/meet.jpeg">
                        <div class="flex items-center justify-between pt-3">
                            <p class="">Daging Kerbau</p>
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z">
                                </path>
                                <circle cx="10.5" cy="18.5" r="1.5"></circle>
                                <circle cx="17.5" cy="18.5" r="1.5"></circle>
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp10.000</p>
                    </a>
                </div>

                <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                    <a href="#"class="w-64 h-64">
                        <img class="mx-auto my-auto w-32 h-32 hover:grow hover:shadow-lg" src="assets/img/ikan.jpeg">
                        <div class="flex items-center justify-between pt-3">
                            <p class="">Ikan</p>
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z">
                                </path>
                                <circle cx="10.5" cy="18.5" r="1.5"></circle>
                                <circle cx="17.5" cy="18.5" r="1.5"></circle>
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp10.000</p>
                    </a>
                </div>

                <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                    <a href="#" class="w-64 h-64">
                        <img class="mx-auto my-auto w-32 h-32 hover:grow hover:shadow-lg" src="assets/img/udang.jpeg">
                        <div class="flex items-center justify-between pt-3">
                            <p class="">Udang</p>
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z">
                                </path>
                                <circle cx="10.5" cy="18.5" r="1.5"></circle>
                                <circle cx="17.5" cy="18.5" r="1.5"></circle>
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp10.000</p>
                    </a>
                </div>



            </div>

        </section>


    </body>
@endsection
