<?php

namespace src\Services;

use PhpParser\JsonDecoder;
use src\interfaces\OfferCollectionInterface;
use src\interfaces\ReaderInterface;
use src\Models\Offer;
use src\Repositories\OfferCollection;

class JsonReaderService implements ReaderInterface
{

    /** get A collections of offers
     * @param string $input
     * @return OfferCollectionInterface
     */
    public function read(string $input): OfferCollectionInterface
    {
        // this reader for json reader
        $inputArray = json_decode($input, false);

        $offers = [];
        foreach ($inputArray as $o){
            $offers[$o->offerId] = new Offer($o->offerId, $o->productTitle, $o->vendorId, $o->price);
        }

        return new OfferCollection($offers);
    }
}
