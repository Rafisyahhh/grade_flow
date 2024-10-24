@extends('template-admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="float-end py-5">
            <input type="text" placeholder="Cari Nama Siswa"
                class="bg-light p-3 rounded-lg outline-gray-400 shadow-md text-dark text-[14px]">
        </div>
        <div class="max-w-5xl ml-60 py-10">
            <div class="relative flex flex-col w-full h-full overflow-x-scroll text-dark bg-white shadow-xl rounded-lg">
                <table class="w-full text-left table-auto min-w-max bg-light">
                    <thead>
                        <tr>
                            <th class="p-4 border-b">
                                No
                            </th>
                            <th class="p-4 border-b">
                                Nama Siswa
                            </th>
                            <th class="p-4 border-b">
                                Kelas
                            </th>
                            <th class="p-4 border-b">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-slate-50 border-b hover:duration-300 border-slate-200 text-dark">
                            <td class="p-4 py-5">
                                1
                            </td>
                            <td class="p-4 py-5">
                                Akbar The Exploler
                            </td>
                            <td class="p-4 py-5">
                                XII RPL 2
                            </td>
                            <td class="p-4 py-5">
                                <button class="btn bg-yellow-500 text-light" onclick="lihatModal.showModal()">Lihat</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Open the modal using ID.showModal() method -->
    <dialog id="lihatModal" class="modal">
        <div class="modal-box text-dark">
            <h3 class="text-lg font-bold">Data Siswa</h3>
            <div class="grid grid-cols-3 gap-4">
                <div class="flex-col col-span-2">
                    <ul class="space-y-3 pt-10 text-[12px] font-medium">
                        <li class="flex items-start">
                            <span class="w-32">Nama Siswa</span>
                            <span class="w-4">:</span>
                            <span class="whitespace-nowrap">Akbar The Exploler</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-32">Kelas</span>
                            <span class="w-4">:</span>
                            <span>XII RPL 2</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-32">Tanggal Lahir</span>
                            <span class="w-4">:</span>
                            <span>18-01-07</span>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center bg-slate-400 rounded-md">
                    <img src="{{asset('images/siswa.png')}}" alt="" class="w-40">
                </div>
            </div>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn bg-red-700 text-light">Tutup</button>
                </form>
            </div>
        </div>
    </dialog>
@endsection
