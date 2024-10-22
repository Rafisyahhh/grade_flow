@extends('template-admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl ml-60 py-10">
            <div class="relative flex flex-col w-full h-full overflow-x-scroll text-dark bg-white shadow-md rounded-lg">
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
                                <a href="" class="bg-yellow-400 shadow-md py-1 px-4 rounded-md text-white font-medium">Lihat</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection