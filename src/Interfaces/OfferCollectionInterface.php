<?php

namespace src\interfaces;

interface OfferCollectionInterface
{
    /**
     * get offer from array
     * @param int $index
     * @return OfferInterface
     */
    public function get(int $index): OfferInterface;

    /**
     * make an offers array as iterator
     * @return \Iterator
     */
    public function getIterator(): \Iterator;
}
