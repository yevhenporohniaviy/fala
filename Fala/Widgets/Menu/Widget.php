<?php

namespace Themes\Fala\Widgets\Menu;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\Core\MenuBuilder\Http\Services\MenuBuilderServices;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\Menu
 */
class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $type = array_first($this->config);
        return view(sprintf('widgets::Menu.views.%s', $type), [
            'menu' => $this->loadMenu($type)
        ]);
    }


    /**
     * Load main menu
     *
     * @param $alias
     * @return mixed
     */
    public function loadMenu($alias)
    {
        $repository = app()->make(MenuBuilderServices::class);
        return $repository->byAlias($alias);
    }
}
