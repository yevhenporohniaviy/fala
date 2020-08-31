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
 * Class EventsLandingPageSeeder
 * @package Themes\Fala\Database\Seeders
 */
class EventsLandingPageSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        $pages = app()->make(PagesService::class);
        $content = PageFactory::getBuilder()
            ->addHeader('page-header', ['title' => ['en' => 'Events Calendar']])
            ->compile();

        $pages->save($content, 'events.landing_page');
    }
}
