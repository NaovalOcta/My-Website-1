<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Naoval Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-dark-bg text-gray-300 font-sans antialiased min-h-screen flex items-center justify-center relative overflow-hidden">

    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-primary/10 rounded-full blur-[100px] -z-10 animate-float">
    </div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600/10 rounded-full blur-[100px] -z-10 animate-float"
        style="animation-delay: 2s;"></div>

    <div class="w-full max-w-md px-6">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white"><span class="text-primary">Naoval</span>Dev.</h1>
            <p class="text-sm text-gray-500 mt-2">Admin Dashboard Access</p>
        </div>

        <div
            class="bg-card-bg border border-gray-800 rounded-3xl p-8 shadow-2xl relative overflow-hidden backdrop-blur-sm">
            <div
                class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary to-transparent opacity-50">
            </div>

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <h2 class="text-xl font-bold text-white mb-6 text-center">Welcome Back! 👋</h2>

                <div class="mb-5">
                    <label for="email" class="block text-xs font-medium text-gray-400 uppercase mb-2 ml-1">Email
                        Address</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="far fa-envelope text-gray-500 group-focus-within:text-primary transition"></i>
                        </div>
                        <input type="email" id="email" name="email" required autofocus
                            class="w-full bg-dark-bg border border-gray-700 text-white text-sm rounded-xl pl-11 pr-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder-gray-600"
                            placeholder="Admin Email">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block text-xs font-medium text-gray-400 uppercase mb-2 ml-1">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-500 group-focus-within:text-primary transition"></i>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full bg-dark-bg border border-gray-700 text-white text-sm rounded-xl pl-11 pr-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder-gray-600"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between mb-8 text-sm">
                    <label class="flex items-center text-gray-400 hover:text-white cursor-pointer transition">
                        <input type="checkbox" name="remember"
                            class="form-checkbox rounded bg-dark-bg border-gray-700 text-primary focus:ring-primary h-4 w-4 mr-2">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="text-primary hover:text-orange-400 transition">Forgot Password?</a>
                </div>

                <button type="submit"
                    class="w-full py-3.5 bg-gradient-to-r from-primary to-orange-600 text-white font-bold rounded-xl shadow-lg shadow-orange-500/20 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 flex justify-center items-center gap-2">
                    <span>Sign In</span>
                    <i class="fas fa-arrow-right text-sm"></i>
                </button>
            </form>
        </div>

        <p class="text-center text-gray-500 text-sm mt-8">
            &larr; <a href="{{ url('/') }}" class="hover:text-primary transition">Back to Homepage</a>
        </p>
    </div>

</body>

</html>
