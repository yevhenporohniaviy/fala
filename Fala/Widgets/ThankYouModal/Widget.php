<?php

namespace Themes\Fala\Widgets\ThankYouModal;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\ThankYouModal
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
            'editable' => false
        ],
        'message' => '',
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view($this->getPath('ThankYouModal'), [
            'message' => $this->config['message']
        ]);
    }
}
