<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            background: linear-gradient(270deg, #667eea, #764ba2, #ff6a88, #88d3ce);
            background-size: 800% 800%;
            animation: gradientShift 15s ease infinite;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-2xl">
        <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">Admin Login</h3>

        <div class="flex justify-center mb-4">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-semibold transition duration-300">
                ← Switch to User Login
            </a>
        </div>

        <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="text-gray-700 font-medium">Email</label>
                <input id="email" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="text-gray-700 font-medium">Password</label>
                <input id="password" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" name="remember">
                <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                    Remember me
                </label>
            </div>

            <!-- Forgot Password & Submit Button -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-semibold transition duration-300">
                        Forgot Password?
                    </a>
                @endif

                <button type="submit" class="ml-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300">
                    Log In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
