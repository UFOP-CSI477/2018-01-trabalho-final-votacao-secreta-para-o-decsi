<?php

use Illuminate\Database\Seeder;
use App\Voter;
class VoterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voter::create([
            'topic_id' =>'1',
            'user_id' =>'1',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Voter::create([
            'topic_id' =>'2',
            'user_id' =>'1',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Voter::create([
            'topic_id' =>'3',
            'user_id' =>'1',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Voter::create([
            'topic_id' =>'4',
            'user_id' =>'1',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        
    }
}
