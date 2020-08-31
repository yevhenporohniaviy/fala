<?php

namespace Themes\Fala\Pages\Faq;

use Modules\Core\Pages\AbstractPage;

/**
 * Class LandingPage
 * @package Themes\Fala\Pages\Faq
 */
class LandingPage extends AbstractPage
{
    /**
     * @return array|mixed
     */

    /**
     * Get page content
     * @return array|mixed
     */
    public function toArray()
    {
        return $this->content;
    }

    /**
     * Extract header from content
     * @return mixed
     */
    public function getHeader()
    {
        return $this->content['header'];
    }

    /**
     * Get SimpleTextWidget content
     * @return array|mixed
     */
    public function getSimpleText()
    {
        return $this->extractWidget('simple-text');
    }
}
