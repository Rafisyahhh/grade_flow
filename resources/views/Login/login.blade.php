@extends('template-user')
@section('content')
    <div class="relative z-40">
        <div class="flex justify-center py-20 lg:py-5">
            <div class="bg-light rounded-[24px] shadow-md w-[300px] lg:w-[500px]">
                <div class="text-center py-5">
                    <h2 class="text-primary-80 text-md lg:text-[24px] font-semibold">Login</h2>
                    <p class="px-10 text-[12px] lg:px-20 lg:text-[17px] font-medium">Login dengan menggunakan nama dan
                        tanggal lahir kalian ya!</p>
                </div>

                <div class="px-5 flex flex-col justify-center text-dark py-10 space-y-5 lg:py-5 lg:px-20">
                    <div class="space-y-2">
                        <h2 class="px-2 text-[12px] font-medium lg:text-[14px]">Nama Siswa</h2>
                        <input type="text" class="bg-white text-[12px] w-full p-3 rounded-lg outline-none shadow-md">
                    </div>
                    <div class="space-y-2">
                        <h2 class="px-2 text-[12px] font-medium lg:text-[14px]">Tanggal Lahir</h2>
                        <input type="text" class="bg-white text-[12px] w-full p-3 rounded-lg outline-none shadow-md">
                    </div>
                </div>

                <div class="flex justify-center py-10">
                    <a href="{{ '/Nilai-Siswa' }}"
                        class="p-3 px-14 bg-primary-80 rounded-xl text-white text-[12px] text-md font-semibold lg:text-[14px]">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
