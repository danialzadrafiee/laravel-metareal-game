<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MetaReal</title>
    @routes
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body class="@conatiner" data-route="{{ Route::currentRouteName() }}>
    {{ $slot }}
</body>

</html>
