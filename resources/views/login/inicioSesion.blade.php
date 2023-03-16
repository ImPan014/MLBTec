<!DOCTYPE html>
<html>

<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #111;
            color: #ddd;
        }

        .card {
            background-color: #222;
            border-color: #dd8;
        }

        .card-header {
            background-color: #333;
            border-bottom-color: #dd8;
            color: #dd8;
        }

        .card-footer {
            background-color: #333;
            border-top-color: #dd8;
            color: #dd8;
        }

        input.form-control {
            background-color: #333;
            border-color: #dd8;
            color: #ddd;
        }

        input.form-control:focus {
            background-color: #333;
            border-color: #dd8;
            color: #ddd;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #dd8;
            border-color: #dd8;
            color: #111;
            transition: all 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #eee;
            border-color: #dd8;
            color: #111;
        }

        .text-gold {
            color: #dd8;
        }

        .fade-gold {
            background: linear-gradient(to bottom, rgba(221, 221, 136, 0) 0%, rgba(221, 221, 136, 0.3) 100%);
        }

        .logo {
            max-width: 400px;
            max-height: 200px;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-5 col-lg-4 mx-auto my-auto">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <img src="{{asset('images/imagen3.png')}}" alt="Logo" class="logo">
                        <!--<h1 class="text-gold mb-0">Inicio de sesión</h1>-->
                    </div>
                    <div class="card-body p-5 fade-gold">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo:</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Inicar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
