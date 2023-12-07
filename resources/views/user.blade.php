@extends('layouts.app')

@section('content')

<p>
<div>Имя: {{$user->name ?? "N/A"}}</div>
</p>
<p>
<div>Фамилия: {{$user->lastname ?? "N/A"}}</div>
</p>
<p>
<div>Город: {{$user->city ?? "N/A"}}</a></div>
</p>
<p>
<div>Email: {{$user->email ?? "N/A"}}</div>
</p>
<p>
<div>Конференция: <a href="/conference/{{$user->conference->id}}">{{$user->conference->name}}</a></div>
</p>
<p>
<a href="/user/{{ $user->id }}/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="{{ route('users.delete', $user->id) }}">
@csrf
@method('DELETE')
<button type="submit">Удалить</button>
</form>
</p>

@endsection