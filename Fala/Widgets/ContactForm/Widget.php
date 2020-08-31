<?php

namespace Themes\Fala\Widgets\ContactForm;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\ContactUs\Forms\ContactForm;
use Modules\Core\Settings\Repositories\Contracts\SettingsRepository;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\ContactForm
 */
class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'config' => [
            'editable' => true
        ],
        'data' => [
            'title' => [
                'en' => 'Contact form title',
            ],
        ],
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     * @param SettingsRepository $settings
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function run(SettingsRepository $settings)
    {
        return view($this->getPath('ContactForm'), [
            'content' => $this->config['data'],
            'form'   => new ContactForm($settings->findByPath('contact_form')->value)
        ]);
    }
}
