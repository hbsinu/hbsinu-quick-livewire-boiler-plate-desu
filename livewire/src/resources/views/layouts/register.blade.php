<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('panel.site_title') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @livewireStyles

</head>
<body>
    <main>
        {{ $slot }}
    </main>

    @livewireScripts

</body>
</html>
