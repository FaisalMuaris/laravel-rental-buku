<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rental Buku - @yield('title')</title>

    <style>
        .main {
            height: 100vh;
        }

        .sidebar {
            background: rgb(66, 66, 66);
            color: #ffffff
        }

        .sidebar a {
            text-decoration: none;
            color: #ffffff;
            display: block;
            padding: 20px 10px;
        }

        .sidebar a:hover {
            background: black;
        }
    </style>
</head>

<body>

    <div class="main d-flex flex-column justify-content-between">
        @include('.layouts.navbar')

        <div class="body-content h-100">
            <div class="row g-0 h-100 ">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarNavAltMarkup">

                    @if (Auth::user()->role_id == 1)
                        <a href="/dashboard">Dashboard</a>
                        <a href="/books">Books</a>
                        <a href="/categories">Categories</a>
                        <a href="#">Users</a>
                        <a href="#">Rent Log</a>
                        <a href="/logout">Logout</a>
                    @else
                        <a href="/profile">Profile</a>
                        <a href="/logout">Logout</a>
                    @endif
                </div>
                <div class="content col-lg-10 p-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    {{-- @yield('content') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
