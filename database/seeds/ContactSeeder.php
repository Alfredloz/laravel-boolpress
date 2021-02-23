<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newContact = new Contact();
            $newContact->img = $faker->imageUrl(640, 480, 'person', true);
            $newContact->name = $faker->name();
            $newContact->lastName = $faker->lastName();
            $newContact->country = $faker->country();
            $newContact->email = $faker->email();
            $newContact->about = $faker->text(300);
            $newContact->save();
        }
    }
}
