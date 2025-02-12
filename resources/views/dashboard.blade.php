@extends('components.page')
@section('page')

    <main class="">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-bold">Curriculum Year</h2>
            </div>

            <div class="bg-green-500 text-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-bold">S.O Application</h2>
            </div>

            <div class="bg-red-500 text-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-bold">Rejected</h2>
            </div>

            <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-bold">Discrepancy</h2>
            </div>
        </div>
    </main>

@endsection
