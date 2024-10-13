@extends('layouts.main')
@section('content')
<h1>Репорты</h1>
@foreach($reports as $report)
<div class="report">
    {{$report["number"]}}
    {{$report["description"]}}
</div>
@endforeachgit
@endsection()