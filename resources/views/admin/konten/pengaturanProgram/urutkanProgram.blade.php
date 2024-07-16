@extends('admin.layout.main')

@section('konten')

<div class="py-3 bg-green-700 rounded-xl mb-10">
    <div class=" p-5 flex justify-between">
        <div>
            <p  class="text-2xl text-white font-semibold mb-2">Urutkan Projek</p>
            <p class="text-sm text-gray-300 font-semibold">custom urutan projek untuk ditampilkan</p>
        </div>
    </div>
</div>

<div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="">
        <p class="text-orange-500 mb-3">
            * drag drop untuk memindahkan item
        </p>
    </div>
    <ul id="items" class="space-y-2">
        <li>
            <div class="md:flex items-center w-full p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" class="size-20 rounded-lg mr-3 object-cover">
                <div class="">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kategori.</p>
                    <p class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Program</p>
                </div>
            </div>
        </li>
        <li>
            <div class="md:flex items-center w-full p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="https://flowbite.com/docs/images/blog/image-2.jpg" alt="" class="size-20 rounded-lg mr-3 object-cover">
                <div class="">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kategori.</p>
                    <p class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Program</p>
                </div>php kontrak kuitansi
            </div>
        </li>
        <li>
            <div class="md:flex items-center w-full p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="https://flowbite.com/docs/images/blog/image-3.jpg" alt="" class="size-20 rounded-lg mr-3 object-cover">
                <div class="">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kategori.</p>
                    <p class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Program</p>
                </div>
            </div>
        </li>
        <li>
            <div class="md:flex items-center w-full p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="" class="size-20 rounded-lg mr-3 object-cover">
                <div class="">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kategori.</p>
                    <p class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Program</p>
                </div>
            </div>
        </li>
    </ul>
    <div class="flex justify-end">
        <button type="button" class="mt-3 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">SIMPAN</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('items');
        var sortable = new Sortable(el, {
            animation: 150,
            ghostClass: 'blue-background-class'
        });
    });
</script>

@endsection
