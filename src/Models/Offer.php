<?php

namespace src\Models;

use src\interfaces\OfferInterface;

class Offer implements OfferInterface
{

    /**
     * initiate offer object
     * @param int $offerId
     * @param string $productTitle
     * @param int $vendorId
     * @param float $price
     */
    public function __construct(
        public readonly int    $offerId,
        public readonly string $productTitle,
        public readonly int    $vendorId,
        public readonly float  $price
    )
    {
    }
}
