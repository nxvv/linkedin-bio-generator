<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkedIn Bio Generator</title>

    @vite('resources/css/app.css')

    @livewireStyles

</head>
<body>
    
    <nav class="bg-gray-600 px-2 sm:px-4 py-2.5">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center text-white text-2xl">
LinkedIn Bio Generator
</a>
        </div>
    </nav>

    <div class="mx-auto max-w-2xl">

        @livewire('show-form')

    </div>
  
    @livewireScripts

</body>
</html>
