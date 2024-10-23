@extends('template-admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="float-end py-5">
        <input type="text" placeholder="Cari Nama Siswa" class="bg-light p-3 rounded-lg outline-gray-400 shadow-md text-dark text-[14px]">
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
                            Nama Siswa
                        </th>
                        <th class="p-4 border-b">
                            Mata Pelajaran
                        </th>
                        <th class="p-4 border-b">
                            Nilai
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
                            <a href="{{'/Data-Nilai/Detail'}}" class="bg-yellow-400 shadow-md py-1 px-4 rounded-md text-white font-medium">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection