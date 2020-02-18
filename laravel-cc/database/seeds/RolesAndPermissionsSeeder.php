<?php

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
	    // Reset cached roles and permissions
	    app()['cache']->forget('spatie.permission.cache');

	    
	    Role::create(['name' => 'user']);
	    /** @var \App\User $user */
	    $user = factory(\App\User::class)->create();

	    $user->assignRole('user');
	    Role::create(['name' => 'admin']);

	    /** @var \App\User $user */
	    $admin = factory(\App\User::class)->create([
	        'name' => 'Admin',
	        'email' => 'admin@email.com',
	    ]);

	    $admin->assignRole('admin');
	}
}
