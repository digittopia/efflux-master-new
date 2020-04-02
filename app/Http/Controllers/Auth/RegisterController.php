<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\user;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
	use RegistersUsers;
	protected $redirectTo = RouteServiceProvider::HOME;
	public function __construct() {
		$this->middleware('guest');
	}
	protected function validator(array $data) {
		return Validator::make($data, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:mysql.users.users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
	}
	protected function create(array $data) {
		return user::forceCreate([
			'first_name' => $data['name'],
			'email' => $data['email'],
			'username' => $data['email'],
			'password' => Hash::make($data['password']),
			'api_token' => Str::random(80),
		]);
	}
}
