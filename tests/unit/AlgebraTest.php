<?php
/**
 * Created by PhpStorm.
 * User: marku
 * Date: 5/14/2018
 * Time: 6:05 PM
 */

namespace MPT\Math;

use PHPUnit\Framework\TestCase;

class AlgebraTest extends TestCase
{
    /**
     * @dataProvider providerSrssData
     * @param $value1
     * @param $value2
     * @param $value3
     */
    public function testSrss($value1, $value2, $value3)
    {
        $expectedResult = sqrt(pow($value1, 2) + pow($value2, 2) + pow($value3, 2));
        $this->assertEquals($expectedResult, Algebra::srss([$value1, $value2, $value3]));
    }

    public function providerSrssData(){
        return array(
            array(0, 0, 0),
            array(0, 0, 1),
            array(1, 1, 1),
            array(3, 5.5, 12),
            array(3, -5.5, 12),
        );
    }
}
