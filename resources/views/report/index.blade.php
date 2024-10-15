@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Список отчетов</h1>

    @foreach($reports as $report)
    <a href="/reports/{{$report['id']}}">
        <div class="mb-2 p-4 bg-gray-100 rounded-lg">
            <p>{{$report["number"]}}</p>
            <p></p>{{$report["description"]}}</p>
        </div>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
    </a>
    @endforeach

    <div class="mt-6">
        <form method="POST" action="{{ route('reports.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf <!-- Директива CSRF -->

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Описание отчета</label>
                <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Создать</button>
        </form>
    </div>
</div>
@endsection