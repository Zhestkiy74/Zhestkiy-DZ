@extends('layouts.main')
@section('content')
<h1>Заявка</h1>
<form method="PUT" action="{{ route('report.update') }}" class="bg-white p-6 rounded-lg shadow-md">
    @csrf <!-- Директива CSRF -->
    @method('PUT')
    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Описания заявки</label>
        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
           {{ isset($report) ? $report->description : '' }}
        </textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Обновить</button>
</form>
@endsection()