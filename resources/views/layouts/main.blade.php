<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Perpustakaan Digital</title>
</head>
<body>
    <style>
    /* Styling untuk navbar */
    body{
        margin: 0;
        /* background-image: url('baju.jpg'); 
        background-size:30vh; */
    }
    .navbar {
        background-color: rgb(0, 115, 255);
        color: white;
        padding: 1px;
    }

    .navbar h1{
        margin-left: 100px;
    }
</style>

    <div class="navbar">
        <h1>Digital Perpustakaan</h1>
    </div>
    <div>
        @yield('container')
    </div>
</body>
</html>