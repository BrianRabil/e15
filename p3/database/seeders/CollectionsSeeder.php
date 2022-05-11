<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author; # ← NEW
use App\Models\Collection;
use Faker\Factory; # ← NEW

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # https://fakerphp.github.io
        $this->faker = Factory::create();

        # Array of author data to add
        $collections = [
            'Default Collection',
            'Battle Collection 1',
            'Battle Collection 2',
            'Favorites',
        ];

        $count = count($collections);

        # Loop through each author, adding them to the database
        foreach ($collections as $collection_name) {
            $collection = new Collection();

            $collection->created_at = $this->faker->dateTimeThisMonth();
            $collection->updated_at = $this->faker->dateTimeThisMonth();
            $collection->name = $collection_name;
            $collection->description = $this->faker->realText(100);

            $collection->save();

            $count--;
        }
    }
}
