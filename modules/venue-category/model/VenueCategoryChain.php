<?php
/**
 * VenueCategoryChain
 * @package venue-category
 * @version 0.0.1
 */

namespace VenueCategory\Model;

class VenueCategoryChain extends \Mim\Model
{

    protected static $table = 'venue_category_chain';

    protected static $chains = [
        'venue' => [
            'model' => 'Venue\\Model\\Venue',
            'field' => 'id'
        ],
        'venue_category' => [
            'model' => 'VenueCategory\\Model\\VenueCategory',
            'field' => 'id'
        ]
    ];

    protected static $q = [];
}