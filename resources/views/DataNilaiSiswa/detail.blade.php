@extends('template-admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="py-5 float-end">
            <button class="btn bg-green-700 px-7 text-light" onclick="tambahModal.showModal()">Tambah</button>
        </div>
        <div class="max-w-5xl ml-60 py-10">
            <div class="relative flex flex-col w-full h-full overflow-x-scroll text-dark bg-white shadow-md rounded-lg">
                <table class="w-full text-left table-auto min-w-max bg-light">
                    <thead>
                        <tr>
                            <th class="p-4 border-b">
                                No
                            </th>
                            <th class="p-4 border-b">
                                Mata Pelajaran
                            </th>
                            <th class="p-4 border-b">
                                KKM
                            </th>
                            <th class="p-4 border-b">
                                Nilai
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
                                Matematika
                            </td>
                            <td class="p-4 py-5">
                                65
                            </td>
                            <td class="p-4 py-5">
                                90
                            </td>
                            <td class="p-4 py-5 flex items-center gap-2">
                                <button class="btn bg-yellow-500 text-light text-sm"
                                    onclick="editModal.showModal()">Edit</button>
                                <a href="{{ '/Data-Nilai/Hapus' }}"
                                    class="bg-red-600 shadow-md py-3 px-3 rounded-md text-white text-sm font-medium">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Moadal Edit --}}
    <dialog id="editModal" class="modal">
        <div class="modal-box text-dark">
            <h3 class="text-lg font-bold">Edit Nilai Siswa</h3>
            <div class="flex flex-col items-center pt-5">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-sm font-medium text-dark">Nilai Siswa</span>
                    </div>
                    <input type="number" placeholder="Masukkan Nilai Siswa"
                        class="input input-bordered w-full max-w-xs [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                    <div class="label">
                    </div>
                </label>
            </div>
            <div class="modal-action" class="flex gap-2">
                <form method="dialog">
                    <button class="btn bg-red-700 text-light">Tutup</button>
                </form>
                <button class="btn bg-green-700 text-light px-5">Edit</button>
            </div>
        </div>
    </dialog>
    {{-- end of modal edit --}}

    {{-- Modal Edit --}}
    <dialog id="tambahModal" class="modal">
        <div class="modal-box text-dark">
            <h3 class="text-lg font-bold">Tambah Nilai Siswa</h3>
            <div class="flex flex-col items-center pt-5">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-sm font-medium text-dark">Mata Pelajaran</span>
                    </div>
                    <input type="text" placeholder="Nama Mapel" class="input input-bordered w-full max-w-xs" />
                    <div class="label">
                    </div>
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-sm font-medium text-dark">Nilai Siswa</span>
                    </div>
                    <input type="number" placeholder="Masukkan Nilai Siswa"
                        class="input input-bordered w-full max-w-xs [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                    <div class="label">
                    </div>
                </label>
            </div>
            <div class="modal-action flex justify-end">
                <form method="dialog">
                    <button class="btn bg-red-700 text-light">Tutup</button>
                </form>
                <button class="btn bg-green-700 text-light">Tambah</button>
            </div>
        </div>
    </dialog>
    {{-- end of modal edit --}}
@endsection
