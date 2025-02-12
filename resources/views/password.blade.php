@extends('components.main')
@section('main')

    <main class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-700">Forgot Password?</h2>
            <p class="mt-2 text-center text-gray-600">Enter your email to reset your password</p>

            <form action="#" class="mt-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input type="email" id="email" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Enter your email">
                </div>

                <button type="submit" class="w-full py-2 mt-6 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                    Send Reset Link
                </button>

                <div class="mt-4 text-sm text-center text-gray-600">
                    <a href="/" class="text-blue-500 hover:underline">Back to Login</a>
                </div>
            </form>
        </div>
    </main>

@endsection
