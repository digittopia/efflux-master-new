<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
	public function index() {
		return User::all();
	}
	public function create(Request $request) {
		Validator::make($request->all(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:mysql.users.users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		])->validate();
		return User::create([
			'first_name' => $request['name'],
			'email' => $request['email'],
			'username' => $request['email'],
			'password' => Hash::make($request['password']),
		]);
	}
	public function store(Request $request) {

	}
	public function show($id) {
		$user = User::find($id);
		return $user;
	}
	public function edit($id) {

	}
	public function update(Request $request, $id) {

	}
	public function destroy($id) {

	}
}