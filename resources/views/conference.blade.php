@extends('layouts.app')

@section('content')

<p>
<div>Название конфренции: {{$conference->name ?? "N/A"}}</div>
</p>
<p>
<div>Дата: {{$conference->date ?? "N/A"}}</div>
</p>
<p>
<div>Время: {{$conference->time ?? "N/A"}}</div>
</p>
<p>
<a href="/conference/{{ $conference->id }}/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="{{ route('conferences.delete', $conference->id) }}">
@csrf
@method('DELETE')
<button type="submit">Удалить</button>
</form>
</p>



@endsection