<?php
require 'src/MakeSure.php';

use PHPUnit\Framework\TestCase;
use PlaygroundStudio\Utility\MakeSure;

class MakeSureTest extends TestCase {
    
    public function testThisBarcodeIsNumber() {
        $resultA = MakeSure::thisBarcodeIsNumber("1234567890");
        $resultB = MakeSure::thisBarcodeIsNumber("ๅ/-ภถุึคตจ");
        $expected = '1234567890';
        $this->assertEquals($expected, $resultA);
        $this->assertEquals($expected, $resultB);
    }

}