<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="w-full max-w-4xl bg-white shadow-lg rounded-xl overflow-hidden flex flex-col md:flex-row">
        <!-- Gambar -->
        <div class="md:w-1/2 h-64 md:h-auto bg-cover bg-center"
             style="background-image: url('https://www.stabilitas.id/wp-content/uploads/WhatsApp-Image-2022-05-02-at-9.11.09-PM-1.jpeg')">
        </div>

        <!-- Form Login -->
        <div class="md:w-1/2 p-8 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Welcome</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="text" name="username" id="username" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <button type="submit"
                    class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                    Login
                </button>
                <div class="text-center mt-4">
                    <a href="#" class="text-sm text-green-600 hover:underline">Forget Your Password?</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
