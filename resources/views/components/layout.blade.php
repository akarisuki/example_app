<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport"
          content="width=device-width,user-scalable, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
    <link href="/css/app.css" rel="stylesheet">
    <title>{{ $title ?? 'つぶやきアプリ'}}</title>
    @stack('css')
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>
</html>