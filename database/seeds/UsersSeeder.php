<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample admin
        DB::table('users')->insert([
          'name'      => 'Admin',
          'email'     => 'admin@gmail.com',
          'password'  => bcrypt('secret'),
          'role'      => 'admin'
        ]);

        // sample customer
        DB::table('users')->insert([
          'name'      => 'Customer',
          'email'     => 'customer@gmail.com',
          'password'  => bcrypt('secret'),
          'role'      => 'customer'
        ]);
    }
}
