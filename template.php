<?php

function limaio_get_menu() {

    $a = "";
    $menu = menu_tree_all_data('menu-limaio');

    $links = "";
    $cont = 1;
    foreach ($menu as $link) {
        $links .= '<li data-slide="' . $cont . '">' . $link['link']['link_title'] . '</li>';
        $cont++;
    }

    return $links;
}