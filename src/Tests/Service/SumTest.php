<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 09.11.14
 * Time: 21:44
 */

namespace Killsoft\Tests\Service;

use Killsoft\Service\Sum;

class SumTest extends \PHPUnit_Framework_TestCase
{
        public function testAddValues()
    {
                $sum = new Sum();
                $this->assertEquals(3, $sum->addValues(1,2));
    }
}