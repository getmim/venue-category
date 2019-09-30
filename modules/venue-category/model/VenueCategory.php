<?php
/**
 * VenueCategory
 * @package venue-category
 * @version 0.0.1
 */

namespace VenueCategory\Model;

class VenueCategory extends \Mim\Model
{

    protected static $table = 'venue_category';

    protected static $chains = [];

    protected static $q = ['name'];
}