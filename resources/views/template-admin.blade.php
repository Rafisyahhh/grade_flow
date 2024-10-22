<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/icon-web.png') }}" type="image/x-icon">
    <title>GradeFlow - Admin</title>
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- sidebar --}}
    <div class="relative p-5 font-poppins">
        <div class="absolute bg-primary shadow-md h-screen rounded-lg px-10 text-white">
            <div>
                <img src="{{ asset('images/logo_light.png') }}" alt="" class="w-40 py-5">
            </div>

            <div class="py-20">
                <ul class="space-y-12 flex flex-col justify-center text-[14px] tracking-wider">
                    <li class="flex items-center gap-4 text-light font-semibold">
                        <img src="{{ asset('images/student.png') }}" alt="siswa">
                        <a href="{{'/Data-Siswa'}}">Data Siswa</a>
                    </li>

                    <li class="flex items-center gap-4 text-light font-semibold">
                        <img src="{{ asset('images/grade.png') }}" alt="siswa">
                        <a href="{{'/Data-Nilai'}}">Nilai Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- end sidebar --}}

        {{-- top bar --}}
        <div class="absolute bg-primary w-[1040px] ml-64 py-2 px-5 rounded-lg text-white left-68 shadow-md">
            {{-- profile button --}}
            <div class="relative">
                <!-- Hidden checkbox untuk toggle -->
                <input type="checkbox" class="hidden peer" id="profile-toggle">

                <!-- Button -->
                <label for="profile-toggle"
                    class="bg-white flex float-end rounded-full w-10 h-10 cursor-pointer hover:bg-gray-100">
                    <img src="{{ asset('images/user.png') }}" alt="User" class="w-5 h-5 m-auto">
                </label>

                <!-- Dropdown Menu -->
                <div
                    class="absolute right-0 top-12 mt-2 w-36 bg-white rounded-lg shadow-xl py-2 z-10 hidden peer-checked:block">
                    <a href="" class="block px-4 py-2 text-[14px] text-dark hover:bg-gray-100">
                        Nama User
                    </a>
                    <hr class="px-5">
                    <form method="POST" action="">
                        @csrf
                        <button type="submit" class="w-full text-[14px] text-left px-4 py-2 text-red-600 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            {{-- end profile button --}}
        </div>
        {{-- end top bar --}}
    </div>

    @yield('content')
</body>

</html>
