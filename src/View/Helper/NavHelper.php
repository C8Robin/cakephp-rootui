<?php

namespace RootUi\View\Helper;

use Cake\View\Helper;

class NavHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function navItem($label, $link, $icon = null, $active = null)
    {

        if ($active) {
            $navItem = '<li class="yay-item-active">';
        } else {
            $navItem = '<li>';
        }

        $navItem .= '<a href="' . $link . '">';

        if ($icon) {
            $navItem .= '<span class="yay-icon"><span data-feather="' . $icon . '" class="rui-icon rui-icon-stroke-1_5"></span></span>';
        }

        $navItem .= '<span>' . $label . '</span><span class="rui-yaybar-circle"></span>';
        $navItem .= '</a></li>';

        return $navItem;

    }

    public function navLabel($label)
    {
        return '<li class="yay-label">' . $label . '</li>';
    }

}