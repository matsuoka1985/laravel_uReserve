<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        {{-- @livewireStyles --}}
</head>
<body>
    livewireテスト
        <div>


    </div>

    <span class="text-blue-100">register</span>
    {{-- <livewire:counter/> --}}
    @livewire('register')
    @livewireScripts
</body>
</html>
