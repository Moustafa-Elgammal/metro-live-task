<?php

use src\interfaces\OfferCollectionInterface;

function count_by_price_range($from, $to, OfferCollectionInterface $collection): void
{
    $counter = 0;

    $iterator = $collection->getIterator();
    while ($iterator->valid()) {
        //
        if ($iterator->current()->price >= $from && $iterator->current()->price <= $to)
            $counter++;

        $iterator->next();
    }

    echo "$counter\n";
}
