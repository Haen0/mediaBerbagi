@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/lembaga') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Kembali
                    </a>
                </div>
            </div>
            <form class="px-8 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="program"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program</label>
                        <select id="program"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Program</option>
                            <option value="US">Program Instant Zakat</option>
                            <option value="CA">Program Instant Wakaf</option>
                            <option value="FR">Program Instant Sedekah</option>
                            <option value="DE">Program Berbagi</option>
                        </select>
                    </div>
                </div>
                <div class=" pt-4">
                    <label for="nominal"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                    <div class="flex">
                        <p class="bg-gray-200 border w-10 py-1.5 rounded-l-md text-center border-gray-300 text-black">Rp</p>
                        <input type="number" id="nominal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="0" required />
                    </div>
                </div>
                <div class="pt-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Simpan
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
