<?php
/**
 * Created: CyberChisel
 * Date: 16.07.18
 */

namespace Themes\Fala\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Pages\Factories\PageFactory;
use Modules\Core\Pages\Services\PagesService;

/**
 * Class EventCategoriesLandingPageSeeder
 * @package Themes\Fala\Database\Seeders
 */
class EventCategoriesLandingPageSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        $pages = app()->make(PagesService::class);
        $content = PageFactory::getBuilder()
            ->addHeader('page-header', ['title' => ['en' => 'Explore the World']])
            ->addWidget('', [
                'widget' => 'simple-text',
                'config' => [
                    'editable' => true
                ],
                'data' => [
                    'description' => [
                        'en' => 'Some simple text description',
                    ]
                ]
            ])
            ->addWidget('', [
                'widget' => 'event-categories-list',
                'config' => [
                    'editable' => false,
                    'limit' => 30
                ]
            ])
            ->compile();

        $pages->save($content, 'events.event_categories_page');
    }
}
