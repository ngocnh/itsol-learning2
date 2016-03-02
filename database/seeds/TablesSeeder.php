<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use App\Entities\Role;

class TablesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'Administrator'
        ]);

        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => \Hash::make('admin'),
            'role_id' => $role->id
        ]);
    }
}
