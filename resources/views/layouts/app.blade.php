<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('./js/app.js') }}" type="module" defer></script>
    <title>@yield("titre")</title>
</head>
<body class="bg-gray-200">
    @yield("content")


</body>
</html>
