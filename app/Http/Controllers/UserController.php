<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Conference;
use App\Http\Resources\UserResourse;

class UserController extends Controller
{
  function index() {
		$users = User::all(); 

		return view("users", ["rows" => $users, "conferences" => Conference::all()]);
	}

	function add() {

		return view("add_user", ["conferences" => Conference::all()]);
	}
  function view(User $user) {
		return view("user", ["user" => $user]);
	}
  function edit(User $user) {
		return view("edit_user", ["user" => $user, "conferences" => Conference::all()]);
	}
  function store(Request $request) {
		$request->validate([
            "id" => "nullable|exists:users",
            'name' => 'required|min:2',
            'lastname' => 'required',
            'city' => 'required',
            'email' => 'required|email',
            "conference" => "required|exists:conferences,id",
            "delite_at" => "nullable"
        ], [
            'name.required' => 'Вы не ввели имя',
            'name.min' => 'В имени должно быть минимум :min символа.',
            'lastname.required' => 'Вы не ввели фамилию', 
            'email.required' => 'Вы не ввели email',
            'email.email' => 'Неправильно введен email',
            "conference" => "Выберете конференцию!",
        ]);

		$arr = $request;

		$user = User::find($arr->id) ?? new User;
		$user->name = $arr->name;
    $user->lastname = $arr->lastname;
    $user->city = $arr->city;
    $user->email = $arr->email;
		$user->conference_id = $arr->conference;
		$user->save();

		return redirect('/users')->with('success', 'Запись успешно создана!');
	}
  function drop(User $user) {
    $user->delete();
    return redirect('/users')->with('success', 'Запись успешно удалена!');
	}
}
