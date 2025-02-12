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
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
          <!-- Navbar -->
          <div class="navbar bg-base-300 w-full shadow">
            <div class="flex-none lg:hidden">
              <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  class="inline-block h-6 w-6 stroke-current">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </label>
            </div>
            <div class="mx-2 flex-1 px-2">Department of Education</div>
            <div class="hidden flex-none lg:block">
              <ul class="menu menu-horizontal">
                <!-- Navbar menu content here -->
                <li><a>Navbar Item 1</a></li>
                <li><a>Navbar Item 2</a></li>
              </ul>
            </div>
          </div>

          <div class="flex h-screen">
            <!-- Sidebar -->
            <div class="drawer lg:drawer-open w-80 bg-base-300 p-4 min-h-full">
              <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
              <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu text-base-content">
                  <li><a>Dashboard</a></li>
                  <li><a>Transaction</a></li>
                  <li><a>Announcement</a></li>
                  <li><a>Resources</a></li>
                </ul>
              </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 overflow-auto p-6">
              <p>@yield('page')</p>
            </div>
          </div>
    </div>
</body>
</html>
