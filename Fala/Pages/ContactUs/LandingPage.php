<?php

namespace Themes\Fala\Pages\ContactUs;

use Modules\Core\Pages\AbstractPage;

/**
 * Class LandingPage
 * @package Themes\Fala\Pages\ContactUs
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
     * @return \Illuminate\Support\Collection
     */
    public function getContactForm(){
        return $this->extractWidget('contact-form');
    }
}
