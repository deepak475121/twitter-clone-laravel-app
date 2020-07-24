<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <div class="flex mx-16 h-full">
            <div class="flex-1 my-auto">
                <h1 class="text-4xl text-blue-500">Hello</h1>
                <p class="text-md">Welcome to twitter clone.</p>
            </div>
            <div class="flex-1 my-auto">
                <p class="text-sm">Alraedy have an account?</p>
                <form action="/login" method="post" class="text-xs">
                    @csrf
                    <input class="mt-2 w-64 block p-2 border-solid border border-gray-400" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                     @error('email')
                        <span class="invalid-feedback text-red-400" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="mt-2 w-64 block p-2 border-solid border border-gray-400" type="password" name="password" placeholder="Password" value="" required>
                    @error('password')
                        <span class="invalid-feedback text-red-400" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="my-2 w-64 block p-2 bg-blue-500 text-white font-bold" type="submit" value="Log In">
                </form>
                <p class="text-sm">Alraedy have aaccount?</p>
                <p class="text-xs text-gray-500">Sing up now to get your own personlized timeine.</p>
                <a href="/register" class="my-2 w-64 block p-2 bg-blue-500 text-xs text-center rounded-sm text-white font-bold">Sing Up</a>
            </div>
        </div>
    </div>
</body>
</html>