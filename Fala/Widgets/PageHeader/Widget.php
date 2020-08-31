<?php

namespace Themes\Fala\Widgets\PageHeader;

use Kobe\Foundation\Widgets\BaseWidget;

class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'imgUrl' => [
            'en' => ''
        ],
        'title' => [
            'en' => 'Page title'
        ],
        'breadcrumbs' => false,
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Breadcrumbs items
     * @var array
     */
    protected $breadcrumbs = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $this->preparedBreadcrumbs();
        return view($this->getPath('PageHeader'), [
            'page' => $this->config,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }

    private function preparedBreadcrumbs()
    {
        if ($page = $this->config['breadcrumbs']) {
            $this->breadcrumbs[] = localeContent($page->translations)->title;
            if ($page->category) {
                $this->getParentTitle($page->category);
            }
            $this->breadcrumbs[] = localeContent($this->config['title']);
            $this->breadcrumbs = array_reverse($this->breadcrumbs);
        }
    }

    private function getParentTitle($item)
    {
        $this->breadcrumbs[] = localeContent($item->translations)->title;
        if ($item->parent) {
            $this->getParentTitle($item->parent);
        }
    }
}
