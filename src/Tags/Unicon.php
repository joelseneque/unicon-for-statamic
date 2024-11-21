<?php

namespace Palmiak\Unicon\Tags;

use Statamic\Tags\Tags;
use Illuminate\Support\Str;

class Unicon extends Tags
{
    /**
     * The {{ unicon }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $icon = icon($this->params->get('icon'));

        if($this->params->get('class')) {
            $classes = $this->params->get('class') . ' ' . config('unicon.defaults.class');
            $icon = Str::replace('<svg ', '<svg class="' . $classes . '" ', $icon);
        }

        return $icon;
    }
}
