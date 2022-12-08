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
    <link rel="shortcut icon" href="/img/rpl.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <a href="#" class="logo">Landing<span>Laptop</span></a>

        <ul class="navlist">
            <li><a href="/">Home</a></li>
            <li><a href="/data">Landing</a></li>
            <li><a href="/create">New</a></li>
        </ul>

        <div class="icons">
            <a href="#"><i class='bx bx-search-alt-2'></i></a>
        </div>
    </header>
    <div class="gam mx-5">
        <table class="table table-striped table-bordered ">
            <tr>
                <td>NIS</td>
                <td>Name</td>
                <td>Rayon</td>
                <td>Rombel</td>
                <td>Purposes</td>
                <td>Date</td>
                <td>Return Date</td>
                <td>Teacher</td>
                <td>Action</td>
            </tr>
            @foreach ($laptops as $laptop)
                <tr class="table-rows">
                    <td>{{ $laptop['nis'] }}</td>
                    <td>{{ $laptop['name'] }}</td>
                    <td>{{ $laptop['rayon'] }}</td>
                    <td>{{ $laptop['rombel'] }}</td>
                    <td>{{ $laptop['purposes'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($laptop['date'])->format('j F, Y') }}</td>
                    @if ($laptop['return_date'] == null)
                        <td class="text-warning">Belum dikembalikan</td>
                    @else
                        <td class="text-warning">{{ \Carbon\Carbon::parse($laptop['return_date'])->format('j F, Y') }}
                        </td>
                    @endif
                    <td>{{ $laptop['teacher'] }}</td>
                    <td class="d-flex">
                        @if ($laptop['return_date'] == null)
                            <form action="/done/{{ $laptop['id'] }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning text-white"><i
                                        class="bi bi-check2-all"></i></button>
                            </form>
                        @endif
                        <form action="/delete/{{ $laptop['id'] }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger text-white me-2"><i
                                    class="bi bi-eraser-fill"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <!----custom js link--->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
