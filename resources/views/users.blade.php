@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th>name</th>
        <th>lastname</th>
        <th>city</th>
        <th>email</th>
        <th>conference</th>
    </tr>
    @foreach ($rows as $row)
	<tr>
		<td><a href="/user/{{$row->id}}">{{$row->name  ?? "N/A"}}</a></td>
		<td>{{$row->lastname  ?? "N/A"}}</td>
        <td>{{$row->city  ?? "N/A"}}</td>
		<td>{{$row->email  ?? "N/A"}}</td>
        <td><a href="/conference/{{$row->conference->id}}">{{$row->conference->name  ?? "N/A"}}</a></td>
		
	</tr>
	@endforeach
	</table>
<p><a href="/user/add">Добавить пользователя</a></p>
</table>

@endsection