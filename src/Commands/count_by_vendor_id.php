<?php

use src\interfaces\OfferCollectionInterface;

function count_by_vendor_id($vendorId, OfferCollectionInterface $collection): void
{
    $counter = 0;

    $iterator = $collection->getIterator();
    while ($iterator->valid()) {
        //
        if ($iterator->current()->vendorId == $vendorId)
            $counter++;

        $iterator->next();
    }

    echo "$counter\n";
}

