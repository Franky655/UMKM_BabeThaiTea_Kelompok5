<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
<<<<<<< HEAD
           'name' => 'Bioskopy',
           'email' => 'bioskopy@gmail.com',
=======
           'name' => 'Admin',
           'email' => 'Admin@gmail.com',
>>>>>>> origin/TengkuMR
           'password' => Hash::make('123')
       ]);
    }
}
