<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitter clone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <main class="flex h-screen items-center">
          <section class="w-1/2 flex content-center justify-center items-center p-12 h-screen bg-blue-500">
            <ul>
             <li class="mb-12 text-xl font-bold text-white">
                 <svg style="width: 25px; display:inline; fill: none; stroke: white" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-1q142lx r-1blvdjr r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                Follow your interests.
             </li>
             <li class="mb-12 text-xl font-bold text-white">
                <img src="./img/icons8-user-groups-64.png" alt="" style="width: 25px; display:inline"> Hear what people are talking about.</li>
             <li class="mb-12 text-xl font-bold text-white">
             <img src="./img/icons8-hangouts-64.png" alt="" style="width: 25px; display:inline">
               Join the conversation.</li>
            </ul>
          </section>
          <section class="w-1/2 flex content-center justify-center items-center relative h-screen">
            <div class="absolute top-0 md:w-full xl:w-8/12">
               <form class="w-full inline-flex" action="/login" method="post" name="login-form">
                 @csrf
                <div class="w-1/3 p-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Email
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" placeholder="Jane" name="email" required>
                   @error('email')
                  <p class="text-red-500 text-xs italic">Please enter a valid email.</p>
                  @enderror
                </div>
                <div class="w-1/3 p-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Password
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="Password" name="password" required>
                  @error('password')
                  <p class="text-red-500 text-xs italic">Please choose a password.</p>
                  @enderror
                </div>
                <div class="w-1/3 p-3 mt-5">
                    <div class="">
                      <button class="my-2 w-full block p-2 border border-blue-300 text-blue-400 bg-white-500 text-white font-bold rounded-br-full rounded-tr-full rounded-tl-full rounded-bl-full" type="submit">
                        Login
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="flex-1 content-center sm:w-10/12 xl:w-8/12 m-auto absolute">
                <h2 class="mb-5 text-2xl font-extrabold text-gray-600">See what's happening in <br>the world right now</h2>
                  <p class="font-bold text-gray-800">Join Twitter today.</p>
                  <footer>
                    <form class="w-full" action="{{ route('register') }}" method="post" >
                      @csrf
                      <div class="pt-5">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                          {{ __('Name') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" type="text" placeholder="Jane" name="name" required>
                        @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="pt-5">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                          {{ __('E-Mail Address') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="email" required>
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="pt-5">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          {{ __('Password') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="password" required>
                        @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                      </div>
                       <div class="pt-5">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-confirm-password">
                          {{ __('Confirm Password') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-confirm-password" type="password" name="password_confirmation" placeholder="password" required>
                      </div>

                      <div class="pt-5">
                         <button type="submit" class="text-center my-2 w-64 block p-2 bg-blue-500 text-white font-bold rounded-sm rounded-br-full rounded-tr-full rounded-tl-full rounded-bl-full">
                          Sign up
                      </button>
                      </div>
                    </form>
                  </footer>
            </div>
          </section>
        </main>
    </body>
</html>
