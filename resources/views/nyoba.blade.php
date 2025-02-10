<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>
        
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 mt-1 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full p-2 mt-1 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full p-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>