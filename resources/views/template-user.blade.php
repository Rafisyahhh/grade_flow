<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/icon-web.png')}}" type="image/x-icon">
    <title>GradeFlow</title>
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="p-5 font-poppins">
        <div class="flex flex-col">
            <div class="flex justify-center lg:justify-start">
                <img src="{{ asset('images/icon_dark.png') }}" alt="" class="w-56 mx-10">
            </div>
            <div class="relative z-0">
                <div class="flex left-72 top-5 absolute">
                    <img src="{{ asset('images/polkadot.png') }}" alt="" class="w-[740px] hidden lg:block">
                </div>
            </div>
        </div>

        @yield('content')

    </div>
</body>

</html>
