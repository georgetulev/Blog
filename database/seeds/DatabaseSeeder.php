<?php

use Illuminate\Database\Eloquent\Model;
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
        DB::table('users')->truncate();

        $users = array(
            ['id' => 1, 'name' => 'Name', 'email' => 'joro@example.com', 'password' => bcrypt('password')],
        );

        DB::table('users')->insert($users);

        Model::unguard();

        $this->call(TagTableSeeder::class);
        $this->call(PostTableSeeder::class);

        Model::reguard();
    }
}



