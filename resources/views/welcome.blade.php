<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Fast Wifi') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, green, yellow);
        }
    </style>
</head>
<body class="antialiased">
    <div class="container text-center my-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/1.png') }}" alt="Fast Wifi Logo" style="width: 50px;">
                </a>

                <a class="navbar-brand" href="#">Fast Wifi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-primary">Login</a>
                            </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        <h1>Welcome to Fast Wifi</h1>

        <!-- Packages Section -->
        <div class="row mt-5">
            <h2>Access Fast and Affordable Packages</h2>

            <!-- Package Cards -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">MONTHLY UNLIMITED</h5>
                        <p class="card-text">Price: 1000/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Monthly 30 GB</h5>
                        <p class="card-text">Price: 500/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Daily 100 MB</h5>
                        <p class="card-text">Price: 5/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Daily 300 MB</h5>
                        <p class="card-text">Price: 10/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Daily 1 GB</h5>
                        <p class="card-text">Price: 20/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Daily 2 GB</h5>
                        <p class="card-text">Price: 30/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Weekly 2 GB</h5>
                        <p class="card-text">Price: 50/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">One Hour Unlimited</h5>
                        <p class="card-text">Price: 10/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Weekly Unlimited</h5>
                        <p class="card-text">Price: 300/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Daily Fast Unlimited</h5>
                        <p class="card-text">Price: 80/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Moderate Daily Unlimited</h5>
                        <p class="card-text">Price: 50/-</p>
                        <a href="#" class="btn btn-success">Pay via M-Pesa</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="mt-5">
            <p>Copyright © Fast Wifi</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
