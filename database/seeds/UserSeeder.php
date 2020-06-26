<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Daniel Pinto',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            //'auth' => 1,
            //'status' => 1,
          ]);
    }
}
