<?php

namespace Themes\Fala\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LandingPagesSeeder
 * @package Themes\Fala\Database\Seeders
 */
class LandingPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(HomepageLandingPageSeeder::class);
        $this->call(SearchLandingPageSeeder::class);
        $this->call(ContactUsLandingPageSeeder::class);
        $this->call(DynamicPagesLandingPageSeeder::class);
        $this->call(FaqLandingPageSeeder::class);
        $this->call(EventsLandingPageSeeder::class);
        $this->call(EventCategoriesLandingPageSeeder::class);
        $this->call(GalleryLandingPageSeeder::class);
    }
}
