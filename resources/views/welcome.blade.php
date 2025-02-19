@extends('components.main')
@section('main')

    <main class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-">
            <div class="flex justify-center">
                <div class="flex w-24">
                  <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
              </div>
            <h2 class="text-2xl font-bold text-center text-gray-700 mt-6">Please Log In</h2>

            <form action="/dashboard" class="mt-2">
                <div>
                    <label class="input input-bordered flex items-center gap-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Username" />
                      </label>
                </div>

                <div class="mt-4">
                    <label class="input input-bordered flex items-center gap-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" value="password" />
                      </label>

                <button type="submit" class="w-full py-2 mt-6 text-white bg-red-400 rounded-lg hover:bg-red-300">Login</button>
                <p>Forgot password?
                    <a href="/password" class="text-blue-500 hover:underline">Click Here!</a>
                </p>
            </form>
        </div>
    </main>

@endsection
