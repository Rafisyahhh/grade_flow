@extends('template-user')
@section('content')
    <div class="relative z-40 py-10 lg:px-48">
        <div class="flex flex-row gap-6 justify-between items-center">
            <div class="flex ">
                <h2 class="text-[14px] lg:text-[20px] font-semibold">Budiono Siregar / XII RPL 2</h2>
            </div>
            <div class="flex">
                <a href="{{ '/Nilai-Siswa' }}"
                    class="flex p-3 px-14 bg-primary-80 rounded-xl text-white text-[12px] text-md font-semibold lg:text-[14px]">
                    Login
                </a>
            </div>
        </div>

            <div class="py-5">
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-slate-50 border-b hover:duration-300 border-slate-200 text-dark">
                                <td class="p-4 py-5">
                                    1
                                </td>
                                <td class="p-4 py-5">
                                    Bahasa Indonesia
                                </td>
                                <td class="p-4 py-5">
                                    75    
                                </td>
                                <td class="p-4 py-5">
                                    90
                                </td>
                               
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
