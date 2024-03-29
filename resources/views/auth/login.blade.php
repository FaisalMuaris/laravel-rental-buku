<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rental Buku | Login</title>

    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
        }

        .login-box {
            width: 500px;
            border: solid 2px;
            padding: 30px
        }

        form div {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">

        @if (session('status'))
            <div class="alert alert-danger" style="width: 500px">
                {{ session('message') }}
            </div>
        @endif

        @if (session('statusRegister'))
            <div class="alert alert-warning" style="width: 500px">
                {{ session('message') }}
            </div>
        @endif
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center">
                    Don't have account?<a href="/register"> <strong>Register Here!</strong></a>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
