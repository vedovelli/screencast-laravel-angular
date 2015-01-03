<?php
// TODO adicionar error handling

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['fullname', 'username', 'email', 'password', 'city', 'state' ];
	protected $hidden = ['password', 'remember_token'];

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function list_users($limit = 10)
	{

		return $this->take($limit)->get();
	}

	public function get_user($id)
	{

		return $this->find($id);
	}

	public function save_user($input)
	{

		$user = $this->create($input);

		return $user;
	}

	public function update_user($id, $input)
	{

		$user = $this->find($id);

		$user->fill($input);

		$user->save();

		return $user;
	}

	public function delete_user($id)
	{

		$user = $this->find($id);

		$user->delete();

		return $user;
	}

}