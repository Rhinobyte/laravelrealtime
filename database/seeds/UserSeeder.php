<?php

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
        DB::table('users')->insert(['id' => 1, 'name'  => 'Administrador', 'email' => 'test@test.mx', 'password' => bcrypt('123456')]);
    }
}
