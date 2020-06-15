<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tour;
use Illuminate\Http\Request;

class AdminController extends Controller {
	function index() {
		$books = Tour::all();
		return view('admin.index', ["data" => $books]);
	}

	function form_add() {
		return view('admin.add');
	}

	function add(Request $request) {

		$request->validate([
			'name' => 'required|max:255',
			'typetour' => 'required',
			'photo' => 'required',
			'schedule' => 'required',
			'depart' => 'required',
			'number' => 'required',
			'price' => 'required',

		]);

		$name = $request->name;
		$image = $request->file('photo')->store("public");
		$typetour = $request->typetour;
		$schedule = $request->schedule;
		$depart = $request->depart;
		$number = $request->number;
		$price = $request->price;

		$book = new Tour;
		$book->name = $name;
		$book->image = $image;
		$book->typetour = $typetour;
		$book->schedule = $schedule;
		$book->depart = $depart;
		$book->number = $number;
		$book->price = $price;
		$book->save();
		return redirect()->route('admin.index', ["add" => "Thêm Thành Công"]);

	}
}
