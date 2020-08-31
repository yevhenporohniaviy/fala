<?php

namespace Themes\Fala\Widgets\SummaryBlock;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Idb\Widgets\SummaryBlock
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
            'externalUrl' => [
                'en' => '/',
            ],
            'useLink' => true,
            'internalUrl' => [],
            'isExternal' => true,
            'icon' => '',
            'imgUrl' => [
                'en' => ''
            ],
            'title' => [
                'en' => 'Widget title',
            ],
            'description' => [
                'en' => 'Some widgets description text',
            ],
            'btnText' => [
                'en' => 'View more'
            ]
        ],
        'views' => ['default', 'beside-block', 'half-block', 'what-is-fa-cause','what-is-fa-ds'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view($this->getPath('SummaryBlock'), [
            'content' => $this->config['data']
        ]);
    }
}
