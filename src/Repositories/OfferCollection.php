<?php

namespace src\Repositories;

use src\interfaces\OfferCollectionInterface;
use src\interfaces\OfferInterface;

class OfferCollection implements OfferCollectionInterface
{

    /** init the offers array
     * @param $array
     */
    public function __construct(private $array)
    {
    }

    /**
     * get specific offer
     * @throws \Exception
     */
    public function get(int $index): OfferInterface
    {
        if (!isset($this->array[$index]))
            throw  new \Exception("index not found");

        return $this->array[$index];
    }

    /** get Array iterator
     * of the offers collection
     * @return \Iterator
     */
    public function getIterator(): \Iterator
    {
        return new \ArrayIterator($this->array);
    }


    /**
     * get specific offer
     * @throws \Exception
     */
    public function getUsingIterator(int $index): OfferInterface
    {
        $iterator = $this->getIterator();
        while ($iterator->valid())
        {
            if ($iterator->current()->offferId == $index)
                return $iterator->current();

            $iterator->next();
        }

        throw new \Exception("Not found");
    }
}
