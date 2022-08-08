<?php

namespace BCCTest;

use PHPUnit\Framework\TestCase;
use BCC\BrandCreditCard;

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
            array('aura', '5078601870000127985'),
            array('discover', '6011031106078701'),
            array('dankort', '5019832931751691'),
            array('jcb', '3542737036413249'),
            array('maestro', '5038365696820911'),
            array('unionpay', '6297096924255869'),
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