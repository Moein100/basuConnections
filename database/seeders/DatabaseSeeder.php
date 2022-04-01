<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(20)->create();
        Category::factory(4)->create();
        Status::factory()->create(['name' => 'Open' ,'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering','classes' => 'bg-purple-500 text-white']);
        Status::factory()->create(['name' => 'In Progress','classes' => 'bg-yellow-500 text-white']);
        Status::factory()->create(['name' => 'Implemented','classes' => 'bg-green-500 text-white']);
        Status::factory()->create(['name' => 'Closed','classes' => 'bg-red-500 text-white']);
        Idea::factory(100)->create();
        
        
        //generate unique votes.Ensure idea_id and user_id are unique for each row

        foreach(range(1,20) as $user_id)
        {
            foreach(range(1,100) as $idea_id)
            {
                if($idea_id % 2 == 0)
                {
                    Vote::factory()->create(
                        [
                        'user_id' => $user_id,
                         'idea_id' => $idea_id   
                        ]);
                }
            }
        }
    }
}
