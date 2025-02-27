<!DOCTYPE html>
<html lang="de">
<head>
    <link rel=”shortcut icon” href =“/images/favicon.ico”>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <title>Dhammareise</title>
</head>
<body class="flex flex-col min-h-screen font-sans">
    <x-header/>
    <main class="flex-grow">
    {{ $slot }}
    </main>
    <div class="pt-4 pb-0">
    <x-footer/>
    </div>
</body>

</html>

