<?php

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {

    public function testSampleTest() {
        $this->assertEquals(10, 10);
    }
}