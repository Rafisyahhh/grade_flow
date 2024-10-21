<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template</title>
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="p-5">
        <div class="flex-row justify-center">
            <div class="flex">
                <img 
                src="{{ asset('images/icon_dark.png') }}" 
                alt=""
                class="w-48">
            </div>
            <div class="flex">
                <img 
                src="{{ asset('images/ilustration.png') }}" 
                alt=""
                class="w-48">
            </div>
            
        </div>
       
        
        
    </div>
</body>
</html>