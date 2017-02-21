<?php

use Illuminate\Database\Seeder;
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
        User::create([
            'name'=>'ADMIN',
            'type_user'=>'admin',
            'email'=>'admin@crash.com',
            'password'=>bcrypt('admin1234#'),
            ]);
        User::create([
            'name'=>'HRD',
            'type_user'=>'hrd',
            'email'=>'hrd@crash.com',
            'password'=>bcrypt('hrd1234#'),
            ]);
    }
}
