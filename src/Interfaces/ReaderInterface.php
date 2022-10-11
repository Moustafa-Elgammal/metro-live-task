<?php

namespace src\interfaces;

interface ReaderInterface
{
    /**
     * read method to parse the retrieved data from api into Offer collection
     * @param string $input
     * @return OfferCollectionInterface
     */
    public function read(string $input): OfferCollectionInterface;
}
