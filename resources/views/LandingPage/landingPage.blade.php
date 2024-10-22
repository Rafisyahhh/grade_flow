@extends('template-user')
@section('content')
    <div class="relative z-40">
        <div class="flex justify-center py-24 lg:py-8">
            <div>
                <img src="{{ asset('images/ilustration.png') }}" alt="" class="w-[300px] lg:w-[330px]">
            </div>
        </div>

        <div class="flex justify-center px-5 lg:px-[370px]">
            <h2 class="text-[12px] text-center text-dark font-semibold lg:text-[17px]">
                Pantau Nilai Siswa secara Real-Time! Mudah, Cepat, dan Akurat untuk Mendukung Kesuksesan Akademik
            </h2>
        </div>

        <div class="flex justify-center py-20 lg:py-10">
            <a href="{{'/Login-Siswa'}}" class="p-3 px-16 bg-primary-80 rounded-xl text-white text-[12px] text-md font-semibold lg:text-[14px]" >
                Login Sekarang
            </a>
        </div>
    </div>
@endsection
