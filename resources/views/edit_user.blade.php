@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf
    <div class="form">
        <input type="hidden" name="id" value="{{ $user->id }}">
        <label for="name"><b>Имя:</b></label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $user->name }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="lastname"><b>Фамилия:</b></label>
        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') ?? $user->lastname }}">
        @error('lastname')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="city"><b>Город:</b></label>
        <select id="city" name="city">
            <option value="Иркутск">Иркутск</option>
            <option value="Ангарск">Ангарск</option>
            <option value="Братск">Братск</option>
        </select>
        @error('city')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="email"><b>Email:</b></label>
        <input type="email" name="email" id="email" value="{{ old('email') ?? $user->email }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="conference"><b>Конференция:</b></label>

        <select id="conference" name="conference" >
                @foreach ($conferences as $conference)
                <option value="{{ $conference->id }}">{{ $conference->name }}</option>
                @endforeach
            </select>
        @error('conference')
            <div>{{ $message }}</div>
        @enderror
    </div>   
    <button type="submit">Сохранить</button>
</form>
@endsection