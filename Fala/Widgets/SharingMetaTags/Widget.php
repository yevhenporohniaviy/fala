<?php

namespace Themes\Fala\Widgets\SharingMetaTags;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\SharingMetaTags
 */
class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view($this->getPath('SharingMetaTags'), [
            'url' => $this->config['url'],
            'title' => $this->config['info']['meta_title'],
            'image' => $this->config['info']['shared_image'],
            'description' => $this->config['info']['meta_description']
        ]);
    }
}
