<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-container img {
            display: block;
            margin: 0 auto 20px auto;
            width: 150px;
        }
        .form-control-with-icon {
            position: relative;
            margin-bottom: 20px;
        }
        .form-control-with-icon i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #6c757d;
        }
        .form-control-with-icon input {
            padding-left: 45px;
            height: 45px;
        }
        .btn-main {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            height: 45px;
        }
        .btn-main:hover {
            background-color: #0056b3;
        }
        .text-main-600 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <section class="form-container">
        <!-- Logo -->
        <a href="index.html" class="auth-right__logo">
            <img src="{{ asset('landingpage/images/resources/5.png')}}" alt="Logo">
        </a>
        <!-- Judul Form -->
        <h2 class="text-center mb-4">Sign-In</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Input Email atau Username -->
            <div class="form-control-with-icon">
                <i class="fa fa-user"></i>
                <input type="text" class="form-control" name="email" id="email" placeholder="Type your email" required>
            </div>
            <!-- Input Password -->
            <div class="form-control-with-icon">
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Type your password" required>
            </div>
            <!-- Checkbox Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <!-- Tombol Login -->
            <button type="submit" class="btn btn-main w-100">Login</button>
            <!-- Tautan ke Halaman Register -->
            <p class="mt-3 text-center">Don't have an account? 
                <a href="{{ url('landingpage/register') }}" class="text-main-600">Sign Up</a>
            </p>
        </form>
    </section>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Tambahkan JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
