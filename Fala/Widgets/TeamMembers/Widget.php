<?php

namespace Themes\Fala\Widgets\TeamMembers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Kobe\Foundation\Widgets\BaseWidget;
use Modules\DynamicPages\Services\PageService;

/**
 * Class Widget
 * @package Themes\Idb\Widgets\TeamMembers
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

            'title' => [
                'en' => 'Our family'
            ],
            'btnText' => [
                'en' => 'meet us'
            ],
            'bgImg' => [
                'en' => ''
            ],
            'team' => null,
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
        return view($this->getPath('TeamMembers'), [
            'content' => $this->config['data'],
            'team' => $this->getTeam()
        ]);
    }

    /**
     * @return bool
     */
    private function getTeam()
    {
        $service = app()->make(PageService::class);
        if ($this->config['data']['team']) {
            try {
                $page = $service->getPage($this->config['data']['team'], 'team');
            } catch (ModelNotFoundException $e) {
                return false;
            }
            return $page;
        }
        return false;
    }
}
