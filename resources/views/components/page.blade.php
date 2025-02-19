<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script   script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex h-screen">
    <div class="w-64 h-screen bg-white border-r shadow-md flex flex-col items-center p-4">
      <!-- Logo -->
      <div class="mb-4 flex flex-col items-center w-full">
          <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="Logo" class="w-20 h-20 object-contain">
          <span class="text-sm font-semibold">Special Order System</span>
      </div>

      <hr class="w-full border-gray-300 mb-4">

      <!-- Navigation -->
      <nav class="w-full">
          <ul class="space-y-2">
              <li>
                  <a href="#" class="flex items-center px-4 py-2 text-white bg-red-500 rounded-lg">
                      Dashboard
                  </a>
              </li>
              <li>
                  <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-lg">
                      Transaction
                  </a>
              </li>
              <li>
                  <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-lg">
                      Announcement
                  </a>
              </li>
              <li>
                  <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-lg">
                      Resources
                  </a>
              </li>
          </ul>
      </nav>
  </div>
  <div class="flex-1 flex flex-col">
    <!-- Navbar -->
    <div class="h-36 bg-white text-white flex items-center justify-between px-6">
        <div class="flex flex-col">
            <h1 class="text-2xl font-semibold text-black">
                Welcome Back, <span class="italic">(Name)</span>!
            </h1>
            <!-- Line Separator -->
            <div class="w-48 border-t border-gray-400 my-1"></div>
            <!-- Special Order System -->
            <p class="text-gray-500 text-sm">Special Order System</p>
        </div>
        <div class="flex space-x-4">
            <!-- Search Input -->
            <input type="text" placeholder="Search..." class="px-4 py-2 rounded-lg text-black border-1 border-gray-900">
            <!-- Notification Button -->
            <button class="p-2 bg-gray-200 text-blue-500 rounded-lg hover:bg-gray-300">🔔</button>
            <!-- User Profile Button -->
            <button class="p-2 bg-gray-200 text-blue-500 rounded-lg hover:bg-gray-300">👤</button>
        </div>
    </div>
    @yield('page')
</body>
</html>
