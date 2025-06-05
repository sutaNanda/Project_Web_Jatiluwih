<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            display: flex;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 700px;
            max-width: 90%;
        }
        .login-image {
            flex: 1;
            background-image: url('https://www.stabilitas.id/wp-content/uploads/WhatsApp-Image-2022-05-02-at-9.11.09-PM-1.jpeg'); /* Gambar random sementara */
            background-size: cover;
            background-position: center;
        }
        .login-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h2 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .btn-login {
            background-color: #3b7c74;
            color: white;
            border: none;
        }
        .btn-login:hover {
            background-color: #34665f;
        }
        .forgot-password {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-image"></div>
        <div class="login-form">
            <h2>Welcome</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-login w-100">Login</button>
                <div class="forgot-password">
                    <a href="#">Forget Your Password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
