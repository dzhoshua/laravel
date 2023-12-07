<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Conference;
use App\Http\Resources\ConferenceResourse;

class ConferenceController extends Controller
{
    function index() {
		$conferences = Conference::all();
		return view("conferences", ["rows" => $conferences]);
	}

	function add() {
		return view("add_conference");
	}
	
	
	function view(Conference $conference) {
		return view("conference", ["conference" => $conference]);
	}

	function edit(Conference $conference) {
		return view("edit_conference", ["conference" => $conference]);
	}

	function store(Request $request) {
		$request->validate([
			"id" => "nullable|exists:conferences",
			"name" => "required",
			"date" => "required",
			"time" => "required",
			"delite_at" => "nullable"
		], [
			"name" => "Укажите название конференции!",
			"date" => "Укажите дату!",
			"time" => "Укажите время!"
		]);

		$arr = $request;

		$conference = Conference::find($arr->id) ?? new Conference;
		$conference->name = $arr->name;
		$conference->date = $arr->date;
		$conference->time = $arr->time;
		$conference->save();

		return redirect('/conferences')->with('success', 'Конференция успешно создана!');
	}
		
	function drop(Conference $conference) {
	
		$users = User::all();
		foreach ($users as $user) {
			if ($user->conference_id == $conference->id)
				$user->delete();
		}
		$conference->delete();
		return redirect('/conferences')->with('success', 'Конференция успешно!');
	}
}
