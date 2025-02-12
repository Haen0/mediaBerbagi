@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Semua Donatur</p>
                <p class="text-sm text-gray-300 font-semibold">Pantau Semua Data Donatur</p>
            </div>
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a class="text-green-700">Export</a>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto sm:rounded-sm bg-white p-5">
        <table id="myTable" class="min-w-full leading-normal stripe w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-lg text-black">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Telepon
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 text-black text-base">
                        1
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Fulan
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        fulan@gmail.com
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        82097772
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp.20.000.000
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        <div class="text-green-500 bg-green-100 border w-1/2 font-semibold rounded-lg text-sm px-2 py-1.5 text-center">
                            Sukses
                        </div>
                    </td>
                </tr>
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 text-black text-base">
                        1
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Fulan
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        fulan@gmail.com
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        82097772
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp.20.000.000
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        <div class="text-red-400 bg-red-100 border w-1/2 font-semibold rounded-lg text-sm px-2 py-1.5 text-center">
                            Kadaluarsa
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
