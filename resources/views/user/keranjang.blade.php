@extends('user.apppayment')
@section('payment')

    <body>
        <div class="grid h-screen grid-cols-3">
            <div class="col-span-3 px-12 space-y-8 lg:col-span-2 bg-indigo-50">
                <div class="relative flex flex-col p-4 mt-8 bg-white rounded-md shadow sm:flex-row sm:items-center">
                    <div class="flex flex-row items-center w-full pb-4 border-b sm:border-b-0 sm:w-auto sm:pb-0">
                        <div class="text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-5 sm:h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 text-sm font-medium">Checkout</div>
                    </div>
                    <div class="mt-4 text-sm tracking-wide text-gray-500 sm:mt-0 sm:ml-4">Complete your shipping and
                        payment details below.</div>
                    <div
                        class="absolute ml-auto text-gray-400 cursor-pointer sm:relative sm:top-auto sm:right-auto right-4 top-4 hover:text-gray-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="rounded-md">
                    <form id="payment-form" method="POST" action="">
                        <section>
                            <h2 class="my-2 text-lg font-semibold tracking-wide text-gray-700 uppercase">Shipping & Billing
                                Information</h2>
                            <fieldset class="mb-3 text-gray-600 bg-white rounded shadow-lg">
                                <label class="flex items-center h-12 py-3 border-b border-gray-200">
                                    <span class="px-2 text-right">Name</span>
                                    <input name="name" class="px-3 focus:outline-none" placeholder="Try Odinsson"
                                        required="">
                                </label>
                                <label class="flex items-center h-12 py-3 border-b border-gray-200">
                                    <span class="px-2 text-right">Email</span>
                                    <input name="email" type="email" class="px-3 focus:outline-none"
                                        placeholder="try@example.com" required="">
                                </label>
                                <label class="flex items-center h-12 py-3 border-b border-gray-200">
                                    <span class="px-2 text-right">Address</span>
                                    <input name="address" class="px-3 focus:outline-none" placeholder="10 Street XYZ 654">
                                </label>
                                <label class="flex items-center h-12 py-3 border-b border-gray-200">
                                    <span class="px-2 text-right">Date</span>
                                    <input name="date" class="px-3 focus:outline-none" placeholder="DD-MM-YYYY">
                                </label>
                                <label class="flex items-center h-12 py-3 border-b border-gray-200">
                                    <span class="px-2 text-right">Phone Number</span>
                                    <input name="city" class="px-3 focus:outline-none" placeholder="08XXXXXXXXXX">
                                </label>
                            </fieldset>
                        </section>
                    </form>
                </div>
                <div class="rounded-md">
                    <section>
                        <fieldset class="mb-3 text-gray-600 bg-white rounded shadow-lg">
                        </fieldset>
                    </section>
                </div>
                <button
                    class="w-full px-4 py-3 text-xl font-semibold text-white transition-colors bg-pink-400 rounded-full submit-button focus:ring focus:outline-none">
                    Pay Rp23.000
                </button>
            </div>
            <div class="hidden col-span-1 bg-white lg:block">
                <h1 class="px-8 py-6 text-xl text-gray-600 border-b-2">Order Summary</h1>
                <ul class="px-8 py-6 space-y-6 border-b">
                    <li class="grid grid-cols-6 gap-2 border-b-1">
                        <div class="self-center col-span-1">
                            <img src="assets/img/meet.jpeg" alt="Product" class="w-full rounded">
                        </div>
                        <div class="flex flex-col col-span-3 pt-2">
                            <span class="text-gray-600 text-md font-semi-bold">Daging Kerbau</span>
                        </div>
                        <div class="col-span-2 pt-3">
                            <div class="flex items-center justify-between space-x-2 text-sm">
                                <button class="text-gray-400 focus:outline-none focus:ring"
                                    onclick="decrementItem(this)">-</button>
                                <span id="quantity" class="text-gray-400">2</span>
                                <button class="text-gray-400 focus:outline-none focus:ring"
                                    onclick="incrementItem(this)">+</button>
                                <span class="inline-block font-semibold text-pink-400">Rp20.000</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="px-8 border-b">
                    <div class="flex justify-between py-4 text-gray-600">
                        <span>Subtotal</span>
                        <span class="font-semibold text-pink-500">Rp23.000</span>
                    </div>
                    <div class="flex justify-between py-4 text-gray-600">
                        <span>Shipping</span>
                        <span class="font-semibold text-pink-500">Free</span>
                    </div>
                </div>
                <div class="flex justify-between px-8 py-8 text-xl font-semibold text-gray-600">
                    <span>Total</span>
                    <span>Rp23.000</span>
                </div>
            </div>
        </div>
    </body>
@endsection
