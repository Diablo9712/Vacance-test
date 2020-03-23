<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'nom' => 'admin',
            'tel' => '06999999',
            'numero' => 'ddd',
            'cin' => 'ddddd',
            'address' => 'ddddd',
            'password' => bcrypt('000000'),
        ]);
    }
}
