@extends('user.home.index')

@section('content')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex">
            <a href="/artikel" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Duta Amal</p>
        </div>
        <div class="konten m-5 mb-24">
            <p class="font-bold my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, vel?</p>
            <p class="text-gray-400 text-sm my-auto font-semibold">Totatl (214)</p>
            <div class="card shadow-md rounded-lg flex p-3 my-5">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                    <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                    </div>
                    <p class="text-sm font-bold">Donasi Rp 10.000</p>
                </div>
            </div>
            <div class="card shadow-md rounded-lg flex p-3 my-5">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                    <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                    </div>
                    <p class="text-sm font-bold">Donasi Rp 10.000</p>
                </div>
            </div>
            <div class="card shadow-md rounded-lg flex p-3 my-5">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                    <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                    </div>
                    <p class="text-sm font-bold">Donasi Rp 10.000</p>
                </div>
            </div>
            <div class="card shadow-md rounded-lg flex p-3 my-5">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                    <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                    </div>
                    <p class="text-sm font-bold">Donasi Rp 10.000</p>
                </div>
            </div>
            <div class="card shadow-md rounded-lg flex p-3 my-r">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                    <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                    </div>
                    <p class="text-sm font-bold">Donasi Rp 10.000</p>
                </div>
            </div>
            <div class="amal flex justify-between my-5">
                <button class="bg-green-100  border border-green-500 px-5 py-2 w-full me-2 rounded-lg text-green-700 font-bold text-sm">Undang Duta Amal</button>
                <button class="bg-green-700  px-5 py-2 w-full ml-2 text-white rounded-lg font-bold text-sm">Jadi Duta Amal</button>
            </div>
        </div>
    </div>
@endsection