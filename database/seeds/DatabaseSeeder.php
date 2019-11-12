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
//        factory(\App\User::class, 5000)->create()->each(function(\App\User $user) {
//            factory(\App\Journey::class, 5)->create(['author_id' => $user->id])->each(function(\App\Journey $journey) use ($user) {
//                factory(\App\Idea::class, 10)->create(['author_id' => $user->id])->each(function(\App\Idea $idea) use ($journey) {
//                    factory(\App\JourneyIdea::class)->create(['journey_id' => $journey->id, 'idea_id' => $idea->id]);
//                });
//            });
//        });
        $this->call(UserSeeder::class);
        $this->call(JourneySeeder::class);
        $this->call(IdeaSeeder::class);
    }
}
