<?php

namespace PhpSpreadsheet\Tests\Style;

use PhpSpreadsheet\Shared\StringHelper;
use PhpSpreadsheet\Style\NumberFormat;

class NumberFormatTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        StringHelper::setDecimalSeparator('.');
        StringHelper::setThousandsSeparator(',');
    }

    /**
     * @dataProvider providerNumberFormat
     */
    public function testFormatValueWithMask()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array([NumberFormat::class, 'toFormattedString'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerNumberFormat()
    {
        return require 'data/Style/NumberFormat.php';
    }
}
