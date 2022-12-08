<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Landing Laptop</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <header>
        <a href="#" class="logo">Landing<span>Laptop</span></a>

        <ul class="navlist">
            <li><a href="/">Home</a></li>
            <li><a href="/form">Landing</a></li>
        </ul>

        <div class="icons">
            <a href="#"><i class='bx bx-search-alt-2'></i></a>
        </div>
    </header>
    @yield('container')

    <!----custom js link--->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
