##  Coding challenge task
* ### METRO Markets Live-Coding Task:
    Your task is to create a CLI script which will read JSON based data from a specific endpoint via HTTP. The script will contain several subcommands to filter and output the loaded data. The commands should be:
    
  * Find objects by price range (given price_from and price_to as arguments).
  
  * Find objects by a certain sub-object definition.
    
  All given sub-commands should only output quantity of objects that are in stock.

* For example:
  
    * php run.php count_by_price_range 12.00 145.80
  
    * php run.php count_by_vendor_id 42
    

  There are few technical requirements:
  * Use PHP or JVM languages.
  * Use any framework or do not use framework at all.
  * Implement the ReaderInterface for fetching the JSON HTTP endpoint and thus work with the `OfferCollectionInterface` and Of
  `Interface` on the loaded data (see below). Feel free to adjust or extend interfaces if needed.
  * Write at least one unit test for a small component of the script.
  * Implement logging.

* ### Appendix:
    List of interfaces you should implement (example in PHP):

    ```php
    <?php
  
    /**
     * The interface provides the contract for different readers
     * E.g. it can be XML/JSON Remote Endpoint, or CSV/JSON/XML local files
     */
    interface ReaderInterface {
        
       /**
        * Read in incoming data and parse to objects
        */
        public function read(string $input): OfferCollectionInterface;
    }
  
    /**
     * Interface of Data Transfer Object, that represents external JSON data
     */
    interface OfferInterface {}
    
    /**
     * Interface for The Collection class that contains Offers
     */
    interface OfferCollectionInterface {
        public function get(int $index): OfferInterface;
        public function getIterator(): Iterator;
    }
    ```

* ### Data response Shape:

    ```json
    
    [
        {
            "offerId": 123,
            "productTitle": "Coffee machine",
            "vendorId": 35,
            "price": 390.4
        },
        {
            "offerId": 124,
            "productTitle": "Napkins",
            "vendorId": 35,
            "price": 15.5
        },
        {
            "offerId": 125,
            "productTitle": "Chair",
            "vendorId": 84,
            "price": 230.0
        }
    ]
    ```
