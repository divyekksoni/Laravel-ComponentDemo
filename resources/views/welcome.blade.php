<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
    <div class="container">
        @php
            $jsonData = [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'age' => 30
            ];
        @endphp
        <x-parent-component :data="$jsonData"/>
    </div>
</body>
</html>