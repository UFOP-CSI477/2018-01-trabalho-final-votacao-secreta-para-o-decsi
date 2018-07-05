<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(TopicsTableSeeder::class);
         $this->call(VotedInTableSeeder::class);
         $this->call(VotesTableSeeder::class);
         $this->call(VoterTableSeeder::class);
    }
}
