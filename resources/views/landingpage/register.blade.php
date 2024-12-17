<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Tambahkan CSS tambahan -->
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
            padding-left: 45px; /* Jarak untuk ikon */
            height: 45px; /* Ketinggian seragam untuk semua input */
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
        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .social-buttons a {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
        }
        .social-buttons a.facebook {
            background-color: #3b5998;
        }
        .social-buttons a.twitter {
            background-color: #1da1f2;
        }
        .social-buttons a.google {
            background-color: #db4437;
        }
        .social-buttons a:hover {
            opacity: 0.8;
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
        <h2 class="text-center mb-4">Sign-Up</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Input Username -->
            <div class="form-control-with-icon">
                <i class="fa fa-user"></i>
                <input type="text" class="form-control" name="name" id="name" placeholder="Type your name">
            </div>
            <!-- Input Email -->
            <div class="form-control-with-icon">
                <i class="fa fa-envelope"></i>
                <input type="email" class="form-control" name="email" id="email" placeholder="Type your email address">
            </div>

            <div class="form-control-with-icon">
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Type your password">
            </div>

            <!-- Input Password -->
            <div class="form-control-with-icon">
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
            </div>
            <!-- Checkbox Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <!-- Tombol Sign Up -->
            <button type="submit" class="btn btn-main w-100">Sign Up</button>
            <!-- Tautan ke Halaman Login -->
            <p class="mt-3 text-center">Already have an account? 
                <a href="{{ url('landingpage/login') }}" class="text-main-600">Sign-In</a>
            </p>
        </form>
        <!-- Ikon Media Sosial -->
    </section>

    <!-- Tambahkan JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
