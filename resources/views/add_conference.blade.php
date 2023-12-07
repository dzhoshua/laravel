@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf
    <div class="form">
        <label for="name"><b>Название конференции:</b></label>
        <input type="text" name="name" id="name">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="date"><b>Дата проведения:</b></label>
        <input type="date" name="date" id="date">
        @error('date')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="time"><b>Время начала конференции:</b></label>
        <input type="time" name="time" id="time">
        @error('time')
            <div>{{ $message }}</div>
        @enderror
    </div> 
    <button type="submit">Создать</button>
</form>
@endsection