<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $austin = User::create([
            'first_name' => 'Austin',
            'last_name'  => 'Andrews',
            'email'      => 'a5mercuryhu@gmail.com',
            'password'   => Hash::make('password'),
        ]);

        $bob = User::create([
            'first_name' => 'Bob',
            'last_name'  => 'Smith',
            'email'      => 'bobbert@email.com',
            'password'   => Hash::make('password'),
        ]);

        $coach = User::create([
            'first_name' => 'Coach',
            'last_name'  => 'Rags',
            'email'      => 'coach@harding.edu',
            'password'   => Hash::make('scud'),
            'is_super'   => true,
        ]);
    }
}
