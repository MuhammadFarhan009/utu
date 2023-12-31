@extends('user.app')
@section('content')
    <!--Nav-->
    {{-- <nav id="header" class="top-0 z-30 w-full py-1">
            <div class="container flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto mt-0">

                <label for="menu-toggle" class="block cursor-pointer md:hidden">
                    <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
                <input class="hidden" type="checkbox" id="menu-toggle" />

                <div class="order-3 hidden w-full md:flex md:items-center md:w-auto md:order-1" id="menu">
                    <nav>
                        <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                            <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                    href="#"><img src="assets/img/logo.png" alt="Deskripsi Gambar"
                                        class="w-20 h-20"></img></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="order-1 md:order-2">
                    <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 no-underline hover:no-underline "
                        href="#">

                    </a>
                </div>

                <div class="flex items-center order-2 md:order-3" id="nav-content">

                    <a class="inline-block no-underline hover:text-black" href="#">
                        <div class="relative text-gray-600">
                            <input type="text"
                                class="h-10 px-5 pr-10 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
                                placeholder="Search Here...">
                            <button type="submit" class="absolute top-0 right-0 mt-3 mr-4">
                                <img src="assets/img/search.png" alt="Deskripsi Gambar" width="20" height="20">
                            </button>
                        </div>


                    </a>

                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button"
                                class="inline-flex w-full justify-center gap-x-1.5 bg-white px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50"
                                id="menu-button" aria-expanded="false" aria-haspopup="true">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <circle fill="none" cx="12" cy="7" r="3" />
                                    <path
                                        d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                                </svg>
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="absolute right-0 z-10 hidden w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            id="dropdown-menu">
                            <div class="py-1" role="none">

                                <!-- Active: "bg-gray-100 text-g ray-900", Not Active: "text-gray-700" -->
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}"
                                            class="block w-full px-4 py-2 text-sm text-left text-gray-700">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="block w-full px-4 py-2 text-sm text-left text-gray-700">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="block w-full px-4 py-2 text-sm text-left text-gray-700">Register</a>
                                        @endif
                                    @endauth
                                @endif


                            </div>
                        </div>
                    </div>

                    <script>
                        const menuButton = document.getElementById('menu-button');
                        const dropdownMenu = document.getElementById('dropdown-menu');

                        menuButton.addEventListener('click', () => {
                            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                            if (isExpanded) {
                                menuButton.setAttribute('aria-expanded', 'false');
                                dropdownMenu.classList.add('hidden');
                            } else {
                                menuButton.setAttribute('aria-expanded', 'true');
                                dropdownMenu.classList.remove('hidden');
                            }
                        });
                    </script>




                    <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                    </a>

                </div>
            </div>
        </nav> --}}
        <div class="flex items-center justify-center h-15">
            <div class="flex flex-wrap">
                <img src="assets/img/fix.jpeg" alt="Deskripsi Gambar">
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

            <nav id="store" class="top-0 z-30 w-full px-6 py-1 pb-10 pl-4 pr-4">
                <div class="container pb-10 pl-10 pr-10 mx-auto">

                    <ul class="flex flex-wrap items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/"><img src="assets/img/home.png" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Semua</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/buah"><img src="assets/img/iconapple.png" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Buah</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/daging"><img src="assets/img/daging.jpg" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Daging</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/grosir"><img src="assets/img/grosir (2).png" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Grosir</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/sayur"><img src="assets/img/sayur.jpg" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Sayur</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="/frozen"><img src="assets/img/frozen.jpg" alt="Deskripsi Gambar"
                                    class="w-10 h-10">Frozen</a></li>
                    </ul>
                </div>
            </nav>

            @yield('isi')
        @endsection
