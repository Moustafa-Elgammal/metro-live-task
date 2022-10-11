<?php

class CommandsTest extends \PHPUnit\Framework\TestCase
{

    public function test_count_by_price_range_command()
    {
        $this->assertEquals("3",exec("php run.php count_by_price_range 0 4000"));
    }

    public function test_count_by_vendor_id_command()
    {
        $this->assertEquals("2",exec("php run.php count_by_vendor_id 35"));
    }
}
