<!DOCTYPE html>
<html lang="de">
<head>
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-512x512.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="icon" type="image/x-icon" sizes="16x16" href="/favicons/favicon.ico">
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

