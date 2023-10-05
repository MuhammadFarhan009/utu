<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenFlow</title>
    <meta name="description" content="GreenFlow">
    <meta name="keywords"
        content="GreenFlow">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>
<header>
    <!--Nav-->
    <nav id="header" class="top-0 z-30 w-full py-1">
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
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            @if (Route::has('login'))
                                @auth
                                <a href="{{ url('/home') }}"
                                class="block w-full px-4 py-2 text-sm text-left text-gray-700">Dashboard</a>
                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="block w-full px-4 py-2 text-sm text-left text-gray-700">Log In</a>

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




                <a class="inline-block pl-3 no-underline hover:text-black" href="/keranjang">
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
    </nav>
</header>



<body class="text-base leading-normal tracking-normal text-gray-600 bg-white work-sans">
    @yield('payment')
</body>
<footer class="container py-8 mx-auto bg-white border-t border-gray-400">
    <div class="container flex justify-center ">
        <div class="grid grid-cols-4 gap-10">
            <div class="p-4 ">
                <ul class="list-none">
                    <li class="font-bold">Green Flow</li>
                    <li><a href="/aboutus" class=" hover:text-blue-600">About Us</a></li>
                    <li><a href="#" cl  ass=" hover:text-blue-600">Blog</a></li>
                    <li><a href="#" class=" hover:text-blue-600">Careers</a></li>
                    <li><a href="#" class=" hover:text-blue-600">Suppliers</a></li>
                </ul>
            </div>

            <div class="p-4 ">
                <ul class="list-none">
                    <li class="font-bold">Help</li>
                    <li><a href="#" class=" hover:text-blue-600">Contact Us</a></li>
                    <li><a href="/delivery" class=" hover:text-blue-600">Delivery Information</a></li>
                    <li><a href="/FAQ" class=" hover:text-blue-600">FAQ</a></li>
                </ul>
            </div>
            <div class="p-4 ">
                <ul class="list-none">
                    <li class="font-bold">Follow Us</li>
                    <li>
                        <a href="https://instagram.com/real_green_flow?igshid=OGQ5ZDc2ODk2ZA=="
                            class="hover:text-blue-600">
                            <img src="assets/img/instagram.png" alt="Instagram" class="inline-block w-5 h-5 mr-2">
                            Instagram
                        </a>
                    </li>

                    <li><a href="https://www.facebook.com/profile.php?id=61552064725202" class=" hover:text-blue-600">
                            <img src="assets/img/facebook.png" alt="facebook" class="inline-block w-5 h-5 mr-2">
                            Facebook
                        </a>
                    </li>
                    <li><a href="https://twitter.com/Real_green_flow?t=F9RxU9jn50wkNGm5yEfbNw&s=09"
                            class=" hover:text-blue-600">
                            <img src="assets/img/twitter.png" alt="twitter" class="inline-block w-5 h-5 mr-2">
                            Twitter</a></li>
                    <li><a href="https://vm.tiktok.com/ZMj5cUQGB/" class=" hover:text-blue-600">
                            <img src="assets/img/tiktok.png" alt="tiktok" class="inline-block w-5 h-5 mr-2">
                            TikTok</a></li>
                    <li><a href="https://youtube.com/@Green_flow?si=8w9YR8tcRLxpJGGb" class=" hover:text-blue-600">
                            <img src="assets/img/th.jpg" alt="youtube" class="inline-block w-5 h-5 mr-2">
                            Youtube</a></li>
                </ul>
            </div>
            <div class="p-4 ">
                <ul class="list-none">
                    <li class="font-bold">Get The Apps</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-blue-600">
                            <img src="assets/img/playstore.png" alt="ps" class="inline-block w-20 h-20 mr-2">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-blue-600">
                            <img src="assets/img/appsstore.png" alt="ps" class="inline-block w-20 h-6 mr-2">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
</footer>

</html>
