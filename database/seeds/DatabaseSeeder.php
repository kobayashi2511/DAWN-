<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => '初期ユーザー',
            'mail' => 'test@mail.com',
            'password' => 'password',
        ]);
    }
}
