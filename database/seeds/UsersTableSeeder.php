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
        DB::table('users')->insert([
            'name' => 'Matthew',
            'email' => 'matt@matt.com',
            'imageFileName' => 'NULL',
            'password' => '$2y$10$sjogXXgXxrDOKBSCKRhTBe8WFl1uEtv9060PJRkYhsPk5BKbCp9Oi',
        ]);

        DB::table('users')->insert([
            'name' => 'Mark',
            'email' => 'mark@mark.com',
            'imageFileName' => 'Mark',
            'password' => bcrypt('markmark'),
        ]);
        
    }
}
