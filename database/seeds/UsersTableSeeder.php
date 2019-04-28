<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_admin = Role::where('name','Admin')->first();
    	$role_powerUser = Role::where('name','PowerUser')->first();
    	$role_user = Role::where('name','User')->first();

    	$user = new User();
    	$user->name = 'admin user';
		$user->email = 'admin@gmail.com';
		$user->password = bcrypt('admin');
		$user->save();
		$user->roles()->attach($role_admin);

		$user = new User();
    	$user->name = 'power user';
		$user->email = 'poweruser@gmail.com';
		$user->password = bcrypt('poweruser');
		$user->save();
		$user->roles()->attach($role_powerUser);
		
		$user = new User();
    	$user->name = 'User';
		$user->email = 'user@gmail.com';
		$user->password = bcrypt('user');
		$user->save();
		$user->roles()->attach($role_user);
		

    }
}
