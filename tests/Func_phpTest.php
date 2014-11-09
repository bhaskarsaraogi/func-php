<?php

namespace Func_php\Tests;

use Func_php\Func_php;

class Func_phpTest extends \PHPUnit_Framework_TestCase
{

    public function __construct()
    {
    }

    public function testSummation()
    {
        $this->assertEquals(6,Func_php::sum(array(1,2,3)));
    }

    public function testMultiplcation()
    {
        $this->assertEquals(6,Func_php::multiply(array(1,2,3)));
    }

}
