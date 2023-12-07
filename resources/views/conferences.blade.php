@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th>name</th>
        <th>date</th>
        <th>time</th>
    </tr>
    @foreach ($rows as $row)
	<tr>
		<td><a href="/conference/{{$row->id}}">{{$row->name  ?? "N/A"}}</a></td>
		<td>{{$row->date  ?? "N/A"}}</td>
        <td>{{$row->time  ?? "N/A"}}</td>
	</tr>
	@endforeach
	</table>
<p><a href="/conference/add">Добавить конференцию</a></p>
</table>

@endsection