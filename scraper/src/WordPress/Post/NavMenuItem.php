<?php

/**
 * Represents a navigation menu item.
 */

namespace Scraper\WordPress\Post;

class NavMenuItem extends Base {
    /**
     * The WordPress post type which this class represents.
     *
     * @var string
     */
    protected static $postType = 'nav_menu_item';
}