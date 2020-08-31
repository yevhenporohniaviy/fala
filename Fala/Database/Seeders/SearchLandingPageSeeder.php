<?php

namespace Themes\Fala\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Pages\Factories\PageFactory;
use Modules\Core\Pages\Services\PagesService;

/**
 * Class SearchLandingPageSeeder
 *
 * @package Themes\Fala\Database\Seeders
 */
class SearchLandingPageSeeder extends Seeder
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
            ->addHeader('page-header', ['title' => ['en' => 'Search Results']])
            ->addWidget('', [
                'widget' => 'search-results',
                'config' => [
                    'editable' => false,
                    'limit' => 20
                ],
                'data' => []
            ])
            ->compile();


        $pages->save($content, 'search.landing_page');
    }
}
