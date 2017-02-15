<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
                [
                        'name' => 'test1',
                        'email'=> 'test1@mail.ru',
                        'password' => Hash::make('test1'),
                ],
                [
                        'name' => 'test2',
                        'email'=> 'test2@mail.ru',
                        'password' => Hash::make('test2'),
                ],
                [
                        'name' => 'test3',
                        'email'=> 'test3@mail.ru',
                        'password' => Hash::make('test3'),
                ],
        ]);
    }
}
