<?php

/*
 * This file is part of the Social Point package.
 *
 * (c) Dimitrij Phoursa <d.phoursa@outlook.com>
 */

namespace App\Tests;

use App\Example;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testInstances()
    {
        $class = $this->getExample();

        $this->assertInstanceOf('App\Example', $class);
    }

    protected function getExample()
    {
        return new Example();
    }
}
