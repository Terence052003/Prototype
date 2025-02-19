@extends('components.main')
@section('main')
    @include('components.page')
    @include('components.school')
    <div class="flex overflow-x-auto px-4">
        <div class="w-3/4">
            <table class="table">
                <tr class="bg-gray-300">
                    <th>ID</th>
                </tr>
                <tr>
                    <td>1</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
