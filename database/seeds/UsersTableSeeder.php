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
        $user= App\User::create([
            'name' =>'temi ojo',
            'email' => 'temi@temi.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id'=> $user->id,
            'about' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime corporis ex nostrum ipsa, a dolorum, saepe obcaecati porro aspernatur molestias at tempore cupiditate veniam. Atque molestiae animi deserunt asperiores!
            '
        ]);
    }
}
