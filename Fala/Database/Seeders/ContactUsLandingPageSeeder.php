<?php

namespace Themes\Fala\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Pages\Factories\PageFactory;
use Modules\Core\Pages\Services\PagesService;
/**
 * Class ContactUsLandingPageSeeder
 * @package Themes\Fala\Database\Seeders
 */
class ContactUsLandingPageSeeder extends Seeder
{
    /**
     * @throws \Arrilot\Widgets\Misc\EncryptException
     * @throws \Arrilot\Widgets\Misc\InvalidWidgetClassException
     */
    public function run()
    {
        Model::unguard();
        $pages = app()->make(PagesService::class);
        $content = PageFactory::getBuilder()
            ->addHeader('page-header', ['title' => ['en' => 'Contact Us']])
            ->compile();

        $pages->save($content, 'contact_us.landing_page');
    }
}
