<?php

use App\catagories;
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
        $this->call([
            CatagoriesSeeder::class,
            BlogsSeeder::class,
            PlacesTableSeeder::class,
            TagsSeeder::class,
            UsersSeeder::class,
            HotelsTableSeeder::class,
            RoomsTableSeeder::class,
            PermissionSeeder::class,
            ImagesHotelTableSeeder::class,
            EmailSeeder::class,
            FeedbackTableSeeder::class,

            BillTabeSeeder::class,
            Bill_DetailTabeSeeder::class,
        ]);
    }
}
