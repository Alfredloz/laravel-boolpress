<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPost = new Tag();
            $newPost->name = $faker->word();
            $newPost->save();
        }
    }
}
