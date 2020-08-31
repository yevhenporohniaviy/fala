<?php

namespace Themes\Fala\Widgets\StudieSlider;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\Core\Sliders\Repositories\Contracts\SlidersRepository;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\HomepageSlider
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
            'editable' => true,
            'is_visible' => true,
            'is_applied' => false
        ],
        'data' => [
            'hash' => '',
            'slider' => false,
            'title' => [
                'en' => 'Test title'
            ],
            'description' => [
                'en' => 'Text Description'
            ],
        ],
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data = $this->config['data'];
        $slider_id = $data['slider'];
        $slider = $slider_id ? \App::make(SlidersRepository::class)->find($slider_id) : false;

        $return = $slider ? [
            'slides' => $slider->slides,
            'page' => $data
        ] : false;

        return $return? view($this->getPath('StudieSlider'), $return): false;
    }
}
