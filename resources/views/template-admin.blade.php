<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/icon-web.png') }}" type="image/x-icon">
    <title>GradeFlow - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="{{ '/Data-Siswa' }}">Data Siswa</a>
                    </li>

                    <li class="flex items-center gap-4 text-light font-semibold">
                        <img src="{{ asset('images/grade.png') }}" alt="siswa">
                        <a href="{{ '/Data-Nilai' }}">Nilai Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- end sidebar --}}

        {{-- top bar --}}
        <div class="absolute bg-primary w-[1040px] ml-64 py-1 px-5 rounded-lg text-white left-68 shadow-md">
            <div class="dropdown dropdown-end float-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-10 rounded-full bg-white">
                    <img
                      alt="Tailwind CSS Navbar component"
                      src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                  </div>
                </div>
                <ul
                  tabindex="0"
                  class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-4 w-36 p-4 shadow text-dark text-md font-medium space-y-3">
                  <li><a>Settings</a></li>
                  <li><a class="text-red-600">Logout</a></li>
                </ul>
              </div>
            </div>
            {{-- end profile button --}}
        </div>
        {{-- end top bar --}}
    </div>

    @yield('content')
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
