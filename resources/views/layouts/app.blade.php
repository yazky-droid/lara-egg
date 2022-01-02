<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 | {{ $title }} @yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- ini pake isset, isset adalah kondisi jika true jalankan jika tidak yaudah gitu ga ngelakuin apa-apa --}}
    {{-- @isset($styles)
    {{ $styles }}
    @endisset --}}
    {{-- ini disetting biar default $styles nya null di AppLayout --}}
    {{ $styles }}
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <script src="/js/bootstrap.min.css"></script>
</body>
</html>
