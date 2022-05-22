<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    // Create admin
    User::create([
      'firstname'   => 'Iyanju',
      'lastname'    => 'Admin',
      'othername'   => 'User',
      'displayname' => 'Iyanju',
      'email'       => 'admin@iyanju.com',
      'password'    => Hash::make('12345678'),
      'created_at'  => now(),
    ]);
  }
}
