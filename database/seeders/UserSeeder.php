<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        for ($i=1; $i <5 ; $i++) { 
                 User::create([
                'name' => Str::random(10),
                'email' => 'user'.$i.'@gmail.com',
                'password' => '1234',
            ]);
        }
    }
}
