<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
</head>
<body>
    <nav>
        <x-nav-link href="/">home</x-nav-link>
        <x-nav-link href="/about">about</x-nav-link>
        <x-nav-link href="/contact">contact</x-nav-link>
        <x-nav-link href="/link">link</x-nav-link>
    </nav>
    {{$slot}}
    {{-- <?php echo $slot ?> --}}
</body>
</html>