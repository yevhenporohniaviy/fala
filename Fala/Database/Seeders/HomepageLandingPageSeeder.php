<?php

namespace Themes\Fala\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Pages\Factories\PageFactory;
use Modules\Core\Pages\Services\PagesService;

/**
 * Class HomepageLandingPageSeeder
 * @package Themes\Fala\Database\Seeders
 */
class HomepageLandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Arrilot\Widgets\Misc\EncryptException
     * @throws \Arrilot\Widgets\Misc\InvalidWidgetClassException
     */
    public function run()
    {
        Model::unguard();
        $pages = app()->make(PagesService::class);
        $content = PageFactory::getBuilder()
            ->addWidget('homepage-slider')
            ->addWidget('our-story')
            ->addWidget('what-is-fa')
            ->addWidget('diagnosed-slider')
            ->addWidget('treatments')
            ->addWidget('get-involved')
            ->addWidget('simple-text')
            ->addWidget('events-list')
            ->addWidget('subscribes')
            ->compile();

        $pages->save($content, 'home.landing_page');
    }
}
