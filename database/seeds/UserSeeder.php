<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $austin = DB::table('users')->insert([
            'first_name' => 'Austin',
            'last_name'  => 'Andrews',
            'email'      => 'a5mercuryhu@gmail.com',
            'password'   => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $bob = DB::table('users')->insert([
            'first_name' => 'Bob',
            'last_name'  => 'Smith',
            'email'      => 'bobbert@email.com',
            'password'   => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $coach = DB::table('users')->insert([
            'first_name' => 'Coach',
            'last_name'  => 'Rags',
            'email'      => 'coach@harding.edu',
            'password'   => Hash::make('scud'),
            'is_super'   => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
