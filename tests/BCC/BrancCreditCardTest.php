<?php

namespace BCC;

use PHPUnit\Framework\TestCase;

final class BrandCreditCardTest extends TestCase
{
    public function provider()
    {
        return array(
            array('visa', '4539778873341120'),
            array('master', '5533093008993479'),
            array('amex', '341607632839486'),
            array('dinners', '30344401017765'),
            array('hipercard', '6062820640453968'),
            array('elo', '6362970000457013'),
            array('aura', '5078601870000127985')
        );
    }

    /**
     * @dataProvider provider
     * @param $brand
     * @param $number
     */
    public function testBrand($brand, $number)
    {
        $this->assertEquals($brand, BrandCreditCard::getBrand($number));
    }
}