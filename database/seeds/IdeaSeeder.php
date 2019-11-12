<?php

use Illuminate\Database\Seeder;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Journey::all()->each(function (\App\Journey $journey) {
            factory(\App\Idea::class, 10)->create(['author_id' => $journey->id])->each(function(\App\Idea $idea) use ($journey) {
                $journey->ideas()->save($idea);
            });
        });
    }
}
