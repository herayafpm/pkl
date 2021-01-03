<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['username' => 'admin', 'nama' => 'admin', 'password' => bcrypt('123456')]);
    }
}
