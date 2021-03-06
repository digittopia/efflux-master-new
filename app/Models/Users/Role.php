<?php

namespace App\Models\Users;
use App\Models\Models;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	//protected $connection = 'efflux_users';

	protected $table = 'efflux_users.roles';

	protected $fillable = ['name', 'description'];
	
	public function users() {
		return $this->belongsToMany('App\Models\Users\User', config('app.name') . '_users.user_role', 'role_id', 'user_id');
	}
}