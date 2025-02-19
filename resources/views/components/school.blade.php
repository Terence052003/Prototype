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
    <div class="flex">
        <!-- Cards Section (Reduced Width) -->
        <div class="w-3/4 max-w-4xl p-4"> <!-- CHANGED: Added w-3/4 and max-w-4xl -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-blue-100 p-4 rounded-2xl shadow-md flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">2024 - 2025</h1>
                            <span class="text-gray-500">▼</span>
                        </div>
                        <p class="text-gray-500 text-sm">Curriculum Year</p>
                    </div>
                    <div class="text-gray-600 text-3xl flex justify-end">🎓</div>
                </div>
    
                <!-- Card 2 -->
                <div class="bg-green-100 p-4 rounded-2xl shadow-md flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">1,0523</h1>
                        </div>
                        <p class="text-gray-500 text-sm">S.O Application</p>
                    </div>
                    <div class="text-gray-600 text-3xl flex justify-end">📄</div>
                </div>
    
                <!-- Card 3 -->
                <div class="bg-red-100 p-4 rounded-2xl shadow-md flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">436</h1>
                        </div>
                        <p class="text-gray-500 text-sm">Rejected</p>
                    </div>
                    <div class="text-gray-600 text-3xl flex justify-end">❌</div>
                </div>
    
                <!-- Card 4 -->
                <div class="bg-yellow-100 p-4 rounded-2xl shadow-md flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">3</h1>
                        </div>
                        <p class="text-gray-500 text-sm">Discrepancy</p>
                    </div>
                    <div class="text-gray-600 text-3xl flex justify-end">❗</div>
                </div>
            </div>
        </div>
        <!-- Right Side: Curriculum Year Panel (Aligned with Boxes) -->
        <div class="w-1/4 mt-4"> <!-- ADDED mt-4 to align with boxes -->
            @include('components.curriculumyear')
        </div>
    </div>
    @yield('school')
</body>
</html>