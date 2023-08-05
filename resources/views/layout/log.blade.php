{{-- <style>
    body{
        background-image: url(jpgg/bg.jpg);
        background-size: cover;
        height: 92%;
        opacity: 100%;
        z-index: -2;
    }
    .bghitam{
        background: black;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        opacity: 50%;
        z-index: -3;
    }
</style> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Login||Siswa</title>
</head>
<body class="bg-dark">
    {{-- <div class="bghitam"></div> --}}
    <div class="container py-5 px-4" style="font-family: cursive;">
        @include('komponen/pesan')
        @yield('log')
    </div>
    
</body>
</html>