@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf
    <div class="form">
    	<input type="hidden" name="id" value="{{ $conference->id }}">
        <label for="name"><b>Название конференции:</b></label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $conference->name }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="date"><b>Дата:</b></label>
        <input type="date" name="date" id="date" value="{{ old('date') ?? $conference->date }}">
        @error('date')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="time"><b>Время:</b></label>
        <input type="time" name="time" id="time" value="{{ old('time') ?? $conference->time }}">
        @error('time')
            <div>{{ $message }}</div>
        @enderror
    </div>    
    <button type="submit">Сохранить</button>
</form>
@endsection