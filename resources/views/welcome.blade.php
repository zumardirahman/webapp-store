@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="absolute top-0 right-0 mt-4 mr-4">
        @if (Route::has('login'))
        <div class="space-x-4">
            @auth
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Log out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>


    <div class="flex items-center justify-center">
        <div class="flex flex-col justify-around">
            <div class="space-y-6">

                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Harga Paket Keanggotaan</h2>
                        <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Pilihan Paket Berlangganan Kamu</p>
                    </div>
                    <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                        <!-- Pricing Card -->
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Paket Basic</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Paket Dasar</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-4xl font-extrabold">Rp 50.000</span>
                                <span class="text-gray-500 dark:text-gray-400">/bulan</span>
                            </div>
                            <!-- List -->
                            
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get started</a>
                        </div>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Paket Middle </h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Paket Menengah</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-4xl font-extrabold">Rp 130.000</span>
                                <span class="text-gray-500 dark:text-gray-400">/bulan</span>
                            </div>
                            <!-- List -->
                            
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get started</a>
                        </div>

                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Paket Advance </h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Paket Pro</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-4xl font-extrabold">Rp 250.000</span>
                                <span class="text-gray-500 dark:text-gray-400">/bulan</span>
                            </div>
                            <!-- List -->
                            
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection