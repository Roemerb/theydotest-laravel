<?php

use App\Journey;
use Illuminate\Database\Seeder;

class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::all()->each(function (\App\User $user) {
            factory(Journey::class, 10)->create(['author_id' => $user->id]);
        });
    }
}
